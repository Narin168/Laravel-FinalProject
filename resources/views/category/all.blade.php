@extends('layout.master')

@section('title', 'All Services')

@section('content')

<div class="text-white w-100" style="padding:100px; height: 270px; background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(https://eb-blogs.s3.us-east-2.amazonaws.com/ApexServicePartners.png); background-repeat: no-repeat; background-size: cover;" >
    <h1 class="m-auto">Services</h1>
</div>

<div>
    <div class="p-5 mt-md-5">
        <div class="d-flex">
            <h1>All&nbsp;</h1>
            <h1 class="text-primary">Services</h1>
        </div>
        <div class=" pt-3 ">
                <p class="fs-5 ">
                    At Doctor Home, we believe home maintenance should be done right at every level. We deliver honest, transparent customer service and skilled handyman services priced right because we want to be the best value for homeowners everywhere. Our professional handyman technicians handle an extensive variety of home repair and remodeling services, including everything from carpentry and cabinet installation to painting, and plumbing.
                    <br> <br>
                    At Doctor Home, we understand that when it comes to hiring a handyman, finding an individual who has the appropriate knowledge and expertise is extremely important. That’s why we only employ highly-skilled craftsmen who have many years of experience in their trade. Furthermore, all of our technicians are appropriately licensed and insured and have undergone rigorous background checks, so you can rest assured knowing that when you have a Doctor Home handyman on the job, your home will be in the hands of a trustworthy professional. We also back our services with a 1-year guarantee so you can be confident the work we do will last. Let us help you tackle your to-do list once and for all!
                </p>

        </div>
    </div>

    <div class="reveal container text-center">
        <div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-3">
                            <div class="col px-3 py-3 " >
                                <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                    <a href="{{ url('/electrical') }}" class="text-decoration-none"><i class="fa-solid fa-plug-circle-bolt fs-1"></i></a>
                                    <div class="card-body">
                                        <a href="{{ url('/electrical') }}" class="text-decoration-none"><h5 class="card-title hover:text-primary">Electrical</h5></a>
                                        <p>Qualified electricians at your service!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-3 py-3 " >
                                <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                    <a href="{{ url('/plumbing') }}" class="text-decoration-none"><i class="fa-solid fa-faucet-drip fs-1"></i></a>
                                    <div class="card-body">
                                        <a href="{{ url('/plumbing') }}" class="text-decoration-none"><h5 class="card-title hover:text-primary">Plumbing</h5></a>
                                        <p>Quality plumbing services for your house.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-3 py-3 " >
                                <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                    <a href="{{ url('/cleaning') }}" class="text-decoration-none"><i class="fa-solid fa-broom fs-1"></i></a>
                                    <div class="card-body">
                                        <a href="{{ url('/cleaning') }}" class="text-decoration-none"><h5 class="card-title hover:text-primary">Cleaning</h5></a>
                                        <p>Stay clean and healthy no worry about dust or bacteria.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-3 py-3 " >
                                <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                    <a href="{{ url('/painting') }}" class="text-decoration-none"><i class="fa-solid fa-paint-roller fs-1"></i></a>
                                    <div class="card-body">
                                        <a href="{{ url('/painting') }}" class="text-decoration-none"><h5 class="card-title hover:text-primary">Painting</h5></a>
                                        <p>Big job or small job - all painting is done by us on the same perfect quality level.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-3 py-3 " >
                                <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                    <a href="{{ url('/flooring') }}" class="text-decoration-none"><i class="fa-solid fa-ruler-combined fs-1"></i></a>
                                    <div class="card-body">
                                        <a href="{{ url('/flooring') }}" class="text-decoration-none"><h5 class="card-title hover:text-primary">Flooring</h5></a>
                                        <p>Residential and Commercial Floor Installation Repair and Maintenance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-3 py-3 " >
                                <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                    <a href="{{ url('/carpentry') }}" class="text-decoration-none"><i class="fa-solid fa-hammer fs-1"></i></i></a>
                                    <div class="card-body">
                                        <a href="{{ url('/carpentry') }}" class="text-decoration-none"><h5 class="card-title hover:text-primary">Carpentry & Cabinets</h5></a>
                                        <p>Qualified carpenters at your service!</p>
                                    </div>
                                </div>
                            </div>

        </div>
    </div>
    <div class="p-5 mt-md-5 reveal">
        <div class="d-flex">
            <h1>We do&nbsp;</h1>
            <h1 class="text-primary">it all</h1>
        </div>
        <div class=" pt-3 ">
                <p class="fs-5 ">
                In addition to the home repair and handyman services that we offer for homeowners, Doctor Home can even handle a variety of commercial remodeling, maintenance, and repair services if you’re a business owner who needs help keeping your office in top condition. With Doctor Home, home improvements just got easier. For more information about the wide variety of handyman and home remodeling and repair services that we provide, contact us today to find a House Doctors franchise near you.
                </p>
        </div>
    </div>


</div>

@endsection
