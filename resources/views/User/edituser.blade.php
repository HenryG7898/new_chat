@extends('layouts.app')

@section('content')
    <div class="m-auto my-16">

        <div class="bg-white m-auto   p-16 rounded shadow-2xl w-4/6">
            @if ($data)
                <h2 class="text-3xl font-bold mb-5 text-gray-800 text-center">Edit Your Information</h2>

                <form class="space-y-5 space-x-5 grid md:grid-cols-3" action="{{ url('updateUser') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">First Name</label>
                        <input type="text" value="{{ $data->first_nm }}" name="first_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                        @error('first_nm') <span class="error text-red-600">{{ $message }}</span> @enderror
                        <input type="hidden" value="{{ $data->id }}" name="id" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    </div>

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Last Name</label>
                        <input type="text" value="{{ $data->last_nm }}" name="last_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                        @error('last_nm') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Username</label>
                        <input type="text" value="{{ $data->username }}" name="username" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                        @error('username') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Date of Birth</label>
                        <input type="date" value="{{ $data->DOB }}" name="DOB" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                        @error('DOB') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Profile</label>
                        <input type="file" name="profile_img" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                        @error('profile_img') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Email</label>
                        <input type="email" value="{{ $data->email }}" name="email" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                        @error('email') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Phone Number</label>
                        <input type="text" value="{{ $data->phone_nbr }}" name="phone_nbr" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                        @error('phone_nbr') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block mb-1 font-bold text-gray-500">Gender</label>
                        <select name="gender"  class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" id="Gender">
                            @if ($data->gender === "Male")
                                <option selected value="Male">Male</option>
                                <option value="Female">Female</option>

                            @else
                                <option selected value="Female">Female</option>
                                <option value="Male">Male</option>

                            @endif
                        </select>
                        @error('gender') <span class="error text-red-600">{{ $message }}</span> @enderror
                    </div>
                <div class="">
                    <button type="submit" class="my-5 block w-full bg-green-400 hover:bg-yellow-300 p-3 rounded text-white font-bold text-lg hover:text-yellow-800 transition duration-300">Save</button>
                </div>
                </form>
            @else
                <h2 class="text-5xl font-bold  text-gray-800 text-center">Sorry! No Student Available</h2>
            @endif
        </div>

    </div>
@endsection
