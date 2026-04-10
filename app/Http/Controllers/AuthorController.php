<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Author';
        $authors = Author::latest()->paginate(9);

        return view('dashboard.author.index', compact('title', 'authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Author - create';

        return view('dashboard.author.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'slug' => 'required|unique:authors',
        ]);

        Author::create($validatedData);

        return redirect('/dashboard/author')->with('success', 'Data Penulis Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        $title = 'Author - edit';
        $authors = Author::all();

        return view('dashboard.author.edit', compact('title', 'author', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $rules = [
            'name' => 'required|max:255',
        ];

        if ($request->slug != $author->slug) {
            $rules['slug'] = 'required|unique:authors';
        }

        $validatedData = $request->validate($rules);

        Author::where('id', $author->id)->update($validatedData);

        return redirect('/dashboard/author')->with('success', 'Author updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        Author::destroy($author->id);

        return redirect('/dashboard/author')->with('success', 'Data Penulis Berhasil Dihapus!');
    }
}
