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
            <div class="container mx-auto">
                    <div class="p-14 mt-11 flex flex-row justify-evenly">
                        <div class="w-[375px] h-[345px]  bg-gradient-custom rounded-[38px]">
                            <div class="flex flex-col text-center justify-center items-center">
                                <img src="{{ asset('image/education.png') }}" alt="education"
                                    class="w-[226px] h-[226px]">
                                <h1 class="text-white">Temukan skil Baru Hari ini</h1>
                            </div>
                        </div>
                        <div class="flex flex-col" >
                            <div class="">
                                <h1 class="text-white font-semibold text-2xl">Deskripsi singkat BelajarNih</h1>
                                <p class="text-white mt-3">
                                    BelajarNih adalah platform e-learning gratis yang <br>
                                    dirancang untuk bantu kamu upgrade skill dan <br>
                                    mencapai impian. Mulai dari coding, desain, <br>
                                    sampai pelajaran sekolah, semua tersedia <br>
                                    di sini buat bantu lo jadi lebih expert! <br>
                                </p>
                            </div>
                            <div class="mt-[73px]">
                                <h1 class="text-white font-semibold text-2xl">Kenapa Harus Pilih BelajarNih?</h1>
                                <p class="text-white mt-3">
                                    Kenapa harus pilih BelajarNih? Karena di sini lo nggak <br>
                                    cuma dapet teori, tapi juga pengalaman praktis yang <br>
                                    bikin ilmu makin nempel. Semua kelas 100% gratis dan <br>
                                    bisa diakses kapan aja. Jadi, nggak ada alasan buat <br>
                                    nggak mulai belajar sekarang! <br>
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>


        @include('components.footer')
    </div>
</body>

</html>
