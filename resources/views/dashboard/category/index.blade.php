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
      <a href="/dashboard/category/create" class="px-5 py-3 bg-sky-300 rounded-md text-gray-500 hover:bg-sky-400 transition">Tambah category</a>
    </div>
  </div>
 
  <div class="grid grid-cols-12 gap-4">
    <div class="col-span-12 lg:col-span-9 p-4">
      <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Kategori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Slug
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acction
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">
                        {{ $loop->iteration }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $category->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $category->slug }}
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                            <form action="/dashboard/category/{{ $category->slug }}" method="POST" class="text-red-500 hover:text-red-700">
                                @csrf
                                @method('DELETE')
                              <button type="submit" onclick="return confirm('Are you sure?')"><i class="fa-sharp fa-solid fa-trash"></i> Delete</button>
                            </form>
                            <p>|</p>
                            <div class="text-yellow-500 hover:text-yellow-700">
                              <a href="/dashboard/category/{{ $category->slug }}/edit"><i class="fa-utility fa-semibold fa-pen-to-square"></i> Edit</a>
                            </div>
                    </td>
                </tr>  
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
 
@endsection 