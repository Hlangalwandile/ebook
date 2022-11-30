<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Module;
use App\Models\Unit;
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
      $myBooks = auth()->user()->books{'books'};

      foreach($mybooks as $ownedbook){

        
      }

      return view('dashboard.books',['books'=>$books]);
    }
    public function showRedeem()
    {
        $books = Book::All();
        return view('dashboard.redeem',['books'=>$books]);
    }

    public function deleteBook($id){
      $book = Book::find($id);
      $modules = Module::all()->where('bookID',$id);
      $units = Unit::all()->where('bookID',$id);
      $message = 'Book deleted successfully';
      foreach($units as $unit)
      {
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
      }
      foreach($modules as $module){
        $module->delete();
      }
      $book->delete();
      $message = 'Book deleted successfully';
      return redirect(route('dashboard.books'))->with('success',$message);
    }


}
