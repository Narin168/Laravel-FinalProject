@extends('layout.master')

@section('title', 'History')

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

<p class="invisible">{{$num = count($histories)}}</p>
<div>
    <div class="d-flex p-4">
        <div class="p-4" style="width: 65%;">
            <h4>You have booked {{$num}} of our services so far </h4>
            
           
            <div class="container text-center">
                <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-2">

                <!-- loop the card -->
                @include('service.history')
                </div>
                <!-- end card -->

            </div>
        </div>
        
    </div>
</div>

@endsection

