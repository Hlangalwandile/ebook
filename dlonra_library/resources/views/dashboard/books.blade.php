@extends('layouts.user')
@section('content')
<div class="container">

<h2>My Books</h2>

<div class="page-buttons-section">
    <a class="btn btn-dlonra-red" href="{{route('ebook.addBook')}}" role="button">Add Book</a>
</div>

  <div class="table-responsive">
    <table id="myBooksTable" class="table display table-borderless">
    <caption>List of users</caption>
    <thead>
      <tr>
        <th scope="col">Cover</th>
        <th scope="col">Book</th>
        <th scope="col">Categories</th>
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
            </td>
            <td> 
              @if (isset($book->categories))
              @foreach ($book->categories as $category)
                  {{$category}} <br>
              @endforeach
              @endif
              
            </td>
            <td>
              <a class="btn btn-dlonra-red" href="{{route('ebook.show',$book->id)}}">open</a>
              <a href="{{route('ebook.editBook',$book->id)}}" class="btn btn-dlonra-orange">edit</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  </div>
    
  </div>
  

@endsection