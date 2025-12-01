@extends('layouts.app')

@section('title', 'Team')

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
                <h1 class="title">Notre Equipe</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <!-- <li>Projets</li> -->
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
							<figure class="image"><a href="#"><img src="images/resource/01.jpg" alt=""></a></figure>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<span class="share-icon fa fa-plus"></span>
						</div>
						<div class="info-box">
							<h4 class="name"><a href="#"> 
								Dr. Bienvenu Ileka Ilongo								
							</a></h4>
							<span class="designation">Président et Fondateur de Santequiz.</span>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box mb-md-30">
						<div class="image-box">
							<figure class="image"><a href="#"><img src="images/resource/01.jpg" alt=""></a></figure>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<span class="share-icon fa fa-plus"></span>
						</div>
						<div class="info-box">
							<h4 class="name"><a href="#"> 
								Dr. Bienvenu Ileka Ilongo								
							</a></h4>
							<span class="designation">Président et Fondateur de Santequiz.</span>
						</div>
					</div>
				</div>

				<!-- Team Block -->
				<div class="team-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><a href="#"><img src="images/resource/01.jpg" alt=""></a></figure>
							<div class="social-links">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
							<span class="share-icon fa fa-plus"></span>
						</div>
						<div class="info-box">
							<h4 class="name"><a href="#"> 
								Dr. Bienvenu Ileka Ilongo								
							</a></h4>
							<span class="designation">Président et Fondateur de Santequiz.</span>
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
				<span class="sub-title">Ce Que Nous Offrons</span>
				<h2>Quelques Réalisations</h2>
			</div>

			<div class="row">
    @foreach ($projects as $project)
    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image">
                    <a href="{{ route('newsdetails', ['id' => $project->id]) }}" class="read-more">
                        <img src="{{ asset('projectImage/' . $project->image) }}" alt="{{ $project->title }}">
                    </a>
                </figure>
            </div>
            <div class="content-box">
                <h5 class="title">
                    <a href="{{ route('newsdetails', ['id' => $project->id]) }}">{{ $project->title }}</a>
                </h5>
                <div class="text">{{ Str::limit($project->description, 100) }}</div>
                <a href="{{ route('newsdetails', ['id' => $project->id]) }}" class="read-more">
                    <i class="fa fa-long-arrow-alt-right"></i> Lire Plus
                </a>
            </div>
        </div>
    </div>
@endforeach


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
					<li class="slide-item"> <a href="#"><img src="images/resource/santeQuiz.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="images/resource/santeQuiz.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="images/resource/santeQuiz.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="images/resource/santeQuiz.png" alt=""></a> </li>
					<li class="slide-item"> <a href="#"><img src="images/resource/santeQuiz.png" alt=""></a> </li>
				</ul>
			</div>
		</div>
	</section>
	<!--End Clients Section -->

	<!-- Main Footer -->
	
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->
@endsection


