<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Post;
use Session;

class CategoryController extends Controller
{
    /**
     * Set up the auth middleware so only admin can access category control.
     *
     * 
     */
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource and the creation form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  note: allWithCount() returns associative array, not object
        $categories = Category::allWithCount();
        return view('categories.index')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  validate the data (includes CSRF protection)
        $this->validate($request, [
            'category' => 'required|max:255|unique:categories,category'
        ]);
        
        //  store in the database
        $category = new Category();
        $category->category = $request->category;
        $category->save();
        
        //  redirect with flash data to categories.index
        Session::flash('success', 'The category was created successfully!');
        
        $categories = Category::orderBy('id')->get();
        return redirect()->route('categories.index')->withCategories($categories);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  find the category
        $category = Category::find($id);
        
        //  remove category from posts
        $posts = Post::all();
        foreach($posts as $post)
        {
            if($post->category_id == $category->id)
            {
                $post->category_id = null;
                $post->save();
            }
        }
        
        //  delete the category
        $category->delete();
        
        //  redirect with flash data to posts.index
        Session::flash('success', 'The category was deleted successfully!');
        return redirect()->route('categories.index');
    }
}
