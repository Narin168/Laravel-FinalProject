@extends('layout.master')

@section('title', 'Home Page')

@section('content')
<style>

.carousel-item {
	height: 100vh;
	min-height: 300px;
}
.carousel-caption {
	bottom: 220px;
	z-index: 2;
}
.carousel-caption h5 {
	font-size: 45px;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-top: 25px;
}
.carousel-caption p {
	width: 60%;
	margin: auto;
	font-size: 18px;
	line-height: 1.9;
}
.carousel-caption a {
	text-transform: uppercase;
	text-decoration: none;
	background: #7BA8FE;
	padding: 5px 20px;
	display: inline-block;
	color: #fff;
	margin-top: 15px;
	border-radius: 5px;
}
.carousel-inner:before {
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background: rgba(123, 122, 122, 0.6);
	z-index: 1;
}

@media only screen and (max-width: 767px) {

	.carousel-caption {
		bottom: 165px;
	}
	.carousel-caption h5 {
		font-size: 17px;
	}
	.carousel-caption a {
		padding: 10px 15px;
		font-size: 15px;
	}

}


.header {
	margin-top: 50px;
	font-family: 'Montserrat', sans-serif;
	text-align: center;
	font-size: 50px;
	margin-bottom: 50px;
	text-transform: uppercase;
	font-weight: 700;
}
.header span {
	color: #7BA8FE;
}
.single-service {
	padding: 25px;
	transition: all .5s ease;
}
.single-service i {
	font-size: 60px;
}
.single-service h2 {
	font-size: 25px;
	font-weight: 500;
}
.single-service p{
	font-size: 18px;
}
.single-service:hover {
	background: #7BA8FE;
	color: #fff;
}



body {
	font-family: 'Montserrat', sans-serif;
	margin-top: 20px;
}

.sec-heading h6 {
	font-family: 'Montserrat', sans-serif;
	font-size: 50px;
	text-align: center;
	text-transform: uppercase;
	margin-bottom: 20px;
	font-weight: bold;
	color: #7BA8FE;
}
.single-box {
	border: 1px solid #ddd;
	border-radius: 20px;
	overflow: hidden;
	background-color: #fff
}
.info-area {
	padding: 0 20px 45px;
}
.img-area {
	overflow: hidden;
	padding: 15px 0 15px;
}
.img-area img {
	margin: 0 auto;
	-webkit-transition: all 0.5s ease;
	transition: all 0.5s ease;
	max-width: 230px
}
.single-box:hover img {
	-webkit-transform: scale(1.1);
	transform: scale(1.1);
}

.info-area h4 {
	font-weight: 600
}
.info-area h5 {
	color: #3b04db;
	margin: 10px 0 0;
	font-weight: 600
}
.info-area a {
	display: inline-block;
	margin: 25px 0 0;
	background-color: #7BA8FE;
	color: #fff;
	padding: 10px 35px;
	border-radius: 4px;
}
.team-slider .owl-dots {
	position: absolute;
	left: 0;
	right: 0;
	bottom: -40px;
	text-align: center;
	width: 100%;
}
.team-slider button.owl-dot {
	width: 16px;
	height: 16px;
	display: inline-block;
	margin: 0 6px;
	text-align: center;
	border-radius: 50%;
	background-color: #262626;
}
.team-slider .owl-dot.active {
	background-color: #7BA8FE;
}
.move-animation {
	position: relative;
	-webkit-animation: move-animation 2s ease-in-out infinite;
	animation: move-animation 2s ease-in-out infinite;
}
@-webkit-keyframes move-animation {
	0% {
		top: 3px;
	}
	50% {
		top: -3px;
	}
	100% {
		top: 3px;
	}
}






