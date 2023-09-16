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
        $data = [
            [
                "missions_id" => 1,
                "pertanyaan" => "Siapa nama teman Alisa ?",
            ],
            [
                "missions_id" => 1,
                "pertanyaan" => "Alisa kelas berapa di sekolah ?",
            ],
            [
                "missions_id" => 1,
                "pertanyaan" => "Apa yang dilakukan Nina kepada Shera saat di kantin ?",
            ],
            [
                "missions_id" => 2,
                "pertanyaan" => "Siapa yang membantu Shera saat jatuh di kantin ?",
            ],
            [
                "missions_id" => 2,
                "pertanyaan" => "Siapa nama teman sebangku Alisa di sekolah ?",
            ],
            [
                "missions_id" => 2,
                "pertanyaan" => "Apa yang dilakukan Alisa setelah melihat Shera di ganggu oleh Nina dan teman-teman nya ?",
            ],
            [
                "missions_id" => 3,
                "pertanyaan" => "Kenapa Shera meminta izin kepada ibu agar tidak masuk bersekolah ?",
            ],
            [
                "missions_id" => 3,
                "pertanyaan" => "Apa misi Alisa dan teman-teman setelah Nina membully Shera ?",
            ],
            [
                "missions_id" => 3,
                "pertanyaan" => "Siapa yang menjadi ketua di kelas 3 SD Scolar ?",
            ],
            [
                "missions_id" => 4,
                "pertanyaan" => "Kenapa teman-teman menjauh dari Nina ?",
            ],
            [
                "missions_id" => 4,
                "pertanyaan" => "Apa yang dilakukan Shera setelah dipanggil pak guru ke ruangan ?",
            ],
            [
                "missions_id" => 4,
                "pertanyaan" => "Berikut ini macam-macam bentuk bullying : ",
            ],
        ];
        
        DB::table('questions')->insert($data);
    }
}
