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
        $data = [
            [
                "questions_id" => 1,
                "choice" => 'Arbani',
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 1,
                "choice" => 'Kiro',
                "jawaban_benar" => 1,
            ],
            [
                "questions_id" => 1,
                "choice" => 'Afifan',
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 1,
                "choice" => 'Mina',
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 2,
                "choice" => 'Kelas 3',
                "jawaban_benar" => 1,
            ],
            [
                "questions_id" => 2,
                "choice" => 'Kelas 1',
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 2,
                "choice" => "Kelas 4",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 2,
                "choice" => "Kelas 5",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 3,
                "choice" => "Menyapa",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 3,
                "choice" => "Memeluk",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 3,
                "choice" => "Mendorong",
                "jawaban_benar" => 1,
            ],
            [
                "questions_id" => 3,
                "choice" => "Makan bersama",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 4,
                "choice" => "Nina",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 4,
                "choice" => "Akira",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 4,
                "choice" => "Shera",
                "jawaban_benar" => 1,
            ],
            [
                "questions_id" => 4,
                "choice" => "Sarah",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 5,
                "choice" => "Nina",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 5,
                "choice" => "Akira",
                "jawaban_benar" => 1,
            ],
            [
                "questions_id" => 5,
                "choice" => "Shera",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 5,
                "choice" => "Sarah",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 6,
                "choice" => "Mengajak Akira dan Kiro untuk melapor kepada guru",
                "jawaban_benar" => 1,
            ],
            [
                "questions_id" => 6,
                "choice" => "Diam saja dan tidak peduli",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 6,
                "choice" => "Ikut mendukung Nina",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 6,
                "choice" => "Bertengkar dengan Nina",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 7,
                "choice" => "Shera anak yang malas",
                "jawaban_benar" => 1,
            ],
            [
                "questions_id" => 7,
                "choice" => "Takut dibully nina",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 7,
                "choice" => "Belum siap PR",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 7,
                "choice" => "Sedang sakit",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 8,
                "choice" => "Bergabung dengan Nina",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 8,
                "choice" => "Tidak ada misi",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 8,
                "choice" => "Memberantas tindakan bully Nina",
                "jawaban_benar" => 1,
            ],
            [
                "questions_id" => 8,
                "choice" => "Mencegah korupsi",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 9,
                "choice" => "Nina",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 9,
                "choice" => "Shera",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 9,
                "choice" => "Alisa",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 9,
                "choice" => "Kiro",
                "jawaban_benar" => 1,
            ],
            [
                "questions_id" => 10,
                "choice" => "Mereka tidak menjauh",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 10,
                "choice" => "Tindakan Nina sudah keterlaluan",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 10,
                "choice" => "Nina bersifat sombong",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 10,
                "choice" => "B dan C benar",
                "jawaban_benar" => 1,
            ],
            [
                "questions_id" => 11,
                "choice" => "Meminta maaf pada Shera",
                "jawaban_benar" => 1,
            ],
            [
                "questions_id" => 11,
                "choice" => "Memarahi Shera",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 11,
                "choice" => "Pergi bermain dengan teman",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 11,
                "choice" => "Menyalahi Alisa",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 12,
                "choice" => "Bullying verbal",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 12,
                "choice" => "Bullying sosial",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 12,
                "choice" => "Bullying fisik",
                "jawaban_benar" => 0,
            ],
            [
                "questions_id" => 12,
                "choice" => "Semua Benar",
                "jawaban_benar" => 1,
            ],
        ];
        
        DB::table('choices')->insert($data);

    }
}
