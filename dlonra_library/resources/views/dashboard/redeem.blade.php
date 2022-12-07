@extends('layouts.user')
@section('content')
<div class="container">

<h2>Redeem Books</h2>

  <div class="table-responsive row ">
    <table id="redeemBooksTable" class="table display table-borderless pr-5">
    <caption>List of users</caption>
    <thead>
      <tr>
        <th scope="col">Cover</th>
        <th scope="col">Book</th>
        <th scope="col">Redeem Token</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <th scope="row">
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
              <strong>Publisher : </strong>{{$book->publisher}} <br>
              @if (isset($book->categories))
              <strong>-Categories-</strong> 
              @foreach ($book->categories as $category)
              <br>{{$category}}
              @endforeach
              @endif
            </td>
            <td>
              @php
              $owned = 0;
              foreach ($mybooks as $mybookID) {
                if ($mybookID['id'] == $book->id) {
                  $owned = 1;
                } 
              }
              @endphp
              @if ($owned)
                  <a class="btn btn-dlonra btn-dlonra-red mb-2" href="{{route('ebook.show',$book->id)}}">Read book</a><br>
              @else
              <form action="{{route('redeemToken')}}" method="post">
                @csrf
                <div class="input-group mb-3 mcd-redeem-group">
                    <input type="hidden" name="book" value="{{$book->id}}">
                    <input type="text" class="form-control mcd-redeem-input" name="token" style="border-right: 0px; border-top-right-radius:0%;border-bottom-right-radius:0px;" placeholder="enter redeem token" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                    <button class="btn btn-dlonra-red" style="border-top-right-radius:15px;border-bottom-right-radius:15px;" type="submit">Redeem</button>
                </div>
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