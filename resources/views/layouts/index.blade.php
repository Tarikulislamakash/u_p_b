@extends('layouts.master')

@section('title') HOME @endsection

@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection



@section('content')

<!-- Who We Are -->
<div class="who-are-we">
    <div class="container">
        <div class="row align-items-end">

            <div class="col-md-5 whoAreWe-left">

                <!-- Appointment Session Message -->
                @if(Session::has('appointment_success'))
                <p class="alert alert-info" style="font-size: 100% !important; margin-bottom: 1rem !important;">{{ Session::get('appointment_success') }}</p>
                @endif
                @if(Session::has('appointment_error'))
                <p class="alert alert-danger" style="font-size: 100% !important; margin-bottom: 1rem !important;">{{ Session::get('appointment_error') }}</p>
                @endif
                <!-- Appointment Session Message -->

                <h1>who are we?</h1>
                <p>Cheap and best accounting services in uk</p>
                <p>Outsource your books at a cheaper cost with</p>
                <h3>frontier consultancy</h3>
                <p>Simple Online Services</p>
                <a href="{{ route('about') }}">find out more</a>
            </div>
            <div class="col-md-7 whoAreWe-right">
                <img class="img-fluid" src="asset/Group 21984@2x.png" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- Who We Are -->

<!-- Our Service -->
<div class="our-service">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h1 class="text-center text-uppercase our-service-title">
                    our services
                </h1>
            </div>
        </div>
        <div class="row service">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 swiper-slide">
                        <div class="single-service d-flex flex-column align-items-center">
                            <div class="single-service-text">
                                <h5 class="pb-3 text-center">
                                    Bookkeeping and Accounting
                                </h5>
                                <p class="text-center">
                                    Our certified and qualified accountants
                                    willhelp youto update your books.
                                </p>
                            </div>
                            <div class="single-service-button">
                                <a href="{{ route('bookkeeping') }}" class="me-0">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 swiper-slide g-0">
                        <div class="single-service d-flex flex-column align-items-center">
                            <div class="single-service-text">
                                <h5 class="pb-3 text-center">
                                    CIS Filing
                                </h5>
                                <p class="text-center">
                                    If youare CIS contractor
                                    and facing issues
                                    filing your CIS returns?
                                    Don
                                    ’t worry our expert
                                    team will submit CIS for you.
                                </p>
                            </div>
                            <div class="single-service-button">
                                <a href="{{ route('cis') }}" class="me-0">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 swiper-slide g-0">
                        <div class="single-service d-flex flex-column align-items-center">
                            <div class="single-service-text">
                                <h5 class="pb-3 text-center">
                                    Bookkeeping and Accounting
                                </h5>
                                <p class="text-center">
                                    Our certified and qualified accountants
                                    willhelp youto update your books.
                                </p>
                            </div>
                            <div class="single-service-button">
                                <a href="" class="me-0">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 swiper-slide g-0">
                        <div class="single-service d-flex flex-column align-items-center">
                            <div class="single-service-text">
                                <h5 class="pb-3 text-center">
                                    Bookkeeping and Accounting
                                </h5>
                                <p class="text-center">
                                    Our certified and qualified accountants
                                    willhelp youto update your books.
                                </p>
                            </div>
                            <div class="single-service-button">
                                <a href="" class="me-0">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Swiper Slide Button -->
                <!-- <div class="swiper-button-next"></div> -->
                <!-- <div class="swiper-button-prev"></div> -->
                <div class="swiper-pagination"></div>
                <!-- Swiper Slide Button -->
            </div>
        </div>
    </div>
</div>

<!-- Our Service -->

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



@section('script')

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<!-- Swiper JS -->

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        // slidesPerView: 3,
        spaceBetween: 40,
        loop: true,
        centerSlide: "true",
        fade: "true",
        grabCursor: "true",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            500: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            },
        },
    });
</script>
<!-- Initialize Swiper -->
@endsection