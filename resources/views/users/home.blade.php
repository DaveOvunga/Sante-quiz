@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="page-wrapper">

	<!-- Preloader -->
	<div class="preloader"></div>

	<!-- Main Header-->	
	 @include('users.header')
	<!--End Main Header -->

	<!-- Banner Section Two-->
    @include('users.partials.banner')
	<!--END Banner Section Two -->

	<!-- Features Section -->
    @include('users.partials.features')
	<!-- End Offer Section -->

	<!-- About Section Two -->
	@include('users.partials.aboutSection')
	<!--Emd About Section Two -->

	<!-- Call To Action -->
	@include('users.partials.callToAction')
	<!--End Call To Action -->

	<!-- Services Section -->
	@include('users.partials.services')
	<!-- End Services Section-->

	<!-- FAQ Section -->
	@include('users.partials.faq')
	<!--End FAQ Section -->

	<!-- Features Section 2 -->
	@include('users.partials.features2')
	<!-- End Offer Section -->

	<!-- Projects section two-->
	@include('users.partials.projectSection')
	<!-- End Projects Section -->

	<!-- Why Choose Us -->
	@include('users.partials.whyChooseUs')
	<!--Emd Why Choose Us -->

	<!-- Testimonial Section -->
	@include('users.partials.testimonial')
	<!-- End Testimonial Section -->

    <!-- Contact Section   -->
    @include('users.partials.contactSection')
    <!--End Contact Section -->

	<!-- News Section -->
	@include('users.partials.news')
	<!--End News Section -->

	<!-- Main Footer -->
	
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->
@endsection