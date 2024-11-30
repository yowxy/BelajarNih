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
        <div class="container mx-auto">
            <div class="justify-center p-10 text-center">
                <h1 class="items-center text-2xl font-semibold text-center text-white">
                    Belajar sesuai Minat dan Karirmu <br>
                    di BelajarNih <br>
                </h1>
                <p class="mt-1 text-white"> Mulai belajar wujudkan mimpi !</p>
            </div>
            <div>
                <h1 class="mt-12 text-2xl font-semibold text-white">Pilih Bidang Belajar mu</h1>
                <div class="flex flex-row mt-5">

                    <div class="flex items-center px-4 bg-gradient-custom w-60 h-14 rounded-xl">
                        <img src="{{ asset('image/UIUX.png') }}" alt="UI/UX.png" class="w-12 h-8 mr-3">
                        <h1 class="text-xl font-semibold text-white">UI/UX Design</h1>
                    </div>

                    <div class="flex items-center w-auto px-4 mx-5 bg-gradient-custom h-14 rounded-xl">
                        <img src="{{ asset('image/webdev.png') }}" alt="UI/UX.png" class="mr-3 w-7 h-7">
                        <h1 class="text-xl font-semibold text-white">Website Development</h1>
                    </div>

                    <div class="flex items-center px-4 bg-gradient-custom w-60 h-14 rounded-xl">
                        <img src="{{ asset('image/math.png') }}" alt="UI/UX.png" class="w-10 h-10 mr-3">
                        <h1 class="text-xl font-semibold text-white">Matematika</h1>
                    </div>
                </div>
                <div class="mt-20">
                    <h1 class="text-2xl font-semibold text-white">
                        Jelajahi Kelas Sesuai Karir <br>
                        Impianmu <br>
                    </h1>
                    <div class="flex flex-col">
                        <div class="flex flex-row justify-center mt-16 space-x-5">

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="flex flex-row justify-center mt-16 space-x-5">

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="flex flex-row justify-center mt-16 space-x-5">

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="flex flex-row justify-center mt-16 space-x-5">

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[413px] h-[404px] bg-white rounded-36 ">
                                <img src="{{ asset('image/img-clas.png') }}" alt="image-class">
                                <div class="p-3">
                                    <h1 class="text-base font-semibold">
                                        Matematika Wajib <br>
                                        (Kurikulum merdeka) <br>
                                    </h1>
                                    <div class="">
                                        <div class="flex flex-row mt-6">
                                            <button
                                                class="w-16 text-center text-black bg-yellow-300 rounded-md h-7 mr-7">Gratis</button>
                                            <div class="flex flex-row">
                                                <img src="{{ asset('image/people.png') }}" alt="people" class="w-6 h-6">
                                                <p>12 orang mendaftar kelas ini</p>
                                            </div>
                                        </div>
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
