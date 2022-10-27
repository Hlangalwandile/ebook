@extends('layouts.user')
@section('content')

<div class="container">

<h2>My Books</h2>

<div class="page-buttons-section">
    <a class="btn btn-primary" href="{{route('ebook.addBook')}}" role="button">Add Book</a>
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
                <img src="https://dummyimage.com/100x100/000/fff"  class="img-thumbnail" alt="...">
            </th>
            <td>
              <strong>Title : </strong>{{$book->title}} <br>
              <strong>Author : </strong>{{$book->author}} <br>
              <strong>Publisher : </strong>{{$book->publisher}}
            </td>
            <td> 
              @foreach ($book->categories as $category)
                  {{$category}} <br>
              @endforeach
            </td>
            <td>
              <a class="btn btn-primary" href="{{route('ebook.show',$book->id)}}">open</a>
              <a href="{{route('ebook.edit',$book->id)}}" class="btn btn-warning">edit</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  </div>
    
  </div>
  

@endsection