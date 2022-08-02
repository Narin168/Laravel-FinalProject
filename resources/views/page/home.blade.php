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
	background: #2EB0E5;
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

.container h1 {
	font-size: 40px;
	text-align: center;
	text-transform: uppercase;
	margin-bottom: 40px;
	font-weight: bold;
	color: #2EB0E5;
}
.container {
	padding-top: 8%;
}
.single-team {
	position: relative;
	overflow: hidden;
	margin-bottom: 10px;
	perspective: 1000px;
	-webkit-perspective: 1000px;
}
.team-img {
	width: 100%;
	height: 250px;
	padding: 20px;
	text-align: center;
	transition: all .5s ease;
}
.one {
	background-image: url(img/1.jpg);
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
}
.two {
	background-image: url(img/2.jpg);
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
}
.three {
	background-image: url(img/3.jpg);
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
}
.team-text {
	position: absolute;
	width: 100%;
	height: 250px;
	padding: 20px;
	text-align: center;
	transition: all .5s ease;
	top: 0;
	left: 0;
	z-index: 1;
	opacity: 0;
	background-color: #363A3E;
	background-color: ;
	backface-visibility: hidden;
	transform-style: preserve-3d;
	transform: translateX(110px) rotateY(-90deg);
	color: #2EB0E5;
}
.team-text h2 {
	text-transform: uppercase;
	font-weight: 700;
}
.team-text h4 {
	text-transform: uppercase;
	letter-spacing: 2px;
	font-weight: 300;
}
.team-text p {
	line-height: 2;
}
.img-area {
	position: relative;
	left: 180px;
	top: 0px;
	transform: translateX(-50%);
}
.single-team:hover .team-img {
	opacity: 0;
	transform: translateX(-110px) rotateY(90deg);
}
.single-team:hover .team-text {
	opacity: 1;
	transform: rotateY(0);
}


body {
	font-family: 'Montserrat', sans-serif;
}

.sec-heading h6 {
	font-family: 'Montserrat', sans-serif;
	font-size: 40px;
	text-align: center;
	text-transform: uppercase;
	margin-bottom: 40px;
	font-weight: bold;
	color: #2EB0E5;
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
	background-color: #2EB0E5;
	color: #fff;
	padding: 10px 35px;
	border-radius: 4px;
}
.team-slider .owl-dots {
	position: absolute;
	left: 0;
	right: 0;
	bottom: -60px;
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
	background-color: #2EB0E5;
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



</style>

	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="https://www.dealsshutter.com/blog/wp-content/uploads/2020/03/bundle-services-1.png">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 1s">Our Staff</h5>
					<p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated fadeInUp" style="animation-delay: 3s"><a href="#">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://img.freepik.com/free-vector/business-partners-handshake_74855-5222.jpg?w=2000">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 1s">Our Cooperation</h5>
					<p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated fadeInUp" style="animation-delay: 3s"><a href="#">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="https://www.naesp.org/wp-content/uploads/2021/12/10TipsEffectiveFeedback.png">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 1s">Our Feedback</h5>
					<p class="animated fadeInUp d-none d-md-block" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated fadeInUp" style="animation-delay: 3s"><a href="#">Learn More</a></p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>

<div class="container">
		<h1>Soluntion for your home</h1>
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="single-team">
					<div class="team-img one">
						<div class="img-area"></div>
					</div>
					<div class="team-text">
						<h2>Maintenance</h2>
            <h4>Service</h4>
						<p>One-time and recurring maintenance solutions make it easy to keep your home in tip-top shape.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-team">
					<div class="team-img two">
						<div class="img-area"></div>
					</div>
					<div class="team-text">
						<h2>Repairs</h2>
						<h4>Service</h4>
						<p>On-call handyman services to take care of all your small projects and home repairs. – fast. Drywall, fans, light fixtures, and more.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="single-team">
					<div class="team-img three">
						<div class="img-area"></div>
					</div>
					<div class="team-text">
						<h2>Update</h2>
						<h4>Service</h4>
						<p>Professional contractors ready to update or remodel any room in your home. From kitchens, bathrooms and basements to decks.</p>
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
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
					<div class="sec-heading text-center">
						<h6>Team Members</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonial-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="team-slider owl-carousel">
							<div class="single-box text-center">
								<div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/65VQDfjs/1.png"></div>
								<div class="info-area">
									<h4>Um Narin</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a href="#">Learn More</a>
								</div>
							</div>
							<div class="single-box text-center">
								<div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/vmCM14qL/2.png"></div>
								<div class="info-area">
									<h4>Than Rathanak</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a href="#">Learn More</a>
								</div>
							</div>
							<div class="single-box text-center">
								<div class="img-area"><img alt="" class="img-fluid move-animation" src="https://i.postimg.cc/TYTxWM9S/3.png"></div>
								<div class="info-area">
									<h4>Taing Molika</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ullam.</p><a href="#">Learn More</a>
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

		
		
		



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
	</script>
@endsection
