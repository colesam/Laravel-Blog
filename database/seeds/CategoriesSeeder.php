<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  1
        $category = new Category();
        $category->category = 'Financial Advice';
        $category->save();
        
        //  2
        $category = new Category();
        $category->category = 'Programming Tutorials';
        $category->save();
        
        //  3
        $category = new Category();
        $category->category = 'Politics';
        $category->save();
    }
}
