<nav class=" sticky-top shadow py-3  bg-body navbar navbar-expand-lg " style="background-color: #2fafe5; padding-right:52px;">
        <div class="container-fluid" style="padding-right:20px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-5">
                    <li>
                        <img class="img-fluid" src="/images/doctorHome.jpg" alt="" style="width:80px; padding-right:20px;">
                    </li>
                    <li class="nav-item mx-3">
                        <a class="navbar-brand" aria-current="page" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="navbar-brand" href="{{ url('/about') }}">About</a>
                    </li>

                    <!-- Category -->
                    @include('layout.category')

                    <li class="nav-item mx-3">
                        <a class="navbar-brand" href="{{ url('/history') }}">History</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 border border-primary rounded-3" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary rounded-3" type="submit"  >Search</button>
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
                            <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </li>
                        </ul>
                    </div>
                </div>
                    @if( strcmp(Auth::user()->status, "isAdmin")  === 0)
                        <a href="{{ route('admin') }}" class=" mx-1 btn btn-sm btn-outline-primary">CRUD</a>
                        <!-- <button class=" mx-1 btn btn-sm btn-outline-primary" type="button">CRUD</button> -->
                    @endif
        </div>
    </div>
</nav>
