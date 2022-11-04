@extends('layouts.user')
@section('content')
<div class="container row">
    <h2>Add new unit</h2>
    <div class="col-md-12">
        {{-- UNIT START --}}
            <div class="card">
                
                <div class="card-body">
                    <form action="{{route('units.saveUnit',[request()->book,request()->module])}}" method="post" enctype="multipart/form-data">
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
                                    <select id="unitType" class="form-control mt-1" name="type">
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
                                <button type="submit" class="btn btn-outline-primary col-sm-1" >submit</button>
                            </div>
                            
                        </div>
                    </form>
                    
                </div>
                
            </div><br>
        {{-- UNIT END --}}  
        
    </div>
</div>
@endsection