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
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Panduan Penggunaan</h2>
                    <p class="font-base text-sm text-primary mb-2"><span class="text-primary font-semibold">Scolar</span> (Smart Comic Learning With Augmented Reality)</p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <iframe class="w-full" height="400" src="https://www.youtube.com/embed/3PcD-PEeP28?si=QeeDQQaAuh9f1HDa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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