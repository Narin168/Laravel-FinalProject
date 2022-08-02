<nav class=" sticky-top shadow py-3 bg-body navbar navbar-expand-lg " style="background-color: #2fafe5; padding-right:20px;">
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
                    <!-- <a class="navbar-brand" href="{{ url('/history') }}">History</a> -->
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 border border-primary rounded-3" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary rounded-3" type="submit"  >Search</button>
                </form>
            <!-- <button type="button" class=" mx-2 btn btn-primary">Login</button> -->
                <div class="btn-group mx-2">
                    <a href="{{ route('login') }}" class="btn btn-primary " >Log in</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
                </div>

            <!-- <div class="btn-group mx-2" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">Login</label>
                    <a href="{{ route('register') }}" class="ml-4"></a>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Register</label>
                </div> -->
            </div>
        </div>
    </nav>
