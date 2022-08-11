@extends('adminlayout.master')
@section('content')
<style>
    .main--content {
   position: absolute;
   top: 0;
   right: 0;
   height: 100%;
   width: calc(100% - 300px);
   /* padding: 0 40px; */
   overflow-y: scroll;
   transition: .3s;
    }

</style>
<section class="main">
    <div class="main--content">
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <div class="card p-0 pb-2 m-4" style="width: 18rem;" >
                <img src="{{$services->imgurl}}" alt="...">
                    <div class="card-body">
                        <h5 class="card-title ">{{$services->name}} </h5>
                        <p class="card-text p-1">  {{$services->description}}</p>
                    
                    </div>
            </div>
        </div>
    </div>

       
    
</section
@endsection