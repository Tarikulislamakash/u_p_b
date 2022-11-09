@extends('layouts.master')

@section('title') ABOUT @endsection

@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/about.css') }}" />
@endsection



@section('content')

<!-- OUR JOURNEY -->
<div class="our-journey">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-md-5 our-journey-left">
				<h2>OUR JOURNEY</h2>
				<h4>
					The Future Of Accounting & Cashflow Management Of
					Any Business
				</h4>
				<p>
					We ’ ve dedicated management accounting team expert
					in handling 100’ s of clients monthly
				</p>
				<h4>We Value Long-term Business</h4>
				<p>
					Accounting is a continuous process where we need to
					work withyoulong term business.
				</p>
				<h4>We Value Personal Relationship</h4>
				<p>
					Our main motive is to maintain healthy relationship
					withour clients.
				</p>

				<!-- <button>find out more</button> -->
			</div>
			<div class="col-md-7 our-journey-right">
				<img class="img-fluid" src="asset/Group 21990@2x.png" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- OUR JOURNEY -->

<!-- Established Leadership -->
<div class="established-leadership">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-12">
				<p class="fw-bold">
					We are a dedicated team of experienced sta, our aim
					is to provide thehighest level of professional
					services witha friendly approach. ere are 2 practice
					partners who are the direct contact for every
					client.
				</p>
				<h1 class="text-center established-leadership-title">
					Our Established Leadership
				</h1>
				<p class="fw-bold text-secondary text-center">
					Ourdedicatedexpert team is ready to help you with
					all your accountancy andSelf assessment.
				</p>
			</div>
		</div>

		<div class="row leadership">
			<div class="swiper myLeadershipSwiper px-3">
				<div class="swiper-wrapper">
					<div class="col-md-4 swiper-slide">
						<div class="single-leadership py-4 px-4 d-flex flex-column align-items-center border border-primary rounded">
							<img src="asset/Group 21989.png" alt="" class="img-fluid mb-4" />
							<h5 class="text-center">
								Parvard Zengcuan
							</h5>
							<p class="text-center">CEO & Founder</p>
						</div>
					</div>
					<div class="col-md-4 swiper-slide">
						<div class="single-leadership py-4 px-4 d-flex flex-column align-items-center border border-primary rounded">
							<img src="asset/Group 21987.png" alt="" class="img-fluid mb-4" />
							<h5 class="text-center">Agata Venie</h5>
							<p class="text-center">VP Accounting</p>
						</div>
					</div>
					<div class="col-md-4 swiper-slide">
						<div class="single-leadership py-4 px-4 d-flex flex-column align-items-center border border-primary rounded">
							<img src="asset/Group 21988.png" alt="" class="img-fluid mb-4" />
							<h5 class="text-center">Sonia Brooklyn</h5>
							<p class="text-center">VP Management</p>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</div>
<!-- Established Leadership -->

<!-- Contact Us -->
<div class="contact-us">
	<div class="container">
		<div class="row">
			<div class="col-md-6 contact-us-left">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link d-flex justify-content-center align-items-center" aria-current="page" href="#">
							<i class="fa-brands fa-facebook-f fs-2"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex justify-content-center align-items-center" aria-current="page" href="#">
							<i class="fa-solid fa-envelope fs-2"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex justify-content-center align-items-center" aria-current="page" href="#">
							<i class="fa-brands fa-twitter fs-2"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex justify-content-center align-items-center" aria-current="page" href="#">
							<i class="fa-brands fa-instagram fs-2"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-6 contact-us-right">
				<img class="img-fluid" src="asset/Contact 2x.png" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- Contact Us -->

@endsection



@section('script')

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<!-- Swiper JS -->

<!-- Initialize Swiper -->
<script>
	var swiper = new Swiper(".myLeadershipSwiper", {
		// slidesPerView: 3,
		spaceBetween: 40,
		loop: true,
		centerSlide: "true",
		fade: "true",
		grabCursor: "true",
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},

		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			500: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 3,
			},
			992: {
				slidesPerView: 3,
			},
			1200: {
				slidesPerView: 3,
			},
		},
	});
</script>
<!-- Initialize Swiper -->
@endsection