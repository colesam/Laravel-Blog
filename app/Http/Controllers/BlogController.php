<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
    //  DISPLAY THE INDEX PAGE WITH ALL OF THE MOST RECENT POSTS
    public function getIndex()
    {
        //  retrieve all posts from the DB, limit 10 per page
        $posts = Post::paginate(10);
        
        //  return view
        return view('blog.index')->withPosts($posts);
    }
    
    //  DISPLAY A SINGLE BLOG POST
    public function getSingle($slug)    //  parameter corresponds to {slug} from routes.php
    {  
        //  fetch the post from the DB based on the slug
        $post = Post::where('slug', '=', $slug)->first();
        
        //  return the view for that post
        return view('blog.single')->withPost($post);
    }
}
