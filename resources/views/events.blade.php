<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       {{-- Tailwind Vite --}}
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        {{-- Font --}}
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        {{-- Social Media Icon --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Swiper.js CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <title>Events Fixers Club</title>
    </head>
    <body class="font-basketball">
        @include('layouts.navbar')

        <!-- Header Section with Background Image and Title -->
        <header class="relative h-64 py-64 flex items-center justify-center text-white">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('{{ asset('img/events.jpeg') }}');"></div>
            <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
            <div class="relative z-10 text-center">
                <h1 class="text-4xl font-bold">Upcoming Events</h1>
                <p class="mt-2 text-lg">Stay updated with the latest events and competitions we are participating in.</p>
            </div>
        </header>

        <!-- Events Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <!-- Event Card 1: Kejutkot Kota Tangerang KU 8 Mix, KU 12 Mix -->
                <div class="mb-8">
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Kejutkot Kota Tangerang</h3>
                        <p class="text-purple-700 font-semibold mb-2">KU 8 Mix, KU 12</p>
                        <p class="text-gray-700">Date: June 2024</p>
                        <p class="text-gray-700">Location: Kota Tangerang</p>
                        <p class="mt-4 text-gray-700">
                            Fixers Basketball Club will be participating in the Kejutkot Kota Tangerang competition for KU 8 Mix and KU 12 Mix categories. This event is a great opportunity for our young athletes to showcase their skills and teamwork.
                        </p>
                    </div>
                </div>

                <!-- Event Card 2: Kejutkot Kota Tangerang KU 14, KU 16 -->
                <div class="mb-8">
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Kejutkot Kota Tangerang</h3>
                        <p class="text-purple-700 font-semibold mb-2">KU 14, KU 16</p>
                        <p class="text-gray-700">Date: September 2024</p>
                        <p class="text-gray-700">Location: Kota Tangerang</p>
                        <p class="mt-4 text-gray-700">
                            Our club will also be participating in the Kejutkot Kota Tangerang competition for KU 14 and KU 16 categories in September 2024. We are excited to compete and demonstrate our commitment to excellence.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="py-16 bg-purple-800 text-white text-center">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold">Join Us at the Events!</h2>
                <p class="mt-4 text-lg">
                    Come support our team at these exciting events. Your presence and encouragement mean a lot to our young athletes.
                </p>
                <a href="" class="mt-8 inline-block bg-white text-purple-700 font-bold py-2 px-6 rounded-md hover:bg-gray-200 transition duration-300">
                    Register Now
                </a>
            </div>
        </section>
        
        @include('layouts.footer')
    </body>
</html>