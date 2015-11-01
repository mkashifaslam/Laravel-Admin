<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i++)
        {
            $faker = Faker\Factory::create();
            \Blog\User::create(array('name' => $faker->name, 'email' => $faker->email));
        }
    }
}
