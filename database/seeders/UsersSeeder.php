<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
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
                'name' => 'Taha',
                'email' => 'taha@gmail.com',
                'password' => bcrypt('123123')
            ],
            [
                'name' => 'Mai',
                'email' => 'mai@gmail.com',
                'password' => bcrypt('321321')
            ],
            [
                'name' => 'hourse',
                'email' => 'hourse@gmail.com',
                'password' => bcrypt('123456')
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
