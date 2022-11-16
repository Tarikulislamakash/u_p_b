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
                <!-- Appointment Session Message -->
                @if(Session::has('appointment_success'))
                <p class="alert alert-info" style="font-size: 100% !important; margin-bottom: 1rem !important;">{{ Session::get('appointment_success') }}</p>
                @endif
                <!-- Appointment Session Message -->
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
<div class="service-we-offer" id="book-appointment">
	<div class="container">
		<h1 class="text-center">Best self assessment services in UK</h1>
        {{-- Validation Error --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session::has('word_count_err'))
            <div class="alert alert-danger mt-2">{{ Session::get('word_count_err') }}</div>
        @endif
        @if (Session::has('number_range'))
            <div class="alert alert-danger mt-2">{{ Session::get('number_range') }}</div>
        @endif
        {{-- Validation Error --}}
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
                    <h3 class="text-center">Get Your Quote</h3>
                    <form method="POST" action="{{ route('appointment') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="{{ old('name') }}" required/>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}" required/>
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Number</label>
                            <input type="text" class="form-control" id="number" name="number" aria-describedby="numberHelp" value="{{ old('number') }}" required/>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="agreeTerms" name="agreeTerms" required>
                            <label class="form-check-label" for="agreeTerms">
                                I Agree Terms & Coditions
                            </label>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" class="btn btn-primary fw-bold">
                                Submit Now
                            </button>
                        </div>
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
