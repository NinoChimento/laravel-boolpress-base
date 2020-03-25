<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10 ; $i++) { 
            $newPost = new Post();
            $titleMod =  $faker->name();
            
            $newPost->title = Str::slug($titleMod, '-');
            $newPost->img = $faker->image();
            $newPost->genre= $faker->word();
            $newPost->description=$faker->paragraph();

            $newPost->save();
        }
    }
}
