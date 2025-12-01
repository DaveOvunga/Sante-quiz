@extends('layouts.app')

@section('title', 'News')

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
				<h1 class="title">News Grid</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>News</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- News Section -->
	<section class="bg-silver-light">
		<div class="container pb-90">
			<div class="row">
				<!-- News Block -->
				<div class="news-block col-xl-4 col-lg-6 col-md-6">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.html"><img src="images/resource/news-1.jpg" alt=""></a></figure>
						</div>
						<div class="content-box">
							<span class="date">17 Dec, 2024</span>
							<span class="post-info"><i class="fa fa-user-circle"></i> by Admin</span>
							<h5 class="title"><a href="news-details.html">7 cool benefits of your life insurance</a></h5>
							<div class="text">Lorem ipsum dolor sit amet, coned sectetur notte elit sed do.</div>
							<a href="news-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read More</a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-xl-4 col-lg-6 col-md-6">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.html"><img src="images/resource/news-2.jpg" alt=""></a></figure>
						</div>
						<div class="content-box">
							<span class="date">15 Jan, 2024</span>
							<span class="post-info"><i class="fa fa-user-circle"></i> by Admin</span>
							<h5 class="title"><a href="news-details.html">We provide all types of insurance</a></h5>
							<div class="text">Lorem ipsum dolor sit amet, coned sectetur notte elit sed do.</div>
							<a href="news-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read More</a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-xl-4 col-lg-6 col-md-6">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="news-details.html"><img src="images/resource/news-3.jpg" alt=""></a></figure>
						</div>
						<div class="content-box">
							<span class="date">22 Jan, 2024</span>
							<span class="post-info"><i class="fa fa-user-circle"></i> by Admin</span>
							<h5 class="title"><a href="news-details.html">Benefits of your life insurance</a></h5>
							<div class="text">Lorem ipsum dolor sit amet, coned sectetur notte elit sed do.</div>
							<a href="news-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i> Read More</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!--End News Section -->

	<!-- Main Footer -->
	
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->
@endsection
