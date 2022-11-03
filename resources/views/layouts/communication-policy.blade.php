@extends('layouts.master')



@section('style')
<!-- Swiper Slide -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<!-- Swiper Slide -->

<link rel="stylesheet" href="{{ asset('css/payment.css') }}" />
@endsection



@section('content')

<!-- Communication Policy -->
<div class="communication">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8">
                <h1 class="text-center">What are Communication Policy?</h1>
				<p>
                    Communication policies in Tanzania are incorporated in the national constitution, which includes, among other things, freedom of the press, freedom of expression, freedom of consciousness, and freedom of assembly and association. In this frame of reference, Tanzania has in place both statutory and constitutional provisions to provide several aspects of the media industry. The constitution, therefore, guarantees a free and independent media. Article 18 of the constitution of Tanzania provides that without prejudice to the law of the land, every person has the right to freedom of opinion and expression and to seek, receive, and impart or disseminate information and ideas through any media regardless of national frontiers. Also, an individual has the right to freedom from the interference with his or her communication. Every citizen also has the right to be informed at all times of various events in the country and in the world at large which are of importance to the lives and activities of the people and also of issues of importance to society.

                    In general, Tanzania respects the freedom of the press but it does not entertain freedom. In other words, the president has the power to interfere with the freedom of the press when he considers it in the public interest to do so. Tanzania advocates press freedom without obligation. The Newspaper Act of 1976 (Act. No.3/1976) empowers the president to prohibit publication and the Broadcasting Service Act (Act. No.6/1993) regulates and supervises broadcasting activities.
                </p>
			</div>
		</div>
	</div>
</div>
<!-- Communication Policy -->

@endsection


@section('script')
    <script>
        $header_height = $(".header").outerHeight();
        $footer_height = $(".footer").outerHeight();
        $header_vh_height = 100 * $header_height / window.innerHeight;
        $footer_vh_height = 100 * $footer_height / window.innerHeight;
        $body_height = 100 - ( $header_vh_height + $footer_vh_height );
        console.log($body_height);

        $(".communication").css("min-height", $body_height + "vh");
    </script>
@endsection
