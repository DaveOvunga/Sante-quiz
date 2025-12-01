@extends('layouts.app')

@section('title', 'Team details')

@section('content')

<div class="page-wrapper">

	<!-- Preloader -->
	<!-- <div class="preloader"></div> -->

	<!-- Main Header-->
	@include('users.header')
	<!--End Main Header -->

	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Team Details</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>Team Details</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Team Details Start-->
	<section class="team-details">

		<div class=""></div>
		<div class="container">
			<div class="team-details__top">
				<div class="row">
					<div class="col-xl-6 col-lg-6">
						<div class="team-details__top-left">
							<div class="team-details__top-img"> <img src="images/resource/team-details.jpg" alt="">
								<div class="team-details__big-text"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="team-details__top-right">
							<div class="team-details__top-content">
								<h3 class="team-details__top-name">Aleesha Brown</h3>
								<p class="team-details__top-title">Managing Director & CEO</p>
								<p class="team-details__top-text-1">I help my clients stand out and they help me grow.</p>
								<div class="team-details-contact mb-30">
									<h5 class="mb-0">Email Address</h5>
									<div class=""><span>needhelp@yourdomain.com</span></div>
								</div>
								<div class="team-details-contact mb-30">
									<h5 class="mb-0">Phone Number</h5>
									<div class=""><span>+012-3456-789</span></div>
								</div>
								<div class="team-details-contact">
									<h5 class="mb-0">Web Address</h5>
									<div class=""><span>www.yourdomain.com</span></div>
								</div>
								<div class="team-details__social"> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Team Details End--> 

	<!--Contact Details Start-->
	<section class="team-contact-form">
		<div class="container pb-100">
			<div class="sec-title text-center">
				<span class="sub-title">Contact With Us Now</span>
				<h2 class="section-title__title">Feel Free to Write Our <br> Tecnology Experts</h2>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<!-- Contact Form -->
					<form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_name" class="form-control" type="text" placeholder="Enter Name">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
						</div>
						<div class="mb-3 text-center">
							<input name="form_botcheck" class="form-control" type="hidden" value="" />
							<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
							<button type="reset" class="theme-btn btn-style-one"><span class="btn-title">Reset</span></button>
						</div>
					</form>
					<!-- Contact Form Validation-->
				</div>
			</div>
		</div>
	</section>
	<!--Contact Details End-->

	<!-- Main Footer -->
	
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->
@endsection

