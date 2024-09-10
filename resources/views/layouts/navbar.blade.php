 <!-- Navbar -->
 <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-r from-purple-800 via-purple-900 to-purple-800 shadow-lg">
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
<script>
    // Toggle mobile menu visibility
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
           var menu = document.getElementById('mobile-menu');
           menu.classList.toggle('hidden');
       });
</script>    