@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        
        <div class="col-lg-8">
            <div class="col-md-12">
                <h2>N1 Industrial Electronics</h2>
                <p>Mo Arnold - 2nd Edition</p>
            </div>
            <div class="row">
                @for ($i = 1; $i <= 20; $i++)
                    <div class="col-sm-3 pb-4">
                        <a href="{{route('ebook.show',$id)}}" class="btn btn-outline-secondary container-fluid">Chapter {{$i}}</a>
                    </div>
                @endfor
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3 row justify-content-center">
            <div id="buyBookCard" class="card border-0" >
                @if (!empty($book->images))
                    @php
                        $imageArray = $book->images;
                        $link = '';
                        if(isset($imageArray['name'])){
                            $link = 'storage/images/'.$imageArray['name'];
                        }
                    @endphp
                
                <img src="{{asset($link)}}"  class="img-thumbnail" alt="bool cover" width="100">    
                @else
                
                    <img src="{{asset('assets/books/book_9781991222534_N1IE.png')}}" class="card-img-top" alt="...">
                @endif 
                <div class="card-body px-0 ">
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" style="width: 100%;" data-bs-target="#buyBookModal">
                        Purchase Book
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="buyBookModal" tabindex="-1" aria-labelledby="buyBookModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body row d-flex align-items-center">
                                <div class="col">
                                    <p>You are about to go to <br> www.DLonra.co.za</p>
                                </div>
                                <div class="col text-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                    <a href="https://dlonra.co.za/product/n1-industrial-electronics-mo-arnold-2nd-edition/?v=e4dd286dc7d7" class="btn btn-light" target="_blank">Go to shop</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
  
                </div>
              </div>
             
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-8">
            <h2>Book Description</h2>
            <p>This Industrial Electronics N3 textbook was written according to the approved NATED syllabus for FET students. This textbook is inclusive of practical examples and straightforward explanations on the subject matter to ensure that the student understands the content with ease. Some features include important keywords, did you know, examples and self-evaluation exercises or activities.</p>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-sm-2 book-feature">
            <div class="btn btn-dlonra-red btn-beyond" >
                <table class="w-100">
                    <tr><td>O</td><td>Immersive <br>reading</td></tr>
                </table>
            </div>
        </div>
        <div class="col-sm-2 book-feature">
            <div class="btn btn-dlonra-yellow btn-beyond">
                <table class="w-100">
                    <tr><td>O</td><td>Easy <br>to use</td></tr>
                </table>
            </div>
        </div>
        <div class="col-sm-2 book-feature">
            <div class="btn btn-dlonra-orange btn-beyond">
                <table class="w-100">
                    <tr><td>O</td><td>Interactive <br>engagement</td></tr>
                </table>
            </div>
        </div>
        <div class="col-sm-2 book-feature">
            <div class="btn btn-dlonra-red btn-beyond">
                <table class="w-100">
                    <tr><td>O</td><td>Simple <br>Navigation</td></tr>
                </table>
            </div>
        </div>

    </div>

    <div class="row py-5">
        <div class="col-md-12 py-3">
            <h2>More Books</h2>
        </div>
        <div class="col-md-2">
            <div class="card border-0" style="max-width: 18rem;">
                <img src="{{asset('assets/books/book_9781991222534_N1IE.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">N1 Industrial<br> Electronics</h5>
                    <p class="card-text">Mo Arnold 2nd Edition</p>
                  <a href="{{route('library.book',1)}}" class="btn btn-primary">Buy now</a>
                </div>
              </div>
        </div>
        <div class="col-md-2">
            <div class="card border-0" style="max-width: 18rem;">
                <img src="{{asset('assets/books/book_9781991222541_N2IE.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">N2 Industrial<br> Electronics</h5>
                    <p class="card-text">Mo Arnold 2nd Edition</p>
                  <a href="{{route('library.book',1)}}" class="btn btn-primary">Buy now</a>
                </div>
              </div>
        </div>
        <div class="col-md-2">
            <div class="card border-0" style="max-width: 18rem;">
                <img src="{{asset('assets/books/book_9781991222558_N3IE.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">N3 Industrial<br> Electronics</h5>
                    <p class="card-text">Mo Arnold 2nd Edition</p>
                  <a href="{{route('library.book',1)}}" class="btn btn-primary">Buy now</a>
                </div>
              </div>
        </div>

    </div>
</div>

@endsection
