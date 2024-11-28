<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="p-6 bg-transparent">
        <div class="flex items-center justify-between text-white">
            <!-- Judul di kiri -->
            <h1 class="text-2xl font-bold">BelajarNih</h1>

            <!-- Menu (untuk desktop) -->
            <ul class="justify-center hidden space-x-8 text-white md:flex">
                <li>Kelas</li>
                <li>Tentang Kami</li>
                <li>Tips Belajar</li>
            </ul>

            <!-- Burger Menu (untuk mobile) -->
            <button class="flex items-center justify-center text-white md:hidden" id="burger-menu">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Button untuk Register dan Login (Desktop) -->
            <div class="flex flex-row hidden md:flex">
                <button
                    class="flex items-center justify-center w-16 h-6 p-0 mx-2 text-xs font-semibold text-center text-black bg-white rounded-xl">
                    Register
                </button>
                <button
                    class="flex items-center justify-center w-16 h-6 p-0 mx-2 text-xs font-semibold text-center text-black bg-white rounded-xl">
                    Login
                </button>
            </div>
        </div>

        <!-- Menu (untuk mobile) yang akan muncul saat klik burger -->
        <div id="mobile-menu"
            class="absolute left-0 z-10 flex-col hidden w-full p-4 space-y-4 text-white bg-black md:hidden top-16">
            <ul class="space-y-4 text-center">
                <li>Kelas</li>
                <li>Tentang Kami</li>
                <li>Tips Belajar</li>
            </ul>

            <!-- Tombol Register dan Login di mobile menu -->
            <div class="flex justify-center space-x-4">
                <button class="p-2 text-xs font-semibold text-black bg-white rounded-xl">Register</button>
                <button class="p-2 text-xs font-semibold text-black bg-white rounded-xl">Login</button>
            </div>
        </div>
    </nav>
</body>
</html>