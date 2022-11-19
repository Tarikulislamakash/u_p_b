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

	<!-- ======================================== -->
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<style>
		.search-box {
			display: none;
		}

		.links {
			margin-bottom: 0px !important;
		}

		body {
			min-height: 100vh;
		}

		nav {
			top: 0;
			left: 0;
			width: 100%;
			z-index: 99;
			padding-top: 1rem;
			padding-bottom: 1rem;
		}

		nav .navbar {
			height: 100%;
			max-width: 1250px;
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: space-between;
			margin: auto;
		}

		.navbar .logo a {
			font-size: 30px;
			color: #fff;
			text-decoration: none;
			font-weight: 600;
		}

		nav .navbar .nav-links {
			line-height: 70px;
			height: 100%;
		}

		nav .navbar .links {
			display: flex;
		}

		nav .navbar .links li {
			position: relative;
			display: flex;
			align-items: center;
			justify-content: space-between;
			list-style: none;
			padding: 0 20px;
            padding-left: 0px;
		}

		nav .navbar .links li a {
			height: 100%;
			text-decoration: none;
			white-space: nowrap;
			color: #fff;
			font-size: 15px;
			font-weight: 500;
		}

		.links li:hover .htmlcss-arrow,
		.links li:hover .js-arrow {
			transform: rotate(180deg);
		}

		nav .navbar .links li .arrow {
			height: 100%;
			width: 22px;
			line-height: 70px;
			text-align: center;
			display: inline-block;
			color: #fff;
			transition: all 0.3s ease;
		}

		nav .navbar .links li .sub-menu {
			position: absolute;
			top: 70px;
			left: 0;
			line-height: 40px;
			background: #93b8f5;
			box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
			border-radius: 4px;
			display: none;
			z-index: 2;
			padding-left: 0px !important;
		}

		nav .navbar .links li:hover .htmlCss-sub-menu,
		nav .navbar .links li:hover .js-sub-menu {
			display: block;
		}

		.navbar .links li .sub-menu li {
			border-bottom: 1px solid rgba(255, 255, 255, 0.1);
		}

		.navbar .links li .sub-menu a {
			color: #fff;
			font-size: 15px;
			font-weight: 500;
            padding: 0 22px;
		}

		.navbar .links li .sub-menu .more-arrow {
			line-height: 40px;
		}

		.navbar .links li .htmlCss-more-sub-menu {
		}

		.navbar .links li .sub-menu .more-sub-menu {
			position: absolute;
			top: 0;
			left: 100%;
			border-radius: 0 4px 4px 4px;
			z-index: 1;
			display: none;
		}

		.links li .sub-menu .more:hover .more-sub-menu {
			display: block;
		}

		.navbar .search-box {
			position: relative;
			height: 40px;
			width: 40px;
		}

		.navbar .search-box i {
			position: absolute;
			height: 100%;
			width: 100%;
			line-height: 40px;
			text-align: center;
			font-size: 22px;
			color: #fff;
			font-weight: 600;
			cursor: pointer;
			transition: all 0.3s ease;
		}

		.navbar .search-box .input-box {
			position: absolute;
			right: calc(100% - 40px);
			top: 80px;
			height: 60px;
			width: 300px;
			background: #3E8DA8;
			border-radius: 6px;
			opacity: 0;
			pointer-events: none;
			transition: all 0.4s ease;
		}

		.navbar.showInput .search-box .input-box {
			top: 65px;
			opacity: 1;
			pointer-events: auto;
			background: #3E8DA8;
		}

		.search-box .input-box::before {
			content: '';
			position: absolute;
			height: 20px;
			width: 20px;
			background: #3E8DA8;
			right: 10px;
			top: -6px;
			transform: rotate(45deg);
		}

		.search-box .input-box input {
			position: absolute;
			top: 50%;
			left: 50%;
			border-radius: 4px;
			transform: translate(-50%, -50%);
			height: 35px;
			width: 280px;
			outline: none;
			padding: 0 15px;
			font-size: 16px;
			border: none;
		}

		.navbar .nav-links .sidebar-logo {
			display: none;
		}

		.navbar .bx-menu {
			display: none;
		}

		@media (max-width:920px) {
			nav .navbar {
				max-width: 100%;
			}

			nav .navbar .logo a {
				font-size: 27px;
			}

			nav .navbar .links li {
				padding: 0 10px;
				white-space: nowrap;
			}

			nav .navbar .links li a {
				font-size: 15px;
			}
		}

		@media (max-width:767px) {
			nav {
				/* position: relative; */
			}

			.navbar .bx-menu {
				display: block;
			}

			nav .navbar .nav-links {
				position: fixed;
				top: 0;
				left: -100%;
				display: block;
				max-width: 270px;
				width: 100%;
				background: #3E8DA8;
				line-height: 40px;
				padding: 20px;
				box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
				transition: all 0.5s ease;
				z-index: 1000;
			}

            nav .navbar .links li .sub-menu {
			background: #3E8DA8;
		}

			.navbar .nav-links .sidebar-logo {
				display: flex;
				align-items: center;
				justify-content: space-between;
			}

			.sidebar-logo .logo-name {
				font-size: 25px;
				color: #fff;
			}

			.sidebar-logo i,
			.navbar .bx-menu {
				font-size: 25px;
				color: #333;
			}

			nav .navbar .links {
				display: block;
				margin-top: 20px;
			}

			nav .navbar .links li .arrow {
				line-height: 40px;
			}

			nav .navbar .links li {
				display: block;
			}

			nav .navbar .links li .sub-menu {
				position: relative;
				top: 0;
				box-shadow: none;
				display: none;
			}

			nav .navbar .links li .sub-menu li {
				border-bottom: none;

			}

			.navbar .links li .sub-menu .more-sub-menu {
				display: none;
				position: relative;
				left: 0;
			}

			.navbar .links li .sub-menu .more-sub-menu li {
				display: flex;
				align-items: center;
				justify-content: space-between;
			}

			.links li:hover .htmlcss-arrow,
			.links li:hover .js-arrow {
				transform: rotate(0deg);
			}

			.navbar .links li .sub-menu .more-sub-menu {
				display: none;
			}

			.navbar .links li .sub-menu .more span {
				/* background: red; */
				display: flex;
				align-items: center;
				/* justify-content: space-between; */
			}

			.links li .sub-menu .more:hover .more-sub-menu {
				display: none;
			}

			nav .navbar .links li:hover .htmlCss-sub-menu,
			nav .navbar .links li:hover .js-sub-menu {
				display: none;
			}

			.navbar .nav-links.show1 .links .htmlCss-sub-menu,
			.navbar .nav-links.show3 .links .js-sub-menu,
			.navbar .nav-links.show2 .links .more .more-sub-menu {
				display: block;
			}

			.navbar .nav-links.show1 .links .htmlcss-arrow,
			.navbar .nav-links.show3 .links .js-arrow {
				transform: rotate(180deg);
			}

			.navbar .nav-links.show2 .links .more-arrow {
				transform: rotate(90deg);
			}
		}

		@media (max-width:370px) {
			nav .navbar .nav-links {
				max-width: 100%;
			}
		}

        @media only screen and (min-width: 768px) {

            nav .navbar .links li {
                padding: 0 .8rem;
                padding-left: 0px;
            }

            .navbar .links li .sub-menu a {
                padding-left: 22px;
                padding-right: 22px;
                padding-top: 6px;
                padding-bottom: 6px;
            }
        }

        @media only screen and (min-width: 992px) {

            nav .navbar .links li {
                padding: 0 26px;
                padding-left: 0px;
            }

            .navbar .links li .sub-menu a {
                padding-left: 22px;
                padding-right: 22px;
                padding-top: 6px;
                padding-bottom: 6px;
            }
        }

        @media only screen and (min-width: 1200px) {

            nav .navbar .links li {
                padding: 0 35px;
                padding-left: 0px;
            }
        }

        @media only screen and (min-width: 1200px) {

            nav .navbar .links li {
                padding: 0 42px;
                padding-left: 0px;
            }
        }
	</style>
	<!-- ======================================== -->


	<!-- <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" /> -->

	@yield('style')

