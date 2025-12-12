@extends('layouts.app')

@section('title', 'actualité-details')

@section('content')

<section class="blog-details">
    @include('users.header')
    <section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Actualités Details</h1>
				<ul class="page-breadcrumb">
					<!-- <li><a href="index.html">Home</a></li> -->
					<!-- <li>News</li> -->
				</ul>
			</div>
		</div>
	</section>
    <div class="container">
        <div class="row">

            {{-- ********** CONTENU PRINCIPAL *********** --}}
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">

                    {{-- Image principale de l’actualité --}}
                    <div class="blog-details__img">
                        <img src="{{ Storage::url($actualite->image) }}" alt="" style="width:100%; height:auto;">
                        <div class="blog-details__date">
                            <span class="day">{{ $actualite->published_at?->format('d') }}</span>
                            <span class="month">{{ $actualite->published_at?->format('M') }}</span>
                        </div>
                    </div>

                    {{-- Texte --}}
                    <div class="blog-details__content">
                        <ul class="list-unstyled blog-details__meta">
                            <li><i class="fas fa-user-circle"></i> Admin</li>
                            <li><i class="fas fa-calendar"></i> {{ $actualite->published_at?->format('d M Y') }}</li>
                        </ul>

                        <h3 class="blog-details__title">{{ $actualite->titre }}</h3>

                        <p class="blog-details__text-2">
                            {!! nl2br(e($actualite->contenu)) !!}
                        </p>
                    </div>
                </div>
            </div>

            {{-- ********** SIDEBAR *********** --}}
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">

                    {{-- SEARCH --}}
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search here">
                            <button type=""><i class="lnr-icon-search"></i></button>
                        </form>
                    </div>

                    {{-- LATEST POSTS --}}
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest Posts</h3>

                        <ul class="sidebar__post-list list-unstyled">
                            @foreach ($latestPosts as $post)
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="{{ Storage::url($post->image) }}"
                                             alt=""
                                             style="width:70px; height:70px; object-fit:cover;">
                                    </div>

                                    <div class="sidebar__post-content">
                                        <h3>
                                            <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span>
                                            <a href="{{ route('actualites.show', $post->id) }}">
                                                {{ $post->titre }}
                                            </a>
                                        </h3>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- CATEGORY (optionnel) --}}
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <li><a href="#">Actualités<span class="icon-right-arrow"></span></a></li>
                        </ul>
                    </div>

                    {{-- TAGS --}}
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3>
                        <div class="sidebar__tags-list">
                            <a href="#">Info</a>
                            <a href="#">Santé</a>
                            <a href="#">Afrique</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

@endsection
