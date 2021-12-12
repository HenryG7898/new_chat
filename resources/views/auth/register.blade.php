@extends('layouts.app')
<head>
    <style>
        body{
            background-image: url("https://static.vecteezy.com/system/resources/previews/002/157/220/original/modern-social-media-concept-with-laptop-and-chat-application-isometric-illustration-isolated-on-white-background-vector.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            font-family: "Times New Roman";
        }
    </style>
</head>
@section('content')
<main class="sm:container sm:mx-auto  sm:mt-10">
    <div class="flex justify-center items-center">
        <div class="w-8/12">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-4xl text-center text-gray-700 py-3 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Register') }}
                </header>

                <form class="w-full px-6 p-2 mb-4  sm:space-y-8 " method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">First Name</label>
                            <input type="text" name="first_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                            @error('first_nm') <span class="error text-red-600">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Last Name</label>
                            <input type="text" name="last_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                            @error('last_nm') <span class="error text-red-600">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Username</label>
                            <input type="text" name="username" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                            @error('username') <span class="error text-red-600">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Phone Number</label>
                            <input type="text" name="phone_nbr" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                            @error('phone_nbr') <span class="error text-red-600">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Date of Birth</label>
                            <input type="date" name="DOB" class="w-full border-2 border-gray-200 p-2.5 rounded outline-none focus:border-purple-500">
                            @error('DOB') <span class="error text-red-600">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Gender</label>
                            <select name="gender" id="gender" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                                <option value="">Select a Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            @error('gender') <span class="error text-red-600">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Email</label>
                            <input type="email" name="email" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                            @error('email') <span class="error text-red-600">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block mb-1 font-bold text-gray-500">Password</label>
                            <input type="password" name="password" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                            @error('password') <span class="error text-red-600">{{ $message }}</span> @enderror
                        </div>
{{--                        <div>--}}
{{--                            <label class="block mb-1 font-bold text-gray-500">Confirm Password</label>--}}
{{--                            <input type="text" name="confirmed_password" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">--}}
{{--                            @error('confirmed_password') <span class="error text-red-600">{{ $message }}</span> @enderror--}}
{{--                        </div>--}}

                    </div>

                    <div class="flex justify-center mt-6 space-x-1">
                        <button type="submit"
                                class="w-3/6 text-3xl select-none font-bold whitespace-no-wrap p-2 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-2">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection
