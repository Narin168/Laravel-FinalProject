@extends('adminlayout.master')
@section('content')
<style>
     .card {
        padding: 20px;
        border-radius: 20px;
        min-width: 230px;
        height: auto;
        transition: .3s;
    }

    .card:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .cards {
    display: flex;
    gap: 20px;
    }

    .card--data {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }
    .card h1 {
        font-size: 30px;
        margin-top: 10px;
    }

    .card--icon--lg {
        font-size: 80px;
    }

    .card--stats {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 5px;
    }

    .card--stats span {
        display: flex;
        align-items: center;
    }

    .card--icon {
        margin-right: 5px;
    }

    .stat--icon {
        color: #5f5ce0;
    }

    .up--arrow {
        color: #70d7a5;
    }

    .down--arrow {
        color: #e86786;
    }

    .card-1 {
        background-color: rgba(80, 115, 251, .1);
    }

    .card-1 .card--title {
        color: rgba(80, 115, 251, 1);
    }

    .card-1 .card--icon--lg {
        color: rgba(80, 115, 251, .4);
    }

    .card-2 {
        background-color: rgba(241, 210, 67, .1);
    }

    .card-2 .card--title {
        color: rgba(241, 210, 67, 1);
    }

    .card-2 .card--icon--lg {
        color: rgba(241, 210, 67, .4);
    }

    .card-3 {
        background-color: rgba(112, 215, 165, .1);
    }

    .card-3 .card--title {
        color: rgba(112, 215, 165, 1);
    }

    .card-3 .card--icon--lg {
        color: rgba(112, 215, 165, .4);
    }

    .card-4 {
        background-color: rgba(227, 106, 200, .1);
    }

    .card-4 .card--title {
        color: rgba(227, 106, 200, 1);
    }

    .card-4 .card--icon--lg {
        color: rgba(227, 106, 200, .4);
    }
    .main--content {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: calc(100% - 310px);
    padding: 0 50px;
    overflow-y: scroll;
    transition: .3s;


   
}
</style>
{{-- @include('adminlayout.style') --}}
<p class="invisible">{{$num1 = count($users)}}</p>
<p class="invisible">{{$num2 = count($categories)}}</p>
<p class="invisible">{{$num3 = count($services)}}</p>
<p class="invisible">{{$num4 = count($histories)}}</p>
<section class="main">   
    <div class="main--content">
        <div class="overview">
            <div class="title">
                <h2 class="section--title">Overview</h2>
                
            </div>
            <br>
            <div class="cards">
                <div class="card card-1">
                    <div class="card--data">
                        <div class="card--content">
                            <h5 class="card--title">Total Users</h5>
                            <h1>{{$num1}}</h1>
                        </div>
                        <i class="ri-user-2-line card--icon--lg"></i>
                    </div>
            
                </div>
                <div class="card card-2">
                    <div class="card--data">
                        <div class="card--content">
                            <h5 class="card--title">Total  Categories</h5>
                            <h1>{{$num2}}</h1>
                        </div>
                        <i class="ri-user-line card--icon--lg"></i>
                    </div>
                  
                </div>
                <div class="card card-3">
                    <div class="card--data">
                        <div class="card--content">
                            <h5 class="card--title">Total Services</h5>
                            <h1>{{$num3}}</h1>
                        </div>
                        <i class="ri-calendar-2-line card--icon--lg"></i>
                    </div>
                    
                </div>
                <div class="card card-4">
                    <div class="card--data">
                        <div class="card--content">
                            <h5 class="card--title">Total Records</h5>
                            <h1>{{$num4}}</h1>
                        </div>
                        <i class="ri-hotel-bed-line card--icon--lg"></i>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="title">
                <h2 class="section--title">Categories</h2>
                
            </div>
            <br>
            <div class=" container text-center">
                <div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-3">
                                    <div class="col px-3 py-3 " >
                                        <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                            <a href="" class="text-decoration-none"><i class="fa-solid fa-plug-circle-bolt fs-1"></i></a>
                                            <div class="card-body">
                                                <a href="" class="text-decoration-none"><h5 class="card-title hover:text-primary">Electrical</h5></a>
                                                <p>Qualified electricians at your service!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-3 py-3 " >
                                        <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                            <a href="" class="text-decoration-none"><i class="fa-solid fa-faucet-drip fs-1"></i></a>
                                            <div class="card-body">
                                                <a href="" class="text-decoration-none"><h5 class="card-title hover:text-primary">Plumbing</h5></a>
                                                <p>Quality plumbing services for your house.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-3 py-3 " >
                                        <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                            <a href="" class="text-decoration-none"><i class="fa-solid fa-broom fs-1"></i></a>
                                            <div class="card-body">
                                                <a href="" class="text-decoration-none"><h5 class="card-title hover:text-primary">Cleaning</h5></a>
                                                <p>Stay clean and healthy no worry about dust or bacteria.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-3 py-3 " >
                                        <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                            <a href="" class="text-decoration-none"><i class="fa-solid fa-paint-roller fs-1"></i></a>
                                            <div class="card-body">
                                                <a href="" class="text-decoration-none"><h5 class="card-title hover:text-primary">Painting</h5></a>
                                                <p>Big job or small job - all painting is done by us on the same perfect quality level.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-3 py-3 " >
                                        <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                            <a href="" class="text-decoration-none"><i class="fa-solid fa-ruler-combined fs-1"></i></a>
                                            <div class="card-body">
                                                <a href="" class="text-decoration-none"><h5 class="card-title hover:text-primary">Flooring</h5></a>
                                                <p>Residential and Commercial Floor Installation Repair and Maintenance.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col px-3 py-3 " >
                                        <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                            <a href="" class="text-decoration-none"><i class="fa-solid fa-hammer fs-1"></i></i></a>
                                            <div class="card-body">
                                                <a href="" class="text-decoration-none"><h5 class="card-title hover:text-primary">Carpentry & Cabinets</h5></a>
                                                <p>Qualified carpenters at your service!</p>
                                            </div>
                                        </div>
                                    </div>
        
                </div>
        </div>
     
        
    </div>
   
 


</section>



@endsection

