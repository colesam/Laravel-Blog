<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  1
        $tag = new Tag();
        $category->name = 'Laravel';
        $category->save();
        
        //  2
        $tag = new Tag();
        $category->name = 'PHP';
        $category->save();
        
        //  3
        $tag = new Tag();
        $category->name = 'JavaScript';
        $category->save();

        //  4
        $tag = new Tag();
        $category->name = 'NodeJS';
        $category->save();
        
        //  5
        $tag = new Tag();
        $category->name = 'React';
        $category->save();

        //  6
        $tag = new Tag();
        $category->name = 'Angular 2';
        $category->save();
        
        //  7
        $tag = new Tag();
        $category->name = 'R Studio';
        $category->save();

        //  8
        $tag = new Tag();
        $category->name = 'Python';
        $category->save();
        
        //  9
        $tag = new Tag();
        $category->name = 'Blockchain';
        $category->save();
    }
}
