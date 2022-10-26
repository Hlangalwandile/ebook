<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UnitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
}