.containers {
	margin-top: 50px;
	font-family: 'Montserrat', sans-serif;
	text-align: center;
	font-size: 50px;
	margin-bottom: 50px;
	text-transform: uppercase;
	font-weight: 700;
}
.headers {
	margin-top: 50px;
	font-family: 'Montserrat', sans-serif;
	text-align: center;
	font-size: 50px;
	margin-bottom: 50px;
	text-transform: uppercase;
	font-weight: 700;
}
.headers h2 {
    font-family: 'Montserrat', sans-serif;
	font-size: 50px;
	text-align: center;
	text-transform: uppercase;
	margin-bottom: 20px;
	font-weight: bold;
	color: #7BA8FE;
}
.main-content {
	width: 100%;
	height: 300px;
	padding: 50px 40px;
	background-color: #fff;
	border-radius: 15px;
	box-shadow: 0 25px 31px 0 rgba(0,0,0,0.5);
}

.text-area {
	text-align: center;
	font-size: 25px;
	color: #262626;
	line-height: 1.5;

}
.text-area .icon {
    margin-right: 5px;
}
.main-content .writer {
    text-transform: uppercase;
	letter-spacing: 5px;
	color: red;
	text-align: center;
	margin-top: 20px;
	font-size: 25px;

}
.main-content .button-area {
	display: grid;
	place-items: center;
	margin-top: 20px;
	padding: 10px 0;
}
.button-area .btn button {
    background-color: #262626;
    color: #fff;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    border: none;
    outline: none;
    padding: 10px 15px;

}
.button-area button:active {
    background-color: deepskyblue;
}





</style>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="https://www.dealsshutter.com/blog/wp-content/uploads/2020/03/bundle-services-1.png">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 1s">Our Staff</h5>
					<p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">We’re passionate about ensuring that our current and future People, Customers, Partners, and Community are encouraged and able to be their true selves.</p>
					<p class="animated fadeInUp" style="animation-delay: 3s"></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://img.freepik.com/free-vector/business-partners-handshake_74855-5222.jpg?w=2000">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 1s">Our Cooperation</h5>
					<p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">We're proud to promote equality and inclusion through our partnerships, including Business in the Community, Stonewall, Race at Work Charter and the Business Disability Forum. We’re also registered as a Disability Confident Committed employer.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://www.naesp.org/wp-content/uploads/2021/12/10TipsEffectiveFeedback.png">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 1s">Our Guarantee</h5>
					<p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">We promise quality craftsmanship and excellent customer service, all backed by our labor guarantee. Home improvements just got easier!</p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>

<div class="container reveal">
		<h1 class="header">Our <span>Services</span></h1>
		<div class="row">
			<div class="col s12 m6 l4">
				<div class="single-service center-align">
					<i class="lni lni-cart"></i>
					<h2>Maintenance</h2>
					<p>One-time and recurring maintenance solutions make it easy to keep your home in tip-top shape. From air filter replacement to winterization and everything in between, get peace of mind knowing all your home maintenance is handled by pros..</p>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="single-service center-align">
					<i class="lni lni-grow"></i>
					<h2>Repair</h2>
					<p>On-call handyman services to take care of all your small projects and home repairs – fast. Drywall, doors, ceiling fans, light fixtures, and so much more. Our skilled professionals provide dependable, hassle-free solutions for your home.</p>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="single-service center-align">
					<i class="lni lni-handshake"></i>
					<h2>Update</h2>
					<p>Professional contractors ready to update or remodel any room in your home. From kitchens, bathrooms and basements to decks, driveways, and fences our top-rated pros will add value to your home improvement project without adding stress to your life.</p>
				</div>
			</div>
		</div>
	</div>


	<div class="container reveal">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
					<div class="sec-heading text-center">
						<h6>How it works</h6>
					</div>
				</div>
			</div>
		</div>

	<div class="container text-center reveal">
        <div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-3">
                            <div class="col px-3 py-3 " >
                                <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                    <div class="text-primary"><i class="fa-solid fa-phone fa-3x"></i></div>
                                    <div class="card-body">
                                        <div class="text-primary"><h2 class="card-title hover:text-primary">Step 1: Contact Us</h2></div>
                                        <p>Call or email us. We have team members waiting for your call!</p>
                                    </div>
                                </div>
                            </div>
							<div class="col px-3 py-3 " >
                                <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                    <div class="text-primary"><i class="fa-solid fa-hospital-user fa-3x"></i></div>
                                    <div class="card-body">
                                        <div class="text-primary"><h2 class="card-title hover:text-primary">Step 2: Discuss </h2></div>
                                        <p>Let our specialist know all of the details of your project.</p>
                                    </div>
                                </div>
                            </div>
							<div class="col px-3 py-3 " >
                                <div class="card border-0 p-3 d-flex" style="--bs-bg-opacity: 0.6">
                                    <div class="text-primary"><i class="fa-solid fa-calendar-days fa-3x"></i></div>
                                    <div class="card-body">
                                        <div class="text-primary"><h2 class="card-title hover:text-primary">Step 3: Schedule</h2></div>
                                        <p>Schedule a time for our specialist to start making your project a reality.</p>
                                    </div>
                                </div>
                            </div>
		</div>
	</div>


 <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">

