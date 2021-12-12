@extends('layouts.admin')

@section('content')
    <div>
        <div class="container mx-auto px-8 py-3">
            <h3 class="text-gray-700 text-4xl font-bold">Dashboard</h3>
            <hr class="my-6 border-gray-300 w-full">
            <div class="mt-2 flex justify-between">
                <h3 class="text-gray-700 text-2xl font-medium">Hi {{ Auth::user()->first_nm }}</h3>
{{--                <p>LogiFreight 136020 KIN</p>--}}
            </div>
            <div class="mt-4">
                <div class="flex grid-cols-3 -mx-2">
                    <div class="w-full px-2 sm:w-1/2 lg:w-2/6">
                        <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                            <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                                <svg class="h-8 w-8 text-white" viewBox="0 0 28 30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>

                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">8,282</h4>
                                <div class="text-gray-500">New Users</div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mt-6 px-2 sm:w-1/2 lg:w-2/6 sm:mt-0">
                        <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                            <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">

                            </div>

                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">200,521</h4>
                                <div class="text-gray-500">Total Orders</div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mt-6 px-4 sm:w-1/2 lg:w-2/6 xl:mt-0">
                        <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                            <div class="p-3 rounded-full bg-pink-600 bg-opacity-75">
                            </div>

                            <div class="mx-5">
                                <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                                <div class="text-gray-500"></div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-300 w-full">

            <div class="flex px-6 flex-col mt-8">
                <div class="-my-2 py-3 px-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div class="">
                        <h1 class="font-bold text-4xl">Recent Activity</h1>
                    </div>
                </div>
            </div>
            <div class="container mx-auto px-4 sm:px-8">
                <div class="py-8">
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <table class="w-full  leading-normal">
                                <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        User
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Role
                                    </th>
                                    <th class="px-5 text-center py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Created at
                                    </th>
                                    <th class="px-5 text-center py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Status
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">
                                                <img class="w-full h-full rounded-full" src="{{$user->profile_img}}" alt="" />
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $user->first_nm." ".$user->last_nm }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $user->role }}</p>
                                    </td>
                                    <td class="px-5 text-center py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{date("D-F-Y",strtotime(Auth::user()->created_at)) }}
                                        </p>
                                    </td>
                                    <td class="px-5 text-center py-5 border-b border-gray-200 bg-white text-sm">
                  <span class=" inline-block px-3 py-1 font-semibold text-green-900 leading-tight">

                    <span class="relative">{{$user->email}}</span>
                  </span>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
