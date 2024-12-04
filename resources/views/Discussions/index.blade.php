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
    <section class="justify-center w-full h-full bg-gradient-custom font-poppins">
        @include('components.navbar')
        <div class="container">
            <div class="p-6 mt-10 ">
                <h1 class="text-4xl font-semibold text-white">Teman Diskusi</h1>
                <p class="text-white">Diskusi jadi lebih mudah dengan Teman Diskusi. Tanya, jawab, dan belajar bareng
                    komunitas seru</p>
                <div>
                    <div class="flex items-center justify-center mt-9">
                        <button class="w-64 h-16 p-4 text-xl font-semibold text-black bg-yellow-300 rounded-xl">Buat
                            Pertanyaan</button>
                    </div>
                </div>
                <div class="">
                    <h1 class="font-semibold text-4xl text-white mt-10">Pertanyaan yang Paling Sering Ditanyakan</h1>
                    <p class="text-white">Kendala yang sering di alami Sobat Belajar </p>

                    <div class="flex items-center justify-center mt-8">
                        <div class="bg-yellow-300 rounded-3xl w-[748px] h-[171px]">
                            <div class="flex flex-row p-6 mx-3">
                                <img src="{{ asset('image/profile.png') }}" alt="img_profile" class="w-11 h-11">
                                <h1 class="font-semibold mx-5">Alexander</h1>

                                <div
                                    class="w-[113px] h-[31px] bg-black rounded-lg justify-center mr-2 flex items-center">
                                    <h1 class="text-white text-center">Basic HTML</h1>
                                </div>

                                <div
                                    class="w-[155px] h-[31px] bg-black rounded-lg justify-center flex items-center p-3">
                                    <img src="{{ asset('image/ic_video.png') }}" alt="ic_video" class="w-4 h-3 mr-1">
                                    <h1 class="text-white text-center text-xs font-semibold">Pengenalan HTML</h1>
                                </div>

                            </div>
                            <div class="flex  ml-10 flex-col">
                                <h1 class="font-semibold">Apasih Kepanjangan dari HTML itu sendiri ?</h1>
                                <div class="flex flex-row items-center mt-3">
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/balasan.png') }}" alt="balasan" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">5 Balasan</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/check.png') }}" alt="check" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Dijawab Mentor Sobat Belajar</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/done.png') }}" alt="done" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Selesai</h1>
                                    </div>

                                    <div class="flex items-end ">
                                        <h1 class="text-xs font-semibold mx-4">1h 30m</h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-8">
                        <div class="bg-yellow-300 rounded-3xl w-[748px] h-[171px]">
                            <div class="flex flex-row p-6 mx-3">
                                <img src="{{ asset('image/profile.png') }}" alt="img_profile" class="w-11 h-11">
                                <h1 class="font-semibold mx-5">Alexander</h1>

                                <div
                                    class="w-[113px] h-[31px] bg-black rounded-lg justify-center mr-2 flex items-center">
                                    <h1 class="text-white text-center">Basic HTML</h1>
                                </div>

                                <div
                                    class="w-[155px] h-[31px] bg-black rounded-lg justify-center flex items-center p-3">
                                    <img src="{{ asset('image/ic_video.png') }}" alt="ic_video" class="w-4 h-3 mr-1">
                                    <h1 class="text-white text-center text-xs font-semibold">Pengenalan HTML</h1>
                                </div>

                            </div>
                            <div class="flex  ml-10 flex-col">
                                <h1 class="font-semibold">Apasih Kepanjangan dari HTML itu sendiri ?</h1>
                                <div class="flex flex-row items-center mt-3">
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/balasan.png') }}" alt="balasan" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">5 Balasan</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/check.png') }}" alt="check" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Dijawab Mentor Sobat Belajar</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/done.png') }}" alt="done" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Selesai</h1>
                                    </div>

                                    <div class="flex items-end ">
                                        <h1 class="text-xs font-semibold mx-4">1h 30m</h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-8">
                        <div class="bg-yellow-300 rounded-3xl w-[748px] h-[171px]">
                            <div class="flex flex-row p-6 mx-3">
                                <img src="{{ asset('image/profile.png') }}" alt="img_profile" class="w-11 h-11">
                                <h1 class="font-semibold mx-5">Alexander</h1>

                                <div
                                    class="w-[113px] h-[31px] bg-black rounded-lg justify-center mr-2 flex items-center">
                                    <h1 class="text-white text-center">Basic HTML</h1>
                                </div>

                                <div
                                    class="w-[155px] h-[31px] bg-black rounded-lg justify-center flex items-center p-3">
                                    <img src="{{ asset('image/ic_video.png') }}" alt="ic_video" class="w-4 h-3 mr-1">
                                    <h1 class="text-white text-center text-xs font-semibold">Pengenalan HTML</h1>
                                </div>

                            </div>
                            <div class="flex  ml-10 flex-col">
                                <h1 class="font-semibold">Apasih Kepanjangan dari HTML itu sendiri ?</h1>
                                <div class="flex flex-row items-center mt-3">
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/balasan.png') }}" alt="balasan" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">5 Balasan</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/check.png') }}" alt="check" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Dijawab Mentor Sobat Belajar</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/done.png') }}" alt="done" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Selesai</h1>
                                    </div>

                                    <div class="flex items-end ">
                                        <h1 class="text-xs font-semibold mx-4">1h 30m</h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="mt-10">
                    <h1 class="text-white  font-semibold text-4xl" >Pertanyaan Terbaru</h1>
                    <p class="text-white">Cari solusi Kendala belajar Sobat Belajar  </p>


                    <div class="flex items-center justify-center mt-8">
                        <div class="bg-yellow-300 rounded-3xl w-[748px] h-[171px]">
                            <div class="flex flex-row p-6 mx-3">
                                <img src="{{ asset('image/profile.png') }}" alt="img_profile" class="w-11 h-11">
                                <h1 class="font-semibold mx-5">Alexander</h1>

                                <div
                                    class="w-[113px] h-[31px] bg-black rounded-lg justify-center mr-2 flex items-center">
                                    <h1 class="text-white text-center">Basic HTML</h1>
                                </div>

                                <div
                                    class="w-[155px] h-[31px] bg-black rounded-lg justify-center flex items-center p-3">
                                    <img src="{{ asset('image/ic_video.png') }}" alt="ic_video" class="w-4 h-3 mr-1">
                                    <h1 class="text-white text-center text-xs font-semibold">Pengenalan HTML</h1>
                                </div>

                            </div>
                            <div class="flex  ml-10 flex-col">
                                <h1 class="font-semibold">Apasih Kepanjangan dari HTML itu sendiri ?</h1>
                                <div class="flex flex-row items-center mt-3">
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/balasan.png') }}" alt="balasan" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">5 Balasan</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/check.png') }}" alt="check" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Dijawab Mentor Sobat Belajar</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/done.png') }}" alt="done" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Selesai</h1>
                                    </div>

                                    <div class="flex items-end ">
                                        <h1 class="text-xs font-semibold mx-4">1h 30m</h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-8">
                        <div class="bg-yellow-300 rounded-3xl w-[748px] h-[171px]">
                            <div class="flex flex-row p-6 mx-3">
                                <img src="{{ asset('image/profile.png') }}" alt="img_profile" class="w-11 h-11">
                                <h1 class="font-semibold mx-5">Alexander</h1>

                                <div
                                    class="w-[113px] h-[31px] bg-black rounded-lg justify-center mr-2 flex items-center">
                                    <h1 class="text-white text-center">Basic HTML</h1>
                                </div>

                                <div
                                    class="w-[155px] h-[31px] bg-black rounded-lg justify-center flex items-center p-3">
                                    <img src="{{ asset('image/ic_video.png') }}" alt="ic_video" class="w-4 h-3 mr-1">
                                    <h1 class="text-white text-center text-xs font-semibold">Pengenalan HTML</h1>
                                </div>

                            </div>
                            <div class="flex  ml-10 flex-col">
                                <h1 class="font-semibold">Apasih Kepanjangan dari HTML itu sendiri ?</h1>
                                <div class="flex flex-row items-center mt-3">
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/balasan.png') }}" alt="balasan" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">5 Balasan</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/check.png') }}" alt="check" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Dijawab Mentor Sobat Belajar</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/done.png') }}" alt="done" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Selesai</h1>
                                    </div>

                                    <div class="flex items-end ">
                                        <h1 class="text-xs font-semibold mx-4">1h 30m</h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-8">
                        <div class="bg-yellow-300 rounded-3xl w-[748px] h-[171px]">
                            <div class="flex flex-row p-6 mx-3">
                                <img src="{{ asset('image/profile.png') }}" alt="img_profile" class="w-11 h-11">
                                <h1 class="font-semibold mx-5">Alexander</h1>

                                <div
                                    class="w-[113px] h-[31px] bg-black rounded-lg justify-center mr-2 flex items-center">
                                    <h1 class="text-white text-center">Basic HTML</h1>
                                </div>

                                <div
                                    class="w-[155px] h-[31px] bg-black rounded-lg justify-center flex items-center p-3">
                                    <img src="{{ asset('image/ic_video.png') }}" alt="ic_video" class="w-4 h-3 mr-1">
                                    <h1 class="text-white text-center text-xs font-semibold">Pengenalan HTML</h1>
                                </div>

                            </div>
                            <div class="flex  ml-10 flex-col">
                                <h1 class="font-semibold">Apasih Kepanjangan dari HTML itu sendiri ?</h1>
                                <div class="flex flex-row items-center mt-3">
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/balasan.png') }}" alt="balasan" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">5 Balasan</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/check.png') }}" alt="check" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Dijawab Mentor Sobat Belajar</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/done.png') }}" alt="done" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Selesai</h1>
                                    </div>

                                    <div class="flex items-end ">
                                        <h1 class="text-xs font-semibold mx-4">1h 30m</h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-8">
                        <div class="bg-yellow-300 rounded-3xl w-[748px] h-[171px]">
                            <div class="flex flex-row p-6 mx-3">
                                <img src="{{ asset('image/profile.png') }}" alt="img_profile" class="w-11 h-11">
                                <h1 class="font-semibold mx-5">Alexander</h1>

                                <div
                                    class="w-[113px] h-[31px] bg-black rounded-lg justify-center mr-2 flex items-center">
                                    <h1 class="text-white text-center">Basic HTML</h1>
                                </div>

                                <div
                                    class="w-[155px] h-[31px] bg-black rounded-lg justify-center flex items-center p-3">
                                    <img src="{{ asset('image/ic_video.png') }}" alt="ic_video" class="w-4 h-3 mr-1">
                                    <h1 class="text-white text-center text-xs font-semibold">Pengenalan HTML</h1>
                                </div>

                            </div>
                            <div class="flex  ml-10 flex-col">
                                <h1 class="font-semibold">Apasih Kepanjangan dari HTML itu sendiri ?</h1>
                                <div class="flex flex-row items-center mt-3">
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/balasan.png') }}" alt="balasan" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">5 Balasan</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/check.png') }}" alt="check" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Dijawab Mentor Sobat Belajar</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/done.png') }}" alt="done" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Selesai</h1>
                                    </div>

                                    <div class="flex items-end ">
                                        <h1 class="text-xs font-semibold mx-4">1h 30m</h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-8">
                        <div class="bg-yellow-300 rounded-3xl w-[748px] h-[171px]">
                            <div class="flex flex-row p-6 mx-3">
                                <img src="{{ asset('image/profile.png') }}" alt="img_profile" class="w-11 h-11">
                                <h1 class="font-semibold mx-5">Alexander</h1>

                                <div
                                    class="w-[113px] h-[31px] bg-black rounded-lg justify-center mr-2 flex items-center">
                                    <h1 class="text-white text-center">Basic HTML</h1>
                                </div>

                                <div
                                    class="w-[155px] h-[31px] bg-black rounded-lg justify-center flex items-center p-3">
                                    <img src="{{ asset('image/ic_video.png') }}" alt="ic_video" class="w-4 h-3 mr-1">
                                    <h1 class="text-white text-center text-xs font-semibold">Pengenalan HTML</h1>
                                </div>

                            </div>
                            <div class="flex  ml-10 flex-col">
                                <h1 class="font-semibold">Apasih Kepanjangan dari HTML itu sendiri ?</h1>
                                <div class="flex flex-row items-center mt-3">
                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/balasan.png') }}" alt="balasan" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">5 Balasan</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/check.png') }}" alt="check" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Dijawab Mentor Sobat Belajar</h1>
                                    </div>

                                    <div class="flex flex-row items-center">
                                        <img src="{{ asset('image/done.png') }}" alt="done" class="w-5 h-5">
                                        <h1 class="mx-2 font-semi text-xs">Selesai</h1>
                                    </div>

                                    <div class="flex items-end ">
                                        <h1 class="text-xs font-semibold mx-4">1h 30m</h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @include('components.footer')
    </section>
</body>

</html>
