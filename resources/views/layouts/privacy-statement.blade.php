@extends('layouts.master')

@section('title') PRIVACY @endsection

@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/payment.css') }}" />
@endsection



@section('content')

<!-- Privacy Statement -->
<div class="privacy-statement">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">What are Privacy Statement?</h1>
                <p>
                    Microsoft collects data from you, through our interactions with you and through our products. You provide some of this data directly, and we get some of it by collecting data about your interactions, use, and experiences with our products. The data we collect depends on the context of your interactions with Microsoft and the choices you make, including your privacy settings and the products and features you use. We also obtain data about you from third parties.

                    If you represent an organization, such as a business or school, that utilizes Enterprise and Developer Products from Microsoft, please see the Enterprise and developer products section of this privacy statement to learn how we process your data. If you are an end user of a Microsoft product or a Microsoft account provided by your organization, please see the Products provided by your organization and the Microsoft account sections for more information.

                    You have choices when it comes to the technology you use and the data you share. When we ask you to provide personal data, you can decline. Many of our products require some personal data to provide you with a service. If you choose not to provide data required to provide you with a product or feature, you cannot use that product or feature. Likewise, where we need to collect personal data by law or to enter into or carry out a contract with you, and you do not provide the data, we will not be able to enter into the contract; or if this relates to an existing product you’re using, we may have to suspend or cancel it. We will notify you if this is the case at the time. Where providing the data is optional, and you choose not to share personal data, features like personalization that use such data will not work for you.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Privacy Statement -->

@endsection


@section('script')
<script>
    $header_height = $(".header").outerHeight();
    $footer_height = $(".footer").outerHeight();
    $header_vh_height = 100 * $header_height / window.innerHeight;
    $footer_vh_height = 100 * $footer_height / window.innerHeight;
    $body_height = 100 - ($header_vh_height + $footer_vh_height);
    console.log($body_height);

    $(".privacy-statement").css("min-height", $body_height + "vh");
</script>
@endsection