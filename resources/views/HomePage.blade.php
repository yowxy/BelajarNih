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
    {{-- navbar --}}
    <div class="justify-center w-full h-full bg-gradient-custom font-poppins">
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
        {{-- Jumbroton --}}
        <section class="flex items-center justify-center mt-[80px]">
            <div class="w-[1280px] h-[592px] bg-white rounded-36 text-center flex items-center justify-center">
                <div class="flex flex-col">
                    <h1 class="pt-6 text-6xl font-semibold ">
                        Mulai Belajar Sekarang , <br>
                        Wujudkan Mimpi <br>
                    </h1>
                    <p class="mt-4">
                        Belajar dengan cara yang seru dan praktis, siap bantu <br>
                        kamu jadi ahli di bidang yang kamu suka. <br>
                    </p>
                    <div class="mt-9">
                        <button class=" text-white bg-yellow-300 rounded-2xl p-[21px]">Mulai Belajar Sekarang !</button>
                    </div>
                </div>
            </div>
        </section>

        {{-- apasih BelajarNih itu --}}

        <section class="m-10 ">
            <div class="flex flex-row mt-16 justify-evenly">
                <div class="bg-gradient-custom w-[375px] h-[345px] rounded-36 text-center justify-center flex  items-center ">
                    <div class="flex flex-col" >
                        <img src="{{ asset('image/education.png') }}" alt="education.png" class="w-[226px] h-[226px]">
                        <h1 class="text-white" >Temukan Skil hari ini</h1>
                    </div>
                </div>
                <div>
                    <div class="text-white" >
                        <h1 class="text-4xl font-semibold text-white">Apa sih BelajarNih itu ?</h1>
                        <p class="mt-3">
                                BelajarNih adalah platform e-learning yang dirancang <br>
                                buat kamu yang pengen upgrade skill dan raih impian. <br>
                                Dari kelas-kelas coding, desain, hingga pelajaran sekolah, <br>
                                semuanya tersedia buat bantu lo jadi expert. Di BelajarNih, <br>
                                belajar nggak cuma teori, tapi lo juga bakal dapet pengalaman <br>
                                praktis biar ilmu makin nempel. Gabung sekarang, dan wujudkan <br>
                                mimpi lo bareng kami! <br>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- kenapa harus BelajarNih --}}
        <section>
            <div>
                <div class="items-center justify-center ">
                    <h1 class="text-4xl font-semibold text-center text-white mt-[230px] ">Kenapa Harus BelajarNih</h1>
                    <div class="flex flex-row justify-center mt-20" >
                        <div class="bg-black w-[305px] h-[396px] mx-[58px] rounded-[29px] flex flex-col items-center justify-center relative">
                            <img src="{{ asset('image/teach.png') }}" alt="" class="w-[110px] h-[114px]">
                            <h1 class="self-start mt-4 ml-4 font-semibold text-white text-1xl">
                                Semua kelas <br>
                                 Gratis <br>
                            </h1>
                            <button class="absolute self-end p-4 mx-2 text-white bg-yellow-300 rounded-2xl bottom-4 right-4">
                                Lihat Detail
                            </button>
                        </div>


                        <div class="bg-black w-[305px] h-[396px] mx-[58px] rounded-[29px] flex flex-col items-center justify-center relative">
                            <img src="{{ asset('image/image1.png') }}" alt="" class="w-[110px] h-[114px]">
                            <h1 class="self-start mt-4 ml-4 font-semibold text-white text-1xl">
                                Akses Tanpa Batas dan <br>
                                Bebas Biaya <br>
                            </h1>
                            <button class="absolute self-end p-4 mx-2 text-white bg-yellow-300 rounded-2xl bottom-4 right-4">
                                Lihat Detail
                            </button>
                        </div>

                        <div class="bg-black w-[305px] h-[396px] mx-[58px] rounded-[29px] flex flex-col items-center justify-center relative">
                            <img src="{{ asset('image/image2.png') }}" alt="" class="w-[110px] h-[114px]">
                            <h1 class="self-start mt-4 ml-4 font-semibold text-white text-1xl">
                                Kesempatan Belajar Buat <br>
                                 Semua orang <br>
                            </h1>
                            <button class="absolute self-end p-4 mx-2 text-white bg-yellow-300 rounded-2xl bottom-4 right-4">
                                Lihat Detail
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        {{-- section sell --}}
        <section>
            <div class="flex items-center justify-center mt-24">
                <div class="flex flex-row gap-10">

                    <div class="w-[817px] h-[340px] bg-gradient-custom flex flex-col rounded-3xl relative">
                            <h1 class="p-10 text-3xl font-semibold text-white">
                                100% gratis untuk semua  <br>
                                orang yang mau belajar di  <br>
                                BelajarNih <br>
                            </h1>
                            <button class="text-white bg-black rounded-xl w-[262px] h-[87px] mx-5 font-semibold text-2xl absolute bottom-4 left-4">
                                    Daftar Sekarang
                            </button>
                    </div>


                    <div class="w-[426px] h-[340px] bg-gradient-custom rounded-3xl">
                        <h1 class="p-4 text-2xl font-semibold text-white">
                            Jelajahi Kelas <br>
                            Sekarangg <br>
                        </h1>
                        <p class="p-4 text-white">
                            Akses ribuan kelas secara gratis <br>
                            dan mulai belajar skill baru <br>
                            sekarang <br>
                        </p>
                    </div>

                </div>
            </div>
        </section>

        {{-- Testimoni --}}

        <section>
            <div class="mt-[99px]">
                <h1 class="text-white text-3xl text-center font-semibold">Testimoni Pengguna</h1>
                <div  class="justify-center flex" >
                    <div class="flex flex-row mx-4">
                        <div class="w-[409px] h-[231px] bg-black rounded-xl  justify-center items-center  mt-10  relative mx-4">
                            <h1 class="text-white  p-4  font-semibold">
                                Gila ini 100% gratis loh, Kapan <br>
                                lagi kan ada e-learning yang <br>
                                100% gratis <br>
                            </h1>
                            <p class="text-white p-4 text-xs">
                                ini worth it banget sih kalian harus cek kelas yang ada di di sini <br>
                                soalnya di sini gak tentang pelajaran sekolah. <br>
                            </p>
                            <div class="absolute bottom-2 right-4 flex flex-row justify-evenly">
                                <img src="{{ asset('image/image3.png') }}" alt="image_profile" class="w-6 h-6 mx-4">
                                <div class="flex flex-col">
                                    <h1 class="text-white">Raven</h1>
                                    <p class="text-white" >1 jam yang lalu</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-[409px] h-[231px] bg-black rounded-xl  justify-center items-center  mt-10  relative mx-4">
                            <h1 class="text-white  p-4  font-semibold">
                                Gila ini 100% gratis loh, Kapan <br>
                                lagi kan ada e-learning yang <br>
                                100% gratis <br>
                            </h1>
                            <p class="text-white p-4 text-xs">
                                ini worth it banget sih kalian harus cek kelas yang ada di di sini <br>
                                soalnya di sini gak tentang pelajaran sekolah. <br>
                            </p>
                            <div class="absolute bottom-2 right-4 flex flex-row justify-evenly">
                                <img src="{{ asset('image/image3.png') }}" alt="image_profile" class="w-6 h-6 mx-4">
                                <div class="flex flex-col">
                                    <h1 class="text-white">Raven</h1>
                                    <p class="text-white" >1 jam yang lalu</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-[409px] h-[231px] bg-black rounded-xl  justify-center items-center  mt-10  relative mx-4">
                            <h1 class="text-white  p-4  font-semibold">
                                Gila ini 100% gratis loh, Kapan <br>
                                lagi kan ada e-learning yang <br>
                                100% gratis <br>
                            </h1>
                            <p class="text-white p-4 text-xs">
                                ini worth it banget sih kalian harus cek kelas yang ada di di sini <br>
                                soalnya di sini gak tentang pelajaran sekolah. <br>
                            </p>
                            <div class="absolute bottom-2 right-4 flex flex-row justify-evenly">
                                <img src="{{ asset('image/image3.png') }}" alt="image_profile" class="w-6 h-6 mx-4">
                                <div class="flex flex-col">
                                    <h1 class="text-white">Raven</h1>
                                    <p class="text-white" >1 jam yang lalu</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        {{-- footer --}}

        <footer class="w-full h-[273px] bg-black mt-[360px]">
            <div class="flex flex-col text-white p-12">
                <h1 class="text-white font-semibold text-3xl" >BelajarNih</h1>
                <p class="text-white">Mulai Belajar, Wujudkan Mimpi!</p>
            </div>
        </footer>


    </div>


    <script>
        // JavaScript untuk toggle menu burger
        const burgerMenu = document.getElementById("burger-menu");
        const mobileMenu = document.getElementById("mobile-menu");
        // Toggle menu saat klik
        burgerMenu.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    </script>
</body>

</html>
