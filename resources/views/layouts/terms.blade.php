@extends('layouts.master')

@section('title') TERMS @endsection

@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/payment.css') }}" />
@endsection



@section('content')

<!-- Terms And Conditions -->
<div class="terms">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">What are Terms and Conditions Agreements?</h1>
                <p>
                    A Terms and Conditions agreement acts as a legal contract between you (the company) and the user. It's where you maintain your rights to exclude users from your app in the event that they abuse your website/app, set out the rules for using your service and note other important details and disclaimers.

                    Having a Terms and Conditions agreement is completely optional. No laws require you to have one. Not even the super-strict and wide-reaching General Data Protection Regulation (GDPR).

                    Your Terms and Conditions agreement will be uniquely yours. While some clauses are standard and commonly seen in pretty much every Terms and Conditions agreement, it's up to you to set the rules and guidelines that the user must agree to.

                    Terms and Conditions agreements are also known as Terms of Service or Terms of Use agreements. These terms are interchangeable, practically speaking.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Terms And Conditions -->

@endsection


@section('script')
<script>
    $header_height = $(".header").outerHeight();
    $footer_height = $(".footer").outerHeight();
    $header_vh_height = 100 * $header_height / window.innerHeight;
    $footer_vh_height = 100 * $footer_height / window.innerHeight;
    $body_height = 100 - ($header_vh_height + $footer_vh_height);
    console.log($body_height);

    $(".terms").css("min-height", $body_height + "vh");
</script>
@endsection