<section id="team">
		<div class="container reveal">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
					<div class="sec-heading text-center">
						<h6>Team Members</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonial-box reveal">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="team-slider owl-carousel">
							<div class="single-box text-center">
								<div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/65VQDfjs/1.png"></div>
								<div class="info-area">
									<h4>Um Narin</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p>
								</div>
							</div>
							<div class="single-box text-center">
								<div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/vmCM14qL/2.png"></div>
								<div class="info-area">
									<h4>Than Rathanak</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p>
								</div>
							</div>
							<div class="single-box text-center">
								<div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/TYTxWM9S/3.png"></div>
								<div class="info-area">
									<h4>Taing Molika</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
	</script>
	<script>
	       $('.team-slider').owlCarousel({

	           margin: 20,
	           responsive: {
	               0: {
	                   items: 1
	               },
	               768: {
	                   items: 2
	               },
	               991: {
	                   items: 3
	               },
	               1200: {
	                   items: 3
	               },
	               1920: {
	                   items: 3
	               }
	           }
	       });
	</script>

	<div class="containers reveal">

      <div class="headers">
        <h2>Clients' Feedback</h2>
      </div>

      <div class="main-content">

        <div class="text-area">
          <span class="quote">"Life is what happens when you're busy making other plans"</span>
        </div>

        <div class="writer">– John Lennon</div>

        <div class="button-area">
          <div class="btn">
            <button id="Qbtn">See More</button>
          </div>
        </div>

      </div>

    </div>
<script>
const quotes = [{
    quote: `"We Appriciate this company with thier fast service."`,
    writer: `– Mae West`
}, {
    quote: `"We gonna use this again."`,
    writer: `– Albert Einstein`
}, {
    quote: `"Their staff are so friendly and understanding."`,
    writer: `– Babe Ruth`
}, {
    quote: `"Thank you for this fast service. I like your business"`,
    writer: `– Steve Jobs`
}, {
    quote: `"Let's continue your hardwork. You are the best."`,
    writer: `– Ernest Hemingway`
}, {
    quote: `"Give me a sec to share this best service to you!"`,
    writer: `– Soren Kierkegaard`
}, {
    quote: `"They always give us a fast, cheap and effective solution."`,
    writer: `– Socrates`
}, {
    quote: `"Turn your wounds into wisdom."`,
    writer: `– Oprah Winfrey`
}, {
    quote: `"The purpose of our lives is to be happy."`,
    writer: `- Dalai Lama`
}, {
    quote: `"Live for each second without hesitation."`,
    writer: `- Elton John`
}, ]





let btn = document.querySelector("#Qbtn");

let quote = document.querySelector(".quote");

let writer = document.querySelector(".writer");
btn.addEventListener("click", function() {
    let random = Math.floor(Math.random() * quotes.length);


    quote.innerHTML = quotes[random].quote;


    writer.innerHTML = quotes[random].writer;
})

</script>
</div>

@endsection
