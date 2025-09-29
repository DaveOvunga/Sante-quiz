@extends('layouts.app')

@section('title', 'Nos projets')

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
				<h1 class="title">Projects</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>Projects</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- Gallery Section -->
	<section class="">
		<div class="container">
			<div class="row g-3">
				@foreach ($projects as $project)
				<div class="col-lg-4 col-md-6 col-sm-12">
					<!-- Project Block -->
					<div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<a href="{{ route('projetdetails', ['id' => $project->id]) }}">
										<img src="{{ asset('projectImage/' . $project->image) }}" alt="{{ $project->title }}">
									</a>
								</figure>
								<div class="info-box">
									<a href="{{ route('projetdetails', ['id' => $project->id]) }}" class="read-more">
										<i class="fa fa-long-arrow-alt-right"></i>
									</a>
									<span class="cat">Health</span>
									<h6 class="title">
										<a href="{{ route('projetdetails', ['id' => $project->id]) }}">{{ $project->title }}</a>
									</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				<!-- <div class="col-lg-4 col-md-6 col-sm-12"> -->
					<!-- Project Block -->
					<!-- <div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-project-details.html"><img src="images/resource/project-2.jpg" alt=""></a>
								</figure>
								<div class="info-box">
									<a href="page-project-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
									<span class="cat">Health</span>
									<h6 class="title"><a href="page-project-details.html">Programme de mentorat académique</a></h6>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-lg-4 col-md-6 col-sm-12"> -->
					<!-- Project Block -->
					<!-- <div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-project-details.html"><img src="images/resource/project-4.jpg" alt=""></a>
								</figure>
								<div class="info-box">
									<a href="page-project-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
									<span class="cat">Car</span>
									<h6 class="title"><a href="page-project-details.html">Base de données des professionnels de santé membres</a></h6>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-lg-4 col-md-6 col-sm-12"> -->
					<!-- Project Block -->
					<!-- <div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-project-details.html"><img src="images/resource/project-4.jpg" alt=""></a>
								</figure>
								<div class="info-box">
									<a href="page-project-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
									<span class="cat">Health</span>
									<h6 class="title"><a href="page-project-details.html">SanteEliteAwards</a></h6>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-lg-4 col-md-6 col-sm-12"> -->
					<!-- Project Block -->
					<!-- <div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-project-details.html"><img src="images/resource/project-3.jpg" alt=""></a>
								</figure>
								<div class="info-box">
									<a href="page-project-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
									<span class="cat">Health</span>
									<h6 class="title"><a href="page-project-details.html">Plateforme de dons et financement participatif</a></h6>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-lg-4 col-md-6 col-sm-12"> -->
					<!-- Project Block -->
					<!-- <div class="project-block">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="page-project-details.html"><img src="images/resource/project-2.jpg" alt=""></a>
								</figure>
								<div class="info-box">
									<a href="page-project-details.html" class="read-more"><i class="fa fa-long-arrow-alt-right"></i></a>
									<span class="cat">Health</span>
									<h6 class="title"><a href="page-project-details.html">Partenariats avec universités et hôpitaux</a></h6>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			</idv>
		</div>
	</section>
	<!-- End Gallery Section -->

		<!--End Main Footer -->

</div><!-- End Page Wrapper -->
@endsection

