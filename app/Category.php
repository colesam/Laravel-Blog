<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table    = 'categories';
    public $timestamps  = false;
    
    /**
     * Define relationship between categories and posts.
     *
     * @return eloquent relationship
     */
    public function post()
    {
        return $this->hasMany('App\Post');
    }
    
    /**
     * Grab all of the categories with num_posts attribute.
     *
     * @return array of categories
     */
    public static function allWithCount()
    {
        //  grab all categories
        $categories = Category::orderBy('id')->get();
        
        //  create new categories array with num_posts attribute
        $categoriesArray = [];
        
        foreach($categories as $category)
        {
            $num_posts = $category->post()->count();
            
            //  copy the category over to the new array with $counter
            $categoriesArray[$category->id]['id']          = $category->id;
            $categoriesArray[$category->id]['category']    = $category->category;
            $categoriesArray[$category->id]['num_posts']   = $num_posts;
        }
        
        return $categoriesArray;
    }
}
