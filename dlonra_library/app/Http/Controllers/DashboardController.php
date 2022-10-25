<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
       return view('dashboard.dashboard');
    }
    public function showBooks()
    {
       return view('dashboard.books');
    }
    public function showRedeem()
    {
       return view('dashboard.redeem');
    }
}
