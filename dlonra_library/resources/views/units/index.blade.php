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
                            Unit: {{$unit->title}}
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
                                    <input type="text" class="form-control mt-1" id="unitTitle" placeholder="Title displayed on sidebar" name="title" value="{{$unit->title}}">
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="unitHeader">Heading:</label>
                                    <input type="text" class="form-control mt-1" id="unitHeader" placeholder="Enter unit header" name="header" value="{{$unit->header}}">
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
                                        <div class="row px-3">
                                            <div class="col-sm-3 px-0">
                                                <div class="imgTile" style='background-image: url("https://cdn.vox-cdn.com/thumbor/hS04MeMUzUIL7u38XraVY0g8dOg=/0x0:3600x2400/920x613/filters:focal(2126x857:2702x1433):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/65893622/Globe_Amaranth_iStock_914482024.8.jpg");'>
                                                    <div class="container-fluid d-flex justify-content-end">
                                                        <form action="" method="post">
                                                            <button type="submit" class="btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                                  </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    image
                                                </div>
                                            </div>
                                            <div class="col-sm-3 px-0">
                                                <div class="imgTile" style='background-image: url("https://cdn.vox-cdn.com/thumbor/hS04MeMUzUIL7u38XraVY0g8dOg=/0x0:3600x2400/920x613/filters:focal(2126x857:2702x1433):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/65893622/Globe_Amaranth_iStock_914482024.8.jpg");'>
                                                    <div class="container-fluid d-flex justify-content-end">
                                                        <form action="" method="post">
                                                            <button type="submit" class="btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                                  </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    image
                                                </div>
                                            </div>
                                            <div class="col-sm-3 px-0">
                                                <div class="imgTile" style='background-image: url("https://cdn.vox-cdn.com/thumbor/hS04MeMUzUIL7u38XraVY0g8dOg=/0x0:3600x2400/920x613/filters:focal(2126x857:2702x1433):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/65893622/Globe_Amaranth_iStock_914482024.8.jpg");'>
                                                    <div class="container-fluid d-flex justify-content-end">
                                                        <form action="" method="post">
                                                            <button type="submit" class="btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                                  </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    image
                                                </div>
                                            </div>
                                            <div class="col-sm-3 px-0">
                                                <div class="imgTile" style='background-image: url("https://cdn.vox-cdn.com/thumbor/hS04MeMUzUIL7u38XraVY0g8dOg=/0x0:3600x2400/920x613/filters:focal(2126x857:2702x1433):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/65893622/Globe_Amaranth_iStock_914482024.8.jpg");'>
                                                    <div class="container-fluid d-flex justify-content-end">
                                                        <form action="" method="post">
                                                            <button type="submit" class="btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                                  </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                    image
                                                </div>
                                            </div>
                                        </div>
                                    {{-- <div class="form-group row">
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
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col">
                                
                                <div class="mb-3 mt-3">
                                    <label for="unitText">Text:</label>
                                    
                                        @if ($unit->text != null)
                                        <script src="javascript">
                                            document.getElementById('unitText').innerHTML = 'Your html content';
                                        </script>
                                        <textarea name="unitText" id="unitText" cols="30" rows="14" class="form-control mt-1"></textarea>
                                        @endif
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
                            {{-- <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteUnit{{$unit->id}}">
                                Delete
                            </button>     --}}
                            <a class="btn btn-outline-danger" onclick="return confirm('Are you sure?')" href="{{route('unit.delete',[$unit->bookID,$unit->moduleID,$unit->id])}}">Delete<i class="fa fa-trash"></i></a>
                        </div>
                        <div class="col-sm-6 d-flex justify-content-end">
                            <form action="" method="post">
                                @csrf
                                <label for="pushUp">Order: </label>
                                    <div class="btn-group" role="group" aria-label="Basic example">                        
                                        <a id="pushUp" href="{{route('unit.pushUp',[$unit->bookID,$unit->moduleID,$unit->id])}}" class="btn btn-outline-primary">        
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                            </svg>  
                                        </a>
                                        <a href="{{route('unit.pushDown',[$unit->bookID,$unit->moduleID,$unit->id])}}" class="btn btn-outline-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        {{-- UNIT END --}} 
       

        
       @endforeach 
    </div>
</div>

@endsection