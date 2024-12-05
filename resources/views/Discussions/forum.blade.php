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
            <div class="p-14">
                <h1 class="text-white font-semibold text-4xl">Ajukan Pertanyaan</h1>
                <p class="text-white text-xs">Punya Pertanyaan? Jangan Ragu untuk Tanya!</p>
                <div class="mt-14 ">
                    <div class="bg-white w-full md:w-[1008px] h-[500px] rounded-xl p-12 flex flex-col ">
                            <h1 class="font-normal">Pertanyaan</h1>
                            <input type="text" placeholder="ajukan pertanyaan" class="bg-gray-400 w-[80%] md:w-[779px] h-[80px] rounded-3xl px-6 box-border mt-2">
                            <h1 class="font-normal mt-3">Video Materi Kelas</h1>
                            <input type="text" placeholder="ajukan pertanyaan" class="bg-gray-400 w-[80%] md:w-[779px] h-[80px] rounded-3xl px-6 box-border mt-2">
                            <h1 class="font-normal mt-3">Jelaskan Lebih detail</h1>
                            <textarea name="" id="" cols="30" rows="10" class="bg-gray-400 p-3" ></textarea>
                            <div class="mt-6 flex flex-row">
                                <button type="submit" class="bg-yellow-300 w-[295px] h-[71px] p-5 font-semibold rounded-3xl">Submit Your Question</button>
                                <button type="submit" class="bg-yellow-300 w-[295px] h-[71px] p-5 font-semibold rounded-3xl mx-3">Batal</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        @include('components.footer')
    </section>
</body>

</html>
