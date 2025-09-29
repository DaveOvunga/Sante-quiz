@extends('layouts.app')

@section('title', 'Team')

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
				<h1 class="title">Team Grid</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>Team</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- Team Section -->
	<section class="">
		<div class="container pb-90">
			<div class="row">
				<!-- Team Block -->
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box mb-md-30">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="images/resource/team-1.jpg" alt=""></a></figure>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<span class="share-icon fa fa-plus"></span>
						</div>
						<div class="info-box">
							<h4 class="name"><a href="page-team-details.html">Aleesha brown</a></h4>
							<span class="designation">Insumo Agent</span>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box mb-md-30">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="images/resource/team-2.jpg" alt=""></a></figure>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<span class="share-icon fa fa-plus"></span>
						</div>
						<div class="info-box">
							<h4 class="name"><a href="page-team-details.html">Kevin martin</a></h4>
							<span class="designation">Insumo Agent</span>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="page-team-details.html"><img src="images/resource/team-3.jpg" alt=""></a></figure>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<span class="share-icon fa fa-plus"></span>
						</div>
						<div class="info-box">
							<h4 class="name"><a href="page-team-details.html">Christine eve</a></h4>
							<span class="designation">Insumo Agent</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Team Section -->

	<!-- News Section -->
	<section class="news-section pb-0">
		<div class="bg bg-service-1"></div>
		<div class="auto-container">
			<div class="sec-title text-center light">
				<span class="sub-title">What We’re Offering</span>
				<h2>Insurance Services</h2>
			</div>

			<div class="row">
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.html"><img src="images/resource/news-3.jpg" alt=""></a></figure>
						</div>
						<div class="content-box">
							<h5 class="title"><a href="news-details.html">Car Insurance</a></h5>
							<div class="text">Lorem ipsum is simply dolor sit am adipi we help you ensure everyone.</div>
							<a href="news-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read More</a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.html"><img src="images/resource/news-1.jpg" alt=""></a></figure>
						</div>
						<div class="content-box">
							<h5 class="title"><a href="news-details.html">Life Insurance</a></h5>
							<div class="text">Lorem ipsum is simply dolor sit am adipi we help you ensure everyone.</div>
							<a href="news-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read More</a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.html"><img src="images/resource/news-2.jpg" alt=""></a></figure>
						</div>
						<div class="content-box">
							<h5 class="title"><a href="news-details.html">Home Insurance</a></h5>
							<div class="text">Lorem ipsum is simply dolor sit am adipi we help you ensure everyone.</div>
							<a href="news-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End News Section -->

	<!-- Clients Section   -->
	<section class="clients-section">
		<div class="auto-container">
			<!-- Sponsors Outer -->
			<div class="sponsors-outer">
				<!--clients carousel-->
				<ul class="clients-carousel owl-carousel owl-theme">
					<li class="slide-item"> <a href="#"><img src="images/resource/client.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="images/resource/client.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="images/resource/client.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="images/resource/client.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="images/resource/client.png" alt=""></a> </li>
				</ul>
			</div>
		</div>
	</section>
	<!--End Clients Section -->

	<!-- Main Footer -->
	
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->
@endsection


