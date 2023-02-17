<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('/icons/logo.png') }}" type="image/x-icon">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/css/tailwind.css')
    @vite('resources/js/preline.js')
    @vite('resources/js/components/apanel/index.js')
    @vite('resources/js/components/apanel/chart.js')
</head>

<body class="bg-gray-50 dark:bg-slate-900">
    <!-- ========== HEADER ========== -->
    <header id="application-header"
        class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full sm:pl-64 bg-white border-b text-sm py-2 dark:bg-gray-800 dark:border-gray-700 transition-all">
        <nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6 md:px-8" aria-label="Global">
            <button id="application-sidebar-btn" type="button"
                class="p-2 sm:hidden inline-flex justify-center items-center gap-2 rounded-full font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
            <div class="w-full flex items-center justify-end ml-auto sm:justify-between sm:gap-x-3 sm:order-3">
                <button id="application-sidebar-btn" type="button"
                    class="p-2 hidden sm:inline-flex justify-center items-center gap-2 rounded-full font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                    <svg class="w-6 h-6" focusable="false" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M3 18h13v-2H3v2zm0-5h10v-2H3v2zm0-7v2h13V6H3zm18 9.59L17.42 12 21 8.41 19.59 7l-5 5 5 5L21 15.59z">
                        </path>
                    </svg>
                </button>

                {{-- <div class="hidden sm:block">
                    <label for="icon" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </div>
                        <input type="text" id="icon" name="icon"
                            class="py-2 px-4 pl-11 block w-full border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Search">
                    </div>
                </div> --}}

                <div class="flex flex-row text-slate-900 items-center gap-4 justify-end">
                    <button type="button"
                        class="hs-dark-mode-active:hidden block hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs dark:bg-gray-800 dark:hover:bg-slate-800 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800"
                        data-hs-theme-click-value="dark">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                        </svg>
                    </button>
                    <button type="button"
                        class="hs-dark-mode-active:block hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs dark:bg-gray-800 dark:hover:bg-slate-800 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800"
                        data-hs-theme-click-value="light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 inline">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>
                    </button>

                    {{-- <button type="button"
                        class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs dark:bg-gray-800 dark:hover:bg-slate-800 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                        </svg>
                    </button> --}}
                    <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                        <button type="button"
                            class="hs-collapse-toggle py-1 pl-1 pr-3 inline-flex justify-center items-center gap-2 rounded-full border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                            id="hs-basic-collapse" data-hs-collapse="#hs-basic-collapse-heading">
                            <img class="w-12 h-auto rounded-full" src="{{ asset('/icons/logo.png') }}" alt="Maria">
                            <span
                                class="text-gray-600 font-medium truncate max-w-[7.5rem] dark:text-gray-400 capitalize">dispora
                                MKS</span>
                            <svg class="hs-collapse-open:rotate-180 w-2.5 h-2.5 text-slate-800 dark:text-white"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>

                        <div id="hs-basic-collapse-heading"
                            class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                            aria-labelledby="hs-dropdown-with-icons">
                            <div class="py-2 first:pt-0 last:pb-0">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                    logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->

    <!-- Sidebar -->
    <div id="application-sidebar"
        class="hs-overlay transition-all duration-300 transform fixed top-0 left-0 bottom-0 z-[60] w-64 bg-white border-r border-gray-200 pt-3 pb-10 overflow-y-auto scrollbar-y dark:scrollbar-y dark:bg-gray-800 dark:border-gray-700">
        <div class="px-6">
            <a class="grid justify-center flex-none text-xl font-semibold dark:text-white" href="#"
                aria-label="Brand"><img
                    class="inline-block h-[3.875rem] rounded-full ring-2 ring-white dark:ring-gray-800"
                    src="{{ asset('/icons/logo.png') }}" alt="Image Description"></a>
        </div>

        <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
            <ul class="space-y-1.5">
                <li>
                    <a class="flex capitalize items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:bg-gray-900 dark:text-white"
                        href="javascript:;">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                        dashboard
                    </a>
                </li>
                <li><a class="flex capitalize items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300"
                        href="{{ route('web.administrator.data_pemuda') }}">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg>
                        data pemuda
                    </a></li>
                <li><a class="flex capitalize items-center gap-x-3.5 py-2 px-2.5 text-sm text-slate-700 rounded-md hover:bg-gray-100 dark:hover:bg-gray-900 dark:text-slate-400 dark:hover:text-slate-300"
                        href="javascript:;">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                        </svg>
                        data informasi
                    </a></li>
            </ul>
        </nav>
    </div>
    <!-- End Sidebar -->

    <!-- Content -->
    <main id="application-main" class="w-full p-4 sm:px-8 sm:py-4 sm:pl-72 transition-all">
        <!-- Page Heading -->
        <ol class="flex items-center whitespace-nowrap min-w-0 pb-3" aria-label="Breadcrumb">
            <li class="text-sm">
                <a class="flex capitalize items-center text-gray-500 hover:text-blue-600" href="#">
                    <svg class="flex-shrink-0 mr-3 h-4 w-4 text-gray-600 dark:text-gray-600" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd"
                            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                    home
                    <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600"
                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </li>
            <li class="text-sm">
                <a class="flex capitalize items-center text-gray-500 hover:text-blue-600" href="#">
                    <svg class="flex-shrink-0 mr-3 h-4 w-4 text-gray-600 dark:text-gray-600" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                        <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    </svg>
                    total jumlah pemuda perkota
                </a>
            </li>
        </ol>
        <div class="grid grid-cols-2 sm:grid-cols-4 pb-3 gap-4">
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
            <div
                class="flex flex-col items-center divide-y divide-blue-200 bg-white border shadow-sm rounded-xl p-4 md:p-3 dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7] dark:text-gray-400">
                <span class="text-center text-[13px]">Total Jumlah Pemuda di Kota Makassar</span>
                <span class="text-[25px] font-bold">389.591</span>
            </div>
        </div>
        <ol class="flex items-center mt-5 whitespace-nowrap min-w-0" aria-label="Breadcrumb">
            <li class="text-sm">
                <a class="flex capitalize items-center text-gray-500 hover:text-blue-600" href="#">
                    <svg class="flex-shrink-0 mr-3 h-4 w-4 text-gray-600 dark:text-gray-600" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd"
                            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                    home
                    <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600"
                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </li>
            <li class="text-sm">
                <a class="flex capitalize items-center text-gray-500 hover:text-blue-600" href="#">
                    <svg class="flex-shrink-0 mr-3 h-4 w-4 text-gray-600 dark:text-gray-600" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                        <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    </svg>
                    bar chart
                </a>
            </li>
        </ol>
        <div class="grid mt-5">
            <div class="w-full">
                <canvas id="barChart"></canvas>
            </div>
        </div>
        <ol class="flex items-center mt-5 whitespace-nowrap min-w-0" aria-label="Breadcrumb">
            <li class="text-sm">
                <a class="flex capitalize items-center text-gray-500 hover:text-blue-600" href="#">
                    <svg class="flex-shrink-0 mr-3 h-4 w-4 text-gray-600 dark:text-gray-600" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd"
                            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                    home
                    <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600"
                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </li>
            <li class="text-sm">
                <a class="flex capitalize items-center text-gray-500 hover:text-blue-600" href="#">
                    <svg class="flex-shrink-0 mr-3 h-4 w-4 text-gray-600 dark:text-gray-600" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                        <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    </svg>
                    pie chart
                </a>
            </li>
        </ol>
        <div class="grid grid-cols-3 mt-5 gap-4">
            <div class="w-full">
                <canvas id="pieChart1"></canvas>
            </div>
            <div class="w-full">
                <canvas id="pieChart2"></canvas>
            </div>
            <div class="w-full">
                <canvas id="pieChart3"></canvas>
            </div>
        </div>
        <ol class="flex items-center mt-5 whitespace-nowrap min-w-0" aria-label="Breadcrumb">
            <li class="text-sm">
                <a class="flex capitalize items-center text-gray-500 hover:text-blue-600" href="#">
                    <svg class="flex-shrink-0 mr-3 h-4 w-4 text-gray-600 dark:text-gray-600" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd"
                            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                    home
                    <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600"
                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </a>
            </li>
            <li class="text-sm">
                <a class="flex capitalize items-center text-gray-500 hover:text-blue-600" href="#">
                    <svg class="flex-shrink-0 mr-3 h-4 w-4 text-gray-600 dark:text-gray-600" width="16"
                        height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                        <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    </svg>
                    line chart
                </a>
            </li>
        </ol>
        <div class="grid mt-5">
            <div class="w-full">
                <canvas id="lineChart"></canvas>
            </div>
        </div>
        <!-- End Page Heading -->
    </main>
    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->
</body>

</html>
