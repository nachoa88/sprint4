@extends('layouts.app')

@section('content')
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">
        You're editing <span class="text-teal-300">{{ $team->name }}</span></h1>

    <form method="POST" action="{{ route('teams.update', $team) }}" enctype="multipart/form-data"
        class="max-w-md mx-auto my-16">
        @csrf
        @method('PUT')
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="name" id="name" value="{{ old('name', $team->name) }}"
                class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-sky-500 appearance-none focus:outline-none focus:ring-0 focus:border-teal-300 peer"
                placeholder=" " required />
            <label for="name"
                class="peer-focus:font-medium absolute text-sm text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-teal-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                Team's Name</label>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="city" id="city" value="{{ old('city', $team->city) }}"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-sky-500 appearance-none focus:outline-none focus:ring-0 focus:border-teal-300 peer"
                    placeholder=" " required />
                <label for="city"
                    class="peer-focus:font-medium absolute text-sm text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-teal-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    City</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="country" id="country" value="{{ old('country', $team->country) }}"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-sky-500 appearance-none focus:outline-none focus:ring-0 focus:border-teal-300 peer"
                    placeholder=" " required />
                <label for="country"
                    class="peer-focus:font-medium absolute text-sm text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-teal-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Country</label>
            </div>
        </div>
        <div class="relative z-0 w-full mb-5 group flex items-center">
            <img src="{{ asset('storage/' . $team->logo) }}" alt="{{ $team->name }} logo" class="w-12 h-12 mr-4">
            <div class="flex-grow">
                <input type="file" name="logo" id="logo"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-sky-500 appearance-none focus:outline-none focus:ring-0 focus:border-teal-300 peer" />
                <label for="logo"
                    class="peer-focus:font-medium absolute text-sm text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-teal-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Upload Team's Logo</label>
                <div class="mt-1 text-sm text-gray-400" id="logo_help">
                    Your team needs a logo, what's a team without it!</div>
                @error('logo')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button type="submit"
            class="relative inline-flex items-center justify-center p-0.5 my-4 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-400">
            <span
                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Update Team
            </span>
        </button>
    </form>
@endsection
