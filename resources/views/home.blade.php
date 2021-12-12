@extends('layouts.app')



@section('content')
    <style>
        body{
            background-image: url("https://static.vecteezy.com/system/resources/previews/002/157/220/original/modern-social-media-concept-with-laptop-and-chat-application-isometric-illustration-isolated-on-white-background-vector.jpg");
            background-repeat: space;
            background-size: cover;
            background-position: center;
        }
    </style>
    <body style="background-image: url('https://static.vecteezy.com/system/resources/previews/002/157/220/original/modern-social-media-concept-with-laptop-and-chat-application-isometric-illustration-isolated-on-white-background-vector.jpg');
    background-repeat: space;
    background-size: cover;
    background-position: center;">
    <main class="sm:container lg:mt-40 flex justify-center items-center sm:mx-auto sm:mt-10">
        <div class="w-4/6 sm:px-6">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold text-center text-5xl bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    Welcome To Henry's ChatApp
                </header>

                <div class="w-full p-6 text-center">
                    <p class="text-gray-700 text-4xl">
                        {{ Auth::user()->first_nm ." ". Auth::user()->last_nm }}
                    </p>
                </div>
            </section>
        </div>
    </main>
    </body>
@endsection
