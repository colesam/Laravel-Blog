<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table    = 'posts';
    
    /**
     * Define relationship between posts and categories.
     *
     * @return eloquent relationship
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
    
    /**
     * Define relationship between posts and tags.
     *
     * @return eloquent relationship
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
    }
}
