@extends('layouts.app')

@section('content')
    <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">
        Creating a <span class="text-teal-300">New Team</span></h1>

    <form method="POST" action="{{ route('teams.store') }}" enctype="multipart/form-data" class="max-w-md mx-auto my-16">
        @csrf
        <!-- Team's League Name -->
        <div class="relative z-0 w-full mb-5 group">
            <select name="league_id" id="league_id"
                class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-sky-500 appearance-none focus:outline-none focus:ring-0 focus:border-teal-300 peer">
                <option class="bg-cyan-950 text-white" value="">Select a league for your team</option>
                @foreach ($leagues as $league)
                    <option class="bg-cyan-950 text-white" value="{{ $league->id }}"
                        {{ old('league_id') == $league->id ? 'selected' : '' }}>{{ $league->name }}</option>
                @endforeach
            </select>
            <label for="league_id"
                class="peer-focus:font-medium absolute text-sm text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-teal-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                League Name</label>
            @error('league_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <!-- Team's Name & Year of Fundation-->
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-sky-500 appearance-none focus:outline-none focus:ring-0 focus:border-teal-300 peer"
                    placeholder=" " required />
                <label for="name"
                    class="peer-focus:font-medium absolute text-sm text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-teal-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Team's Name</label>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="number" name="founded" id="founded" value="{{ old('founded') }}"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-sky-500 appearance-none focus:outline-none focus:ring-0 focus:border-teal-300 peer"
                    placeholder=" " />
                <label for="founded"
                    class="peer-focus:font-medium absolute text-sm text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-teal-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Year of Fundation</label>
                @error('founded')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <!-- Team's City & Country -->
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="city" id="city" value="{{ old('city') }}"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-sky-500 appearance-none focus:outline-none focus:ring-0 focus:border-teal-300 peer"
                    placeholder=" " required />
                <label for="city"
                    class="peer-focus:font-medium absolute text-sm text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-teal-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    City</label>
            </div>
            @error('city')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="country" id="country" value="{{ old('country') }}"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-sky-500 appearance-none focus:outline-none focus:ring-0 focus:border-teal-300 peer"
                    placeholder=" " required />
                <label for="country"
                    class="peer-focus:font-medium absolute text-sm text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-teal-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Country</label>
            </div>
            @error('country')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <!-- Team's Stadium Name & Capacity -->
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="stadium_name" id="stadium_name" value="{{ old('stadium_name') }}"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-sky-500 appearance-none focus:outline-none focus:ring-0 focus:border-teal-300 peer"
                    placeholder=" " />
                <label for="stadium_name"
                    class="peer-focus:font-medium absolute text-sm text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-teal-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Stadium Name</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="number" name="stadium_capacity" id="stadium_capacity" value="{{ old('stadium_capacity') }}"
                    class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-sky-500 appearance-none focus:outline-none focus:ring-0 focus:border-teal-300 peer"
                    placeholder=" " />
                <label for="stadium_capacity"
                    class="peer-focus:font-medium absolute text-sm text-gray-200 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-teal-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Stadium Capacity</label>
            </div>
            @error('stadium_capacity')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <!-- Team's Logo -->
        <div class="relative z-0 w-full mb-5 group">
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
        <!-- Submit button -->
        <button type="submit"
            class="relative inline-flex items-center justify-center p-0.5 my-4 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-400">
            <span
                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Create Team
            </span>
        </button>
    </form>
@endsection
