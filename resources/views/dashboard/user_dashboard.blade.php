
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <!-- Welcome Message -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800">Welcome, {{ Auth::user()->name }}!</h2>
        <p class="text-gray-600">Here's an overview of your dashboard.</p>
    </div>

    <!-- Dashboard Widgets -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <!-- Example Widget -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <h3 class="text-lg font-semibold text-gray-700">Recent Activity</h3>
            <p class="text-gray-500">No recent activity yet.</p>
        </div>

        <!-- Add more widgets as we go -->
    </div>
</div>
@endsection
