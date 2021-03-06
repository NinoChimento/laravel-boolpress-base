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
            $numberOne = rand(1, 100);
            $newPhoto->user_id = rand(1,3);
            $newPhoto->description = $faker->paragraph();
            $newPhoto->title = $faker->monthName();
            $newPhoto->img = "https://picsum.photos/id/$numberOne/300/200";
            $newPhoto->save();
        }
    }
}
