@extends('layouts.main')

@section('content')
<div class="min-h-screen bg-gray-100 py-12 px-6">
    <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-2xl p-10">
        
        <!-- Title -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-800">About E-Library</h1>
            <p class="text-gray-600 mt-3 text-lg">
                Your Digital Library Solution for Easy Book Access
            </p>
        </div>

        <!-- About Description -->
        <div class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <img src="{{ asset('images/library-about.jpg') }}" 
                     alt="Library Image" 
                     class="rounded-2xl shadow-md">
            </div>

            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Who We Are</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    E-Library is a digital library platform designed to make reading 
                    and managing books easier for everyone. Users can browse book collections, 
                    borrow books online, and manage reading history in one place.
                </p>

                <p class="text-gray-600 leading-relaxed">
                    Our mission is to provide a modern, efficient, and user-friendly 
                    library system that connects readers with knowledge anytime, anywhere.
                </p>
            </div>
        </div>

        <!-- Features Section -->
        <div class="mt-14">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-8">Main Features</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-blue-50 p-6 rounded-xl shadow-sm text-center">
                    <h3 class="font-bold text-lg text-blue-700 mb-2">Book Search</h3>
                    <p class="text-gray-600 text-sm">
                        Easily search books by title, author, or category.
                    </p>
                </div>

                <div class="bg-green-50 p-6 rounded-xl shadow-sm text-center">
                    <h3 class="font-bold text-lg text-green-700 mb-2">Online Borrowing</h3>
                    <p class="text-gray-600 text-sm">
                        Borrow and return books digitally with just a few clicks.
                    </p>
                </div>

                <div class="bg-purple-50 p-6 rounded-xl shadow-sm text-center">
                    <h3 class="font-bold text-lg text-purple-700 mb-2">Admin Dashboard</h3>
                    <p class="text-gray-600 text-sm">
                        Manage books, users, and transactions efficiently.
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-12 text-center text-gray-500 text-sm">
            © 2026 E-Library. All rights reserved.
        </div>
    </div>
</div>
@endsection