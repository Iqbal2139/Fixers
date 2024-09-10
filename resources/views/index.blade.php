<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <title>Fixers Club</title>
    </head>
    <body>
        <body>
             <!-- Navbar -->
             <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 from-purple-800 via-purple-900 to-purple-800 shadow-lg">
                <div class="container mx-auto flex justify-between items-center">
                    <!-- Logo -->
                    <a href="/" class="text-white text-xl flex items-center font-basketball">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-auto mr-1" style="height: 13vh">
                    </a>
                    <!-- Menu Items Container -->
                    <div class="flex-grow flex justify-start mr-3 pl-3">
                        <!-- Menu Items -->
                        <div class="hidden md:flex space-x-6 font-basketball text-lg">
                            <a href="/" class="text-white hover:text-purple-200">Home</a>
                            <a href="/about" class="text-white hover:text-purple-200">About</a>
                            <a href="/events" class="text-white hover:text-purple-200">Events</a>
                            <a href="/teams" class="text-white hover:text-purple-200">Teams</a>
                            <a href="/coaches" class="text-white hover:text-purple-200">Coaches</a>
                            <a href="/player" class="text-white hover:text-purple-200">Players</a>
                            <a href="/contact" class="text-white hover:text-purple-200">Contact</a>
                        </div>
                    </div>
                <!-- Social Media Icons -->
                <div class="hidden md:flex space-x-4">
                    <a href="https://www.instagram.com/fixers_basketballclub/?hl=en" target="_blank" class="text-white hover:text-purple-300">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="https://wa.me/087789247487" target="_blank" class="text-white hover:text-purple-300">
                        <i class="fab fa-whatsapp fa-lg"></i>
                    </a>
                    <a href="https://www.facebook.com" target="_blank" class="text-white hover:text-purple-300">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="text-white hover:text-purple-300">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="https://www.youtube.com/@fixersbasketball" target="_blank" class="text-white hover:text-purple-300">
                        <i class="fab fa-youtube fa-lg"></i>
                    </a>
                </div>
                <div class="hidden md:flex space-x-4 ml-5">
                   <!-- Auth Links -->
                   <a href="" class="bg-purple-700 px-4 py-2 rounded text-white hover:text-purple-300">
                    <i class="fas fa-sign-in-alt mr-1"></i>
                    Login
                    </a>
                    <a href="" class="bg-purple-700 px-4 py-2 rounded text-white hover:text-purple-300">
                        <i class="fas fa-user-plus mr-1"></i> Sign Up
                    </a>
                </div>    
                <!-- Hamburger Menu (for mobile) -->
                    <div class="md:hidden pr-2">
                        <button id="mobile-menu-button" class="text-white focus:outline-none">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div id="mobile-menu" class="hidden md:hidden bg-gradient-to-r from-purple-800 via-purple-900 to-purple-800 font-basketball text-lg">
                    <a href="/" class="block text-white px-4 py-2 hover:text-purple-300">Home</a>
                    <a href="/about" class="block text-white px-4 py-2 hover:text-purple-300">About</a>
                    <a href="/events" class="block text-white px-4 py-2 hover:text-purple-300">Events</a>
                    <a href="/teams" class="block text-white px-4 py-2 hover:text-purple-300">Teams</a>
                    <a href="/coaches" class="block text-white px-4 py-2 hover:text-purple-300">Coaches</a>
                    <a href="/players" class="block text-white px-4 py-2 hover:text-purple-300">Players</a>
                    <a href="/contact" class="block text-white px-4 py-2 hover:text-purple-300">Contact</a>
                    <!-- Social Media Icons in Mobile Menu -->
                    <div class="flex justify-center space-x-4 mt-4">
                        <a href="https://www.instagram.com/fixers_basketballclub/?hl=en" target="_blank" class="text-white hover:text-purple-300">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="https://wa.me/087789247487" target="_blank" class="text-white hover:text-purple-300">
                            <i class="fab fa-whatsapp fa-lg"></i>
                        </a>
                        <a href="https://www.facebook.com" target="_blank" class="text-white hover:text-purple-300">
                            <i class="fab fa-facebook-f fa-lg"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="text-white hover:text-purple-300">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="https://www.youtube.com/@fixersbasketball" target="_blank" class="text-white hover:text-purple-300">
                            <i class="fab fa-youtube fa-lg"></i>
                        </a>
                    </div>
                    <!-- Auth Links in Mobile Menu -->
                    <div class="flex justify-center space-x-4 mt-2 pb-5">
                        <a href="" class="text-white hover:text-purple-300">
                            <i class="fas fa-sign-in-alt mr-1 my-2 py-2"></i> Login
                        </a>
                        <a href="" class="text-white hover:text-purple-300">
                            <i class="fas fa-user-plus mr-1 my-2 py-2"></i> Sign Up
                        </a>
                    </div>
                </div>
            </nav>
        
            <!-- Jumbotron Section -->
            <section class="jumbotron bg-cover bg-center h-screen" style="background-image:url('{{ asset('img/jumbotron.jpeg') }}');">
                <div class="flex items-center justify-center h-full bg-black bg-opacity-50 pb-5">
                    <div class="text-center text-white pb-5">
                        <h1 class="text-5xl font-bold">Welcome to Fixers</h1>
                        <p class="mt-2 text-xl">Fixers Official Basketball Club Website</p>
                    </div>
                </div>
            </section>

            {{-- Chairman Section --}}
            <section class="relative bg-gradient-to-r from-purple-800 via-purple-900 to-purple-800 text-white py-24">
                <div class="container mx-auto px-4">
                    <div class="flex flex-col items-center md:flex-row md:items-center">
                        <!-- Chairman Quote -->
                        <div class="md:w-1/2 text-center md:text-left pl-12">
                            <h1 class="text-4xl font-bold mb-4">Message from Our Chairman</h1>
                            <p class="text-lg mb-4">"As we continue to grow and excel, our commitment to fostering a strong and dynamic community remains unwavering. We aim to inspire and support each member of our organization, driving us toward excellence in all our endeavors."</p>
                            <p class="text-xl font-semibold">Chairman Wawan Hermawan</p>
                        </div>
                        <!-- Chariman Image -->
                        <div class="md:w-1/2 md:pl-12 mb-8 md:mb-0">
                            <img src="{{ asset('img/chairman.png') }}" alt="Head Coach" class="rounded-lg h-84 w-84">
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Value Section -->
            <section class="py-28">
                <div class="container mx-auto px-4">
                    <h2 class="text-4xl font-bold text-center text-purple-700 mb-12">Our Core Values</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Card 1 -->
                        <div class="bg-white shadow-lg rounded-lg p-6 value-card">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-basketball-ball text-purple-700 text-4xl"></i>
                                <h3 class="ml-4 text-2xl font-semibold text-purple-700">Teamwork</h3>
                            </div>
                            <p class="text-gray-600">We believe in the power of collaboration. Together, we achieve more.</p>
                        </div>
                        <!-- Card 2 -->
                        <div class="bg-white shadow-lg rounded-lg p-6 value-card">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-heart text-purple-700 text-4xl"></i>
                                <h3 class="ml-4 text-2xl font-semibold text-purple-700">Passion</h3>
                            </div>
                            <p class="text-gray-600">Passion drives us to excel in every game and practice, pushing our limits.</p>
                        </div>
                        <!-- Card 3 -->
                        <div class="bg-white shadow-lg rounded-lg p-6 value-card">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-handshake text-purple-700 text-4xl"></i>
                                <h3 class="ml-4 text-2xl font-semibold text-purple-700">Integrity</h3>
                            </div>
                            <p class="text-gray-600">Integrity is at the heart of our actions, on and off the court.</p>
                        </div>
                        <!-- Card 4 -->
                        <div class="bg-white shadow-lg rounded-lg p-6 value-card">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-trophy text-purple-700 text-4xl"></i>
                                <h3 class="ml-4 text-2xl font-semibold text-purple-700">Excellence</h3>
                            </div>
                            <p class="text-gray-600">We strive for excellence in every aspect, from training to competition.</p>
                        </div>
                        <!-- Card 5 -->
                        <div class="bg-white shadow-lg rounded-lg p-6 value-card">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-users text-purple-700 text-4xl"></i>
                                <h3 class="ml-4 text-2xl font-semibold text-purple-700">Community</h3>
                            </div>
                            <p class="text-gray-600">We build and support a strong community both within and outside our team.</p>
                        </div>
                        <!-- Card 6 -->
                        <div class="bg-white shadow-lg rounded-lg p-6 value-card">
                            <div class="flex items-center mb-4">
                                <i class="fas fa-lightbulb text-purple-700 text-4xl"></i>
                                <h3 class="ml-4 text-2xl font-semibold text-purple-700">Innovation</h3>
                            </div>
                            <p class="text-gray-600">Innovation drives our approach, keeping us ahead of the game.</p>
                        </div>
                    </div>
                </div>
            </section>

            
            <!-- Headcoach Section -->
            <section class="relative bg-gradient-to-r from-purple-800 via-purple-900 to-purple-800 text-white py-32">
                <div class="container mx-auto px-4">
                    <div class="flex flex-col items-center md:flex-row md:items-center">
                        <!-- Coach Image -->
                        <div class="md:w-1/2 md:pl-52 mb-8 md:mb-0">
                            <img src="{{ asset('img/headcoach.png') }}" alt="Head Coach" class="rounded-lg w-48">
                        </div>
                        <!-- Coach Quote -->
                        <div class="md:w-1/2 text-center md:text-left">
                            <h1 class="text-4xl font-bold mb-4">Message from Our Head Coach</h1>
                            <p class="text-lg mb-4">"At Fixers Basketball Club, we believe in the power of teamwork and dedication. Our goal is to nurture young talent and build a strong, supportive community around the game we love. Together, we strive for excellence on and off the court."</p>
                            <p class="text-xl font-semibold">Coach Wandanil</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Our Activity Section -->
            <section class="py-16">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-4xl font-bold text-purple-700 mb-12">Our Activities</h2>
                    <!-- Swiper Carousel -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide bg-white shadow-lg rounded-lg p-6 flex flex-col h-96">
                                <img src="{{ asset('img/activity1.jpeg') }}" alt="Activity 1" class="mx-auto rounded-lg h-64 w-full object-cover">
                                <h3 class="text-2xl font-semibold text-purple-700 mt-4">Basketball Training</h3>
                                <p class="text-gray-600 mt-2 flex-grow">Join our intensive training sessions designed to improve your skills and performance.</p>
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide bg-white shadow-lg rounded-lg p-6 flex flex-col h-96">
                                <img src="{{ asset('img/activity2.jpeg') }}" alt="Activity 2" class="mx-auto rounded-lg h-64 w-full object-cover">
                                <h3 class="text-2xl font-semibold text-purple-700 mt-4">Sparing with Other Club</h3>
                                <p class="text-gray-600 mt-2 flex-grow">Participate in friendly matches with other basketball clubs to build team spirit and improve your game.</p>
                            </div>
                            <!-- Slide 3 -->
                            <div class="swiper-slide bg-white shadow-lg rounded-lg p-6 flex flex-col h-96">
                                <img src="{{ asset('img/activity3.jpeg') }}" alt="Activity 3" class="mx-auto rounded-lg h-64 w-full object-cover">
                                <h3 class="text-2xl font-semibold text-purple-700 mt-4">Tournaments</h3>
                                <p class="text-gray-600 mt-2 flex-grow">Compete in local and national tournaments to showcase your basketball prowess.</p>
                            </div>
                             <!-- Slide 4 -->
                             <div class="swiper-slide bg-white shadow-lg rounded-lg p-6 flex flex-col h-96">
                                <img src="{{ asset('img/activity4.jpeg') }}" alt="Activity 4" class="mx-auto rounded-lg h-64 w-full object-cover">
                                <h3 class="text-2xl font-semibold text-purple-700 mt-4">Fixers Goes to Puncak</h3>
                                <p class="text-gray-600 mt-2 flex-grow">Experience team bonding and outdoor activities as Fixers Basketball Club heads to Puncak for a memorable retreat.</p>
                            </div>
                            {{-- Slide 5 --}}
                            <div class="swiper-slide bg-white shadow-lg rounded-lg p-6 flex flex-col h-96">
                                <img src="{{ asset('img/activity5.jpeg') }}" alt="Bukber with Parents" class="mx-auto rounded-lg h-48 w-full object-cover">
                                <h3 class="text-2xl font-semibold text-purple-700 mt-4">Bukber with Parents</h3>
                                <p class="text-gray-600 mt-2 flex-grow">Join us for a special Ramadan event where our players and their families come together to break the fast and enjoy a meal.</p>
                            </div>
                            {{-- Slide 6 --}}
                            <div class="swiper-slide bg-white shadow-lg rounded-lg p-6 flex flex-col h-96">
                                <img src="{{ asset('img/activity6.jpeg') }}" alt="Physical Test" class="mx-auto rounded-lg h-48 w-full object-cover">
                                <h3 class="text-2xl font-semibold text-purple-700 mt-4">Physical Test</h3>
                                <p class="text-gray-600 mt-2 flex-grow">Evaluate your physical fitness and readiness with our comprehensive physical tests designed for athletes.</p>
                            </div>
                            <!-- Add more slides as needed -->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination mt-5" style="position: relative"></div>
                    </div>
                </div>
            </section>

            <!-- Our Schedule Section -->
            <section class="py-24 bg-white">
                <div class="container mx-auto px-4">
                    <h2 class="text-4xl font-bold text-purple-700 mb-8 text-center">Our Schedule</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
                            <thead>
                                <tr class="bg-purple-600 text-white">
                                    <th class="py-3 px-6 text-left">Day</th>
                                    <th class="py-3 px-6 text-left">Category</th>
                                    <th class="py-3 px-6 text-left">Start Time</th>
                                    <th class="py-3 px-6 text-left">End Time</th>
                                    <th class="py-3 px-6 text-left">Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Thursday Sessions -->
                                <tr class="border-b border-gray-200">
                                    <td class="py-4 px-6 text-gray-700">Thursday</td>
                                    <td class="py-4 px-6 text-gray-700">KU 8 - KU 13</td>
                                    <td class="py-4 px-6 text-gray-700">16:00 WIB</td>
                                    <td class="py-4 px-6 text-gray-700">17:40 WIB</td>
                                    <td class="py-4 px-6 text-gray-700">Basketball Court Padang Golf Modernland</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-4 px-6 text-gray-700">Thursday</td>
                                    <td class="py-4 px-6 text-gray-700">KU 14 - KU 16</td>
                                    <td class="py-4 px-6 text-gray-700">18:15 WIB</td>
                                    <td class="py-4 px-6 text-gray-700">20:15 WIB</td>
                                    <td class="py-4 px-6 text-gray-700">Basketball Court Padang Golf Modernland</td>
                                </tr>
                                <!-- Saturday Sessions -->
                                <tr class="border-b border-gray-200">
                                    <td class="py-4 px-6 text-gray-700">Saturday</td>
                                    <td class="py-4 px-6 text-gray-700">KU 8 - KU 13</td>
                                    <td class="py-4 px-6 text-gray-700">15:20 WIB</td>
                                    <td class="py-4 px-6 text-gray-700">17:30 WIB</td>
                                    <td class="py-4 px-6 text-gray-700">Basketball Court Padang Golf Modernland</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="py-4 px-6 text-gray-700">Saturday</td>
                                    <td class="py-4 px-6 text-gray-700">KU 14 - KU 16</td>
                                    <td class="py-4 px-6 text-gray-700">18:15 WIB</td>
                                    <td class="py-4 px-6 text-gray-700">20:15 WIB</td>
                                    <td class="py-4 px-6 text-gray-700">Basketball Court Padang Golf Modernland</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Testimonials Section -->
            <section class="py-24 bg-gray-50">
                <div class="container mx-auto px-4">
                    <h2 class="text-4xl font-bold text-purple-700 mb-12 text-center">What Our Members Say</h2>
                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <!-- Testimonial 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center mb-4">
                                <img src="https://via.placeholder.com/80" alt="Member 1" class="w-16 h-16 rounded-full mr-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">John Doe</h3>
                                    <p class="text-sm text-gray-600">KU 14 - KU 16 Member</p>
                                </div>
                            </div>
                            <p class="text-gray-700">
                                "Joining Fixers Basketball has been one of the best decisions I've ever made. The coaching staff is amazing, and I've improved so much in just a few months!"
                            </p>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center mb-4">
                                <img src="https://via.placeholder.com/80" alt="Member 2" class="w-16 h-16 rounded-full mr-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Jane Smith</h3>
                                    <p class="text-sm text-gray-600">KU 8 - KU 13 Member</p>
                                </div>
                            </div>
                            <p class="text-gray-700">
                                "The environment at Fixers is very supportive. I've made a lot of new friends, and the training sessions are always fun and challenging."
                            </p>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center mb-4">
                                <img src="https://via.placeholder.com/80" alt="Member 3" class="w-16 h-16 rounded-full mr-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900">Michael Lee</h3>
                                    <p class="text-sm text-gray-600">Parent of KU 8 - KU 13 Member</p>
                                </div>
                            </div>
                            <p class="text-gray-700">
                                "I'm really impressed with the progress my child has made since joining Fixers Basketball. The coaches are very professional and attentive to each kid's needs."
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Club Registration Form Section -->
            <section class="py-24 bg-white">
                <div class="container mx-auto px-4">
                    <h2 class="text-4xl font-bold text-purple-700 mb-8 text-center">Club Registration</h2>
                    <div class="max-w-lg mx-auto bg-gray-50 p-8 rounded-lg shadow-lg">
                        <form action="" method="POST">
                            @csrf
                            <!-- Name -->
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-bold mb-2">Full Name</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-purple-500">
                            </div>
                            <!-- Email -->
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-bold mb-2">Email Address</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-purple-500">
                            </div>
                            <!-- Phone -->
                            <div class="mb-4">
                                <label for="phone" class="block text-gray-700 font-bold mb-2">Phone Number</label>
                                <input type="text" id="phone" name="phone" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-purple-500">
                            </div>
                            <!-- Age Group -->
                            <div class="mb-4">
                                <label for="age-group" class="block text-gray-700 font-bold mb-2">Age Group</label>
                                <select id="age-group" name="age_group" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-purple-500">
                                    <option value="KU 8 - KU 13">KU 8 - KU 13</option>
                                    <option value="KU 14 - KU 16">KU 14 - KU 16</option>
                                </select>
                            </div>
                            <!-- Address -->
                            <div class="mb-4">
                                <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
                                <textarea id="address" name="address" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-purple-500"></textarea>
                            </div>
                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit"
                                    class="bg-purple-600 text-white font-bold py-2 px-4 rounded-md hover:bg-purple-700 focus:outline-none focus:ring focus:border-purple-500">
                                    Register Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            @include('layouts.footer')
            <!-- Swiper.js JS -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                // Toggle mobile menu visibility
                document.getElementById('mobile-menu-button').addEventListener('click', function() {
                    var menu = document.getElementById('mobile-menu');
                    menu.classList.toggle('hidden');
                });

                // Change navbar background on scroll
                window.addEventListener('scroll', function() {
                    var navbar = document.getElementById('navbar');
                    var jumbotronHeight = document.querySelector('.jumbotron').offsetHeight;

                    if (window.scrollY > jumbotronHeight - 100) { // Adjust threshold as needed
                        navbar.classList.add('bg-gradient-to-r');
                        navbar.classList.remove('navbar-transparent');
                    } else {
                        navbar.classList.remove('bg-gradient-to-r');
                        navbar.classList.add('navbar-transparent');
                    }
                });

                // Initialize Swiper
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 30,
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 40,
                        },
                    }
                });
            </script>
        </body>
        
    </body>
</html>
