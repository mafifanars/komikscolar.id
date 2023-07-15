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
    <script src="https://kit.fontawesome.com/2a03fb4f26.js" crossorigin="anonymous"></script>
</head>
<body>


<!-- Hero Section Start -->
<section id="home" class="pt-16 pb-32 dark:bg-gradient-to-t from-[#ECB934] to-[#ECB934]">
    <div class="container">
        <div class="flex justify-center">
            <div class="w-full self-center px-4 bg-gradient-to-r from-primary to-indigo-500 mx-auto rounded-xl py-6">
                <div class="flex justify-center">
                    <div class="w-20 h-20 rounded-full overflow-hidden bg-white">
                        <img src="{{ asset('img/logo.png') }}" alt="Profile Picture" class="object-cover w-full h-full">
                    </div>
                </div>
                <div class="px-4 mb-6">
                    <h1 class="text-center mt-5 text-white text-sm">Smart Comic Learning Berbasis Augmented Reality</h1>
                </div>
                <div class="block justify-center gap-4">
                    {{-- Shopee --}}
                    <div class="font-medium rounded-lg w-full py-2 mb-3">
                        <a href="https://shopee.co.id/komik.scolar" class="border p-2 hover:bg-[#F9C641] hover:border-none text-white rounded-full flex items-center justify-center" target="_blank">
                            <i class="md:ml-4 fab fa-shopify"></i><span class="ml-2">Shopee</span>
                        </a>
                    </div>
                    {{-- Playstore --}}
                    <div class="font-medium rounded-lg w-full py-2 mb-3">
                        <a href="#" class="border p-2 hover:bg-[#F9C641] hover:border-none text-white rounded-full flex items-center justify-center" target="_blank">
                            <i class="md:ml-4 fab fa-google-play"></i><span class="ml-2">Play Store</span>
                        </a>
                    </div>
                    {{-- Instagram --}}
                    <div class="font-medium rounded-lg w-full py-2 mb-3">
                        <a href="https://www.instagram.com/komik.scolar/" class="border p-2 hover:bg-[#F9C641] hover:border-none text-white rounded-full flex items-center justify-center" target="_blank">
                            <i class="md:ml-4 fab fa-instagram"></i><span class="ml-2">Instagram</span>
                        </a>
                    </div>
                    {{-- Tiktok --}}
                    <div class="font-medium rounded-lg w-full py-2 mb-3">
                        <a href="https://www.tiktok.com/@komik.scolar" class="border p-2 hover:bg-[#F9C641] hover:border-none text-white rounded-full flex items-center justify-center" target="_blank">
                            <i class="md:ml-4 fab fa-tiktok"></i><span class="ml-2">TikTok</span>
                        </a>
                    </div>
                    {{-- Facebook --}}
                    <div class="font-medium rounded-lg w-full py-2 mb-3">
                        <a href="https://www.facebook.com/profile.php?id=100094011793719" class="border p-2 hover:bg-[#F9C641] hover:border-none text-white rounded-full flex items-center justify-center" target="_blank">
                            <i class="md:ml-4 fab fa-facebook"></i><span class="ml-2">Facebook</span>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Hero Section End -->

    @vite('resources/js/app.js')
</body>
</html>