<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>Scolar | Smart Comic Learning Berbasis Augmented Reality</title>
    @vite('resources/css/app.css')
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
        } else {
        document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body>
    <!-- Header Start -->
    @include('layouts.header')
    <!-- Header End -->

    <!-- Product Section Start -->
    <section id="kebijakan-privasi" class="pt-36 pb-32 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Kebijakan Privasi</h2>
                    <p class="font-base text-sm text-primary mb-2"><span class="text-primary font-semibold">Scolar</span> (Smart Comic Learning With Augmented Reality)</p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4">
                    <div>
                        <p class="font-medium text-secondary mb-10 leading-relaxed text-justify">Tim Scolar membangun aplikasi Scolar sebagai aplikasi edukasi. Layanan ini disediakan oleh Scolar dan dimaksudkan untuk digunakan apa adanya. Halaman ini digunakan untuk memberitahu pengguna mengenai kebijakn kami dengan pengumpulan, penggunaaan, dan pengungkapan Informasi Pribadi jika ada yang memutuskan untuk menggunakan Layanan kami. Jika Anda memilih untuk menggunakan Layanan kami, maka Anda menyetujui pengumpulan dan penggunaan informasi sehubungan dengan kebijakan ini. Informasi Pribadi yang kami kumpulkan digunakan untuk menyediakan dan meningkatkan Layanan. Kami tidak akan menggunakan atau membagikan informasi Anda dengan siapa pun kecuali sebagaimana dijelaskan dalam Kebijakan Privasi ini. Istilah yang digunakan dalam Kebijakan Privasi ini memiliki arti yang sama seperti dalam Syarat dan Ketentuan kami, yang dapat diakses di Scolar kecuali ditentukan lain dalam Kebijakan Privasi ini.</p>
                    </div>

                    {{-- Pengumpulan dan Penggunaan Informasi --}}
                    <div>
                        <p class="font-semibold text-dark mt-5  leading-relaxed text-justify">Pengumpulan dan Penggunaan Informasi</p>
                        <p class="font-medium text-secondary mb-10 leading-relaxed text-justify">Untuk pengalaman yang lebih baik, saat menggunakan Layanan kami, kami mungkin meminta Anda untuk memberikan kami informasi pengenal pribadi tertentu. Informasi yang kami minta akan disimpan oleh kami dan digunakan seperti yang dijelaskan dalam kebijakan privasi ini. Aplikasi ini menggunakan layanan pihak ketiga yang dapat mengumpulkan informasi yang digunakan untuk mengidentifikasi Anda.
                        <br>Tautan ke kebijakan privasi penyedia layanan pihak ketiga yang digunakan oleh aplikasi:</p>
                        <p class="font-medium text-secondary -mt-5 leading-relaxed text-justify">1. Facebook</p>
                        <p class="font-medium text-secondary leading-relaxed text-justify">2. Google Play</p>
                    </div>

                    {{-- Data Log --}}
                    <div>
                        <p class="font-semibold text-dark mt-5  leading-relaxed text-justify">Data Log</p>
                        <p class="font-medium text-secondary mb-10 leading-relaxed text-justify">Kami ingin memberitahu Anda bahwa setiap kali Anda menggunakan Layanan kami, jika terjadi kesalahan dalam aplikasi, kami mengumpulkan data dan informasi (melalui ketiga -produk pesta) di ponsel Anda yang disebut Data Log. Data Log ini dapat mencakup informasi seperti alamat Protokol Internet (“IP”) perangkat Anda, nama perangkat, versi sistem operasi, konfigurasi aplikasi saat menggunakan Layanan kami, waktu dan tanggal penggunaan Layanan oleh Anda, dan statistik lainnya.
                    </div>

                    {{-- Cookie --}}
                    <div>
                        <p class="font-semibold text-dark mt-5  leading-relaxed text-justify">Cookie</p>
                        <p class="font-medium text-secondary mb-10 leading-relaxed text-justify">Cookie adalah file dengan sejumlah kecil data yang biasanya digunakan sebagai pengidentifikasi unik anonim. Ini dikirim ke browser Anda dari situs web yang Anda kunjungi dan disimpan di memori internal perangkat Anda. Layanan ini tidak menggunakan “cookies” ini secara eksplisit. Namun, aplikasi dapat menggunakan kode dan perpustakaan pihak ketiga yang menggunakan "cookies" untuk mengumpulkan informasi dan meningkatkan layanan mereka. Anda memiliki pilihan untuk menerima atau menolak cookie ini dan mengetahui kapan cookie dikirim ke perangkat Anda. Jika Anda memilih untuk menolak cookie kami, Anda mungkin tidak dapat menggunakan beberapa bagian dari Layanan ini.
                    </div>

                    {{-- Keamanan --}}
                    <div>
                        <p class="font-semibold text-dark mt-5  leading-relaxed text-justify">Keamanan</p>
                        <p class="font-medium text-secondary mb-10 leading-relaxed text-justify">Kami menghargai kepercayaan Anda dalam memberikan Informasi Pribadi Anda kepada kami, oleh karena itu kami berusaha untuk menggunakan cara yang dapat diterima secara komersial untuk melindunginya. Tetapi ingat bahwa tidak ada metode transmisi melalui internet, atau metode penyimpanan elektronik yang 100% aman dan andal, dan kami tidak dapat menjamin keamanan mutlaknya.
                    </div>

                    {{-- Tautan ke Situs Lain --}}
                    <div>
                        <p class="font-semibold text-dark mt-5  leading-relaxed text-justify">Tautan ke Situs Lain</p>
                        <p class="font-medium text-secondary mb-10 leading-relaxed text-justify">Layanan ini mungkin berisi tautan ke situs lain. Jika Anda mengklik tautan pihak ketiga, Anda akan diarahkan ke situs itu. Perhatikan bahwa situs eksternal ini tidak dioperasikan oleh kami. Oleh karena itu, kami sangat menyarankan Anda untuk meninjau Kebijakan Privasi situs web ini. Kami tidak memiliki kendali atas dan tidak bertanggung jawab atas konten, kebijakan privasi, atau praktik situs atau layanan pihak ketiga mana pun.
                    </div>

                    {{-- Privasi Anak-anak --}}
                    <div>
                        <p class="font-semibold text-dark mt-5  leading-relaxed text-justify">Privasi Anak-anak</p>
                        <p class="font-medium text-secondary mb-10 leading-relaxed text-justify">Layanan ini tidak ditujukan kepada siapa pun yang berusia di bawah 5 tahun. Kami tidak secara sengaja mengumpulkan informasi pengenal pribadi dari anak-anak di bawah 5 tahun. Jika kami menemukan bahwa seorang anak di bawah 5 tahun telah memberi kami informasi pribadi, kami segera menghapusnya dari server kami. Jika Anda adalah orang tua atau wali dan Anda mengetahui bahwa anak Anda telah memberikan informasi pribadi kepada kami, silahkan hubungi kami agar kami dapat melakukan tindakan yang diperlukan.
                    </div>

                    {{-- Perubahan Kebijakan Privasi Ini --}}
                    <div>
                        <p class="font-semibold text-dark mt-5  leading-relaxed text-justify">Perubahan Kebijakan Privasi Ini</p>
                        <p class="font-medium text-secondary mb-10 leading-relaxed text-justify">Kami dapat memperbarui Kebijakan Privasi kami dari waktu ke waktu. Oleh karena itu, Anda disarankan untuk meninjau halaman ini secara berkala untuk setiap perubahan. Kami akan memberitahu Anda tentang perubahan apapun dengan memposting Kebijakan Privasi baru di halaman ini. Kebijakan ini berlaku mulai 2023-06-01.
                    </div>

                    {{-- Hubungi Kami --}}
                    <div>
                        <p class="font-semibold text-dark mt-5  leading-relaxed text-justify">Hubungi Kami</p>
                        <p class="font-medium text-secondary mb-10 leading-relaxed text-justify">Jika Anda memiliki pertanyaan atau saran tentang Kebijakan Privasi kami, jangan ragu untuk menghubungi kami di scolar.official@gmail.com.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->

    @vite('resources/js/app.js')
</body>
</html>