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
        <title>Teams Fixers Club</title>
    </head>
    <body class="font-basketball">
        @include('layouts.navbar')

        <section class="pt-16 bg-white">
            <div class="mx-auto">
                <header class="relative h-64 flex items-center justify-center text-white py-48">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/activity2.jpeg') }}"></div>
                    <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
                    <div class="relative z-10 text-center">
                        <h1 class="text-4xl font-bold">Our Teams</h1>
                        <p class="mt-2 text-lg">Meet our teams and their achievements.</p>
                    </div>
                </header>
            
                <section class="py-16 bg-white">
                    <div class="container mx-auto px-4">
                        {{-- Card --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <div class="relative group">
                                <div class="bg-white border rounded-lg shadow-lg p-6 cursor-pointer transition transform hover:scale-105"
                                     onclick="openModal('ku8Mix')">
                                    <img src="{{ asset('img/logo.png') }}" alt="KU 8 Mix" class="h-24 w-auto mx-auto mb-4">
                                    <h3 class="text-2xl text-center font-semibold text-purple-700 mb-4">KU 8 Mix</h3>
                                    <p class="text-gray-600">Our youngest team, filled with potential and enthusiasm.</p>
                                </div>
                                {{-- <!-- Efek Klik -->
                                <div class="absolute inset-0 bg-purple-500 opacity-0 group-hover:opacity-20 transition duration-300 rounded-lg"></div> --}}
                            </div>

                            <div class="relative group">
                                <div class="bg-white border rounded-lg shadow-lg p-6 cursor-pointer transition transform hover:scale-105"
                                     onclick="openModal('ku12')">
                                    <img src="{{ asset('img/logo.png') }}" alt="KU 12-13" class="h-24 w-auto mx-auto mb-4">
                                    <h3 class="text-2xl text-center font-semibold text-purple-700 mb-4">KU 12 Putra dan Putri</h3>
                                    <p class="text-gray-600">A balanced team with both boys and girls showing great promise.</p>
                                </div>
                                {{-- <!-- Efek Klik -->
                                <div class="absolute inset-0 bg-purple-500 opacity-0 group-hover:opacity-20 transition duration-300 rounded-lg"></div> --}}
                            </div>
                            
                            <div class="relative group">
                                <div class="bg-white border rounded-lg shadow-lg p-6 cursor-pointer transition transform hover:scale-105"
                                     onclick="openModal('ku13')">
                                    <img src="{{ asset('img/logo.png') }}" alt="KU 8 Mix" class="h-24 w-auto mx-auto mb-4">
                                    <h3 class="text-2xl text-center font-semibold text-purple-700 mb-4">KU 13 Putra dan Putri</h3>
                                    <p class="text-gray-600">Another strong mixed team with a bright future ahead.</p>
                                </div>
                                {{-- <!-- Efek Klik -->
                                <div class="absolute inset-0 bg-purple-500 opacity-0 group-hover:opacity-20 transition duration-300 rounded-lg"></div> --}}
                            </div>

                            <div class="relative group">
                                <div class="bg-white border rounded-lg shadow-lg p-6 cursor-pointer transition transform hover:scale-105"
                                     onclick="openModal('ku14')">
                                    <img src="{{ asset('img/logo.png') }}" alt="KU 8 Mix" class="h-24 w-auto mx-auto mb-4">
                                    <h3 class="text-2xl text-center font-semibold text-purple-700 mb-4">KU 14 Putra dan Putri</h3>
                                    <p class="text-gray-600">Our teenage team, pushing their limits and growing stronger.</p>
                                </div>
                                {{-- <!-- Efek Klik -->
                                <div class="absolute inset-0 bg-purple-500 opacity-0 group-hover:opacity-20 transition duration-300 rounded-lg"></div> --}}
                            </div>
                            
                            <div class="relative group">
                                <div class="bg-white border rounded-lg shadow-lg p-6 cursor-pointer transition transform hover:scale-105"
                                     onclick="openModal('ku16')">
                                    <img src="{{ asset('img/logo.png') }}" alt="KU 8 Mix" class="h-24 w-auto mx-auto mb-4">
                                    <h3 class="text-2xl text-center font-semibold text-purple-700 mb-4">KU 16 Putra dan Putri</h3>
                                    <p class="text-gray-600">A team of dedicated young athletes, ready to take on challenges.</p>
                                </div>
                                {{-- <!-- Efek Klik -->
                                <div class="absolute inset-0 bg-purple-500 opacity-0 group-hover:opacity-20 transition duration-300 rounded-lg"></div> --}}
                            </div>

                            <div class="relative group">
                                <div class="bg-white border rounded-lg shadow-lg p-6 cursor-pointer transition transform hover:scale-105"
                                     onclick="openModal('ku18')">
                                    <img src="{{ asset('img/logo.png') }}" alt="KU 8 Mix" class="h-24 w-auto mx-auto mb-4">
                                    <h3 class="text-2xl text-center font-semibold text-purple-700 mb-4">KU 18 Putra dan Putri</h3>
                                    <p class="text-gray-600">Our senior team, with the skills and experience to succeed.</p>
                                </div>
                                {{-- <!-- Efek Klik -->
                                <div class="absolute inset-0 bg-purple-500 opacity-0 group-hover:opacity-20 transition duration-300 rounded-lg"></div> --}}
                            </div>
                        </div>

                        <div class="mt-16 text-center">
                            <h2 class="text-3xl font-bold text-purple-700 mb-4">School Partner</h2>
                            <p class="text-gray-600">We are proud to have over 200 students from some of the best schools in Kota Tangerang:</p>

                            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/sdcikokol1.png') }}" alt="SD Cikokol 1" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">SD Cikokol 1</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/sdneglasari2.png') }}" alt="SD Neglasari 2" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">SD Neglasari 2</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/dilaraf.png') }}" alt="Dilaraf Islamic School" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">Dilaraf Islamic School</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/sdsukasari5.png') }}" alt="Sukasari 5" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">SD Sukasari 5</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/smp4.png') }}" alt="SMP 4 Kota Tangerang" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">SMP 4 Kota Tangerang</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/smp13.png') }}" alt="SMP 13 Kota Tangerang" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">SMP 13 Kota Tangerang</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/smp23.png') }}" alt="SMP 23 Kota Tangerang" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">SMP 23 Kota Tangerang</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/sman7.png') }}" alt="SMAN 7 Kota Tangerang" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">SMAN 7 Kota Tangerang</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/smayp1.png') }}" alt="SMAN Yuppentek Kota Tangerang" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">SMA Yuppentek 1 Kota Tangerang</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/sman5.png') }}" alt="SMAN 5 Kota Tangerang" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">SMAN 5 Kota Tangerang</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/sman1.png') }}" alt="SMAN 1 Kota Tangerang" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">SMAN 1 Kota Tangerang</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/smk1.png') }}" alt="SMKN 1 Kota Tangerang" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">SMKN 1 Kota Tangerang</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="{{ asset('img/sman10.png') }}" alt="SMAN 10 Kota Tangerang" class="h-16 w-auto mb-3">
                                    <span class="text-gray-700 font-semibold">SMAN 10 Kota Tangerang</span>
                                </div>
                            </div>
                        </div>
            </div>
             <!-- Modal-->
             <div id="ku8Mix" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white rounded-lg shadow-lg w-full md:w-4/5 lg:w-3/4 xl:w-2/3 h-4/5 flex">
                    <!-- Close Button -->
                    <button class="absolute top-3 right-3 text-white hover:text-gray-500 text-2xl" onclick="closeModal('ku8Mix')">&times;</button>
            
                    <!-- Carousel Section -->
                    <div class="flex-2 overflow-hidden relative">
                        <div id="carousel-1" class="carousel relative w-full h-full">
                            <div id="carousel-inner-1" class="carousel-inner flex h-full" data-current-slide="0">
                                <img src="{{ asset('img/KU-8mix.jpeg') }}" alt="KU 8 Mix Image 1" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-8mix2.jpeg') }}" alt="KU 8 Mix Image 2" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-8mix3.jpeg') }}" alt="KU 8 Mix Image 3" class="slide w-full h-full object-cover">
                            </div>
                            <button class="carousel-control-prev absolute top-1/2 left-3 transform -translate-y-1/2 text-white text-2xl" onclick="prevSlide(1)">&lt;</button>
                            <button class="carousel-control-next absolute top-1/2 right-3 transform -translate-y-1/2 text-white text-2xl" onclick="nextSlide(1)">&gt;</button>
                        </div>
                    </div>
            
                    <!-- Information Section -->
                    <div class="flex-2 p-12 flex flex-col justify-center bg-gray-50 border-l border-gray-200 w-full">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">KU 8 Mix</h2>
                        <div class="text-gray-700">
                            <p class="mb-2"><strong>Coaches:</strong><br> Dede Abdih and Teguh</p>
                            <p class="mb-2"><strong>Total Players:<br></strong> 20+ people</p>
                            <p class="mb-2"><strong>Tournament:<br></strong> Kejutkot Kota Tangerang - Juni 2024</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ku12" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white rounded-lg shadow-lg w-full md:w-4/5 lg:w-3/4 xl:w-2/3 h-4/5 flex">
                    <!-- Close Button -->
                    <button class="absolute top-3 right-3 text-white hover:text-gray-500 text-2xl" onclick="closeModal('ku12')">&times;</button>
            
                    <!-- Carousel Section -->
                    <div class="flex-2 overflow-hidden relative">
                        <div id="carousel-2" class="carousel relative w-full h-full">
                            <div id="carousel-inner-2" class="carousel-inner flex h-full" data-current-slide="0">
                                <img src="{{ asset('img/KU-12.jpeg') }}" alt="KU 12 Image 1" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-12-2.jpeg') }}" alt="KU 12 Image 2" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-12-3.jpeg') }}" alt="KU 12 Image 3" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-12-4.jpeg') }}" alt="KU 12 Image 4" class="slide w-full h-full object-cover">
                            </div>
                            <button class="carousel-control-prev absolute top-1/2 left-3 transform -translate-y-1/2 text-white text-2xl" onclick="prevSlide(2)">&lt;</button>
                            <button class="carousel-control-next absolute top-1/2 right-3 transform -translate-y-1/2 text-white text-2xl" onclick="nextSlide(2)">&gt;</button>
                        </div>
                    </div>
            
                    <!-- Information Section -->
                    <div class="flex-2 p-12 flex flex-col justify-center bg-gray-50 border-l border-gray-200 w-full">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">KU 12 Putra dan Putri</h2>
                        <div class="text-gray-700">
                            <p class="mb-2"><strong>Coaches:</strong><br> Mochamad Iqbal Aulia and Raihan Khairi F</p>
                            <p class="mb-2"><strong>Total Players:<br></strong> 20+ people</p>
                            <p class="mb-2"><strong>Tournament:<br></strong> Kejutkot Kota Tangerang - Juni 2024</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ku13" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white rounded-lg shadow-lg w-full md:w-4/5 lg:w-3/4 xl:w-2/3 h-4/5 flex">
                    <!-- Close Button -->
                    <button class="absolute top-3 right-3 text-white hover:text-gray-500 text-2xl" onclick="closeModal('ku13')">&times;</button>
            
                    <!-- Carousel Section -->
                    <div class="flex-2 overflow-hidden relative">
                        <div id="carousel-3" class="carousel relative w-full h-full">
                            <div id="carousel-inner-3" class="carousel-inner flex h-full" data-current-slide="0">
                                <img src="{{ asset('img/KU-13.jpeg') }}" alt="KU 12 Image 1" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-13-2.jpeg') }}" alt="KU 12 Image 2" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-13-3.jpeg') }}" alt="KU 12 Image 3" class="slide w-full h-full object-cover"> 
                            </div>
                            <button class="carousel-control-prev absolute top-1/2 left-3 transform -translate-y-1/2 text-white text-2xl" onclick="prevSlide(3)">&lt;</button>
                            <button class="carousel-control-next absolute top-1/2 right-3 transform -translate-y-1/2 text-white text-2xl" onclick="nextSlide(3)">&gt;</button>
                        </div>
                    </div>
            
                    <!-- Information Section -->
                    <div class="flex-2 p-12 flex flex-col justify-center bg-gray-50 border-l border-gray-200 w-full">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">KU 13 Putra dan Putri</h2>
                        <div class="text-gray-700">
                            <p class="mb-2"><strong>Coaches:</strong><br> Mochamad Iqbal Aulia and Raihan Khairi F</p>
                            <p class="mb-2"><strong>Total Players:<br></strong> 20+ people</p>
                            <p class="mb-2"><strong>Tournament:<br></strong> Kejutkot Kota Tangerang - September 2024</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ku14" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white rounded-lg shadow-lg w-full md:w-4/5 lg:w-3/4 xl:w-2/3 h-4/5 flex">
                    <!-- Close Button -->
                    <button class="absolute top-3 right-3 text-white hover:text-gray-500 text-2xl" onclick="closeModal('ku14')">&times;</button>
            
                    <!-- Carousel Section -->
                    <div class="flex-2 overflow-hidden relative">
                        <div id="carousel-4" class="carousel relative w-full h-full">
                            <div id="carousel-inner-4" class="carousel-inner flex h-full" data-current-slide="0">
                                <img src="{{ asset('img/KU-12.jpeg') }}" alt="KU 12 Image 1" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-12-2.jpeg') }}" alt="KU 12 Image 2" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-12-3.jpeg') }}" alt="KU 12 Image 3" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-12-4.jpeg') }}" alt="KU 12 Image 4" class="slide w-full h-full object-cover">
                            </div>
                            <button class="carousel-control-prev absolute top-1/2 left-3 transform -translate-y-1/2 text-white text-2xl" onclick="prevSlide(4)">&lt;</button>
                            <button class="carousel-control-next absolute top-1/2 right-3 transform -translate-y-1/2 text-white text-2xl" onclick="nextSlide(4)">&gt;</button>
                        </div>
                    </div>
            
                    <!-- Information Section -->
                    <div class="flex-2 p-12 flex flex-col justify-center bg-gray-50 border-l border-gray-200 w-full">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">KU 14 Putra dan Putri</h2>
                        <div class="text-gray-700">
                            <p class="mb-2"><strong>Coaches:</strong><br> Wandanil</p>
                            <p class="mb-2"><strong>Total Players:<br></strong> 20+ people</p>
                            <p class="mb-2"><strong>Tournament:<br></strong> Kejutkot Kota Tangerang - September 2024</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ku16" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white rounded-lg shadow-lg w-full md:w-4/5 lg:w-3/4 xl:w-2/3 h-4/5 flex">
                    <!-- Close Button -->
                    <button class="absolute top-3 right-3 text-white hover:text-gray-500 text-2xl" onclick="closeModal('ku16')">&times;</button>
            
                    <!-- Carousel Section -->
                    <div class="flex-2 overflow-hidden relative">
                        <div id="carousel-5" class="carousel relative w-full h-full">
                            <div id="carousel-inner-5" class="carousel-inner flex h-full" data-current-slide="0">
                                <img src="{{ asset('img/KU-12.jpeg') }}" alt="KU 12 Image 1" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-12-2.jpeg') }}" alt="KU 12 Image 2" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-12-3.jpeg') }}" alt="KU 12 Image 3" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-12-4.jpeg') }}" alt="KU 12 Image 4" class="slide w-full h-full object-cover">
                            </div>
                            <button class="carousel-control-prev absolute top-1/2 left-3 transform -translate-y-1/2 text-white text-2xl" onclick="prevSlide(5)">&lt;</button>
                            <button class="carousel-control-next absolute top-1/2 right-3 transform -translate-y-1/2 text-white text-2xl" onclick="nextSlide(5)">&gt;</button>
                        </div>
                    </div>
            
                    <!-- Information Section -->
                    <div class="flex-2 p-12 flex flex-col justify-center bg-gray-50 border-l border-gray-200 w-full">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">KU 16 Putra dan Putri</h2>
                        <div class="text-gray-700">
                            <p class="mb-2"><strong>Coaches:</strong><br> Wandanil</p>
                            <p class="mb-2"><strong>Total Players:<br></strong> 20+ people</p>
                            <p class="mb-2"><strong>Tournament:<br></strong> Kejutkot Kota Tangerang - September 2024</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ku18" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white rounded-lg shadow-lg w-full md:w-4/5 lg:w-3/4 xl:w-2/3 h-4/5 flex">
                    <!-- Close Button -->
                    <button class="absolute top-3 right-3 text-white hover:text-gray-500 text-2xl" onclick="closeModal('ku18')">&times;</button>
            
                    <!-- Carousel Section -->
                    <div class="flex-2 overflow-hidden relative">
                        <div id="carousel-6" class="carousel relative w-full h-full">
                            <div id="carousel-inner-6" class="carousel-inner flex h-full" data-current-slide="0">
                                <img src="{{ asset('img/KU-12.jpeg') }}" alt="KU 12 Image 1" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-12-2.jpeg') }}" alt="KU 12 Image 2" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-12-3.jpeg') }}" alt="KU 12 Image 3" class="slide w-full h-full object-cover">
                                <img src="{{ asset('img/KU-12-4.jpeg') }}" alt="KU 12 Image 4" class="slide w-full h-full object-cover">
                            </div>
                            <button class="carousel-control-prev absolute top-1/2 left-3 transform -translate-y-1/2 text-white text-2xl" onclick="prevSlide(6)">&lt;</button>
                            <button class="carousel-control-next absolute top-1/2 right-3 transform -translate-y-1/2 text-white text-2xl" onclick="nextSlide(6)">&gt;</button>
                        </div>
                    </div>
            
                    <!-- Information Section -->
                    <div class="flex-2 p-12 flex flex-col justify-center bg-gray-50 border-l border-gray-200 w-full">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">KU 18 Putra dan Putri</h2>
                        <div class="text-gray-700">
                            <p class="mb-2"><strong>Coaches:</strong><br> Wandanil</p>
                            <p class="mb-2"><strong>Total Players:<br></strong> 20+ people</p>
                            <p class="mb-2"><strong>Tournament:<br></strong> Kejutkot Kota Tangerang - September 2024</p>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <script>
            // Modal
            function openModal(id) {
                document.getElementById(id).classList.remove('hidden');
                document.getElementsByTagName('body')[0].style.overflow = "hidden";
            }
        
            function closeModal(id) {
                document.getElementById(id).classList.add('hidden');
                document.getElementsByTagName('body')[0].style.overflow = "auto";
            }

                function showSlide(carouselId, index) {
                const carouselInner = document.getElementById(`carousel-inner-${carouselId}`);
                const slides = carouselInner.children;
                const totalSlides = slides.length;

                // Ensure index is within the correct range
                if (index >= totalSlides) index = 0;
                if (index < 0) index = totalSlides - 1;

                // Translate the carousel
                carouselInner.style.transform = `translateX(-${index * 100}%)`;

                // Store the current index as a data attribute
                carouselInner.setAttribute('data-current-slide', index);
            }

            function nextSlide(carouselId) {
                const carouselInner = document.getElementById(`carousel-inner-${carouselId}`);
                let currentSlide = parseInt(carouselInner.getAttribute('data-current-slide')) || 0;
                showSlide(carouselId, currentSlide + 1);
            }

            function prevSlide(carouselId) {
                const carouselInner = document.getElementById(`carousel-inner-${carouselId}`);
                let currentSlide = parseInt(carouselInner.getAttribute('data-current-slide')) || 0;
                showSlide(carouselId, currentSlide - 1);
            }

            // Initialize carousel
            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('.carousel-inner').forEach((carouselInner) => {
                    const carouselId = carouselInner.parentNode.id.split('-')[2];
                    showSlide(carouselId, 0);
                });
            });
        </script>
        <style>
            .carousel-inner {
                display: flex;
                width: 100%;
                height: 100%;
            }
        
            .carousel-inner img {
                min-width: 100%;
                height: 100%;
                object-fit: cover;
            }
        
            .carousel-control-prev, .carousel-control-next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background: rgba(0, 0, 0, 0.5);
                color: white;
                border: none;
                padding: 0.5rem;
                cursor: pointer;
                z-index: 10;
            }
        
            .carousel-control-prev {
                left: 10px;
            }
        
            .carousel-control-next {
                right: 10px;
            }
        </style>
        @include('layouts.footer')
    </body>
</html>