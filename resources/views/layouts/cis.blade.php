@extends('layouts.master')



@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/cis.css') }}" />
@endsection



@section('content')

<!-- CIS Return -->
<div class="cis-return">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-5 cis-return-left">
				<h1 class="">CIS Return</h1>
				<p>
					Under the Construction Industry Scheme (CIS),
					contractors deduct money from a subcontractor ’ s
					payments and pass it to HM Revenue and Customs
					(HMRC). e deductions count as advance payments
					towards the subcontractor ’ s tax and National
					Insurance.
				</p>
				<p>
					Contractors must register for the scheme.
					Subcontractors do not have to register, but
					deductions are taken from their payments at
				</p>
			</div>
			<div class="col-md-7 cis-return-right">
				<img class="img-fluid" src="asset/CIS 2x.png" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- CIS Return -->

<!-- Service We Offer -->
<div class="service-we-offer">
	<div class="container">
		<h1 class="text-center">What services we offer</h1>
		<div class="row d-flex justify-content-between">
			<div class="col-md-7 service-we-offer-left">
				<ul class="list-group">
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Preparing CIS Returns
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Cross verifying necessary documentation
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						CIS Returns submitted to HMRC
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Representation if needed
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