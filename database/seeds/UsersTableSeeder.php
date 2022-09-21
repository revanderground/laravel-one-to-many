<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $myUser = new User();
        $myUser->name = 'Matrix';
        $myUser->email = 'matrix00@gmail.com';
        $myUser->password = $faker->password();
        $myUser->save();

        for ($i=0; $i < 10; $i++) {
            $user = new User();
            $user->name = $faker->userName();
            $user->email = $faker->unique()->email();
            $user->password = $faker->password();
            $user->save();

        }
    }
}
