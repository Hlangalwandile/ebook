<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Ebook;
use App\Models\Module;
use App\Models\Unit;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function show($id){
        $book = Book::find($id);
        $modules = Module::all()->where('bookID',$id);
        $units = Unit::all()->where('bookID',$id);
        return view('ebook.page',['book' => $book , 'units' => $units, 'modules' => $modules, 'current_module' => 1 ]);
    }
}
