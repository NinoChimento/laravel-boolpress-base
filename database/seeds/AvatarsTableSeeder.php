<?php

use Illuminate\Database\Seeder;
use App\Avatar;
use App\User;
use Faker\Generator as Faker;
class AvatarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        foreach ($users as $user) {
            $newAvatar = new Avatar();
            $newAvatar->user_id = $user->id;
            $newAvatar->img = "https://i.pravatar.cc/150";
            $newAvatar->save();
        }
    }
}
