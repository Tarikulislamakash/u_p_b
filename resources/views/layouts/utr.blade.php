@extends('layouts.master')



@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/utr.css') }}" />
@endsection



@section('content')

<!-- UTR -->
<div class="utr">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-5 utr-left">
				<h1 class="pb-2">UTR Registration</h1>
				<p>
					UTR is unique 10 digit tax reference number which
					will given to you when you registered for self
					employed.
				</p>
			</div>
			<div class="col-md-7 utr-right">
				<img class="img-fluid" src="asset/UTR 2x.png" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- UTR -->

<!-- Service We Offer -->
<div class="service-we-offer">
	<div class="container">
		<h1 class="text-center">What is UTR Number</h1>
		<div class="row">
			<div class="col-md-7 service-we-offer-left">
				<p>
					The UTR is a reference number issued to anyone in
					the UK who needs to complete a tax self assessment.
					If you submit tax returns to HMRC, you ’ re likely
					to need one. If you ’ re self-employed, a sole
					trader, or you own a limited company, you ’ll need
					to know about the unique taxpayer reference number
					(UTR).
				</p>
				<h2>What Do I Need a UTR Number For?</h2>
				<p>
					There are many reasons why you may need to use your
					Tax reference number. For example, you will need
					your UTR number for the Tax oce to identity your
					unique account with HMRC
				</p>
				<p style="margin-bottom: 0px !important">
					Circumstances where you might need to provide your
					UTR number:
				</p>
				<ul class="list-group">
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						To create an online account with HMRC
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						To register for individual Taxes withthe Tax
						office
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						If youare working within the CIS (Construction
						Industry Scheme)
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Forfinancial institutions (banks / building
						societies) to co- operate withanti-money laundry
						regulations
					</li>
					<li class="list-group-item d-flex align-items-start">
						<img class="" src="asset/list-icon.png" alt="" />
						Sometimes required when working for payroll
						agencies / organisations
					</li>
				</ul>
				<h2>Apply For Your UTR Number Today</h2>
				<p>
					By clicking on the above, Frontiers Consulting will
					help you with your application. Furthermore we will
					collect a small amount of information and forward
					this across to HM Revenue & Customs. In addition we
					will deal with your process on the same day and will
					be in touch with any feedback. e current waiting
					time is around four to six weeks.
				</p>
				<p>
					However it is possible that you already have a UTR
					number, if this is the case you should contact HMRC
					at your earliest convenience, it is possible that
					you could get this over the phone.
				</p>
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