@extends('layout.master')

@section('title', 'All Services')

@section('content')
<style>
    .services a {
        text-decoration: none;
        transition: background-color .5s;
    }

    .services a:hover {
        text-decoration: underline;
    }

    .card:hover {
        transform:Scale(1.03);
        transition: .5s;
    }
</style>

<div class="text-white w-100" style="padding:100px; height: 270px; background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/images/cleaning.png); background-repeat: no-repeat; background-size: cover;" >
    <h1 class="m-auto">Cleaning</h1>
</div>

<div>
    <div class="d-flex p-4">
        <div class="p-4" style="width: 65%;">
            <h4>Cleaning Services</h4>
            <p>No worry about dust bacteria or bad bug. With Doctor Home we offer you a very thorough clean with experienced cleaner and new teachnology. Stay clean and healthy with Doctor Home.</p>
            <div class="container text-center">
                <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-2">

                <!-- loop the card -->
                    <div class="card shadow p-0 mx-4 my-2" style="width: 18rem;">
                            <img src="https://images.pexels.com/photos/4239146/pexels-photo-4239146.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">JKJ </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                    </div>
                    <div class="card shadow p-0 mx-4 my-2" style="width: 18rem;">
                            <img src="https://images.pexels.com/photos/4239146/pexels-photo-4239146.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">JKJ </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                    </div>
                </div>
                <!-- end card -->

            </div>
        </div>
        @include('layout.sidenavbar')
    </div>
</div>

@endsection
