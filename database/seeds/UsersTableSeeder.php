<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        User::insert([
            'name' => $faker->name,
            'email' => 'candrasetiadiwahyu@gmail.com',
            'password' => Hash::make('kenapabisa'),
            'user_type' => 'reseller',
            'status' => 'active',
        ]);
    }
}
