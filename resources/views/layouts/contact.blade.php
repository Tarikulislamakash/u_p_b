@extends('layouts.master')



@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
@endsection



@section('content')

<!-- Contact Us -->
<div class="contact">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-5 contact-left">
				<h1 class="pb-2">Contact Us</h1>
				<p>
					Thank you for your interest in our services. If you
					have any questions regarding how Crowe Peak can help
					you, please fill in our contact form.
				</p>
			</div>
			<div class="col-md-7 contact-right">
				<img class="img-fluid" src="asset/Contact 2x.png" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- Contact Us -->

<!-- Visit Our Office -->
<div class="visit-office">
	<div class="container">
		<p class="text-center text-secondary" style="margin-bottom: 0px !important">
			HEAD OFFICE
		</p>
		<h1 class="text-center">Visit Our Office</h1>
		<div class="row">
			<div class="col-md-12 visit-office-content">
				<p class="main-content">
					Together, we ' re stonger; it’ s more than mere
					sentiment. AtLawrence Grant, we deliver essential
					tax planning andfinancial services that bridge
					physical distances, connect our clients, and moveus
					all forward into a brighter tomorrow.From your
					outsourced bookkeeping to international tax planning
					strategies, our in-depthexpertise and passion for
					delivering an outstanding client experience at every
					touchpoint ensure that we ’ re able to bringus
					together in powerful ways, even when we ’ re far
					apart.
				</p>
				<p>123 Two Bits St.</p>
				<p>Counting, SC 30003</p>
			</div>
		</div>
	</div>
</div>
<!-- Visit Our Office -->

<!-- Book Appointment -->
<div class="book-appointment">
	<div class="container">
		<div class="row">
			<div class="col-md-6 appointment-left">
				<img class="img-fluid" src="asset/Group 21923@2x.png" alt="" />
			</div>
			<div class="col-md-6 appointment-right ms-auto">
				<h6 class="text-center">GET FREE CONSULTATION</h6>
				<h2 class="text-center">Book Appointment</h2>
				<p class="text-center">
					Find out your funding requirements, VAT, profit, company car
					and fuel benefit and more with our handy calculators
				</p>

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
					<div class="mb-3">
						<label for="message" class="form-label">Message</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-primary fw-bold">
							BOOK APPOINTMENT
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Book Appointment -->

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