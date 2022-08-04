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

<div class="text-white w-100" style="padding:100px; height: 270px; background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(/images/flooring.png); background-repeat: no-repeat; background-size: cover;" >
    <h1 class="m-auto">Flooring</h1>
</div>

<div>
    <div class="d-flex p-4">
        <div class="p-4" style="width: 65%;">
            <h4>Flooring Services</h4>
            <p>Whether you’re looking to improve the value of your home or you’re in the process of remodeling, Doctor Home can provide beautiful floor services at affordable rates. With our decades of experience and cutting-edge tools, we can install, repair, and maintain almost any type of flooring you need.</p>
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
