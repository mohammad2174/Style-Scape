<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>StyleScape</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="p-0 m-0 box-border font-sans">
    <section class="relative sm:w-full sm:min-h-screen w-full min-h-screen flex justify-between items-center bg-red-700">
        <div class="absolute top-0 left-0 w-full h-full bg-black circle"></div>
        <header class="absolute top-0 left-0 w-full py-10 lg:px-24 px-1 flex justify-between items-center">
            <h2 class="relative max-w-sm no-underline text-black font-bold font-serif text-lg md:text-6xl">Style
                Scape</h2>
            <nav class="border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                    <button data-collapse-toggle="mobile-menu" type="button"
                        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto -mr-11 md:mr-0" id="mobile-menu">
                        <ul class="relative flex list-none">
                            <li><a href="#"
                                    class="inline-block text-red-700 font-medium lg:text-xl sm:text-base text-xs no-underline lg:ml-10 ml-1">Home</a>
                            </li>
                            <li><a href="#"
                                    class="inline-block text-red-700 font-medium lg:text-xl sm:text-base text-xs no-underline lg:ml-10 ml-1">Menu</a>
                            </li>
                            <li><a href="#"
                                    class="inline-block text-red-700 font-medium lg:text-xl sm:text-base text-xs no-underline lg:ml-10 ml-1">Wath's
                                    new</a>
                            </li>
                            <li><a href="#"
                                    class="inline-block text-red-700 font-medium lg:text-xl sm:text-base text-xs no-underline lg:ml-10 ml-1">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="content">
            <div class="textBox lg:ml-0 -ml-24">
                <h2 class="mt-8 mb-2.5 text-black md:text-4xl text-sm font-bold">Test the Felling</h2>
                <p class="text-black lg:text-xl text-xs">
                    When we talk about style,<br /> we should keep in mind that there is a sense of comfort and
                    freedom<br />
                    when
                    the style you like and what you wear give you that feeling,<br /> ask for beauty, charm and charm
                    from
                    style scape.</p>
            </div>
            <div class="imgBox">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img class="max-w-sm" src="./img/c1.png" /></div>
                        <div class="swiper-slide"><img class="max-w-sm" src="./img/c2.png" /></div>
                        <div class="swiper-slide"><img class="max-w-sm" src="./img/c3.png" /></div>
                        <div class="swiper-slide"><img class="max-w-sm" src="./img/c4.png" /></div>
                        <div class="swiper-slide"><img class="max-w-sm" src="./img/c5.png" /></div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sci sm:left-60 left-22">
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
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
