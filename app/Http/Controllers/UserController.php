<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $title = 'Users';

        return view('dashboard.user.index', compact('users', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'User - create';

        return view('dashboard.user.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:2|regex:/^[a-zA-Z\s]+$/',
            'slug' => 'required|unique:users',  
            'email' => 'required|email:dns|unique:users',
            'username' => 'required|unique:users|min:3|max:255|regex:/^[a-zA-Z0-9]+$/',
            'password' => 'required|min:5|max:255',
            'role' => 'required',
        ]);

        User::create($validatedData);

        $validatedData['password'] = Hash::make($validatedData['password']);

        return redirect('/dashboard/user')->with('success', 'Data User ditambahkan!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
