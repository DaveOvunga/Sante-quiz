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
				<h1 class="title">Project Details</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>Projects</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Project Details Start-->
	<section class="project-details">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="project-details__top">
						<div class="project-details__img"><img src="{{ asset('projectImage/' . $project->image) }}" alt=""></div>
					</div>
				</div>
			</div>
			<div class="project-details__content">
				<div class="row">
					<div class="col-xl-8 col-lg-8">
						<div class="project-details__content-left">
							<h3 class="mb-4">{{ $project->title }}</h3>
    						<div class="scrollable-description">
								{!! nl2br(e($project->description)) !!}
							</div>

							<!-- <p class="mb-5"></p> -->
						</div>
					</div>
					<style>
						.scrollable-description {
							max-height: 430px; /* ajuste selon ton design */
							overflow-y: auto;
							padding-right: 10px; /* pour éviter que le texte touche le bord */
							text-align: justify;
						}

						/* Optionnel : style de scrollbar */
						.scrollable-description::-webkit-scrollbar {
							width: 6px;
						}

						.scrollable-description::-webkit-scrollbar-thumb {
							background-color: #ccc;
							border-radius: 3px;
						}

					</style>
					<div class="col-xl-4 col-lg-4">
						<div class="project-details__content-right">
							<div class="project-details__details-box">
								<div class="project-details__bg-shape"> </div>
								<ul class="list-unstyled project-details__details-list">
									<li>
										<p class="project-details__client">Date</p>
										<h4 class="project-details__name">santéquiz</h4>
									</li>
									<li>
										<p class="project-details__client">Client</p>
										<h4 class="project-details__name">santéquiz</h4>
									</li>
									<li>
										<p class="project-details__client">Website</p>
										<h4 class="project-details__name">www.santéquiz.org</h4>
									</li>
									<li>
										<p class="project-details__client">Location</p>
										<h4 class="project-details__name">santéquiz</h4>
									</li>
									<li>
										<p class="project-details__client">Value</p>
										<h4 class="project-details__name">$ ...</h4>
									</li>
									<li>
										<div class="project-details__social"> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="project-details__pagination-box">
						<ul class="project-details__pagination list-unstyled clearfix">
							<li class="next">
								@if($previous)
									<div class="icon">
										<a href="{{ route('projetdetails', ['id' => $previous->id]) }}" aria-label="Previous">
											<i class="lnr lnr-icon-arrow-left"></i>
										</a>
									</div>
									<div class="content">Précédent</div>
								@endif
							</li>							
							@foreach($projects as $proj)
								<li class="count">
									<a href="{{ route('projetdetails', ['id' => $proj->id]) }}">
										<!-- {{ $proj->title ?? 'Projet' }} -->
									</a>
								</li>
							@endforeach
							<li class="previous">
								@if($next)
									<div class="content">Suivant</div>
									<div class="icon">
										<a href="{{ route('projetdetails', ['id' => $next->id]) }}" aria-label="Next">
											<i class="lnr lnr-icon-arrow-right"></i>
										</a>
									</div>
								@endif
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Project Details End-->

	<!-- Projects section two-->
	<section class="projects-section-two pt-0">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">Get an insurance</span>
				<h2>Best Packages</h2>
			</div>

			<div class="carousel-outer">
				<div class="projects-carousel owl-carousel owl-theme">
					@foreach ($projects as $project)
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
										<span class="cat">Projet</span>
										<h6 class="title">
											<a href="{{ route('projetdetails', ['id' => $project->id]) }}">
												{{ $project->title ?? 'Sans titre' }}
											</a>
										</h6>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>

			</div>
		</div>
	</section>
	<!-- End Projects Section -->

	<!-- Main Footer -->
	
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->
@endsection

