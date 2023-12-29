<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/main.js'])
    <title>{{ $title ?? 'Mia School' }}</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    {{-- navbar --}}
    <header class="">
        <div class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex-1 md:flex md:items-center md:gap-12">
                    <a class="block text-indigo-600" href="/">
                        <span class="font-bold text-4xl">MIA</span>
                    </a>
                </div>

                <div class="md:flex md:items-center" x-data="{ showDropdown: false }" >
                    <nav aria-label="Global" class="hidden lg:block">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-gray-500 font-semibold transition hover:text-indigo-500/75"
                                    href="/"> Home </a>
                            </li>

                            <li>
                                <a class="text-gray-500 font-semibold transition hover:text-indigo-500/75"
                                    href="{{ route('about') }}"> About </a>
                            </li>

                            <li>
                                <a class="text-gray-500 font-semibold transition hover:text-indigo-500/75"
                                    href="/"> Our Branches </a>
                            </li>

                            <li>
                                <a class="text-gray-500 font-semibold transition hover:text-indigo-500/75"
                                    href="/"> Overview </a>
                            </li>

                            <li>
                                <a class="text-gray-500 font-semibold transition hover:text-indigo-500/75"
                                    href="/"> Our Facilities </a>
                            </li>

                            <li>
                                <a class="text-gray-500 font-semibold transition hover:text-indigo-500/75"
                                    href="/"> Our Missions </a>
                            </li>

                            <li>
                                <a class="text-gray-500 font-semibold transition hover:text-indigo-500/75"
                                    href="{{ route('contact-form.index') }}"> Contact Us </a>
                            </li>

                            <li x-data="{ showDropdown: false }">
                                <div>
                                    <button @click="showDropdown = !showDropdown"
                                        class="text-gray-500 flex items-center font-semibold cursor-pointer transition hover:text-indigo-500/75 mr-3">
                                        My
                                        <img class="w-6 h-6 ml-2" src="{{ asset('images/myanmar_icon.png') }}"
                                            alt="">
                                    </button>
                                </div>

                                <div x-cloak x-show="showDropdown" @click.outside="showDropdown = false"
                                    class="absolute z-10 mt-1 right-8 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                    <div class="py-1" role="none">
                                        <button x-cloak x-show="showDropdown"
                                            class="text-gray-500 flex items-center p-2 font-semibold cursor-pointer transition hover:text-indigo-500/75 ">
                                            Eng
                                            <img class="w-5 h-5 ml-2" src="{{ asset('images/us_icon.png') }}"
                                                alt="">
                                        </button>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </nav>

                    <div class="flex flex-col items-center gap-4">
                        <div class="block lg:hidden">
                            <button @click="showDropdown = !showDropdown"
                                class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>

                        <div x-cloak x-show="showDropdown"  @click.away="showDropdown = false" class="w-[90%] absolute right-3 z-10 mt-14 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                              <a href="{{ route('home') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Home</a>
                              <a href="{{ route('about') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">About</a>
                            </div>
                            <div class="py-1" role="none">
                              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Overview</a>
                              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Our Facilities</a>
                            </div>
                            <div class="py-1" role="none">
                              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">Our Mission</a>
                              <a href="{{ route('contact-form.index') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-5">Contact Us</a>
                            </div>
                            <div class="py-1" role="none">
                              <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-6">Delete</a>
                            </div>
                          </div>

                        {{-- <div x-cloak x-transition.opacity x-show="slideOut" class="fixed inset-0 bg-black/50"></div>

                        <div x-cloak x-show="slideOut" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                            @click.away="slideOut = false"
                            class="fixed inset-y-0 right-0 z-50 w-full bg-white overscroll-contain  ">
                            <div class="h-10 flex justify-between items-center pr-4 w-full bg-blue-300">
                                <h3 class="ml-3 text-3xl text-white font-semibold">MIA</h3>
                                <button @click="slideOut = false">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>
                            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                                <li class="mr-3">
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                                        href="{{ route('home') }}">Home
                                    </a>
                                </li>
                                <li class="mr-3">
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                                        href="{{ route('about') }}">About
                                    </a>
                                </li>
                                <li class="mr-3">
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                                        href="#">Overview
                                    </a>
                                </li>
                                <li class="mr-3">
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                                        href="#">Our Facilities
                                    </a>
                                </li>
                                <li class="mr-3">
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                                        href="#">Our Mission
                                    </a>
                                </li>
                                <li class="mr-3">
                                    <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                                        href="#">Contact Us
                                    </a>
                                </li>
                            </ul>

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="app" class="">
        <main>
            {{ $slot }}
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    {{ $scripts ?? '' }}
</body>

</html>
