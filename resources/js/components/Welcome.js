import React from 'react';
import ReactDOM from 'react-dom';
import SwiperCore, { EffectCoverflow, Pagination } from "swiper";
import { Swiper, SwiperSlide } from "swiper/react";

SwiperCore.use([EffectCoverflow, Pagination]);

function Welcome() {
    return (
        <section className="relative flex items-center justify-between w-full min-h-screen bg-red-700 sm:w-full sm:min-h-screen">
            <div className="absolute top-0 left-0 w-full h-full bg-black circle"></div>
            <header className="absolute top-0 left-0 flex items-center justify-between w-full px-1 py-10 lg:px-24">
                <h2 className="relative max-w-sm font-serif text-lg font-bold text-black no-underline md:text-6xl">Style
                    Scape</h2>
                <nav className="border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
                    <div className="container flex flex-wrap items-center justify-between mx-auto">
                        <button data-collapse-toggle="mobile-menu" type="button"
                            className="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span className="sr-only">Open main menu</span>
                            <svg className="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg className="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div className="hidden w-full md:block md:w-auto -mr-11 md:mr-0" id="mobile-menu">
                            <ul className="relative flex list-none">
                                <li><a href="#"
                                    className="inline-block ml-1 text-xs font-medium text-red-700 no-underline lg:text-xl sm:text-base lg:ml-10">Home</a>
                                </li>
                                <li><a href="#"
                                    className="inline-block ml-1 text-xs font-medium text-red-700 no-underline lg:text-xl sm:text-base lg:ml-10">Menu</a>
                                </li>
                                <li><a href="#"
                                    className="inline-block ml-1 text-xs font-medium text-red-700 no-underline lg:text-xl sm:text-base lg:ml-10">Wath's
                                    new</a>
                                </li>
                                <li><a href="#"
                                    className="inline-block ml-1 text-xs font-medium text-red-700 no-underline lg:text-xl sm:text-base lg:ml-10">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div className="content">
                <div className="-ml-24 textBox lg:ml-0">
                    <h2 className="mt-8 mb-2.5 text-black md:text-4xl text-sm font-bold">Test the Felling</h2>
                    <p className="text-xs text-black lg:text-xl">
                        When we talk about style,<br /> we should keep in mind that there is a sense of comfort and
                        freedom<br />
                        when
                        the style you like and what you wear give you that feeling,<br /> ask for beauty, charm and charm
                        from
                        style scape.</p>
                </div>
                <div className="w-28 md:max-w-lg imgBox">
                    <Swiper
                        effect={"coverflow"}
                        grabCursor={true}
                        centeredSlides={true}
                        slidesPerView={"auto"}
                        coverflowEffect={{
                            rotate: 0,
                            stretch: 1,
                            depth: 500,
                            modifier: 1,
                            slideShadows: true,
                        }}
                        pagination={{ el: ".swiper-pagination" }}
                        loop={true}
                        className="mySwiper"
                    >
                        <SwiperSlide>
                            <div class="swiper-slide"><img class="max-w-sm" src="./img/c1.png" /></div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="swiper-slide"><img class="max-w-sm" src="./img/c2.png" /></div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="swiper-slide"><img class="max-w-sm" src="./img/c3.png" /></div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="swiper-slide"><img class="max-w-sm" src="./img/c4.png" /></div>
                        </SwiperSlide>
                        <SwiperSlide>
                            <div class="swiper-slide"><img class="max-w-sm" src="./img/c5.png" /></div>
                        </SwiperSlide>
                    </Swiper>
                </div>
            </div>
            <ul className="sci sm:left-60 left-22">
                <li><a href="#"
                    className="flex items-center justify-between inline-block w-12 h-12 ml-4 text-black transition-all duration-200 ease-out rounded-full hover:-translate-y-4 hover:bg-cyan-600"><img
                        className="scale-75 invert" src="./img/facebook.png" /></a></li>
                <li><a href="#"
                    className="flex items-center justify-between inline-block w-12 h-12 ml-4 text-black transition-all duration-200 ease-out rounded-full hover:-translate-y-4 hover:bg-cyan-600"><img
                        className="scale-75 invert" src="./img/instagram.png" /></a></li>
                <li><a href="#"
                    className="flex items-center justify-between inline-block w-12 h-12 ml-4 text-black transition-all duration-200 ease-out rounded-full hover:-translate-y-4 hover:bg-cyan-600"><img
                        className="scale-75 invert" src="./img/twitter.png" /></a></li>
            </ul>
        </section>
    );
}

export default Welcome;

if (document.getElementById('welcome')) {
    ReactDOM.render(<Welcome />, document.getElementById('welcome'));
}
