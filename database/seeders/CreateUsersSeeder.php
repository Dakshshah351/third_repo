<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@.com',
               'type'=>1,
               'password'=> bcrypt('admin@123'),
            ],
            [
               'name'=>'Faculty User',
               'email'=>'Faculty@gmail.com',
               'type'=> 2,
               'password'=> bcrypt('Faculty@123'),
            ],
            [
               'name'=>'User',
               'email'=>'user@.com',
               'type'=>0,
               'password'=> bcrypt('User@123'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }

    }
}
