<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 text-5xl font-extrabold">
                Proyecto Parcial 3
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 grid grid-cols-2 gap-1">
                        <div class="flex items-center">
                            <img src="{{ asset('images/no-image.png') }}" alt="" class="rounded-lg shadow-sm h-48">
                        </div>

                        <div class="ml-0">
                            <div class="mt-2 text-indigo-600 dark:text-gray-400 font-bold text-xl">
                                Esquivel Juárez, Marco René
                            </div>
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-base">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 grid grid-cols-2 gap-1">
                        <div class="flex items-center">
                            <img src="{{ asset('images/no-image.png') }}" alt="" class="rounded-lg shadow-sm h-48">
                        </div>

                        <div class="ml-0">
                            <div class="mt-2 text-indigo-600 dark:text-gray-400 font-bold text-xl">
                                Aguilar Melgar, Julio Israel
                            </div>
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-base">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 grid grid-cols-2 gap-1">
                        <div class="flex items-center">
                            <img src="{{ asset('images/no-image.png') }}" alt="" class="rounded-lg shadow-sm h-48">
                        </div>

                        <div class="ml-0">
                            <div class="mt-2 text-indigo-600 dark:text-gray-400 font-bold text-xl">
                                Carranza Rivas, Mario Ernesto
                            </div>
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-base">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 grid grid-cols-2 gap-1">
                        <div class="flex items-center">
                            <img src="{{ asset('images/no-image.png') }}" alt="" class="rounded-lg shadow-sm h-48">
                        </div>

                        <div class="ml-0">
                            <div class="mt-2 text-indigo-600 dark:text-gray-400 font-bold text-xl">
                                Galdámez Hernández, Alberto Alejandro
                            </div>
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-base">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 grid grid-cols-2 gap-1">
                        <div class="flex items-center">
                            <img src="{{ asset('images/no-image.png') }}" alt="" class="rounded-lg shadow-sm h-48">
                        </div>

                        <div class="ml-0">
                            <div class="mt-2 text-indigo-600 dark:text-gray-400 font-bold text-xl">
                                Alfonso Morán, Adrián
                            </div>
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-base">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
