<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('/icons/logo.png') }}" type="image/x-icon">
    <title>Document</title>
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
    <x-panel.index></x-panel.index>
    @livewireScripts
    @bukScripts
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
</body>

</html>
