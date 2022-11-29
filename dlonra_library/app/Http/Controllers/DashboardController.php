<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use Auth;
class DashboardController extends Controller
{

   public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function showDashboard()
    {
      $books = Book::all();
      return view('dashboard.dashboard');
    }
    public function showBooks()
    {
      $books = Book::All();
      
      return view('dashboard.books',['books'=>$books]);
    }
    public function showRedeem()
    {
       return view('dashboard.redeem');
    }
}
