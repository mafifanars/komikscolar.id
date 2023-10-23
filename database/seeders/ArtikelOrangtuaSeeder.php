<?php

namespace Database\Seeders;

use App\Models\ArtikelOrangtua;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelOrangtuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "title" => "Tips untuk Orang Tua Agar Anaknya Tidak Menjadi Pelaku Perundungan",
            "image" => "https://assets.pikiran-rakyat.com/crop/0x0:0x0/750x500/photo/2022/09/05/885532417.jpg",
            "content" => "Perundungan adalah perilaku agresif yang dilakukan secara berulang-ulang oleh seseorang atau sekelompok orang terhadap orang lain, dengan tujuan untuk menyakiti atau mengancam korban. Perundungan dapat terjadi di mana saja, termasuk di sekolah, tempat kerja, atau komunitas.\nBullying dapat memiliki dampak negatif yang signifikan bagi korban, baik secara fisik, mental, maupun emosional. Korban bullying dapat mengalami masalah kesehatan fisik, seperti gangguan pencernaan, sakit kepala, dan insomnia. Korban juga dapat mengalami masalah kesehatan mental, seperti depresi, kecemasan, dan gangguan makan. Selain itu, korban bullying juga dapat mengalami masalah emosional, seperti rasa malu, rendah diri, dan putus asa.\nOleh karena itu, penting bagi orang tua untuk berperan aktif dalam mencegah perundungan. Orang tua dapat mengajarkan anaknya tentang pencegahan perundungan, sehingga anaknya tidak menjadi pelaku perundungan.\nBerikut adalah beberapa tips untuk orang tua agar anaknya tidak menjadi pelaku perundungan:\nAjarkan anak tentang bullying\nOrang tua harus mengajarkan anaknya tentang bullying, termasuk jenis-jenis bullying, dampak bullying, dan cara mencegah bullying. Orang tua juga harus mengajarkan anaknya tentang pentingnya menghormati orang lain, terlepas dari perbedaan mereka.\nBerikan contoh yang baik\nAnak-anak belajar dari orang tua mereka. Jika orang tua ingin anaknya menjadi orang yang baik, maka orang tua harus memberikan contoh yang baik. Hindari melakukan perilaku yang dapat dianggap sebagai bullying, seperti mengejek, mengolok-olok, atau mengancam orang lain.\nJaga komunikasi tetap terbuka\nOrang tua harus menjaga komunikasi tetap terbuka dengan anaknya. Dengarkan dengan penuh perhatian apa yang dikatakan anak, dan jangan menghakimi anak. Jika anak Anda menceritakan tentang bullying yang dia lakukan, dengarkan dengan tenang dan tanpa menghakimi. Berikan dukungan dan arahan kepada anak Anda untuk menghentikan perilakunya.\nDorong anak untuk berperilaku baik\nBerikan pujian kepada anak Anda ketika dia berperilaku baik. Pujian akan membantu anak Anda untuk memahami bahwa perilaku yang baik itu penting.\nCari bantuan profesional\nJika Anda merasa kesulitan untuk mengatasi masalah perundungan, Anda dapat mencari bantuan profesional, seperti psikolog atau konselor.\nDengan menerapkan tips-tips di atas, orang tua dapat membantu anaknya untuk tidak menjadi pelaku perundungan.",
        ];

        DB::table("artikel_orangtuas")->insert($data);

    }
}
