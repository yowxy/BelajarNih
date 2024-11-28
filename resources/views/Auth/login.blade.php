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
                <div class="p-40">
                    <div class="justify-center ">
                        <h1 class="text-white font-semibold text-4xl">BelajarNih</h1>
                        <p class="text-white">
                            Udah punya akun? Yuk, <br>
                            langsung login aja! <br>
                        </p>
                        <div class="flex flex-col items-center space-y-4">
                            <h1 class="text-white font-semibold text-center text-2xl">
                                Login
                            </h1>

                            <div class="flex flex-col items-start space-y-2">
                                <label for="email" class="text-white pl-2">
                                    Email
                                </label>

                                <input type="email" name="email" id="email"
                                    class="w-[415px] h-[65px] bg-white px-4 rounded-md shadow-md focus:outline-none"
                                    placeholder="Tolong input ini">
                            </div>

                            <div class="flex flex-col items-start space-y-2">
                                <label for="password" class="text-white pl-2">
                                    Password
                                </label>

                                <input type="password" name="password" id="password"
                                    class="w-[415px] h-[65px] bg-white px-4 rounded-md shadow-md focus:outline-none"
                                    placeholder="Tolong input ini">
                            </div>

                            <div class="mt-3">
                                <button
                                    class="bg-yellow-300 rounded-[12px] w-[412px] h-[78px] p-5 font-medium text-2xl">Login</button>
                            </div>`
                        </div>
                    </div>

                </div>
            </div>
        </section>

        @include('components.footer')

    </div>
</body>

</html>
