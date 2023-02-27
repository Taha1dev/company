<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user_group;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_groups = [
            [
                'group_id'=> 1,
                'user_id' => 1,
                'owner' => true,
            ],
            [
                'group_id'=> 1,
                'user_id' => 2,
                'owner' => false,
            ],
            [
                'group_id'=> 2,
                'user_id' => 3,
                'owner' => true,
            ]
        ];
        foreach ($user_groups as $user_group) {
            user_group::create($user_group);
        }
    }
}
