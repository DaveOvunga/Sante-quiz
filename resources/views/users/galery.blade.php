@extends('layouts.app')

@section('title', 'Team')

@section('content')

<div class="page-wrapper">

    <!-- Main Header-->
    @include('users.header')
    <!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url(images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Gallerie d'image(s)</h1>
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
            <div class="row" id="gallery-container">
                @foreach($photos as $index => $photo)
                <!-- Team Block -->
                <div class="team-block-two col-lg-4 col-md-6 col-sm-12 gallery-item {{ $index >= 6 ? 'd-none' : '' }}">
                    <div class="inner-box mb-md-30">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ asset($photo) }}" data-lightbox="gallery">
                                    <img src="{{ asset($photo) }}" alt="Photo">
                                </a>
                            </figure>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>                                
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                            <span class="share-icon fa fa-plus"></span>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="#">Colloque Scientifique</a></h4>
                            <span class="designation">et culturel de la santé</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Bouton Voir plus -->
            @if(count($photos) > 6)
                <div class="text-center mt-4">
                    <button id="load-more" class="btn btn-outline-success">Voir plus</button>
                </div>
            @endif
        </div>
    </section>
    <!--End Team Section -->

    <!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">
            <div class="sponsors-outer">
                <ul class="clients-carousel owl-carousel owl-theme">
                    @foreach($photos as $photo)
                        <li class="slide-item">
                            <a href="{{ asset($photo) }}" data-lightbox="gallery">
                                <img src="{{ asset($photo) }}" alt="Photo">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section -->

</div><!-- End Page Wrapper -->

<script>
document.addEventListener("DOMContentLoaded", function() {

    const items = document.querySelectorAll(".gallery-item");
    const loadBtn = document.getElementById("load-more");

    let visible = 6;
    const perPage = 6;

    if (loadBtn) {
        loadBtn.addEventListener("click", function() {

            for (let i = visible; i < visible + perPage && i < items.length; i++) {
                items[i].classList.remove("d-none");
            }

            visible += perPage;

            if (visible >= items.length) {
                loadBtn.style.display = "none";
            }
        });
    }

});
</script>


@endsection
