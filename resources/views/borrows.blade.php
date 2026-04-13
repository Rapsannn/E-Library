@extends('layouts.main')
@section('content')
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-5xl">
            
            <!-- Header -->
            <div class="p-6 bg-sky-950 text-white text-center rounded-t-lg">
                <h1 class="text-3xl font-bold">Daftar Peminjaman Buku Anda</h1>
            </div>
 
            <!-- Content -->
            <div class="overflow-x-auto p-6">

                @session('success')
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-5"
                        role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endsession

                <table class="min-w-full divide-y divide-gray-200">
                    
                    <!-- Table Head -->
                    <thead class="bg-sky-900 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Nama Peminjam</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">judul Buku</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Tanggal Peminjaman</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Batas Peminjaman</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase">Action</th>
                        </tr>
                    </thead>
 
                    <!-- Table Body -->
                    <tbody class="bg-white divide-y divide-gray-200">

                        @if ($borrows->count())
                            @foreach ($borrows as $borrow)
                                <!-- Row 1 -->
                                <tr>
                                    <td class="px-6 py-4 text-sm">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $borrow->user->name }}</td>
                                    <td class="px-6 py-4 text-sm capitalize">{{ $borrow->book->name }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $borrow->borrow_date->isoFormat('dddd, D MMMM Y') }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $borrow->due_date->isoFormat('dddd, D MMMM Y') }}</td>
                                    <td class="px-6 py-4">
                                            @if ($borrow->status == "diajukan")
                                                <span class="px-2 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800 capitalize">{{ $borrow->status }}</span>
                                            @elseif ($borrow->status == "dipinjam")
                                                <span class="px-2 text-xs font-semibold rounded-full bg-green-100 text-green-800 capitalize">{{ $borrow->status }}</span>
                                            @elseif ($borrow->status == "dikembalikan")
                                                <span class="px-2 text-xs font-semibold rounded-full bg-blue-100 text-blue-800 capitalize">{{ $borrow->status }}</span>
                                            @elseif ($borrow->status == "ditolak")
                                                <span class="px-2 text-xs font-semibold rounded-full bg-red-100 text-red-800 capitalize">{{ $borrow->status }}</span>
                                            @endif
                                        
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="bg-blue-200 px-2 py-1 rounded-lg text-blue-500 hover:bg-blue-500 hover:text-white">
                                            <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>  
                            @endforeach
                        @else
                            <tr>
                                <td class="px-6 py-4 text-sm text-center text-bold" colspan="7">Belum ada peminjaman</td>
                            </tr>         
                        @endif

 
                    </tbody>
                </table>

                

                {{-- pagination --}}
                <div class="mt-6">
                    {{ $borrows->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection