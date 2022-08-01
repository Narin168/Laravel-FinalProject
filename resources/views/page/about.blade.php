@extends('layout.master')

@section('title', 'About')

@section('content')
    <div class="position-absolute top-0 start-0">
          <img class="img-fluid w-50 rounded-1" src="https://images.pexels.com/photos/6969778/pexels-photo-6969778.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="home">
    </div>

    <div>
            <div class="position-relative w-50 p-5 text-center my-5 mx-auto mb-5 px-6 shadow rounded-5 bg-primary text-white" style="--bs-bg-opacity: 0.6">
                    <h2>Welcome to Home Service</h2>
                    <p class="fs-5 ">Life is much easier with us</p>
            </div>
            <div class="position-relative p-5 mt-md-5">
                <div class="d-flex">
                    <h1>Our&nbsp;</h1>
                    <h1 class="text-primary">Story</h1>
                </div>
                <div class=" pt-3 ">
                    <p class="fs-5 ">
                        Since we are learning at college, we are so busy to find electrician when we have electricity problem at our home.
                        We have seen losts of people got this problems as well. It was the time that we came up with an idea to connect people with services
                        that will come directly to theri home. Don't need to worry anymore if you're not familiar with the place you live or don't
                        experience in using any service yet. We will give you the easier way to find those services.
                        By implementing this Home Service website, we can quickly find services for home, it's safe and fast.
                        We also hope that we can reduce the virus spread during Covid-19 pandemic.
                    </p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>

                <div class="d-flex">
                    <h1>Our&nbsp;</h1>
                    <h1 class="text-primary">Value</h1>
                </div>
                <div class=" pt-3 ">
                    <p class="fs-5 ">
                        Our value lies in giving opportunities to small services bussinuss to run affectively and reliablity for the online market in Cambodia.
                        Being able to provide a specialized foundation to creating business activities that previously would rely on traditional networks and connections would significantly increase the efficacy and opportunities for Clients to connect with one another.
                        Providing quick and safe services for all customers, make it easy and no wasting time with the bad services.
                        Respect our customer by keeping the privacy of the inside customer's house. Trustworthy stays with all our services.
                    </p>
                </div>
                <div class="position-relative p-5 text-center w-75 mx-auto mb-5 px-6 shadow-lg rounded-5 my-5" >
                    <h2>Our Value</h2>
                    <div class="container text-center">
                        <div class="row row-cols-md-1 row-cols-lg-2">
                            <div class="col p-2 text-white" >
                                <div class="card border-0 p-3 bg-primary" style="--bs-bg-opacity: 0.6">
                                    <i class="fa-solid fa-children  fs-1"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">Trust</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col p-2 text-white" >
                                <div class="card p-3 bg-primary border-0" style="--bs-bg-opacity: 0.6">
                                    <i class="fa-solid fa-handshake-angle fs-1"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">Respect.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col p-2 text-white" >
                                <div class="card p-3 bg-primary border-0" style="--bs-bg-opacity: 0.6">
                                    <i class="fa-solid fa-user-astronaut fs-1" ></i>
                                    <div class="card-body">
                                        <h5 class="card-title">Reliability</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col p-2 text-white" >
                                <div class="card p-3 bg-primary border-0" style="--bs-bg-opacity: 0.6">
                                    <i class="fa-solid fa-lock fs-1"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">Privacy</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="d-flex">
                    <h1>Vision and&nbsp;</h1>
                    <h1 class="text-primary">Mission</h1>
                </div>
                <div class=" pt-3 ">
                    <p class="fs-5 ">
                        Our mission is to empower the digital platform in Cambodia by providing an accessible, secure and easy-to-use platform.
                        To help people who need services and people who provide services take themselves seriously, we want to equib the technology
                        platform between them.
                    </p>
                </div>

                <div class="position-relative p-5 text-center mx-2 mb-5 px-6 shadow-lg rounded-5 my-5" >
                    <h2>Contact Us</h2>
                    <div class="text-start">
                        <h5>&nbsp;</h5>
                        <h5>Address</h5>
                        <h5>Bridge 2, National Road 6A, Sangkat Prek Leap, Khan Chroy Changva, Phnom Penh</h5>
                        <br>
                    </div>
                    <div class="container text-center">
                        <div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-3">
                            <div class="col px-3 py-3 text-white" >
                                <div class="card border-0 p-3 bg-primary" style="--bs-bg-opacity: 0.6">
                                    <i class="fa-brands fa-facebook fs-1"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">Facebook</h5>
                                        <h5>&nbsp;</h5>
                                        <h5>Home Service CADT</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-3 py-3 text-white" >
                                <div class="card p-3 bg-primary border-0" style="--bs-bg-opacity: 0.6">
                                <i class="fa-solid fa-phone-volume fs-1"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">Call Us</h5>
                                        <h5>&nbsp;</h5>
                                        <h5>087 913 000 / 012 999 999</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-3 py-3 text-white" >
                                <div class="card p-3 bg-primary border-0" style="--bs-bg-opacity: 0.6">
                                 <i class="fa-solid fa-envelope fs-1"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">Email Us</h5>
                                        <h5>&nbsp;</h5>
                                        <h5>homeservice@gmail.com</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
    </div>







@endsection
