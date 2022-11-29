@extends('layouts.user')
@section('content')
<div class="container">
    <h2>Add Book</h2>
    <form action="{{route('ebook.saveBook')}}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="row">
        <div class="col-md-4">
                <div class="mb-3">
                    <label for="addTitle" class="form-label">Book Title:</label>
                    <input type="text" class="form-control" id="addTitle" name='title' placeholder="title">
                  </div>
                  <div class="mb-3">
                    <label for="addISBN" class="form-label">ISBN No:</label>
                    <input type="text" class="form-control" id="addISBN" name="ISBN" placeholder="ISBN No">
                  </div>
                  <div class="mb-3">
                    <label for="addauthor" class="form-label">Author:</label>
                    <input type="text" class="form-control" id="addauthor" name="author" placeholder="author">
                  </div>
                  <div class="mb-3">
                    <label for="addpublisher" class="form-label">Publisher:</label>
                    <input type="text" class="form-control" id="addpublisher" name="publisher" placeholder="publisher">
                  </div>
                  <div class="mb-3">
                    <label for="categories" class="form-label">Select Categories:</label>
                    <select name="categories[]"  id="categories" class="form-control" multiple>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="addcover" class="form-label">Book Cover:</label>
                    <input type="file" class="form-control" id="addcover" name="image1">
                  </div>
                  <div class="mb-3">
                    <label for="discription" class="form-label">Book discription:</label>
                    <textarea name="" id="discription" name="discription" cols="30" class="form-control" rows="10"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>
</form>
</div>
@endsection

