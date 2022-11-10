@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <h2>N1 Industrial Electronics</h2>
            <p>Mo Arnold - 2nd Edition</p>
        <div class="row mt-5">
            @for ($i = 1; $i <= 20; $i++)
                <div class="col-sm-3 pb-4">
                    <a href="{{route('ebook.show',$id)}}" class="btn btn-outline-secondary container-fluid">Chapter {{$i}}</a>
                </div>
            @endfor
        </div>
        </div>
        <div class="col-md-4 justify-content-center">
            <div id="buyBookCard" class="card border-0" style="max-width: 18rem;">
                <img src="https://dummyimage.com/200x250/000/fff" class="card-img-top" alt="...">
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
            <div class="btn btn-primary container-fluid">
                <svg height="50" width="50">
                    <circle cx="15" cy="15" r="15" fill="#fff" />
                    Sorry, your browser does not support inline SVG.  
                  </svg>
            </div>
        </div>
        <div class="col-sm-2 book-feature">
            <div class="btn btn-primary container-fluid">
                <svg height="50" width="50">
                    <circle cx="15" cy="15" r="15" fill="#fff" />
                    Sorry, your browser does not support inline SVG.  
                  </svg>
            </div>
        </div>
        <div class="col-sm-2 book-feature">
            <div class="btn btn-primary container-fluid">
                <svg height="50" width="50">
                    <circle cx="15" cy="15" r="15" fill="#fff" />
                    Sorry, your browser does not support inline SVG.  
                  </svg>
            </div>
        </div>
        <div class="col-sm-2 book-feature">
            <div class="btn btn-primary container-fluid">
                <svg height="50" width="50">
                    <circle cx="15" cy="15" r="15" fill="#fff" />
                    Sorry, your browser does not support inline SVG.  
                  </svg>
            </div>
        </div>

    </div>

    <div class="row py-5">
        <div class="col-md-12 py-3">
            <h2>More Books</h2>
        </div>
        <div class="col-md-2">
            <div class="card border-0" style="max-width: 18rem;">
                <img src="https://dummyimage.com/200x250/000/fff" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{route('library.book',1)}}" class="btn btn-primary">Buy now</a>
                </div>
              </div>
        </div>
        <div class="col-md-2">
            <div class="card border-0" style="max-width: 18rem;">
                <img src="https://dummyimage.com/200x250/000/fff" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{route('library.book',1)}}" class="btn btn-primary">Buy now</a>
                </div>
              </div>
        </div>
        <div class="col-md-2">
            <div class="card border-0" style="max-width: 18rem;">
                <img src="https://dummyimage.com/200x250/000/fff" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{route('library.book',1)}}" class="btn btn-primary">Buy now</a>
                </div>
              </div>
        </div>

    </div>
</div>

@endsection
