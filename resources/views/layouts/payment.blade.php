@extends('layouts.master')



@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/payment.css') }}" />
@endsection



@section('content')

<!-- Payment Option -->
<div class="payment">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8">
				<div class="row">
					<div class="payment-inner-section d-flex flex-column align-items-center">
						<h1 class="text-center">Payment options</h1>
						<div class="col-md-10">
							<div class="payment-option d-flex flex-column align-items-center">
								<h2>One Time fee</h2>
								<div class="option-list">
									<div class="single-option-list">
										<i class="fa-solid fa-xmark text-danger"></i>
										Your UTR will be received in 2
										weeks
									</div>
									<div class="single-option-list">
										<i class="fa-solid fa-check text-success"></i>
										Dedicated account manager
									</div>
									<div class="single-option-list">
										<i class="fa-solid fa-check text-success"></i>
										Education emails
									</div>
									<div class="single-option-list">
										<i class="fa-solid fa-check text-success"></i>
										Year round support
									</div>
									<div class="single-option-list">
										<i class="fa-solid fa-check text-success"></i>
										Tax return will be Submit
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-10">
							<div class="payment-option d-flex flex-column align-items-center">
								<h2>One Time fee</h2>
								<div class="option-list">
									<div class="single-option-list">
										<i class="fa-solid fa-xmark text-danger"></i>
										Your UTR will be received in 2
										weeks
									</div>
									<div class="single-option-list">
										<i class="fa-solid fa-check text-success"></i>
										Dedicated account manager
									</div>
									<div class="single-option-list">
										<i class="fa-solid fa-check text-success"></i>
										Education emails
									</div>
									<div class="single-option-list">
										<i class="fa-solid fa-check text-success"></i>
										Year round support
									</div>
									<div class="single-option-list">
										<i class="fa-solid fa-check text-success"></i>
										Tax return will be Submit
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Payment Option -->

@endsection