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

    public function edit($id){
        $book = Book::find($id);
        $modules = Module::all()->where('bookID',$id);
        return view('ebook.editBook',['book' => $book,'modules' => $modules]);
    }

    public function addBookPage()
    {
        return view('ebook.addBook');
    }

    public function saveBook()
    {
        $book = new Book();
        $book -> title = request('title');
        $book -> ISBN = request('ISBN');
        $book -> categories = request('categories');
        $book -> discription = request('discription');
        $book -> author = request('author');
        $book -> publisher = request('publisher');
        $message = 'Book added successfully';
        $book -> save();
        return redirect(route('dashboard.books'))->with('success',$message);
    }

    public function editBook($id)
    {
        $book = Book::find($id);
        $book -> title = request('title');
        $book -> ISBN = request('ISBN');
        $book -> categories = request('categories');
        $book -> discription = request('discription');
        $book -> author = request('author');
        $book -> publisher = request('publisher');
        $modules = Module::all()->where('bookID',$id);
        return view('ebook.editBook',['book' => $book,'modules' => $modules]);
    }
}
