@extends('layouts.user')
@section('content')
<div class="container">

<h2>My Books</h2>
{{-- @php
    foreach($mybooks as $ownedbook){
      print_r($ownedbook);
      echo "<br>";
    }
@endphp --}}
@if (auth()->user()->role == 1)
<div class="page-buttons-section">
  <a class="btn btn-dlonra-red" href="{{route('ebook.addBook')}}" role="button">Add Book</a>
</div>  
@endif
  <div class="table-responsive">
    <table id="myBooksTable" class="table display table-borderless">
    <caption>List of users</caption>
    <thead>
      <tr>
        <th scope="col">Cover</th>
        <th scope="col">Book</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <th scope="row">
              {{-- <img src="https://dummyimage.com/100x100/000/fff"  class="img-thumbnail" alt="..."> --}}  
              @if (!empty($book->images))
              @php
                  $imageArray = $book->images;
                  $link = '';
                  if(isset($imageArray['name'])){
                      $link = 'storage/images/'.$imageArray['name'];
                  }
              @endphp
              <img src="{{asset($link)}}"  class="img-thumbnail" alt="bool cover" width="100">  
    
                  
          @endif
            </th>
            <td>
              <strong>Title : </strong>{{$book->title}} <br>
              <strong>Author : </strong>{{$book->author}} <br>
              <strong>Publisher : </strong>{{$book->publisher}}
              @if (isset($book->categories))
              <strong>-Categories-</strong> 
              @foreach ($book->categories as $category)
              <br>{{$category}}
              @endforeach
              @endif
            </td>
            <td>
              <a class="btn btn-dlonra-red mb-2" href="{{route('ebook.show',$book->id)}}">Read book</a><br>
              @if(auth()->user()->role == 1)
                <a href="{{route('ebook.editBook',$book->id)}}" class="btn btn-dlonra-orange mb-2">Edit</a> <br>
                <form action="{{route('deleteBook',$book->id)}}" method="post">
                  @csrf
                  <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger mb-2">Delete</button>
                </form>
              @endif
              
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  </div>
    
  </div>
  

@endsection