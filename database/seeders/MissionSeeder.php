<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'mission_sections_id' => 1,
                'xp' => 100,
                'title' => 'Misi 1',
            ],
            [
                'mission_sections_id' => 1,
                'xp' => 200,
                'title' => 'Misi 2',
            ],
            [
                'mission_sections_id' => 1,
                'xp' => 250,
                'title' => 'Misi 3',
            ],
            [
                'mission_sections_id' => 2,
                'xp' => 100,
                'title' => 'Misi 4',
            ],
            [
                'mission_sections_id' => 2,
                'xp' => 200,
                'title' => 'Misi 5',
            ],
            [
                'mission_sections_id' => 2,
                'xp' => 250,
                'title' => 'Misi 6',
            ],
            [
                'mission_sections_id' => 2,
                'xp' => 300,
                'title' => 'Misi 7',
            ],
            [
                'mission_sections_id' => 2,
                'xp' => 350,
                'title' => 'Misi 8',
            ],
            [
                'mission_sections_id' => 3,
                'xp' => 100,
                'title' => 'Misi 9',
            ],
            [
                'mission_sections_id' => 4,
                'xp' => 100,
                'title' => 'Misi 10',
            ],
            [
                'mission_sections_id' => 5,
                'xp' => 100,
                'title' => 'Misi 11',
            ],
        ];

        DB::table('missions')->insert($data);

    }
}
