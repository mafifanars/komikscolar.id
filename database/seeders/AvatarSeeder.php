<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "name" => "Cewe 1",
                "link" => "https://komikscolar.id/img/avatar/cewe1.png",
                "harga" => 1000,
            ],
            [
                "name" => "Cewe 2",
                "link" => "https://komikscolar.id/img/avatar/cewe2.png",
                "harga" => 2000,
            ],
            [
                "name" => "Cewe 3",
                "link" => "https://komikscolar.id/img/avatar/cewe3.png",
                "harga" => 3000,
            ],
            [
                "name" => "Cewe 4",
                "link" => "https://komikscolar.id/img/avatar/cewe4.png",
                "harga" => 4000,
            ],
            [
                "name" => "Cewe 5",
                "link" => "https://komikscolar.id/img/avatar/cewe5.png",
                "harga" => 7000,
            ],
            [
                "name" => "Cewe 1",
                "link" => "https://komikscolar.id/img/avatar/cewe1.png",
                "harga" => 1000,
            ],
            [
                "name" => "Cewe 2",
                "link" => "https://komikscolar.id/img/avatar/cewe2.png",
                "harga" => 2000,
            ],
            [
                "name" => "Cewe 3",
                "link" => "https://komikscolar.id/img/avatar/cewe3.png",
                "harga" => 3000,
            ],
            [
                "name" => "Cewe 4",
                "link" => "https://komikscolar.id/img/avatar/cewe4.png",
                "harga" => 4000,
            ],
            [
                "name" => "Cewe 5",
                "link" => env("APP_URL") . "/img/avatar/cewe5.png",
                "harga" => 7000,
            ],
        ];

        DB::table('avatars')->insert($data);

    }
}
