@extends('layouts.user')
@section('content')
<div class="row">
    <div class="container col-md-4">
    <form action="{{route('ebook.saveBook')}}" method="POST" >
          @csrf
        <div class="row">
            <div class="col-md-12">
                <h2>Add Book</h2>
                    <div class="mb-3">
                        <label for="addTitle" class="form-label">Book Title:</label>
                        <input type="text" class="form-control" id="addTitle" value="{{$book->title}}" name='title' placeholder="title">
                      </div>
                      <div class="mb-3">
                        <label for="addISBN" class="form-label">ISBN No:</label>
                        <input type="text" class="form-control" id="addISBN" value="{{$book->ISBN}}" name="ISBN" placeholder="ISBN No">
                      </div>
                      <div class="mb-3">
                        <label for="addauthor" class="form-label">Author:</label>
                        <input type="text" class="form-control" id="addauthor" value="{{$book->author}}" name="author" placeholder="author">
                      </div>
                      <div class="mb-3">
                        <label for="addpublisher" class="form-label">Publisher:</label>
                        <input type="text" class="form-control" id="addpublisher" value="{{$book->publisher}}" name="publisher" placeholder="publisher">
                      </div>
                      <div class="mb-3">
                        <label for="categories" class="form-label">Select Categories:</label>
                        <select name="categories[]"  id="categories" class="form-control" multiple>
                            <option value="Electrical Engineering">Electrical Engineering</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="discription" class="form-label">Book discription:</label>
                        <textarea name="" id="discription" name="discription" cols="30" class="form-control" rows="10">{{$book->discription}}</textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">update</button>
                </div>
        </div>
    </form>
    </div>
    <div class="container col-md-6">
        <h2>Modules</h2>
        <form action="{{route('module.addModule',$book->id)}}" method="post" class="mb-3">
            @csrf
            <div class="mb-3">
                <label for="addModule" class="form-label">Module Title:</label>
                <input type="text" class="form-control" id="addModule" name='title' placeholder="title" required>
            </div>
              <button type="submit" class="btn btn-primary">add module</button>
        </form>
        @foreach ($modules as $module)
        <div class="card mb-3">
            <div class="card-header">Module:{{$module->order}}</div>
            <div class="card-body">{{$module->title}}</div>
            <div class="card-footer ">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{route('units.index',[$module->bookID,$module->id])}}" class="btn btn-outline-primary">units</a>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-end">
                        <form action="" method="post">
                            @csrf
                            <label for="pushUp">Order: </label>
                                <div class="btn-group" role="group" aria-label="Basic example">                        
                                    <button id="pushUp" type="button" class="btn btn-outline-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                    </svg>
                                    </button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>   
</div>
@endsection