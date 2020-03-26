<?php

use Illuminate\Database\Seeder;
use App\Photo;
use Faker\Generator as Faker;
class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newPhoto = new Photo;
            $newPhoto->user_id = rand(1,3);
            $newPhoto->description = $faker->paragraph();
            $newPhoto->img = $faker->imageUrl(640,400);
            $newPhoto->save();
        }
    }
}
