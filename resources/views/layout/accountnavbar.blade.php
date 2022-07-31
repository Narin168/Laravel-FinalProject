<nav class=" sticky-top shadow p-3 bg-body navbar navbar-expand-lg " style="background-color: #2fafe5;">
        <div class="container-fluid px-lg-5">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                    <li class="nav-item mx-3">
                    <a class="navbar-brand" aria-current="page" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                    <a class="navbar-brand" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                    <a class="navbar-brand dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action </a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item mx-3">
                    <a class="navbar-brand" href="{{ url('/history') }}">History</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 border border-primary rounded-3" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary rounded-3" type="submit" style="" >Search</button>
                </form>
                <!-- <div class="btn-group mx-2">
                    <a href="" class="btn btn-outline-primary pe-none" >{{Auth::user()->name}}</a>
                    <a href="{{ url('/logout') }}" class="btn btn-primary">Log Out</a>
                </div> -->
                <div class="btn-group mx-2" role="group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Log Out</a></li>
                            @csrf
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</nav>