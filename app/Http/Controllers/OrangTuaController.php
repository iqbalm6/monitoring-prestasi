<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class OrangTuaController extends Controller
{
    
    public function index()
{
    $orangTua = User::where('role','orang_tua')->get();

    return view('orang-tua.index', compact('orangTua'));
}

    
    public function create()
{
    return view('orang-tua.create');
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
        'role' => 'orang_tua',
    ]);

    return redirect()
        ->route('orang-tua.index')
        ->with('success','Data orang tua berhasil ditambahkan');
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
