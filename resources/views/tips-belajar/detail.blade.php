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
                    <h1 class="text-2xl font-semibold text-white" >
                        Tutorial hack nasa pake <br>
                        html css <br>
                    </h1>
                    <div class="flex flex-row mt-4">
                         <img src="{{ asset('image/clock.png') }}" alt="clock" class="w-5 h-5" >
                         <h1 class="mx-3 text-white">4 November 2025</h1>
                         <img src="{{ asset('image/save.png') }}" alt="save" class="w-5 h-6" >
                    </div>
                    <div>
                        <img src="{{ asset('image/image-detail.png') }}" alt="img-detail">
                        <p class="text-white mt-10" >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac mauris nec purus commodo semper. Donec consectetur blandit sapien, eget dapibus urna sollicitudin vitae. Nullam mi <br>, elementum ut aliquet auctor, placerat sit amet nisi. Integer elementum quis justo ut porta. Aenean cursus imperdiet ipsum eget ullamcorper. Donec ut finibus nibh, molestie mattis <br>arcu. Suspendisse non metus sit amet mi fermentum fringilla. Vestibulum sit amet dui mollis, ultrices enim at, ornare lacus. Proin ultricies nisl finibus, lobortis ipsum in, <br>vestibulum tellus. Curabitur euismod magna ac finibus egestas. Maecenas vitae lacus eget sem mollis ultricies vitae eget ipsum. Maecenas justo mi, aliquam id elementum non, luctus a <br> mi. Quisque maximus facilisis mauris, et efficitur nisl consectetur eget. Ut egestas ipsum vel diam commodo, vel efficitur odio tincidunt. Suspendisse ipsum est, sollicitudin vel <br>faucibus nec, mollis eget dolor.
                        </p>
                        <p class="text-white mt-10" >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac mauris nec purus commodo semper. Donec consectetur blandit sapien, eget dapibus urna sollicitudin vitae. Nullam mi <br>, elementum ut aliquet auctor, placerat sit amet nisi. Integer elementum quis justo ut porta. Aenean cursus imperdiet ipsum eget ullamcorper. Donec ut finibus nibh, molestie mattis <br>arcu. Suspendisse non metus sit amet mi fermentum fringilla. Vestibulum sit amet dui mollis, ultrices enim at, ornare lacus. Proin ultricies nisl finibus, lobortis ipsum in, <br>vestibulum tellus. Curabitur euismod magna ac finibus egestas. Maecenas vitae lacus eget sem mollis ultricies vitae eget ipsum. Maecenas justo mi, aliquam id elementum non, luctus a <br> mi. Quisque maximus facilisis mauris, et efficitur nisl consectetur eget. Ut egestas ipsum vel diam commodo, vel efficitur odio tincidunt. Suspendisse ipsum est, sollicitudin vel <br>faucibus nec, mollis eget dolor.
                        </p>
                        <p class="text-white mt-10" >
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac mauris nec purus commodo semper. Donec consectetur blandit sapien, eget dapibus urna sollicitudin vitae. Nullam mi <br>, elementum ut aliquet auctor, placerat sit amet nisi. Integer elementum quis justo ut porta. Aenean cursus imperdiet ipsum eget ullamcorper. Donec ut finibus nibh, molestie mattis <br>arcu. Suspendisse non metus sit amet mi fermentum fringilla. Vestibulum sit amet dui mollis, ultrices enim at, ornare lacus. Proin ultricies nisl finibus, lobortis ipsum in, <br>vestibulum tellus. Curabitur euismod magna ac finibus egestas. Maecenas vitae lacus eget sem mollis ultricies vitae eget ipsum. Maecenas justo mi, aliquam id elementum non, luctus a <br> mi. Quisque maximus facilisis mauris, et efficitur nisl consectetur eget. Ut egestas ipsum vel diam commodo, vel efficitur odio tincidunt. Suspendisse ipsum est, sollicitudin vel <br>faucibus nec, mollis eget dolor.
                        </p>
                        <div class="mt-6">
                            <h1 class="font-semibold text-5xl text-white">Mentor</h1>
                            <div class="flex flex-row mt-5">
                                <img src="{{ asset('image/image-profile.png') }}" alt="img-profile" class="w-12 h-12">
                                <div class="flex flex-col mx-5" >
                                    <h1 class="text-white">Raven</h1>
                                    <p class="text-white" >Mentor Education at BelajarNih</p>
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
