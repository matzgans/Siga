<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $active = 'dashboard';
        return view('dashboard.dashboard-index', compact('active'));
    }
}
