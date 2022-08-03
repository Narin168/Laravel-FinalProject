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

<div class="text-white w-100" style="padding:100px; height: 270px; background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/images/plumbing.png); background-repeat: no-repeat; background-size: cover;" >
    <h1 class="m-auto">Plumbing</h1>
</div>

<div>
    <div class="d-flex p-4">
        <div class="p-4" style="width: 65%;">
            <h4>Plumbing Services</h4>
            <p>Do you need plumbing services, but don’t want the hassle or expense of a plumber? Doctor Home is equipped to handle virtually all of your plumbing needs from maintenance and repairs to replacement, all at an affordable price. You can count on us to make sure your pipes are in working order without offering additional services you don’t want or need.</p>
            <div class="container text-center">
                <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-2">

                <!-- loop the card -->
                    <div class="card shadow p-0 mx-4 my-2" style="width: 18rem;">
                            <img src="https://images.pexels.com/photos/3616761/pexels-photo-3616761.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">JKJ </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                    </div>
                    <div class="card shadow p-0 mx-4 my-2" style="width: 18rem;">
                            <img src="https://images.pexels.com/photos/3616761/pexels-photo-3616761.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
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
        <div class="services p-4" style="width: 30%;">
            <div class="shadow-lg px-4 py-5 bg-body rounded ">
                <div class="d-flex justify-content-center">
                    <h4>Other&nbsp;</h4>
                    <h4 class="text-primary">Services</h4>
                </div>
                <hr style="border: none; border-bottom: 3px solid black">

                <div class="px-3">
                    <a href="{{ url('/electrical') }}" class=" text-black "><p>Electrical</p></a>
                    <a href="{{ url('/plumbing') }}" class=" text-black"><p>Plumbing</p></a>
                    <a href="{{ url('/cleaning') }}" class=" text-black"><p>Cleaning</p></a>
                    <a href="{{ url('/painting') }}" class=" text-black"><p>Painting</p></a>
                    <a href="{{ url('/flooring') }}" class=" text-black"><p>Flooring</p></a>
                    <a href="{{ url('/carpentry') }}" class=" text-black"><p>Carpentry $ Carbinet</p></a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
