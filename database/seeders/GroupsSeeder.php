<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\groups;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            [
                'group_name' => 'Design Team'
            ],
            [
                'group_name' => 'Development Team'
            ],
            [
                'group_name' => 'Marketing Team'
            ]
        ];
        foreach ($groups as $group) {
            groups::create($group);
        }
    }
}
