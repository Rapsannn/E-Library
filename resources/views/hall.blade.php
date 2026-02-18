@extends('layouts.main')

@section('konten')
    <!-- Hero Section -->
    <div class="max-w-4xl mx-auto mb-18">
        <div class="overflow-hidden rounded-lg shadow-lg max-h-[400px]">
            <img
                src="https://picsum.photos/1200/400"
                alt="Cover Buku"
                class="w-full h-96 object-cover"
            >
        </div>
 
        <div class="text-center mt-4">
            <h3 class="text-2xl font-bold">
                <a href="#" class="text-gray-900 hover:text-blue-500">
                    Negeri Di Ujung Tanduk
                </a>
            </h3>
 
            <div class="flex justify-center items-center text-gray-600 text-sm gap-4 mt-2">
                <span class="flex items-center gap-1">
                    <i class="fa-solid fa-user text-blue-600"></i>
                    <a href="#" class="hover:text-blue-500">Tere Liye</a>
                </span>
                <span class="flex items-center gap-1">
                    <i class="fa-solid fa-bookmark text-green-500"></i>
                    <a href="#" class="hover:text-blue-500">Novel</a>
                </span>
                <span class="flex items-center gap-1">
                    <i class="fa-solid fa-clock text-yellow-300"></i>
                    2 Hours ago
                </span>
            </div>
 
            <p class="text-gray-700 mt-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nemo vero tempore.
            </p>
 
            <a
                href="#"
                class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600"
            >
                Read more
            </a>
        </div>
    </div>
 
    <!-- Content Section -->
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
 
            <!-- Card 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="https://picsum.photos/400/400?random=1" class="w-full h-60 object-cover" alt="Book Cover">
                    <div class="absolute top-2 left-2 bg-black/70 text-white px-3 py-1 text-xs rounded">
                        <a href="#" class="hover:underline">Comic</a>
                    </div>
                </div>
                <div class="p-4">
                    <h5 class="text-lg font-bold">
                        <a href="#" class="hover:text-blue-500">Conan Chapter 96</a>
                    </h5>
                    <div class="flex items-center text-gray-600 text-sm gap-4 mt-2">
                        <span class="flex items-center gap-1">
                            <i class="fa-solid fa-user text-blue-600"></i>
                            <a href="#" class="hover:text-blue-500">Gosho Aoyama</a>
                        </span>
                        <span class="flex items-center gap-1">
                            <i class="fa-solid fa-clock text-yellow-300"></i>
                            2 Hours ago
                        </span>
                    </div>
                    <p class="text-gray-700 mt-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus corrupti aliquid nesciunt vitae.
                    </p>
                    <a href="#" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                        Read more
                    </a>
                </div>
            </div>
 
            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="https://picsum.photos/400/400?random=2" class="w-full h-60 object-cover" alt="Book Cover">
                    <div class="absolute top-2 left-2 bg-black/70 text-white px-3 py-1 text-xs rounded">
                        <a href="#" class="hover:underline">Novel</a>
                    </div>
                </div>
                <div class="p-4">
                    <h5 class="text-lg font-bold">
                        <a href="#" class="hover:text-blue-500">Dilan 1990</a>
                    </h5>
                    <div class="flex items-center text-gray-600 text-sm gap-4 mt-2">
                        <span class="flex items-center gap-1">
                            <i class="fa-solid fa-user text-blue-600"></i>
                            <a href="#" class="hover:text-blue-500">Pidi Baiq</a>
                        </span>
                        <span class="flex items-center gap-1">
                            <i class="fa-solid fa-clock text-yellow-300"></i>
                            5 Hours ago
                        </span>
                    </div>
                    <p class="text-gray-700 mt-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus corrupti aliquid nesciunt vitae.
                    </p>
                    <a href="#" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                        Read more
                    </a>
                </div>
            </div>
 
            <!-- Card 3 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="relative">
                    <img src="https://picsum.photos/400/400?random=3" class="w-full h-60 object-cover" alt="Book Cover">
                    <div class="absolute top-2 left-2 bg-black/70 text-white px-3 py-1 text-xs rounded">
                        <a href="#" class="hover:underline">Self Improvement</a>
                    </div>
                </div>
                <div class="p-4">
                    <h5 class="text-lg font-bold">
                        <a href="#" class="hover:text-blue-500">Atomic Habits</a>
                    </h5>
                    <div class="flex items-center text-gray-600 text-sm gap-4 mt-2">
                        <span class="flex items-center gap-1">
                            <i class="fa-solid fa-user text-blue-600"></i>
                            <a href="#" class="hover:text-blue-500">James Clear</a>
                        </span>
                        <span class="flex items-center gap-1">
                            <i class="fa-solid fa-clock text-yellow-300"></i>
                            1 Day ago
                        </span>
                    </div>
                    <p class="text-gray-700 mt-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus corrupti aliquid nesciunt vitae.
                    </p>
                    <a href="#" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                        Read more
                    </a>
                </div>
            </div>
 
        </div>
    </div>
@endsection