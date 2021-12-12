<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    @livewireStyles
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-3">
            <div class="container mx-auto flex justify-between items-center px-2">
                <div class="flex flex-wrap">
                    <img class="mx-1.5" src="https://img.icons8.com/fluency/50/000000/chat.png"/>
                    <a href="{{ url('/') }}" class="text-lg text-3xl mt-2 font-semibold text-gray-100 no-underline">
                        Henry's ChatApp
                    </a>
                </div>
                <nav class="space-x-2 text-gray-300 text-sm sm:text-base">
                    @auth
                        <span class="font-semibold text-lg text-white p-2 rounded-lg hover:bg-blue-500">{{ Auth::user()->first_nm." ".Auth::user()->last_nm }}</span>
                        <a class="px-2 py-2 mt-2 text-lg font-semibold text-white
                        rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600
                        dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
                        dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-500
                        focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('home') }}">Home</a>

                        <a class="px-2 py-2 mt-2 text-lg font-semibold text-white
                        rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600
                        dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
                        dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-500
                        focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('Profile') }}">Profile</a>

                        <a class="px-2 py-2 mt-2 text-lg font-semibold text-white
                        rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600
                        dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
                        dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-500
                        focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('Chat') }}">Messages</a>

                        <a href="{{ route('logout') }}"
                           class="px-2 py-2 mt-2 text-lg font-semibold text-white
                        rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600
                        dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
                        dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-500
                        focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @else

                        <a class="px-2 py-2 mt-2 text-lg font-semibold text-white
                        rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600
                        dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
                        dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-500
                        focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ url('Sign') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="px-2 py-2 mt-2 text-lg font-semibold text-white
                        rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600
                        dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white
                        dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-blue-500
                        focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif


                    @endauth
                </nav>
            </div>
        </header>

        @yield('content')
    </div>
    @livewireScripts
</body>
</html>
