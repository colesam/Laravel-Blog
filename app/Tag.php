<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table    = "tags";
    public $timestamps  = false;
    
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'post_tag', 'tag_id', 'post_id');
    }
    
    /**
     * Grab all of the tags with num_posts attribute.
     *
     * @return array of tags
     */
    public static function allWithCount()
    {
        //  grab all tags
        $tags = Tag::orderBy('id')->get();
        
        //  create new tags array with num_posts attribute
        $tagsArray = [];
        
        foreach($tags as $tag)
        {
            $num_posts = $tag->posts()->count();
            
            //  copy the tag over to the new array with $counter
            $tagsArray[$tag->id]['id']          = $tag->id;
            $tagsArray[$tag->id]['name']        = $tag->name;
            $tagsArray[$tag->id]['num_posts']   = $num_posts;
        }
        
        return $tagsArray;
    }
}
