@extends('layouts.master')

@section('title') BOOKKEEPING @endsection

@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/bookkeeping.css') }}" />
@endsection



@section('content')

<!-- Book Keeping -->
<div class="book-keeping">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-5 book-keeping-left">
				<h2 class="pb-2">Bookkeeping and Accounting</h2>
				<p class="">
					Bookkeeping and accounting are two functions which
					are extremely important for every business
					organization. In the simplest of terms, bookkeeping
					is responsible for the recording of financial
					transactions whereas accounting is responsible for
					interpreting, classifying, analyzing, reporting, and
					summarizing the financial data.
				</p>
			</div>
			<div class="col-md-7 book-keeping-right">
				<img class="img-fluid" src="asset/Bookkeping 2x.png" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- Book Keeping -->

<!-- Service We Offer -->
<div class="service-we-offer">
	<div class="container">
		<h1 class="text-center">What services we offer</h1>
		<div class="row">
			<div class="col-md-7 service-we-offer-left">
				<ul class="list-group">
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Bookkeeping activity whichinvolves all
						accounting procedures starting withentries
						processing to financial analysis.
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Process bank and merchant account entries
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Reconciling bank statements
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						GeneralLedger Accounting
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Process Invoices
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Process Sales Receipts
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Process Vendor Bills
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Preparingfinancial statements (Income statement,
						balance sheet and cashflow) Preparation of
						Revenue schedule
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Inputting, matching, batching and coding of
						invoices.
					</li>
				</ul>
			</div>
			<div class="col-md-5 service-we-offer-right d-flex justify-content-center">
				<img class="img-fluid" src="asset/Group 21992@2x.png" alt="" />
				<div class="offer-form">
					<h4>Quick UTR Number Registration</h4>
					<h4>Apply For UTR Number Now!</h4>
					<a class="btn btn-info" href="{{ route('register') }}">Apply Now</a>
					<!-- <form action="">
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
					</form> -->
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



@section('script')

@endsection