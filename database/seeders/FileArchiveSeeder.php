<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\file_archive;
use Carbon\carbon;

class FileArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file_archives = [
            [
                'editDataTime' => Carbon::parse('2023-02-26'),
                'type' => 'Sketch',
                'content' => "New Website Homepage Design",
                'user_id' => 1
            ],
            [
                'editDataTime' => Carbon::parse('2023-02-26'),
                'type' => 'React Native',
                'content' => "Mobile App UI/UX Design",
                'user_id' => 2
            ]
        ];
        foreach ($file_archives as $file_archive) {
            file_archive::create($file_archive);
        }
    }
}
