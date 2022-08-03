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

<div class="text-white w-100" style="padding:100px; height: 270px; background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/images/painting.png); background-repeat: no-repeat; background-size: cover;" >
    <h1 class="m-auto">Painting</h1>
</div>

<div>
    <div class="d-flex p-4">
        <div class="p-4" style="width: 65%;">
            <h4>Expert Painting Services</h4>
            <p>A fresh coat of paint can upgrade the look of the interior or exterior of your home. Here at Doctor Home, we offer professional painting services nationwide. Whether you are looking to liven up your living room or enhance the exterior of your home with a brand new paint job, our team of professional painters can help!  Our team will complete each job with strong attention to detail and professionalism.</p>
            <div class="container text-center">
                <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-2">

                <!-- loop the card -->
                    <div class="card shadow p-0 mx-4 my-2" style="width: 18rem;">
                            <img src="https://media.istockphoto.com/photos/man-in-a-working-overall-picture-id1015387276?k=20&m=1015387276&s=612x612&w=0&h=Vf9r2_8HePzA-qPdeKGc4lqQvOHqQq6eIaE8iDdUaxU=" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">JKJ </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                    </div>
                    <div class="card shadow p-0 mx-4 my-2" style="width: 18rem;">
                            <img src="https://media.istockphoto.com/photos/man-in-a-working-overall-picture-id1015387276?k=20&m=1015387276&s=612x612&w=0&h=Vf9r2_8HePzA-qPdeKGc4lqQvOHqQq6eIaE8iDdUaxU=" class="card-img-top" alt="...">
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
