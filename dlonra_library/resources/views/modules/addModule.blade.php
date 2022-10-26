@extends('layouts.user')
@section('content')
<div class="container">
    <h2>Add Module</h2>
    <form action="{{'addBook'}}" method="POST">
    <div class="row">
        <div class="col-md-3">
            
                @csrf
                <div class="mb-3">
                    <label for="addTitle" class="form-label">Book Title:</label>
                    <input type="text" class="form-control" id="addTitle" name='title' placeholder="title">
                  </div>
                  <div class="mb-3">
                    <label for="addISBN" class="form-label">ISBN No:</label>
                    <input type="text" class="form-control" id="addISBN" name="ISBN" placeholder="ISBN No">
                  </div>
                  <div class="mb-3">
                    <label for="discription" class="form-label">Select Categories:</label>
                    <textarea name="" id="discription" name="discription" cols="30" class="form-control" rows="10"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">submit</button>
            
        </div>
    </div>
</form>
</div>
@endsection

