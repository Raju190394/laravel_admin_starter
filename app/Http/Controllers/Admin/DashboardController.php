<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = \App\Models\User::count();
        $latestUsers = \App\Models\User::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalUsers', 'latestUsers'));
    }
}
