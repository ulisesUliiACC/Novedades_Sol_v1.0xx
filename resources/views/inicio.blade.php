<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="py-12">

        <div class="max-w-12xl mx-auto sm:px-12 lg:px-12">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- Section 1 -->
                <section class="relative w-full px-8 text-gray-700 bg-white body-font">
                    <div
                        class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
                        <a href="#_"
                            class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none">Novedades
                            Sol :3 </a>

                        <nav
                            class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">
                            <a href="#_"
                                class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                                <span class="block">Home</span>
                                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                                    <span x-show="hover"
                                        class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                                        x-transition:enter="transition ease duration-200"
                                        x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
                                        x-transition:leave="transition ease-out duration-300"
                                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                                </span>
                            </a>
                            <a href="#_"
                                class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                                <span class="block">Features</span>
                                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                                    <span x-show="hover"
                                        class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                                        x-transition:enter="transition ease duration-200"
                                        x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
                                        x-transition:leave="transition ease-out duration-300"
                                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                                </span>
                            </a>
                            <a href="#_"
                                class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                                <span class="block">Pricing</span>
                                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                                    <span x-show="hover"
                                        class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                                        x-transition:enter="transition ease duration-200"
                                        x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
                                        x-transition:leave="transition ease-out duration-300"
                                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                                </span>
                            </a>
                            <a href="#_"
                                class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900"
                                x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                                <span class="block">Blog</span>
                                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                                    <span x-show="hover"
                                        class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900"
                                        x-transition:enter="transition ease duration-200"
                                        x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
                                        x-transition:leave="transition ease-out duration-300"
                                        x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                                </span>
                            </a>
                        </nav>
                        @if (Route::has('login'))
                            <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none">
                                        Iniciar seccion
                                    </a>
                                    @if (Route::has('register'))
                                        <span class="inline-flex rounded-md shadow-sm">
                                            <a href="{{ route('register') }}"
                                                class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                Registrarse
                                            </a>
                                        </span>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </section>


                <!-- Section 1 -->
                <section class="px-2 pt-32 bg-white md:px-0">
                    <div class="container items-center max-w-6xl px-5 mx-auto space-y-6 text-center">
                        <h1
                            class="text-4xl font-extrabold tracking-tight text-left text-gray-900 sm:text-5xl md:text-6xl md:text-center">
                            <span class="block">Novedades Sol <span
                                    class="block mt-1 text-purple-500 lg:inline lg:mt-0">Ventas de
                                    productos</span></span>
                        </h1>
                        <p
                            class="w-full mx-auto text-base text-left text-gray-500 md:max-w-md sm:text-lg lg:text-2xl md:max-w-3xl md:text-center">
                            Award winning pages that will take your game to the next level!
                        </p>
                        <div class="relative flex flex-col justify-center md:flex-row md:space-x-4">
                            <a href="#_"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-purple-500 rounded-md md:mb-0 hover:bg-purple-700 md:w-auto">
                                Try It Free
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                            <a href="#_"
                                class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="container items-center max-w-4xl px-5 mx-auto mt-16 text-center">
                        <img src="https://cdn.devdojo.com/images/november2020/hero-image.png">
                    </div>
                </section>

            </div>
        </div>
    </div>
</body>

</html>
