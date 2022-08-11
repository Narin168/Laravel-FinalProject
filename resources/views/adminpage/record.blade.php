@extends('adminlayout.master')
@section('content')
<style>
    .main--content {
   position: absolute;
   top: 0;
   right: 0;
   height: 100%;
   width: calc(100% - 320px);
   padding: 0 40px;
   overflow-y: scroll;
   transition: .3s;
    }

</style>
<section class="main">
    <div class="main--content">
        <div class="container text-left justify-content-center">
            <div class="row row-cols-sm-3 row-cols-md-3 row-cols-lg-4">

                @foreach($histories as $item)
                {{-- <div class="reveal card shadow p-0 mx-4 my-2" style="width: 18rem;"> --}}
                
                    <div class=" card  p-0 pb-2 m-2" style="width: 18rem;" >
                        <img src="{{$item->imgurl}}" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">{{$item->name}} </h5>
                                <h6 class="card-text p-1 text-sm">User ID : {{$item->user_id}}</h6>
                                <h6 class="card-text p-1 text-sm">Service ID : {{$item->service_id}}</h6>
                                <h6 class="card-text p-1 text-sm">Phone Number : {{$item->phonenumber}}</h6>
                                <h6 class="card-text p-1"><b>Date : {{$item->created_at}}</b></h6>
                               
                            </div>
                        </div>
                {{-- </div> --}}
                @endforeach
            </div>
            <!-- end card -->

        </div>

    </div>
    
</section
@endsection