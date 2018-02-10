<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tag;
use Session;

class TagController extends Controller
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
        $tags = Tag::allWithCount();
        return view('tags.index')->withTags($tags);
    }

    /**
     * Store a newly created tag in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  validate the data (includes CSRF protection)
        $this->validate($request, [
            'name' => 'required|max:255|unique:tags,name'
        ]);
        
        //  store in the database
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();
        
        //  redirect with flash data to tags.index
        Session::flash('success', 'The tag was created successfully!');
        
        $tags = Tag::orderBy('id')->get();
        return redirect()->route('tags.index')->withTags($tags);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  retrieve the tag from the DB
        $tag = Tag::find($id);
        
        //  remove relationships from the post_tag table
        $tag->posts()->sync([]);
        
        //  delete the tag
        $tag->delete();
        
        //  redirect with flash data to tags.index
        Session::flash('success', 'The tag was removed successfully!');
        
        $tags = Tag::orderBy('id')->get();
        return redirect()->route('tags.index')->withTags($tags);
    }
}
