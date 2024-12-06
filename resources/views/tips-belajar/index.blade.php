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

    <div class="justify-center w-full h-full bg-gradient-custom font-poppins">
        @include('components.navbar')
        <section>
            <div class="container">
                <div class="p-20">
                    <div class="flex flex-col">
                        <div>
                            <h1 class="text-white font-semibold text-2xl">Tips Belajar</h1>
                            <p class="text-white">
                                berikut ini adalah tips belajar dari para mentor <br>
                                yang udah berpengalaman di bidang nya <br>
                            </p>
                        </div>
                        <div class="relative mt-3">
                            <input type="text" class="w-[631px] h-[69px] bg-white rounded-xl pl-12 pr-4"
                                placeholder="Cari Tips Belajar">
                            <img src="{{ asset('image/search.png') }}" alt="search"
                                class="absolute left-4 top-1/2 transform -translate-y-1/2 w-6 h-6">
                        </div>
                        {{-- column box --}}
                        <div class="flex flex-row gap-4 mt-[112px]" >
                            <div>
                                <img src="{{ asset('image/img-tips.png') }}" alt="img-tips" class="rounded-[19px] w-[234px] h-[157px]">
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-white font-semibold text-2xl">
                                    Tips jitu  mengerjakan soal  Matematika <br>
                                    SNBT 2024  <br>
                                </h1>
                                <p class="text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                                    Curabitur feugiat, tellus ut mattis dapibus, elit eros  <br>
                                    aliquam orci, id tempor lorem .......... <br>
                                </p>
                                <img src="{{ asset('image/save.png') }}" alt="bookmarks" class="w-5 h-5">
                            </div>
                        </div>

                        <div class="flex flex-row gap-4 mt-6" >
                            <div>
                                <img src="{{ asset('image/img-tips.png') }}" alt="img-tips" class="rounded-[19px] w-[234px] h-[157px]">
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-white font-semibold text-2xl">
                                    Tips jitu  mengerjakan soal  Matematika <br>
                                    SNBT 2024  <br>
                                </h1>
                                <p class="text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                                    Curabitur feugiat, tellus ut mattis dapibus, elit eros  <br>
                                    aliquam orci, id tempor lorem .......... <br>
                                </p>
                                <img src="{{ asset('image/save.png') }}" alt="bookmarks" class="w-5 h-5">
                            </div>
                        </div>

                        <div class="flex flex-row gap-4 mt-6" >
                            <div>
                                <img src="{{ asset('image/img-tips.png') }}" alt="img-tips" class="rounded-[19px] w-[234px] h-[157px]">
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-white font-semibold text-2xl">
                                    Tips jitu  mengerjakan soal  Matematika <br>
                                    SNBT 2024  <br>
                                </h1>
                                <p class="text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                                    Curabitur feugiat, tellus ut mattis dapibus, elit eros  <br>
                                    aliquam orci, id tempor lorem .......... <br>
                                </p>
                                <img src="{{ asset('image/save.png') }}" alt="bookmarks" class="w-5 h-5">
                            </div>
                        </div>

                        <div class="flex flex-row gap-4 mt-6" >
                            <div>
                                <img src="{{ asset('image/img-tips.png') }}" alt="img-tips" class="rounded-[19px] w-[234px] h-[157px]">
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-white font-semibold text-2xl">
                                    Tips jitu  mengerjakan soal  Matematika <br>
                                    SNBT 2024  <br>
                                </h1>
                                <p class="text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                                    Curabitur feugiat, tellus ut mattis dapibus, elit eros  <br>
                                    aliquam orci, id tempor lorem .......... <br>
                                </p>
                                <img src="{{ asset('image/save.png') }}" alt="bookmarks" class="w-5 h-5">
                            </div>
                        </div>

                        <div class="flex flex-row gap-4 mt-6" >
                            <div>
                                <img src="{{ asset('image/img-tips.png') }}" alt="img-tips" class="rounded-[19px] w-[234px] h-[157px]">
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-white font-semibold text-2xl">
                                    Tips jitu  mengerjakan soal  Matematika <br>
                                    SNBT 2024  <br>
                                </h1>
                                <p class="text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                                    Curabitur feugiat, tellus ut mattis dapibus, elit eros  <br>
                                    aliquam orci, id tempor lorem .......... <br>
                                </p>
                                <img src="{{ asset('image/save.png') }}" alt="bookmarks" class="w-5 h-5">
                            </div>
                        </div>

                        <div class="flex flex-row gap-4 mt-6" >
                            <div>
                                <img src="{{ asset('image/img-tips.png') }}" alt="img-tips" class="rounded-[19px] w-[234px] h-[157px]">
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-white font-semibold text-2xl">
                                    Tips jitu  mengerjakan soal  Matematika <br>
                                    SNBT 2024  <br>
                                </h1>
                                <p class="text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                                    Curabitur feugiat, tellus ut mattis dapibus, elit eros  <br>
                                    aliquam orci, id tempor lorem .......... <br>
                                </p>
                                <img src="{{ asset('image/save.png') }}" alt="bookmarks" class="w-5 h-5">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        @include('components.footer')
    </div>
</body>

</html>
