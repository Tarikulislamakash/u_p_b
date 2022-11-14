<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>@yield('title')</title>
	<!-- Bootstrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<!-- Bootstrap CDN -->
	<!-- Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Font Awesome CDN -->

	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<style>
		.nav-item form button {
			color: #333;
		}
	</style>

	@yield('style')

	<style>
		@media all and (min-width: 992px) {
			/* .navbar .nav-item .dropdown-menu {
				display: none;
			}

			.navbar .nav-item:hover .nav-link {}

			.navbar .nav-item:hover .dropdown-menu {
				display: block;
			}

			.navbar .nav-item .dropdown-menu {
				margin-top: 0;
			} */
		}
        /* ================================================ */
        /* UTILITIES */
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
        body {
        font-family: cursive;
        }
        a {
        text-decoration: none;
        }
        li {
        list-style: none;
        }

        /* NAVBAR STYLING STARTS */
        .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 0px;
        /* background-color: transparent; */
        /* background-color: #93b8f5; */
        color: #fff;
        }

        .nav-links a {
        color: #fff;
        }

        .nav-links{
            margin-bottom: 0px !important;
            padding-left: 0px !important;
        }

        /* LOGO */
        .logo {
        font-size: 32px;
        }
        /* NAVBAR MENU */
        .menu {
        display: flex;
        gap: 1em;
        font-size: 18px;
        }
        .menu li:hover {
        transition: 0.3s ease;
        }
        .menu li {
        /* padding: 5px 10px; */
        }
        /* DROPDOWN MENU */
        .services {
        position: relative;
        }
        .dropdown {
        /* background-color: rgb(1, 139, 139); */
        background-color: #93b8f5;
        padding: 0;
        position: absolute; /*WITH RESPECT TO PARENT*/
        display: none;
        border-radius: 8px;
        top: 35px;
        width: 10rem;
        }
        .dropdown li + li {
        margin-top: 10px;
        }
        .dropdown li {
        /* padding: 0em; */
        /* width: 8em; */
        text-align: center;
        margin-left: 0px !important;
        }

        .dropdown li a{
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
            color: #fff !important;
        }

        .dropdown li:hover {
        background-color: #999;
        }
        .services:hover .dropdown {
        display: block;
        }

        /*RESPONSIVE NAVBAR MENU STARTS*/
        /* CHECKBOX HACK */
        input[type=checkbox]{
        display: none;
        }
        /*HAMBURGER MENU*/
        .hamburger {
        display: none;
        font-size: 24px;
        user-select: none;
        color: #333 !important;
        }

        .navbar ul li:after {
            content: '';
            display: block;
            margin: auto;
            height: 1px;
            width: 0px;
            background: transparent;
            transition: width .5s ease, background-color .5s ease;
        }

        .navbar ul .active:after,
        .navbar ul li:hover:after {
            width: 100%;
            background: #fff;
        }

        .navbar ul .dropdown li:hover:after {
            width: 0px;
            background: #fff;
        }
        /* APPLYING MEDIA QUERIES */
        @media (max-width: 768px) {
        .menu {
        display:none;
        position: absolute;
        background-color:#93b8f5;
        right: 0;
        left: 0;
        text-align: left;
        padding: 16px 20px;
        top: 100% !important;
        border-top: 1px solid #777;
        height: 50vh !important;
        }
        .menu li:hover {
        display: inline-block;
        background-color:#93b8f5;
        transition: 0.3s ease;
        }
        .menu li + li {
        margin-top: 12px;
        }
        input[type=checkbox]:checked ~ .menu{
        display: block;
        }
        .hamburger {
        display: block;
        }
        .dropdown {
            left: 70%;
            top: 25%;
            transform: translateX(35%);
            border: 1px solid #fff;
        }
        .dropdown li:hover {
        background-color: #93b8f5;
        }
        }
        /* ================================================ */
	</style>
</head>

