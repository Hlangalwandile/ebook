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
        return view('units.index',['units'=>$units,'module'=>$module,'book'=>$book]);
    }
    public function addUnit($book,$module)
    {
        return view('units.addUnit');
    }
    public function saveUnit(Request $req, $book,$module)
    {
        $units = Unit::all()->where('bookID',$book)->where('moduleID',$module);
        $modules = count($units);
        $unit = new Unit();
        
        if($req->file('image1')){
            $imageLink = $req->file('image1')->store('public/images');
            $name = str_replace("public/images/", "",$imageLink);
            $image = array("name"=>$name,"text"=> request('imageName1'),"link"=> $imageLink);
            $unit->image1 = $image;
        }
        if($req->file('image2')){
            $imageLink = $req->file('image2')->store('public/images');
            $name = str_replace("public/images/", "",$imageLink);
            $image = array("name"=>$name,"text"=> request('imageName2'),"link"=> $imageLink);
            $unit->image2 = $image;
        }
        if($req->file('image3')){
            $imageLink = $req->file('image3')->store('public/images');
            $name = str_replace("public/images/", "",$imageLink);
            $image = array("name"=>$name,"text"=> request('imageName3'),"link"=> $imageLink);
            $unit->image3 = $image;
        }
        if($req->file('image4')){
            $imageLink = $req->file('image4')->store('public/images');
            $name = str_replace("public/images/", "",$imageLink);
            $image = array("name"=>$name,"text"=> request('imageName4'),"link"=> $imageLink);
            $unit->image4 = $image;
        }
        $unit->bookID = $book;
        $unit->moduleID = $module;
        $unit->type = request('type');
        $unit->title = request('title');
        $unit->header = request('header');
        $unit->text = request('unitText');
        $unit->order = $modules + 1;
        $unit->save();
        $message = 'Unit added succesfully';
        return redirect(route('units.index',[$book,$module]))->with('success',$message);
    }
}

