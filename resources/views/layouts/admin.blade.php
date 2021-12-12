<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>
<body>
<div>
    <div class="flex flex-wrap bg-gray-100 w-full ">
        <div class="w-2/12 z-50 h-screen bg-white rounded p-2 shadow-lg">
            <div class="flex items-center space-x-2 p-2 mb-5">
                <img class="h-12 w-12 bg-center bg-cover rounded-full" src="{{Auth::user()->profile_img}}" alt="James Bhatta">
                <div>
                    <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">{{ Auth::user()->first_nm." ".Auth::user()->last_nm }}</h4>
                                    <span class="text-sm tracking-wide flex items-center space-x-1">
                                        <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg><span class="text-gray-600">Administrator</span>
                                    </span>
                </div>
            </div>
            <ul class="space-y-2 text-sm">
                <li>
                    <a href="{{ url('dashboard') }}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                    </span>
                        <span>Mailbox</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                    </span>
                        <span>Report</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('info') }}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                        <span>My profile</span>
                    </a>
                </li>


                <li>
                    <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </span>
                        <span>Change password</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <span class="text-gray-600">
                        <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </span>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
        <main class="w-10/12 h-screen">

            <div class="text-gray-500">
                <div class=" w-full">
                    {{--                <div class="w-full bg-white">--}}
                    {{--                    <div class="text-white  flex flex-shrink-0 flex-col">--}}
                    {{--                        <div class="flex relative items-center p-4 h-12">--}}
                    {{--                            <span class="text-2xl tracking-wide"></span>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    <header class="text-white bg-white sticky p-6 left-auto top-0 right-0">

                        <div class="h-12 mx-auto flex justify-center items-center">

                            <div class="text-xl font-semibold text-gray-700 ">
                                <a class="flex flex-wrap text-2xl h-auto font-bold text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="/">
                                    <img class="mx-1.5" src="https://img.icons8.com/fluency/50/000000/chat.png"/>
                                    <span class="text-lg text-3xl mt-2 font-semibold text-black no-underline">
                                        Henry's ChatApp
                                    </span>
                                </a>
                            </div>
                        </div>
                    </header>
                </div>
                @yield('content')
            </div>

        </main>
    </div>

@livewireScripts

</body>
</html>
