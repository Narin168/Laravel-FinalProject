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
                @include('service.card')
                </div>
                <!-- end card -->

            </div>
        </div>
        @include('layout.sidenavbar')
    </div>
</div>

@endsection
