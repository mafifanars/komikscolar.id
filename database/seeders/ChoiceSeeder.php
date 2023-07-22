<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i=1; $i < 56; $i++) { 
            for ($j=0; $j < 4; $j++) { 
                DB::table('choices')->insert([
                    'questions_id' => $i,
                    'choice' => 'Pilihan ' . $j,
                    'jawaban_benar' => $j == 2 ? 1 : 0,
                ]);
            }
        }

    }
}
