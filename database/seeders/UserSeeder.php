<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Carlos Allen',
            'email' =>'allencarlosdev@gmail.com',
            'password'=> bcrypt('password123'),
        ])->assignRole('Admin');

        User::create([
            'name' => 'User Free',
            'email' =>'user@gmail.com',
            'password'=> bcrypt('12345678'),
        ])->assignRole('Blogger');


        //User::factory(99)->create();
    }
}
