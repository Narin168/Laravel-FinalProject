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

<div class="text-white w-100" style="padding:100px; height: 270px; background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://electriciansa.com/wp-content/uploads/2020/09/Electricians-1-1.jpg); background-repeat: no-repeat; background-size: cover;" >
    <h1 class="m-auto">Electrical</h1>
</div>

<div>
    <div class="d-flex p-4">
        <div class="p-4" style="width: 65%;">
            <h4>Electrical Services</h4>
            <p>Many homeowners choose Doctor Home for electrical projects and improvements because we deliver effective, professional services with an emphasis on safety. We also pride ourselves on our value and affordability. Our electricians are an ideal option for jobs of any scope.</p>
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
