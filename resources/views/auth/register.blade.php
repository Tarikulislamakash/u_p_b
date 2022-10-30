@extends('layouts.master')



@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection



@section('content')

<!-- Register -->
<div class="register">
	<div class="container">
		<div class="row">
			<h1>Register for UTR Number</h1>
			<p>
				Simple online UTR registration form, Signup today and we
				’ll submit your details with HMRC within 24hours and
				make sure you ’ll receive your UTR number directly from
				HMRC in 2 weeks
			</p>

			<form class="row" method="POST" action="{{ route('register') }}">
				@csrf
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<label for="name" class="form-label">Name</label>
							<input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" />
						</div>
						<div class="col-md-12">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" />
						</div>
						<div class="col-md-12">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelp" />
						</div>
						<div class="col-md-12">
							<label for="number" class="form-label">Phone</label>
							<input type="text" class="form-control" name="number" id="number" aria-describedby="numberHelp" />
						</div>
						<div class="col-md-12">
							<label for="address" class="form-label">Address</label>
							<textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<label for="nationalInsurance" class="form-label">National Insurance
							</label>
							<input type="text" class="form-control" id="nationalInsurance" name="nationalInsurance" aria-describedby="nationalInsuranceHelp" />
						</div>
						<div class="col-md-12">
							<label for="typeOfWork" class="form-label">Type of Work
							</label>
							<input type="text" class="form-control" id="typeOfWork" name="typeOfWork" aria-describedby="typeOfWorkHelp" />
						</div>
						<div class="col-md-12">
							<label for="dateStart" class="form-label">Date started working self employed
							</label>
							<input type="text" class="form-control" id="dateStart" name="dateStart" aria-describedby="dateStartHelp" />
						</div>

						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<label for="town" class="form-label">Town</label>
									<input type="text" class="form-control" name="town" id="town" aria-describedby="townHelp" />
								</div>
								<div class="col-md-4">
									<label for="city" class="form-label">City</label>
									<input type="text" class="form-control" name="city" id="city" aria-describedby="cityHelp" />
								</div>
								<div class="col-md-4">
									<label for="postal-code" class="form-label">Postal Code</label>
									<input type="text" class="form-control" name="postal-code" id="postal-code" aria-describedby="postalCodeHelp" />
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<label for="birth" class="form-label">Date of Birth
									</label>
									<input type="text" class="form-control" id="birth" name="birth" aria-describedby="nameHelp" />
								</div>
								<div class="col-md-12">
									<label for="requiredCIS" class="form-label">Required CIS Registration
									</label>
									<div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="requiredCISYes" name="requiredCISYes" value="yes" />
											<label class="form-check-label" for="requiredCISYes">Yes</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="requiredCISNo" name="requiredCISNo" value="no" />
											<label class="form-check-label" for="requiredCISNo">No</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 d-flex justify-content-center">
					<button type="submit" class="btn btn-primary">
						Next
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Register -->

@endsection