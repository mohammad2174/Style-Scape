<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>StyleScape</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="p-0 m-0 box-border font-sans">
    <section class="relative w-full min-h-screen flex justify-between items-center bg-red-700">
        <div class="absolute top-0 left-0 w-full h-full bg-black circle"></div>
        <header class="absolute top-0 left-0 w-full py-10 px-24 flex justify-between items-center">
            <h2 class="relative max-w-sm no-underline text-black font-bold font-serif text-6xl">Style Scape</h2>
            <div class="toggle" onclick="toggleMenu()"></div>
            <ul class="relative flex list-none">
                <li><a href="#" class="inline-block text-red-700 font-medium text-xl no-underline ml-10">Home</a></li>
                <li><a href="#" class="inline-block text-red-700 font-medium text-xl no-underline ml-10">Menu</a></li>
                <li><a href="#" class="inline-block text-red-700 font-medium text-xl no-underline ml-10">Wath's new</a>
                </li>
                <li><a href="#" class="inline-block text-red-700 font-medium text-xl no-underline ml-10">Contact</a>
                </li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2 class="mt-8 mb-2.5 text-black text-4xl font-bold">Test the Felling</h2>
                <p class="text-black text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta hic
                    deserunt sequi cumque facere.
                    Iusto officia a ipsa dolorum, suscipit dolore doloremque magnam corrupti maxime quas enim rem nulla
                    accusantium earum deserunt ipsam totam unde,
                    modi eius! Modi exercitationem inventore quos quas totam molestiae ut aliquam, a eaque, ipsam
                    ducimus?</p>
                <a href="#"
                    class="inline-block mt-5 py-2 px-5 bg-sky-300 text-black rounded-lg font-medium text-lg no-underline hover:bg-sky-500">Learn
                    More</a>
            </div>
            <div class="imgBox">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img class="max-w-sm" src="./img/c1.png" /></div>
                        <div class="swiper-slide"><img class="max-w-sm" src="./img/c2.png" /></div>
                        <div class="swiper-slide"><img class="max-w-sm" src="./img/c3.png" /></div>
                        <div class="swiper-slide"><img class="max-w-sm" src="./img/c4.png" /></div>
                        <div class="swiper-slide"><img class="max-w-sm" src="./img/cocacola5.png" /></div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sci">
            <li><a href="#"
                    class="inline-block ml-4 text-black w-12 h-12 flex justify-between items-center rounded-full transition-all duration-200 ease-out hover:-translate-y-4 hover:bg-cyan-600"><img
                        class="invert scale-75" src="./img/facebook.png"></a></li>
            <li><a href="#"
                    class="inline-block ml-4 text-black w-12 h-12 flex justify-between items-center rounded-full transition-all duration-200 ease-out  hover:-translate-y-4 hover:bg-cyan-600"><img
                        class="invert scale-75" src="./img/instagram.png"></a></li>
            <li><a href="#"
                    class="inline-block ml-4 text-black w-12 h-12 flex justify-between items-center rounded-full transition-all duration-200 ease-out  hover:-translate-y-4 hover:bg-cyan-600"><img
                        class="invert scale-75" src="./img/twitter.png"></a></li>
        </ul>
    </section>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
