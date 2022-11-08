@extends('layouts.master')

@section('title') SELF @endsection

@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/self.css') }}" />
@endsection



@section('content')

<!-- CIS Return -->
<div class="self">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-5 self-left">
				<h1 class="pb-2">Self Assessment</h1>
				<p>
					A self assessment is an individual review performed
					to identify elements that can be improved or
					exploited to achieve certain predefined goals. In
					other words, the person analyses himself to improve
					his perspective about his capabilities and
					potential.
				</p>
			</div>
			<div class="col-md-7 self-right">
				<img class="img-fluid" src="asset/Self 2x.png" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- CIS Return -->

<!-- Service We Offer -->
<div class="service-we-offer">
	<div class="container">
		<h1 class="text-center">Best self assessment services in UK</h1>
		<div class="row">
			<div class="col-md-7 service-we-offer-left">
				<ul class="list-group">
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Wehave qualified accountants to deal with your
						self assessment tax returns
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						CIS workers returns will be dealt separately by
						senior expert team. Get quick rebates withus.
					</li>
				</ul>
			</div>
			<div class="col-md-5 service-we-offer-right d-flex justify-content-center">
				<img class="img-fluid" src="asset/Group 21992@2x.png" alt="" />
				<div class="offer-form">
					<form action="">
						<h3 class="text-center">Get Your Quote</h3>
						<form>
							<div class="mb-3">
								<label for="name" class="form-label">Name</label>
								<input type="text" class="form-control" id="name" aria-describedby="nameHelp" />
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" id="email" aria-describedby="emailHelp" />
							</div>
							<div class="mb-3">
								<label for="number" class="form-label">Number</label>
								<input type="text" class="form-control" id="number" aria-describedby="numberHelp" />
							</div>
							<div class="d-flex justify-content-center mt-4">
								<button type="submit" class="btn btn-primary fw-bold">
									Submit Now
								</button>
							</div>
						</form>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Service We Offer -->

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