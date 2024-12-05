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
            <div class="p-10">
                <div class="bg-white w-[1350px] min-h-[400px] rounded-2xl p-6">
                    <div class="flex flex-row ">
                        <img src="{{ asset('image/image4.png') }}" alt="image" class="w-[118px] h-[118px] mr-4">
                        <div class="flex flex-col p-5">
                            <h1 class="text-black text-2xl font-semibold">Kenapa sih Kita Perlu Belajar HTML </h1>
                            <div class="flex flex-row items-center">
                                <img src="{{ asset('image/Vector.png') }}" alt="vector" class="w-7 h-5">
                                <h1 class="text-xl mx-2">Pengenalan HTML</h1>
                            </div>
                            <div class="flex flex-row items-center mt-1">
                                <img src="{{ asset('image/balasan1.png') }}" alt="vector" class="w-5 h-5">
                                <h1 class="text-xl mx-2">Balasan</h1>
                            </div>
                        </div>
                    </div>
                    <div class="mt-14">
                        <h1 class="mt-8">Apasih HTML itu dan kenapa kita harus belajar HTML di bidang WebDev</h1>
                    </div>
                    <div class="mt-[57px]">
                        <img src="{{ asset('image/img_detail.png') }}" alt="ImageDetail" class="w-[858px] h-[571px]">
                    </div>
                    <div class="mt-[57px]">
                        <img src="{{ asset('image/img_detail.png') }}" alt="ImageDetail" class="w-[858px] h-[571px]">
                    </div>
                </div>
                <div class="mt-[109px] justify-center items-center flex">
                    <div class="bg-white w-[1038px] h-[271px] rounded-3xl flex flex-col items-center justify-center">
                        <h1 class="font-semibold text-center text-4xl">Belum ada Jawaban</h1>
                        <p class="text-xl" >Bantu Sobat Belajar menjawab kendala ini yuk</p>
                        <div class="mt-3" >
                            <button class="bg-yellow-300 w-[321px] h-[68px] rounded-2xl text-2xl font-semibold">Beri Jawaban</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.footer')
    </section>
</body>
</html>
