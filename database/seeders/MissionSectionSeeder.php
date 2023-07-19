<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MissionSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Bagian 1',
            ],
            [
                'name' => 'Bagian 2',
            ],
            [
                'name' => 'Bagian 3',
            ],
            [
                'name' => 'Bagian 4',
            ],
            [
                'name' => 'Bagian 5',
            ],
        ];

        DB::table('mission_sections')->insert($data);

    }
}