</head>

<body>

	<div class="container">
		<nav>
			<div class="navbar">
				<i class='bx bx-menu'></i>
				<div class="logo">
					<a href="{{ route('home') }}">
						<img src="asset/Group 21821.png" alt="" />
					</a>
				</div>
				<div class="nav-links">
					<div class="sidebar-logo">
						<span class="logo-name">Frontiers</span>
						<i class='bx bx-x'></i>
					</div>
					<ul class="links">
						<li><a href="{{ route('home') }}">Home</a></li>
						<li><a href="{{ route('about') }}">About</a></li>

						<li>
							<a href="#">Service</a>
							<i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
							<ul class="htmlCss-sub-menu sub-menu">
								<li><a href="{{ route('bookkeeping') }}">Book Keeping</a></li>
								<li><a href="{{ route('cis') }}">CIS</a></li>
								<li><a href="{{ route('self') }}">Self</a></li>
								<li><a href="{{ route('utr') }}">UTR</a></li>
								<li><a href="{{ route('vat-filing') }}">Vat Filing</a></li>
							</ul>
						</li>
						<li><a href="{{ route('contact') }}">Contact Us</a></li>
						@if( !auth()->user() )
                        {{-- <li><a class="btn btn-info" href="{{ route('register') }}">Register</a></li> --}}
						{{-- <li><a href="{{ route('login') }}">Login</a></li> --}}
						@else
						<li>
							<form method="POST" action="{{ route('logout') }}">
								@csrf

								<button style="border: none !important; background-color: rgba(var(--bs-light-rgb),var(--bs-bg-opacity))!important;" type="submit" class="logout">Logout</button>
							</form>
						</li>
						@endif
					</ul>
				</div>
				<div class="search-box">
					<i class='bx bx-search'></i>
					<div class="input-box">
						<input type="text" placeholder="Search...">
					</div>
				</div>
			</div>
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
		// search-box open close js code
		let navbar = document.querySelector(".navbar");
		let searchBox = document.querySelector(".search-box .bx-search");
		// let searchBoxCancel = document.querySelector(".search-box .bx-x");

		searchBox.addEventListener("click", () => {
			navbar.classList.toggle("showInput");
			if (navbar.classList.contains("showInput")) {
				searchBox.classList.replace("bx-search", "bx-x");
			} else {
				searchBox.classList.replace("bx-x", "bx-search");
			}
		});

		// sidebar open close js code
		let navLinks = document.querySelector(".nav-links");
		let menuOpenBtn = document.querySelector(".navbar .bx-menu");
		let menuCloseBtn = document.querySelector(".nav-links .bx-x");
		menuOpenBtn.onclick = function() {
			navLinks.style.left = "0";
		}
		menuCloseBtn.onclick = function() {
			navLinks.style.left = "-100%";
		}


		// sidebar submenu open close js code
		let htmlcssArrow = document.querySelector(".htmlcss-arrow");
		htmlcssArrow.onclick = function() {
			navLinks.classList.toggle("show1");
		}
		let moreArrow = document.querySelector(".more-arrow");
		moreArrow.onclick = function() {
			navLinks.classList.toggle("show2");
		}
		let jsArrow = document.querySelector(".js-arrow");
		jsArrow.onclick = function() {
			navLinks.classList.toggle("show3");
		}
	</script>

	@yield('script')

</body>

</html>
