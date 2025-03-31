@extends('layouts.app')

@section('content')
<div class="bg-gray-900 text-white min-h-screen">
    <!-- Navigation -->
    <nav class="bg-gray-800 shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">Convoy of Hope</a>
            <ul class="hidden md:flex space-x-6">
                <li><a href="#" class="hover:text-yellow-400">Home</a></li>
                <li><a href="#" class="hover:text-yellow-400">About</a></li>
                <li><a href="#" class="hover:text-yellow-400">Services</a></li>
                <li><a href="#" class="hover:text-yellow-400">Contact</a></li>
            </ul>
            <button class="md:hidden text-yellow-400">☰</button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="flex items-center justify-center h-screen text-center">
        <div>
            <h1 class="text-5xl font-extrabold mb-4">Transforming Lives, One Meal at a Time</h1>
            <p class="text-lg text-gray-300 mb-6">Join us in bringing hope to the world through food aid and support.</p>
            <a href="#" class="bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-yellow-300">Get Involved</a>
        </div>
    </section>
</div>
@endsection
