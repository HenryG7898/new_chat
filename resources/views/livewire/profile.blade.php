<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
    body{
        background-image: url("https://static.vecteezy.com/system/resources/previews/002/157/220/original/modern-social-media-concept-with-laptop-and-chat-application-isometric-illustration-isolated-on-white-background-vector.jpg");
        background-repeat: space;
        background-size: cover;
        background-position: center;
    }
</style>
<div>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


    <body class="">
    <div class="relative top-0 left-0 w-full h-full mt-6 bg-black bg-opacity-75
                 shadow-lg overflow-y-auto">


        <div class="container mx-auto my-2  p-2">
            <div class="md:flex no-wrap md:-mx-2">
                <!-- Left Side -->
                <div class="w-full md:w-4/12 md:mx-2">
                    <!-- Profile Card -->

                    <div class="bg-white shadow-2xl p-3 border-t-4 border-blue-800">
                        <div class="image overflow-hidden">
                            <img class="h-96 w-full mx-auto"
                                 src="{{ Auth::user()->profile_img }}"
                                 alt="">

                        </div>
                        <i class="far fa-paper-plane"></i>
                        <ul
                            class="bg-blue-800 text-white hover:bg-blue-500 shadow-lg hover:text-white hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                            <li class="flex items-center py-3">
                                <span>Status</span>
                                <span class="ml-auto"><span
                                        class="bg-green-500 py-1 px-2 rounded text-black text-sm">Active</span></span>
                            </li>
                            <li class="flex items-center py-3">
                                <span>Member since</span>
                                <span class="ml-auto">{{date("D-F-Y",strtotime(Auth::user()->created_at)) }}</span>
                            </li>
                        </ul>
                    </div>

                    <!-- End of profile card -->
                    <div class="my-4"></div>
                    <!-- Friend card -->

                    <!-- End of friends card -->
                </div>
                <!-- Right Side -->
                <div class="w-full md:w-9/12 mx-2">
                    <!-- Profile tab -->
                    <!-- About Section -->
                    <div class="bg-white p-3 shadow-lg rounded-sm">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-white">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                            <span class="tracking-wide">About</span>
                        </div>
                        <div class="text-white text-blue-700" style="font-size: 20px">
                            <div class="grid md:grid-cols-2 text-sm">
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Full Name</div>
                                    <div class="px-4 py-2">{{ Auth::user()->first_nm." ".Auth::user()->last_nm }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Username</div>
                                    <div class="px-4 py-2">{{ Auth::user()->username }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Gender</div>
                                    <div class="px-4 py-2">{{ Auth::user()->gender }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Contact No.</div>
                                    <div class="px-4 py-2">{{ Auth::user()->phone_nbr }}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Current Address</div>
                                    <div class="px-4 py-2">Not Available</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Permanant Address</div>
                                    <div class="px-4 py-2">Not Available</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Email.</div>
                                    <div class="px-1 py-2">
                                        <a class="text-black" href="mailto:jane@example.com">{{ Auth::user()->email }}</a>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Birthday</div>
                                    <div class="px-4 py-2">{{ Auth::user()->DOB }}</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('editUser/'.Auth::user()->id)}}" style="text-decoration: none; font-size: 25px"> <button
                                class="block w-full bg-blue-800 text-white hover:text-black text-sm transition-all font-semibold rounded-lg hover:bg-blue-500  focus:outline-none focus:shadow-outline focus:bg-white hover:shadow-xs p-3 my-4">
                                Edit Information</button></a>
                    </div>

                    <!-- End of about section -->

                    <div class="my-4"></div>
                    <div class="w-full md:w-12/12 mx-0" style="margin-right: 10%">
                        <!-- Profile tab -->
                        <!-- About Section -->
                        <div class="bg-white p-5 shadow-lg rounded-sm">
                            <div class="flex items-center space-x-2 font-semibold text-blue-600 leading-4">
                                <p style="margin-bottom: -10px ">If want to delete your account click the button below, Notice: before clicking the button you wont able to recover your account.</p>

                            </div>
                            <form action="{{ url('Delete') }}" method="post">
                            <a href="{{url('delete'.Auth::user()->id)}}" style="text-decoration: none; font-size: 25px"> <button
                                    class="block w-full bg-blue-800 mt-6 text-white hover:text-black text-sm transition-all font-semibold rounded-lg hover:bg-blue-500  focus:outline-none focus:shadow-outline focus:bg-white hover:shadow-xs p-3 my-4">
                                    Delete Account</button></a>
                            </form>
                        </div>

                        <!-- Experience and education -->

                        <!-- End of profile tab -->
                    </div>

                </div>

            </div>

        </div>
        <!-- This is an example component -->
    </div>
    </body>

</div>
