<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
    //  DISPLAY A SINGLE BLOG POST
    public function getSingle($slug)    //  parameter corresponds to {slug} from routes.php
    {  
        //  fetch the post from the DB based on the slug
        $post = Post::where('slug', '=', $slug)->first();
        
        //  return the view for that post
        return view('blog.single')->withPost($post);
    }
}
