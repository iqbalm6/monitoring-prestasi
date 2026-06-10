<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    
    public function index()
{
    $guru = User::where('role','guru')->get();

    return view('guru.index', compact('guru'));
}

    
    public function create()
    {
        return view('guru.create');
    }

    
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'guru',
    ]);

    return redirect()
        ->route('guru.index')
        ->with('success','Guru berhasil ditambahkan');
}

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
