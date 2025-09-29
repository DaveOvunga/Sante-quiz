@extends('layouts.app')

@section('title', 'Nos Services')

@section('content')

<div class="page-wrapper">

	<!-- Preloader -->
	<div class="preloader"></div>

	<!-- Main Header-->
	@include('users.header')
	<!--End Main Header -->

	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Services</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>Services</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- Services Section -->
	<section class="">
		<div class="container pb-90">

			<div class="row">
				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box"><i class="icon flaticon-insurance-001-heart-rate"></i></div>
						<h5 class="title"><a href="page-service-details.html">Life Insurance</a></h5>
						<div class="text">Lorem ipsum is simply dolor sit am adipi we help you ensure everyone.</div>
						<a href="page-service-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read more</a>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box"><i class="icon flaticon-insurance-050-house"></i></div>
						<h5 class="title"><a href="page-service-details.html">Home Insurance</a></h5>
						<div class="text">Lorem ipsum is simply dolor sit am adipi we help you ensure everyone.</div>
						<a href="page-service-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read more</a>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box"><i class="icon flaticon-insurance-012-car"></i></div>
						<h5 class="title"><a href="page-service-details.html">Car Insurance</a></h5>
						<div class="text">Lorem ipsum is simply dolor sit am adipi we help you ensure everyone.</div>
						<a href="page-service-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read more</a>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box"><i class="icon flaticon-insurance-017-portfolio"></i></div>
						<h5 class="title"><a href="page-service-details.html">Job Insurance</a></h5>
						<div class="text">Lorem ipsum is simply dolor sit am adipi we help you ensure everyone.</div>
						<a href="page-service-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read more</a>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box"><i class="icon flaticon-insurance-026-love"></i></div>
						<h5 class="title"><a href="page-service-details.html">Health Insurance</a></h5>
						<div class="text">Lorem ipsum is simply dolor sit am adipi we help you ensure everyone.</div>
						<a href="page-service-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read more</a>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box"><i class="icon flaticon-insurance-048-shield"></i></div>
						<h5 class="title"><a href="page-service-details.html">Wedding Insurance</a></h5>
						<div class="text">Lorem ipsum is simply dolor sit am adipi we help you ensure everyone.</div>
						<a href="page-service-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section-->

	<!-- Main Footer -->
	
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->
@endsection