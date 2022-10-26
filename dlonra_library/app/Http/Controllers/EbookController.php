<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Ebook;
use App\Models\Module;
use App\Models\Unit;
use App\Models\User;
use Auth;

class EbookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id){
        $book = Book::find($id);
        $modules = Module::all()->where('bookID',$id);
        $units = Unit::all()->where('bookID',$id);
        return view('ebook.page',['book' => $book , 'units' => $units, 'modules' => $modules, 'current_module' => 1 ]);
    }

    public function addBookPage()
    {
        return view('ebook.addBook');
    }

    public function saveBook()
    {
        $book = new Book();
        $book -> title = request('title');

        $message = 'Book added successfully';
        return redirect(route('dashboard.books'))->with('success',$message);
    }
}
