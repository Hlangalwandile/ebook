<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Booktoken;
use App\Models\Book;
use App\Models\Module;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

    public function showBooks(){
    $role = auth()->user()->role;
    if($role == 1){
        $books = Book::All();
        return view('dashboard.books',['books'=>$books]);
    } 
        else 
    {
        $books = [];
        $booklist = [];
        $mybooks = new \stdClass();
        
        if(isset(auth()->user()->books{'books'})){
            $mybooks = auth()->user()->books{'books'};
        } else {
            $message = 'No books found';
            return redirect(route('dashboard'))->with('error',$message);
        }
        foreach($mybooks as $ownedbook){
          array_push($booklist,$ownedbook['id']);
        }
        foreach($booklist as $id){
          $book = Book::find($id);
          array_push($books,$book);
        }
        return view('dashboard.books',['books'=>$books]);
    }
      
    }

    public function showRedeem()
    {
        $books = Book::All();
        $mybooks = new \stdClass();
        
        if(isset(auth()->user()->books{'books'})){
            $mybooks = auth()->user()->books{'books'};
        } 
        return view('dashboard.redeem',['books'=>$books,'mybooks'=>$mybooks]); 
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

    private function makeTokenActive($token){
        $bookToken = Booktoken::all()->where('token', $token);
        foreach($bookToken as $token){
            $token->active = 1;
            $token->save();
        }
        
    }

    public function redeemToken(){
        if (DB::table('booktokens')->where('token', request('token'))->exists()) {
           $bookToken = Booktoken::all()->where('token', request('token'));
            foreach($bookToken as $bookT){
                if($bookT->active == 0){
                    $user = User::find(auth()->user()->id);
                    if(isset($user->books)){
                        $books = $user->books{'books'};
                        $item = '{"id":"'.request('book').'","start":"'.date("Y-m-d H:i:s").'","end":"0000-00-00"}';
                        $item = json_decode($item);
                        array_push($books,$item);
                        $record = '{"books":'.json_encode($books).'}';
                        $user->books= json_decode($record);
                        $user->save();
                        $this->makeTokenActive(request('token'));
                    } else {
                        $item = '{"id":"'.request('book').'","start":"'.date("Y-m-d H:i:s").'","end":"0000-00-00"}';
                        $record = '{"books":['.$item.']}';
                        $user->books = json_decode($record);
                        $user->save();
                        $this->makeTokenActive(request('token'));
                    }
                    $message = 'Now you can start reading';
                    return redirect(route('dashboard.redeem'))->with('success',$message);
                } else {
                    $message = 'Book token has already been used';
                    return redirect(route('dashboard.redeem'))->with('error',$message);
                }
            }

        } else {
            $message = 'Token not found';
            return redirect(route('dashboard.redeem'))->with('error',$message);
        }
    }

}
