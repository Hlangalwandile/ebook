<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\User;
use App\Models\Unit;
use Auth;

class UnitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($book,$module)
    {
        $units = Unit::all()->where('bookID',$book)->where('moduleID',$module);
        return view('units.index',['units'=>$units]);
    }
}
