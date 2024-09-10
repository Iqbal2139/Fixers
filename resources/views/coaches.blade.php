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
        <title>Coaches Fixers Club</title>
    </head>
    <body class="font-basketball">
        @include('layouts.navbar')

        <!-- Header Section with Background Image and Title -->
        <header class="relative h-64 py-64 flex items-center justify-center text-white">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('{{ asset('img/events.jpeg') }}');"></div>
            <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
            <div class="relative z-10 text-center">
                <h1 class="text-4xl font-bold">Our Coaches</h1>
                <p class="mt-2 text-lg">Professional coaches that share same vision and goals</p>
            </div>
        </header>

        {{-- Coaches --}}
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach($coaches as $coach)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" src="{{ asset('img/coaches/' . $coach['photo']) }}" alt="{{ $coach['name'] }}">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold">{{$coach['name'] }}</h2>
                        <p class="text-purple-600 font-semibold">{{ $coach['role'] }}</p>
                        <p class="mt-2 text-gray-600">{{ $coach['bio'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        @include('layouts.footer')
    </body>
</html>