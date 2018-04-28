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
        $tag->name = 'Laravel';
        $tag->save();
        
        //  2
        $tag = new Tag();
        $tag->name = 'PHP';
        $tag->save();
        
        //  3
        $tag = new Tag();
        $tag->name = 'JavaScript';
        $tag->save();

        //  4
        $tag = new Tag();
        $tag->name = 'NodeJS';
        $tag->save();
        
        //  5
        $tag = new Tag();
        $tag->name = 'React';
        $tag->save();

        //  6
        $tag = new Tag();
        $tag->name = 'Angular 2';
        $tag->save();
        
        //  7
        $tag = new Tag();
        $tag->name = 'R Studio';
        $tag->save();

        //  8
        $tag = new Tag();
        $tag->name = 'Python';
        $tag->save();
        
        //  9
        $tag = new Tag();
        $tag->name = 'Blockchain';
        $tag->save();
    }
}