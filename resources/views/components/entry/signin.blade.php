<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('/icons/logo.png') }}" type="image/x-icon">
    <title>Login</title>
    @wireUiScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/tailwind.css')
    @vite('resources/js/alpine.js')
    @vite('resources/js/preline.js')
    @livewireStyles
    @bukStyles
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
</head>

<body
    class="grid content-start w-max-[100vw] min-h-screen overflow-hidden text-black bg-gray-50 dark:text-white dark:bg-gray-900 transition-colors">
    <div class="grid place-content-center h-[100vh]">
        <div class="grid px-7 py-5 bg-white shadow-md w-max rounded-md">
            <div class="grid justify-items-center">
                <img class="inline-block w-[200px] rounded-full ring-2 ring-white dark:ring-gray-800"
                    src="{{ asset('/icons/logo.png') }}" alt="Image Description">
                <span class="font-bold text-[24px] mt-5">log in to dashboard</span>
                <span class="text-[14px]">Masukkan Username dan Password</span>
            </div>
            <form action="{{ route('web.administrator') }}" class="grid gap-4 mt-10">
                <x-input icon="user" label="Name" placeholder="your name" />
                <x-inputs.password icon="lock-closed" label="Password" placeholder="password" />
                <x-button type="submit" outline icon="user" negative label="Login" />
            </form>
        </div>
    </div>
    @livewireScripts
    @bukScripts
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
</body>

</html>
