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
                'book_id' => 1,
                'name' => 'Bagian 1',
            ],
            [
                'book_id' => 1,
                'name' => 'Bagian 2',
            ],
        ];

        DB::table('mission_sections')->insert($data);

    }
}
