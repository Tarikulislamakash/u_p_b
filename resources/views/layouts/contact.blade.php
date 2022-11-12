@extends('layouts.master')

@section('title') CONTACT @endsection

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

				<!-- Appointment Session Message -->
				@if(Session::has('appointment_success'))
				<p class="alert alert-info" style="font-size: 100% !important; margin-bottom: 1rem !important;">{{ Session::get('appointment_success') }}</p>
				@endif
				@if(Session::has('appointment_error'))
				<p class="alert alert-danger" style="font-size: 100% !important; margin-bottom: 1rem !important;">{{ Session::get('appointment_error') }}</p>
				@endif
				<!-- Appointment Session Message -->

				<h1 class="pb-2">Contact Us</h1>
				<p>
					We appreciate your interest in our services. Please fill out our contact form if you have any inquiries about how Frontiers Consulting may assist you.
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
					We are stronger when we work together; this is not just feeling. Frontiers Consulting provides crucial financial and tax planning services that cross geographical boundaries, link customers, and propel us all toward a better tomorrow. We're able to forge strong connections between us even when we're far apart because to our in-depth expertise and enthusiasm for delivering an exceptional client experience at every touchpoint, which includes your outsourced accounting and foreign tax planning techniques.
				</p>
				<p>118 Pall Mall, London SW1Y 5EA</p>
				<p>Telephone: 020 8550 0000</p>
				<p>Email : Frontiers.consulting2021@gmail.com</p>
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

				<form method="POST" action="{{ route('appointment') }}">
					@csrf
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" value="{{ old('name') }}" required />
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{ old('email') }}" required />
					</div>
					<div class="mb-3">
						<label for="number" class="form-label">Number</label>
						<input type="text" class="form-control" name="number" id="number" aria-describedby="numberHelp" value="{{ old('number') }}" required />
					</div>
					<div class="mb-3">
						<label for="message" class="form-label">Message</label>
						<textarea class="form-control" name="message" id="message" rows="3" value="{{ old('message') }}" required></textarea>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="agreeTerms" name="agreeTerms" required>
						<label class="form-check-label" for="agreeTerms">
							I Agree Terms & Coditions
						</label>
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