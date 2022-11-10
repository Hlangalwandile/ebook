<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\User;
use App\Models\Unit;
use Auth;
use File;

class UnitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($book,$module)
    {
        $units = Unit::all()->where('bookID',$book)->where('moduleID',$module);
        $units = $units->sortBy('order');
        return view('units.index',['units'=>$units,'module'=>$module,'book'=>$book]);
    }
    public function addUnit($book,$module)
    {
        return view('units.addUnit');
    }
    public function saveUnit(Request $req, $book,$module)
    {
        $units = Unit::all()->where('bookID',$book)->where('moduleID',$module);
        $totalUnits = 0;
        $totalUnits = count($units);
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
        $unit->order = $totalUnits + 1;
        $unit->save();
        $message = 'Unit added succesfully';
        return redirect(route('units.index',[$book,$module]))->with('success',$message);
    }

    public function deleteUnit($book,$module,$id)
    {
        $units = Unit::all()->where('bookID',$book)->where('moduleID',$module);
        $unit = Unit::find($id);
        foreach($units as $item){
            if($item->order > $unit->order){
                $item->order = $item->order - 1;
                $item->save();
            }
        }   
        
        if($unit->image1 != null){
            if(File::exists(public_path('storage/images/'.$unit->image1['name']))){
                File::delete(public_path('storage/images/'.$unit->image1['name']));
            }
        }
        if($unit->image2 != null){
            if(File::exists(public_path('storage/images/'.$unit->image2['name']))){
                File::delete(public_path('storage/images/'.$unit->image2['name']));
            } else {
                echo '<script>alert("image route not found")</script>';
            }
        }
        if($unit->image3 != null){
            if(File::exists(public_path('storage/images/'.$unit->image3['name']))){
                File::delete(public_path($unit->image3['name']));
            }
        }
        if($unit->image4 != null){
            if(File::exists(public_path('storage/images/'.$unit->image4['name']))){
                File::delete(public_path('storage/images/'.$unit->image4['name']));
            }
        }
        $unit->delete();
        return redirect(route('units.index',[$book,$module]))->with('success','Unit deleted successfully');
    }

    public function pushUp($book,$module,$id)
    {
        $units = Unit::all()->where('bookID',$book)->where('moduleID',$module);
        $unit = Unit::find($id);
        foreach($units as $otherUnit){
            $topUnit = 0;
            if($unit->order >= 1){
                $topUnit = $unit->order -1;
                if($otherUnit->order == $topUnit){
                    $otherUnit->order = $topUnit +1;
                    $unit->order = $topUnit;
                    $otherUnit->save();
                    $unit->save();
                }
            }
        }
        return redirect(route('units.index',[$book,$module]))->with('success','unit pushed up');
    }
    public function pushDown($book,$module,$id)
    {
        $units = Unit::all()->where('bookID',$book)->where('moduleID',$module);
        $unit = Unit::find($id);
        $total = count($units);
        foreach($units as $otherUnit){
            $BottomUnit = 0;
            if($unit->order < $total){
                $BottomUnit = $unit->order + 1;
                if($otherUnit->order == $BottomUnit){
                    $otherUnit->order = $BottomUnit - 1;
                    $unit->order = $BottomUnit;
                    $otherUnit->save();
                    $unit->save();
                }
            }
        }
        return redirect(route('units.index',[$book,$module]))->with('success','unit pushed down');
    }
}

