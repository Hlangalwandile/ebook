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
        $this->middleware(['auth','verified']);
    }
    
    public function show($id){
        $book = Book::find($id);
        $modules = Module::all()->where('bookID',$id);
        if(count($modules)){
            $units = Unit::all()->where('bookID',$id);
            return view('ebook.page',['book' => $book , 'units' => $units, 'modules' => $modules, 'current_module' => 1 ]);
        } else {
            $message = 'Book has no chapters yet';
            return redirect(route('dashboard.books'))->with('error',$message);
        }  
    }
    
    public function showModule($id,$module){
        $book = Book::find($id);
        $modules = Module::all()->where('bookID',$id);
        if(count($modules)){
            $units = Unit::all()->where('bookID',$id);
            return view('ebook.page',['book' => $book , 'units' => $units, 'modules' => $modules, 'current_module' => $module ]);
        } else {
            $message = 'Book has no chapters yet';
            return redirect(route('dashboard.books'))->with('error',$message);
        } 
    }

    public function editBook($id){
        $book = Book::find($id);
        $modules = Module::all()->where('bookID',$id);
        return view('ebook.editBook',['book' => $book,'modules' => $modules]);
    }

    public function addBook()
    {
        return view('ebook.addBook');
    }

    public function saveBook(Request $req)
    {
        $book = new Book();
        $book -> title = request('title');
        $book -> ISBN = request('ISBN');
        $book -> categories = request('categories');
        $book -> discription = request('discription');
        $book -> author = request('author');
        $book -> publisher = request('publisher');

        if($req->file('image1')){
            $imageLink = $req->file('image1')->store('public/images');
            $name = str_replace("public/images/", "",$imageLink);
            $image = array("name"=>$name,"text"=> request('imageName1'),"link"=> $imageLink);
            $book->images = $image;
        }
        
        $message = 'Book added successfully';
        $book -> save();
        return redirect(route('dashboard.books'))->with('success',$message);
    }

    public function saveEditBook($id)
    {
        $book = Book::find($id);
        $book -> title = request('title');
        $book -> ISBN = request('ISBN');
        $book -> discription = request('discription');
        $book -> author = request('author');
        $book -> publisher = request('publisher');
        $book -> categories = request('categories');
        $modules = Module::all()->where('bookID',$id);
        return view('ebook.editBook',['book' => $book,'modules' => $modules]);
    }
}
