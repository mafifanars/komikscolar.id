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
                'xp' => 200,
                'title' => 'Misi 1',
            ],
            [
                'mission_sections_id' => 1,
                'xp' => 200,
                'title' => 'Misi 2',
            ],
            [
                'mission_sections_id' => 2,
                'xp' => 200,
                'title' => 'Misi 3',
            ],
            [
                'mission_sections_id' => 2,
                'xp' => 200,
                'title' => 'Misi 3',
            ],
        ];

        DB::table('missions')->insert($data);

    }
}
