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
        return view('pages.welcome');
    }
}
