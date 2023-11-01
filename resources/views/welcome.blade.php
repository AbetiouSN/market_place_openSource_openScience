@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NASAGAR</title>
    <!-- Add your styles and fonts here -->
</head>
<body class="antialiased">
    <!-- Header Section -->
    {{-- <div class="bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div> --}}

    <!-- Main Content Section -->
    <!-- Main Content Section -->
    
                <!-- Main Content Section -->
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
    <div class="sm:w-full sm:max-w-7xl">
        <div class="flex items-center">
            <div class="w-12 h-12 mr-4">
                <img src="nasa.jpeg" alt="Image Alt Text" class="rounded-full w-10 h-10 max-w-xs">
            </div>
            
            <div class="container">
                <br><br>
                <p class="font-semibold text-xl"><strong>Teame <b>Techno Changers </b></strong></p>
                <br>
                <br>
            </div>
        </div>

        <!-- Cards Section -->
        <div class="mt-8">
            <!-- First Row with class "row" -->
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="sofiane.jpeg" alt="Profile Image" style="width: 100%;height:auto;">
                        <div class="p-4">
                            <h2 class="text-gray-800 font-semibold text-xl">Sofiane ABETIOU</h2>
                            <p class="text-gray-600">sofianeabetiou@email.com</p>
                            <p class="text-gray-600"><b>Computer Software Engineering Student</b></p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="hajar.jpeg" alt="Profile Image" style="width: 100%;height:auto;">
                        <div class="p-4">
                            <h2 class="text-gray-800 font-semibold text-xl">Hajar KDIDAR</h2>
                            <p class="text-gray-600">hajarkdidar12@email.com</p>
                            <p class="text-gray-600"><b>Computer Software Engineering Student</b></p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="douae.jpeg" alt="Profile Image" style="width: 100%;height:auto;">
                        <div class="p-4">
                            <h2 class="text-gray-800 font-semibold text-xl">Douae KDIDAR</h2>
                            <p class="text-gray-600">douaekdidar23@email.com</p>
                            <p class="text-gray-600"><b>Second Year of baccalaureate</b></p>
                        </div>
                    </div>
                </div>

            <!-- Second Row with class "row" -->
            <div class="mt-4 row">
                <!-- Card 4 -->
                <div class="col-md-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="aya.jpeg" alt="Profile Image" style="width: 100%;height:auto;">
                        <div class="p-4">
                            <h2 class="text-gray-800 font-semibold text-xl">Aya AIT EL MADANI</h2>
                            <p class="text-gray-600">ayaaitelmdani@gmail.com</p>
                            <p class="text-gray-600"><b>Second Year of baccalaureate</b></p>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="mehdi.jpeg" alt="Profile Image" style="width: 100%;height:auto;">
                        <div class="p-4">
                            <h2 class="text-gray-800 font-semibold text-xl">Mehdi HEBBADA </h2>
                            <p class="text-gray-600">mehdihebbada88@gmail.com</p>
                            <p class="text-gray-600"><b>Second Year of baccalaureate</b></p>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-md-4">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="akrm.jpeg" alt="Profile Image" style="width: 100%;height:auto;">
                        <div class="p-4">
                            <h2 class="text-gray-800 font-semibold text-xl">Akram HAMDOUNA </h2>
                            <p class="text-gray-600">johnathansigmamale@gmail.com</p>
                            <p class="text-gray-600"><b>Second Year of baccalaureate</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Cards Section -->
    </div>
</div>

            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
