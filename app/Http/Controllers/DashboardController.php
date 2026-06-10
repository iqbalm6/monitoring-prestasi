<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role;

        if($role == 'admin')
        {
            return view('dashboard.admin');
        }

        if($role == 'guru')
        {
            return view('dashboard.guru');
        }

        return view('dashboard.orangtua');
    }
}