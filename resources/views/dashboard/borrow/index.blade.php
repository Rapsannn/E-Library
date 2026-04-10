@extends('dashboard.layouts.main')
 
@section('content')
  <div class="grid grid-cols-12 gap-4">
    <div class="col-span-12 lg:col-span-9 p-4">
        @session('success')
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-5"
                    role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
        @endsession
    </div>
  </div>
 
  <div class="grid grid-cols-12 gap-4">
    <div class="col-span-12 lg:col-span-11 p-4">
      <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Peminjam
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Judul Buku
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Pinjam
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Batas Peminjam
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acction
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($borrows->count())
                    @foreach ($borrows as $borrow)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $borrow->user->name }}
                        </td>
                        <td class="px-6 py-4 capitalize">
                            {{ $borrow->book->name }}
                        </td>
                        <td class="px-6 py-4 capitalize">
                            {{ $borrow->borrow_date->isoFormat('dddd, D MMMM Y') }}
                        </td>
                        <td class="px-6 py-4 capitalize">
                            {{ $borrow->due_date->isoFormat('dddd, D MMMM Y') }}
                        </td>
                        <td class="px-6 py-4 capitalize">
                            @if ($borrow->status == "diajukan")
                                <p class="bg-yellow-500 text-black p-1 text-center rounded">{{ $borrow->status }}</p>
                            @elseif ($borrow->status == "dipinjam")
                                <p class="bg-green-500 text-black p-1 text-center rounded">{{ $borrow->status }}</p>
                            @elseif ($borrow->status == "dikembalikan")
                                <p class="bg-blue-500 text-black p-1 text-center rounded">{{ $borrow->status }}</p>
                            @elseif ($borrow->status == "ditolak")
                                <p class="bg-red-500 text-black p-1 text-center rounded">{{ $borrow->status }}</p>
                            @endif

                        </td>
                        <td class="px-6 py-4 gap-2">
                            @if ($borrow->status == 'diajukan' || $borrow->status == 'dipinjam')
                                <div class="text-yellow-300 hover:text-yellow-700 items-center">
                                <a href="/dashboard/borrow/{{ $borrow->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></i> Edit</a>
                                </div>
                            @elseif ($borrow->status == 'dikembalikan' || $borrow->status =='ditolak')
                                <form action="/dashboard/borrow/{{ $borrow->id }}" method="POST" class="text-red-500 hover:text-red-700">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')"><i class="fa-sharp fa-solid fa-trash"></i> Delete</button>
                                </form>
                            @endif

                                
                        </td>
                    </tr>  
                    @endforeach
                @else
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td colspan="7" class="px-6 py-4 text-white text-center font-semibold">
                            Tidak Ada Data
                        </td>
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