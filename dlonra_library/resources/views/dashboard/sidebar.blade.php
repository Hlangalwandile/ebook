<nav class="navbar navbar-expand d-flex flex-column align-item-start" id="admin-sidebar">
    <a href="#" class="navbar-brand  mt-5">
        <div class="display-5">
            <span class="sidebarNavigator">
                <span class="chapter">
                    Admin 
                </span>
            </span>
        </div>
    </a>
    <ul class="navbar-nav d-flex flex-column mt-5 w-100">
        <li class="nav-item main-dash-nav-item w-100">
            <a href="{{route('dashboard')}}" class="nav-link  pl-4">Dashboard</a>
        </li> 
        <li class="nav-item main-dash-nav-item w-100">
            <a href="{{route('dashboard.books')}}" class="nav-link  pl-4">Books</a>
        </li>       
        <li class="nav-item main-dash-nav-item w-100">
            <a href="{{route('dashboard.redeem')}}" class="nav-link  pl-4">Redeem</a>
        </li> 
    </ul>
</nav>