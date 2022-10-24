@extends('layouts.ebook')
@section('content')
@include('ebook.sidebar')
<section class="module">
    <div class="above-module">
        <button class="btn md-4" id="menu-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" stroke="#969696" stroke-width="2" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
              </svg>
        </button>
    </div>
<h1 class="module-title"><span class="ModuleOrderNumber">
    @if ($current_module < 10 )
        0{{$current_module}}
        @else
        {{$current_module}}
    @endif    
    </span><br>
    @foreach ($modules as $module)
        @if ( $module->id== $current_module)
            {{$module->title}}
        @endif
    @endforeach
</h1>
@include('ebook.unit')
</section>





@endsection