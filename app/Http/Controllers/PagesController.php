<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class PagesController extends Controller
{
    //  DISPLAY THE HOME PAGE
    public function getIndex()
    {
        //  select all posts and order by the creation date
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        
        return view('pages.welcome')->withPosts($posts);
    }
    
    //  DISPLAY THE ABOUT PAGE
    public function getAbout()
    {
        return view('pages.about');
    }
    
    //  DISPLAY THE CONTACT PAGE
    public function getContact()
    {
        return view('pages.contact');
    }
}
