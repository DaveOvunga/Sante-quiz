@extends('layouts.app')

@section('title', 'Actualités')

@section('content')

<div class="page-wrapper">

    @include('users.header')

    <section class="page-title" style="background-image: url(images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Actualités</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                    <li>Actualités</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-silver-light">
        <div class="container pb-90">
            <div class="row">

                @foreach ($actualites as $actu)
                    <div class="news-block col-xl-4 col-lg-6 col-md-6">
                        <div class="inner-box">

                            <div class="image-box">
                                <figure class="image">
                                    <a href="{{ route('actualites.show', $actu->id) }}">
                                        @if($actu->image)
                                            <img src="{{ Storage::url($actu->image) }}" class="card-img-top" style="width:100%; height:296px; object-fit: cover;">
                                        @else
                                            <img src="/images/resource/default.jpg" alt="">
                                        @endif
                                    </a>
                                </figure>
                            </div>

                            <div class="content-box">
                                <span class="date">
                                    {{ $actu->published_at ? $actu->published_at->format('d M, Y') : $actu->created_at->format('d M, Y') }}
                                </span>

                                <span class="post-info">
                                    <i class="fa fa-user-circle"></i> Admin
                                </span>

                                <h5 class="title">
                                    <a href="{{ route('actualites.show', $actu->id) }}">
                                        {{ $actu->titre }}
                                    </a>
                                </h5>

                                <div class="text">
                                    {{ Str::limit(strip_tags($actu->contenu), 90) }}
                                </div>

                                <a href="{{ route('actualites.show', $actu->id) }}" class="read-more">
                                    <i class="fa fa-long-arrow-alt-right"></i> Lire plus
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

</div>
@endsection
