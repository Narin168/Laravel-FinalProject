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
                @include('service.card')
                </div>
                <!-- end card -->

            </div>
        </div>
        @include('layout.sidenavbar')
    </div>
</div>

@endsection
