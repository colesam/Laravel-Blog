<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Category;
use Session;

class PostController extends Controller
{
    /**
     * Set up middleware so that only authenticated users can access the posts.
     *
     */
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the blog posts with ability to edit and delete.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  get all the blog posts from the database with pagination
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        
        //  return a view with the blog posts
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Display a form to create a new post.
     * Necessary to retrieve categories to populate category dropdown field.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  grab all categories that are currently in the DB
        $categories = Category::orderBy('id')->get();
        
        return view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created post in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  validate the data (includes CSRF protection)
        $this->validate($request, [
            'title'         => 'required|max:255',
            'body'          => 'required',
            'slug'          => "required|min:5|max:255|alpha_dash|unique:posts,slug",
            'category_id'   => 'integer'
        ]);
        
        //  store in the database
        $post = new Post();
        $post->title        = $request->title;
        $post->body         = $request->body;
        $post->slug         = $request->slug;
        $post->category_id  = $request->category_id;
        $post->save();
        
        //  redirect with flash data to posts.show
        Session::flash('success', 'The blog post was created successfully!');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Show a single blog post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  get the post from the Post model using the post id
        $post = Post::find($id);
        
        //  return the view with the new post object
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing a specific blog post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  find the post and categories in the database
        $post       = Post::find($id);
        $categories = Category::allBut($post->category_id);
        
        //  return view for editing a post
        return view('posts.edit')->withPost($post)->withCategories($categories);
    }

    /**
     * Update the specified blog post in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function update(Request $request, $id)
    {
        //  grab the post to update
        $post = Post::find($id);
        
        //  validate the data, if the slug was not changed don't validate for uniqueness
        if($request->slug != $post->slug) 
        {
            $this->validate($request, [
                'title'         => 'required|max:255',
                'body'          => 'required',
                'category_id'   => 'integer'
            ]);
        }
        else
        {
            $this->validate($request, [
                'title'         => 'required|max:255',
                'body'          => 'required',
                'slug'          => "required|min:5|max:255|alpha_dash|unique:posts,slug",
                'category_id'   => 'integer'
            ]);
        }
        
        //  save the data to the database
        $post->title        = $request->title;
        $post->body         = $request->body;
        $post->slug         = $request->slug;
        $post->category_id  = $request->category_id;
        $post->save();
        
        //  redirect with flash data to posts.show
        Session::flash('success', 'The blog post was updated successfully!');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified blog post from the database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
