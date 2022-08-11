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
    width: calc(100% - 300px);
    padding: 0 40px;
    overflow-y: scroll;
    transition: .3s;


   
}
</style>
{{-- @include('adminlayout.style') --}}
<section class="main">   
    <div class="main--content">
        <div class="overview">
            <div class="title">
                <h2 class="section--title">Overview</h2>
                
            </div>
            <div class="cards">
                <div class="card card-1">
                    <div class="card--data">
                        <div class="card--content">
                            <h5 class="card--title">Total Doctors</h5>
                            <h1>152</h1>
                        </div>
                        <i class="ri-user-2-line card--icon--lg"></i>
                    </div>
                    <div class="card--stats">
                        <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                        <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                        <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                    </div>
                </div>
                <div class="card card-2">
                    <div class="card--data">
                        <div class="card--content">
                            <h5 class="card--title">Total Patients</h5>
                            <h1>1145</h1>
                        </div>
                        <i class="ri-user-line card--icon--lg"></i>
                    </div>
                    <div class="card--stats">
                        <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>82%</span>
                        <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>230</span>
                        <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>45</span>
                    </div>
                </div>
                <div class="card card-3">
                    <div class="card--data">
                        <div class="card--content">
                            <h5 class="card--title">Schedule</h5>
                            <h1>102</h1>
                        </div>
                        <i class="ri-calendar-2-line card--icon--lg"></i>
                    </div>
                    <div class="card--stats">
                        <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>27%</span>
                        <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>31</span>
                        <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>23</span>
                    </div>
                </div>
                <div class="card card-4">
                    <div class="card--data">
                        <div class="card--content">
                            <h5 class="card--title">Beds Available</h5>
                            <h1>15</h1>
                        </div>
                        <i class="ri-hotel-bed-line card--icon--lg"></i>
                    </div>
                    <div class="card--stats">
                        <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>8%</span>
                        <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>11</span>
                        <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                    </div>
                </div>
            </div>
        </div>
     
        
    </div>
   
 


</section>



@endsection

