<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Files;

class FilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = [
            [
                'file_name' => 'Website Homepage',
                'content' => 'New website homepage design',
                'file_owner_id' => 1,
                'group_id' => 1
            ],
            [
                'file_name' => 'Mobile App UI',
                'content' => 'React Native mobile app UI/UX design',
                'file_owner_id' => 1,
                'group_id' => 1
            ],
            [
                'file_name' => 'Banking Dashboard',
                'content' => 'Dashboard UI/UX design for a banking app',
                'file_owner_id' => 1,
                'group_id' => 2
            ]
        ];
        foreach ($files as $file) {
            files::create($file);
        }
    }
}
