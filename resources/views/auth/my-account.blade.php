@extends('layouts.master')



@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/my-account.css') }}" />
@endsection



@section('content')

<!-- My Account -->
<div class="account">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 account-left">
				<h1 class="pb-2">My Account</h1>
				<div class="account-form">
					<h2 class="text-center">Login</h2>
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="mb-3">
							<label for="email" class="form-label">Email address
							</label>
							<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" />
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp" />
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1" />
							<label class="form-check-label" for="exampleCheck1">Remember me</label>
						</div>
						<div class="d-flex justify-content-center mt-4">
							<button type="submit" class="btn btn-primary fw-bold">
								Login
							</button>
						</div>
						<div class="d-flex justify-content-between">
							{{-- <a href="{{ route('password.request') }}">Forget password ?</a> --}}
							<a href="{{ route('register') }}">Register now</a>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 account-right">
				<img class="img-fluid" src="asset/my account 2x.png" alt="" />
			</div>
		</div>
	</div>
</div>
<!-- My Account -->

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
