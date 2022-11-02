<nav class="navbar navbar-expand d-flex flex-column align-item-start" id="ebook-sidebar">
    <a href="#" class="navbar-brand  mt-5">
        <div class="display-5">
            <span class="sidebarNavigator">
                @php
                    $next = 0;
                    $prev = 0;
                    $next = $current_module + 1;
                    $prev = $current_module - 1;
                    $moduleNo = count($modules);
                @endphp
                <a class="chapter-link" @if ($current_module > 1) href="{{route('ebook.showModule',[$book->id,$prev])}}"@else class="isDisabled" @endif>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left @if ($current_module > 1) chapter-chevron @else chapter-chevron-disables @endif " viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                      </svg>
                </a>
                <span class="chapter">
                    Chapter {{$current_module}}
                </span> 
                <a class="chapter-link" @if ($next <= $moduleNo) href="{{route('ebook.showModule',[$book->id,$next])}}"@else class="isDisabled" @endif >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"  fill="currentColor" class="bi bi-chevron-right @if ($next <= $moduleNo) chapter-chevron @else chapter-chevron-disables @endif" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                </a> 
                
            </span>  
        </div>
    </a>
    <ul class="navbar-nav d-flex flex-column mt-5 w-100">
        @foreach ($units as $unit)
        @if ($unit->moduleID == $current_module)
        <li class="nav-item ebook-nav-item  w-100">
            <a href="#unit-{{$unit->id}}" class="nav-link  pl-4">{{$unit->header}}</a>
        </li>
        @endif
    @endforeach
        
    </ul>
</nav>