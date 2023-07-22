<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 12; $i++) { 
            for ($j=0; $j < 5; $j++) { 
                DB::table('questions')->insert([
                    'missions_id' => $i,
                    'pertanyaan' => 'Pertanyaan ' . $j,
                ]);
            }
        }


    }
}
