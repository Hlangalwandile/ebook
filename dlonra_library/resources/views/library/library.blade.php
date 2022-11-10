@extends('layouts.app')
@section('content')
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12 pb-5">
                    <center><h2>Available eBooks</h2></center>
                </div>
                <div class="col-md-3">
                    <div class="card border-0" style="max-width: 18rem;">
                        <img src="https://dummyimage.com/200x250/000/fff" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="{{route('library.book',1)}}" class="btn btn-primary">Buy now</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0" style="max-width: 18rem;">
                        <img src="https://dummyimage.com/200x250/000/fff" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="{{route('library.book',2)}}" class="btn btn-primary">Buy now</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0" style="max-width: 18rem;">
                        <img src="https://dummyimage.com/200x250/000/fff" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="{{route('library.book',3)}}" class="btn btn-primary">Buy now</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div class="container py-5 col-md-9">
            <div class="row justify-content-center">
                <div class="col-md-12 pb-5">
                    <center><h2>eBooks comming soon</h2></center>
                </div>
                @for ($i = 0; $i < 16; $i++)
                <div class="col-md-3 pb-5">
                    <div class="card border-0 px-4" style="max-width: 18rem;">
                        <img src="https://dummyimage.com/200x250/000/fff" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">N1 Industrial electronics</h5>
                            <p class="card-text">Mo Arnold 2nd Edition</p>
                        </div>
                    </div>
                </div>
                @endfor
                
                      

            </div>
        </div>
@endsection
