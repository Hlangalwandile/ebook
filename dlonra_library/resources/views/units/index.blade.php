@extends('layouts.user')
@section('content')

<div class="container row">
    <h2>Units</h2><br>
    <div class="col-md-12">
        <a href="{{route('units.addUnit',[$book,$module])}}" class="btn btn-outline-primary mb-3">Add unit</a>
    </div>
    <div class="col-md-12">
       @foreach ($units as $unit)
            {{-- UNIT START --}}
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            Unit {{$unit->order}} | Title: {{$unit->title}}
                        </div>
                        <div class="col ">
                            <div class=" d-flex justify-content-end">
                                <button class="btn btn-primary" data-bs-toggle='collapse' data-bs-target="#unit-body-{{$unit->id}}">
                                    open
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body collapse" id="unit-body-{{$unit->id}}">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-3 mt-3">
                                    <label for="unitTitle">Title:</label>
                                    <input type="text" class="form-control mt-1" id="unitTitle" placeholder="Title displayed on sidebar" name="title">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="unitHeader">Heading:</label>
                                    <input type="text" class="form-control mt-1" id="unitHeader" placeholder="Enter unit header" name="header">
                                </div>
                                <div class="mt-3">
                                    <label for="unitType">Section type:</label>
                                    <select name="" id="unitType" class="form-control mt-1" name="type">
                                        <option value="1">Text over images</option>
                                        <option value="2">Text next to images</option>
                                    </select> 
                                </div>
                                <div class="mt-2">
                                    <span>Images:</span>
                                    <div class="form-group row">
                                        <div class="col mt-1"  style="padding-right: 0%">
                                            <input type="file" class="form-control mr-4" name="image1" id="image1" enctype="multipart/form-data">
                                        </div>
                                        <div class="col mt-1">
                                            <input type="text" name="imageName1" id="imageName1" class="form-control" placeholder="image name 1">
                                        </div>
                                    </div>
                                    <div class="form-group mt-1 row">
                                        <div class="col mt-1"  style="padding-right: 0%">
                                            <input type="file" class="form-control mr-4" name="image2" id="image2" enctype="multipart/form-data">
                                        </div>
                                        <div class="col mt-1">
                                            <input type="text" name="imageName2" id="imageName2" class="form-control" placeholder="image name 2">
                                        </div>
                                    </div>
                                    <div class="form-group mt-1 row">
                                        <div class="col mt-1"  style="padding-right: 0%">
                                            <input type="file" class="form-control mr-4" name="image3" id="image3" enctype="multipart/form-data">
                                        </div>
                                        <div class="col mt-1">
                                            <input type="text" name="imageName3" id="imageName3" class="form-control" placeholder="image name 3">
                                        </div>
                                    </div>
                                    <div class="form-group mt-1 row">
                                        <div class="col mt-1"  style="padding-right: 0%">
                                            <input type="file" class="form-control mr-4" name="image4" id="image4" enctype="multipart/form-data">
                                        </div>
                                        <div class="col mt-1">
                                            <input type="text" name="imageName4" id="imageName4" class="form-control" placeholder="image name 4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                
                                <div class="mb-3 mt-3">
                                    <label for="unitText">Text:</label>
                                    <textarea name="unitText" id="unitText" cols="30" rows="14" class="form-control mt-1"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="conainer d-flex justify-content-end ">
                                <button type="submit" class="btn btn-outline-primary col-sm-1" >update</button>
                            </div>
                            
                        </div>
                    </form>
                    
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6">  
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUnit{{$unit->id}}">
                                Delete
                            </button>    
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
        {{-- UNIT END --}} 
        <div class="modal" id="deleteUnit{{$unit->id}}">
            <div class="modal-dialog">
                <div class="modal-centent">
                    <div class="modal-header">
                        <h4 class="modal-title">Danger!</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        You are about to delete this unit "{{$unit->title}}". To delete press continue.
                    </div>
                    <div class="modal-footer">
                        <form action="" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                            <button type="" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       @endforeach 
    </div>
</div>

@endsection