<body>
	<!-- Header -->
	{{-- <nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}">
				<img src="asset/Group 21821.png" alt="" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item active">
						<a class="nav-link" style="color:black important!;" href="{{ route('home') }}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color:black important!;" href="{{ route('about') }}">About</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" style="color:black important!;" href="#" data-bs-toggle="dropdown">
							Service
						</a>
						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item" style="color:black important!;" href="{{ route('bookkeeping') }}">
									Book Keeping</a>
							</li>
							<li>
								<a class="dropdown-item" style="color:black important!;" href="{{ route('cis') }}">
									CIS
								</a>
							</li>
							<li>
								<a class="dropdown-item" style="color:black important!;" href="{{ route('self') }}">
									Self
								</a>
							</li>
							<!-- <li>
								<a class="dropdown-item" style="color:black important!;" href="{{ route('thank-you') }}">
									Thank You
								</a>
							</li> -->
							<li>
								<a class="dropdown-item" style="color:black important!;" href="{{ route('utr') }}">
									UTR
								</a>
							</li>
							<li>
								<a class="dropdown-item" style="color:black important!;" href="{{ route('vat-filing') }}">
									Vat Filing
								</a>
							</li>
							<!-- <li>
								<a class="dropdown-item" style="color:black important!;" href="{{ route('payment') }}">
									Payment
								</a>
							</li> -->
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color:black important!;" href="{{ route('contact') }}">Contact Us</a>
					</li>
					@if( !auth()->user() )
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">
							Register
						</a>
					</li>
					@endif
					@if( !auth()->user() )
					<li class="nav-item">
						<a class="nav-link" style="color:black important!;" href="{{ route('login') }}">Login</a>
					</li>
					@else
					<li class="nav-item">
						<form method="POST" action="{{ route('logout') }}">
							@csrf

							<button style="border: none !important; background-color: rgba(var(--bs-light-rgb),var(--bs-bg-opacity))!important;" type="submit">Logout</button>
						</form>
					</li>
					@endif
				</ul>
			</div>
		</div>
	</nav> --}}
	<!-- Header -->

    <!-- Navigation bar -->
    <div class="container">
    <nav class="navbar">

        <div class="logo">
            <a href="{{ route('home') }}">
				<img src="asset/Group 21821.png" alt="" />
			</a>
        </div>

        <ul class="nav-links">
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>
          <div class="menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li class="services">
              <a href="#">Service</a>
              <ul class="dropdown">
                <li><a href="{{ route('bookkeeping') }}">Book Keeping</a></li>
                <li><a href="{{ route('cis') }}">CIS</a></li>
                <li><a href="{{ route('self') }}">Self</a></li>
                <li><a href="{{ route('utr') }}">UTR</a></li>
                <li><a href="{{ route('vat-filing') }}">Vat Filing</a></li>
              </ul>
            </li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            {{-- @if( !auth()->user() )
            <li><a href="{{ route('register') }}">Register</a></li>
            @endif --}}
            @if( !auth()->user() )
                <li><a href="{{ route('login') }}">Login</a></li>
            @else
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button style="border: none !important; background-color: rgba(var(--bs-light-rgb),var(--bs-bg-opacity))!important;" type="submit">Logout</button>
                </form>
            </li>
            @endif
          </div>
        </ul>


    </nav>
    </div>




	@yield('content')

	<!-- Footer -->
	<div class="footer">
		<div class="container">
			<div class="row footer-img">
				<div class="col-md-12 text-center mb-4">
					<img class="img-fluid" src="asset/Group 21821.png" alt="" />
				</div>
			</div>
			<div class="row d-flex align-items-center footer-list">
				<div class="col-md-6 footer-left">
					<p style="margin-bottom: 0px !important">
						frontiersconsulting.com © Copyright 2022. All Rights
						Reserved
					</p>
				</div>
				<div class="col-md-6 d-flex justify-content-end footer-right">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="{{ route('terms') }}">
								Terms
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="{{ route('privacy-statement') }}">
								Privacy Statement
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="{{ route('communication-policy') }}">
								Communication Policy
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->

	<!-- JQuery CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- JQuery CDN -->
	<!-- Bootstrap JS CDN -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
	<!-- Bootstrap JS CDN -->

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// make it as accordion for smaller screens
			if (window.innerWidth > 992) {
				document
					.querySelectorAll(".navbar .nav-item")
					.forEach(function(everyitem) {
						everyitem.addEventListener(
							"mouseover",
							function(e) {
								let el_link =
									this.querySelector("a[data-bs-toggle]");

								if (el_link != null) {
									let nextEl = el_link.nextElementSibling;
									el_link.classList.add("show");
									nextEl.classList.add("show");
								}
							}
						);
						everyitem.addEventListener(
							"mouseleave",
							function(e) {
								let el_link =
									this.querySelector("a[data-bs-toggle]");

								if (el_link != null) {
									let nextEl = el_link.nextElementSibling;
									el_link.classList.remove("show");
									nextEl.classList.remove("show");
								}
							}
						);
					});
			}
			// end if innerWidth
		});
		// DOMContentLoaded  end
	</script>

	@yield('script')

</body>

</html>
