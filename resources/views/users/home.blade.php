@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="page-wrapper">

	<!-- Preloader -->
	<!-- <div class="preloader"></div> -->

	<!-- Main Header-->	
	 @if (!str_starts_with(request()->path(), 'admin'))
		@include('users.header')
	@endif

	<!--End Main Header -->

	<!-- Banner Section Two-->
    @include('users.partials.banner')
	<!--END Banner Section Two -->

	<!-- Features Section -->
    
	<!-- End Offer Section -->

	<!-- About Section Two -->
	@include('users.partials.aboutSection')
	<!--Emd About Section Two -->
	@include('users.partials.features')
	<!-- Call To Action -->
	
	<!--End Call To Action -->

	<!-- Services Section -->
	@include('users.partials.services')
	<!-- End Services Section-->
	
	
	<!-- FAQ Section -->
	
	<!--End FAQ Section -->

	<!-- Features Section 2 -->
	
	<!-- End Offer Section -->

	<!-- Projects section two-->
	
	<!-- End Projects Section -->
	@include('users.partials.projectSection')

	@include('users.partials.callToAction')
	<!-- Why Choose Us -->
	@include('users.partials.whyChooseUs')
	<!--Emd Why Choose Us -->
	@include('users.partials.faq')
	<!-- Testimonial Section -->
	@include('users.partials.testimonial')
	<!-- End Testimonial Section -->

    <!-- Contact Section   -->    
    <!--End Contact Section -->

	<!-- News Section -->
	
	<!--End News Section -->

	<!-- Main Footer -->
	
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->
@endsection