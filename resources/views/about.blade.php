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
        <title>About Fixers Club</title>
    </head>
    <body class="font-basketball">
        @include('layouts.navbar')

        <!-- Header Section with Background Image and Purple Vignette -->
        <header class="relative h-64 flex items-center justify-center text-white py-64">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('{{ asset('img/about.jpeg') }}');"></div>
            <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
            <div class="relative z-10 text-center">
                <h1 class="text-4xl font-bold">About Fixers Basketball Club</h1>
                <p class="mt-2 text-lg">Learn more about our mission, vision, and the people behind our success.</p>
            </div>
        </header>

        <section class="py-24 bg-white">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-8 text-center">
                    <!-- Mission -->
                    <div>
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-purple-700">Our Mission</h2>
                        <p class="mt-4 text-gray-700">
                            Our mission is to inspire and nurture young athletes by providing them with the tools, coaching, and environment needed to excel in basketball and in life.
                        </p>
                    </div>
                    <!-- Vision -->
                    <div>
                        <div class="flex justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-purple-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M9 3v18M9 10h6M3 10h6m6 0h6M3 18h6m6 0h6" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-purple-700">Our Vision</h2>
                        <p class="mt-4 text-gray-700">
                            We envision a community where young athletes are empowered to reach their full potential both on and off the court, developing into responsible, disciplined, and skilled individuals.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Team Section -->
        <section class="py-16 bg-purple-800">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-white text-center mb-12">Meet Our Team</h2>
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Team Member 1 -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-center">
                        <img src="https://via.placeholder.com/150" alt="Head Coach" class="w-24 h-24 rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-bold text-gray-900">John Doe</h3>
                        <p class="text-purple-700 font-semibold">Head Coach</p>
                        <p class="mt-2 text-gray-700">
                            John has over 20 years of experience coaching young athletes and is passionate about developing their skills and character.
                        </p>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-center">
                        <img src="https://via.placeholder.com/150" alt="Assistant Coach" class="w-24 h-24 rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-bold text-gray-900">Jane Smith</h3>
                        <p class="text-purple-700 font-semibold">Assistant Coach</p>
                        <p class="mt-2 text-gray-700">
                            Jane is a former professional player who brings a wealth of knowledge and experience to the team.
                        </p>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="bg-gray-50 p-6 rounded-lg shadow-lg text-center">
                        <img src="https://via.placeholder.com/150" alt="Team Manager" class="w-24 h-24 rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-bold text-gray-900">Michael Lee</h3>
                        <p class="text-purple-700 font-semibold">Team Manager</p>
                        <p class="mt-2 text-gray-700">
                            Michael handles the day-to-day operations of the club, ensuring everything runs smoothly for our members.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our History Section -->
        <section class="py-24 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-purple-700">Our History</h2>
                    <p class="mt-4 text-gray-700">
                        Founded in 2023, Fixers Basketball Club has grown from a small group of passionate players and students to a thriving community of athletes dedicated to excellence both on and off the court. Our club has a proud tradition of fostering talent and sportsmanship.
                    </p>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="py-16 bg-purple-800 text-white text-center">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold">Join Us Today!</h2>
                <p class="mt-4 text-lg">
                    Become a part of the Fixers family and take your game to the next level. We're always looking for passionate players and supportive families to join our community.
                </p>
                <a href="" class="mt-8 inline-block bg-white text-purple-700 font-bold py-2 px-6 rounded-md hover:bg-gray-200 transition duration-300">
                    Register Now
                </a>
            </div>
        </section>

        @include('layouts.footer')
    </body>
</html>