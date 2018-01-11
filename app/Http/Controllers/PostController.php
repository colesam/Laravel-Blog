<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Session;

class PostController extends Controller
{
    //  ONLY AUTHENTICATED USERS CAN ACCESS THESE PAGES
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    //  DISPLAY THE LISTING OF ALL BLOG POSTS FROM ADMIN PERSPECTIVE
    public function index()
    {
        //  get all the blog posts from the database with pagination
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        
        //  return a view with the blog posts
        return view('posts.index')->withPosts($posts);
    }

    //  DISPLAY THE FORM TO CREATE A NEW POST
    public function create()
    {
        return view('posts.create');
    }

    //  STORE A NEWLY CREATED POST (NOT FOR UPDATES)
    public function store(Request $request)
    {
        //  validate the data (includes CSRF protection)
        $this->validate($request, [
            'title' => 'required|max:255',
            'body'  => 'required',
            'slug'  => 'required|alpha_dash|min:5|max:255'
        ]);
        
        //  store in the database
        $post = new Post();
        $post->title = $request->title;
        $post->body  = $request->body;
        $post->slug  = $request->slug;
        $post->save();
        
        //  redirect with flash data to posts.show
        Session::flash('success', 'The blog post was created successfully!');
        return redirect()->route('posts.show', $post->id);
    }

    //  SHOW A SINGLE BLOG POST FROM ADMIN PERSPECTIVE
    public function show($id)
    {
        //  get the post from the Post model using the post id
        $post = Post::find($id);
        
        //  return the view with the new post object
        return view('posts.show')->with('post', $post);
    }

    //  DISPLAY THE FORM FOR EDITING A POST
    public function edit($id)
    {
        //  find the post in the database
        $post = Post::find($id);
        
        //  return view for editing a post
        return view('posts.edit')->withPost($post);
    }

    //  UPDATE AN EDITED POST
    function update(Request $request, $id)
    {
        //  grab the post to update
        $post = Post::find($id);
        
        //  validate the data (slug done separately)
        $this->validate($request, [
            'title'=> 'required|max:255',
            'body' => 'required',
        ]);
        
        //  if the slug was changed then validate it
        if($request->input(slug) != $post->slug) 
        {
            $this->validate($request, [
                'slug' => "required|min:5|max:255|alpha_dash|unique:posts,slug"    
            ]);
        }
        
        //  save the data to the database
        $post->title = $request->title;
        $post->body = $request->body;
        
        $post->save();
        
        //  redirect with flash data to posts.show
        Session::flash('success', 'The blog post was updated successfully!');
        return redirect()->route('posts.show', $post->id);
    }

    //  DELETE A POST
    public function destroy($id)
    {
        //  find the post
        $post = Post::find($id);
        
        //  delete the post
        $post->delete();
        
        //  redirect with flash data to posts.index
        Session::flash('success', 'The blog post was deleted successfully!');
        return redirect()->route('posts.index');
    }
}
