@extends('layouts.app')

@section('title', 'Nos projets')

@section('content')
<div class="page-wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->

    <!-- Main Header -->
    @include('users.header')
    <!-- End Main Header -->

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Nos Service(s)</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <!-- <li>Projets</li> -->
                </ul>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                @foreach ($projects as $index => $project)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="project-card fade-in" style="animation-delay: {{ $index * 0.1 }}s;">
                            <!-- Image -->
                            <div class="project-image">
                                <img src="{{ asset('projectImage/' . $project->image) }}" alt="{{ $project->title }}">
                            </div>

                            <!-- Contenu -->
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text">{{ Str::limit($project->description, 130, '...') }}</p>
                                <a href="{{ route('projetdetails', ['id' => $project->id]) }}" class="read-more">
                                    Lire plus →
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>

<!-- 💅 Style intégré -->
<style>
    :root {
        --main-green: #1c7c3c;
        --hover-green: rgba(28, 124, 60, 0.08);
        --card-bg: #f7f8f7;
    }

    .project-card {
        background: #fff;
        border: 2px solid var(--main-green);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 6px 15px rgba(28, 124, 60, 0.1);
        transition: all 0.4s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .project-image {
        width: 100%;
        height: 220px;
        overflow: hidden;
    }

    .project-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .project-card:hover .project-image img {
        transform: scale(1.05);
    }

    .card-body {
        background-color: var(--card-bg);
        padding: 20px 25px;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: black;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 0.95rem;
        color: #333;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .read-more {
        display: inline-block;
        align-self: flex-start;
        background: var(--main-green);
        color: #fff;
        padding: 8px 18px;
        border-radius: 25px;
        font-weight: 600;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .read-more:hover {
        background: #166b34;
    }

    /* 💫 Hover global */
    .project-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 25px rgba(28, 124, 60, 0.25);
        border-color: #1c7c3c;
    }

    /* Animation d’apparition */
    @keyframes fadeSlideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in {
        opacity: 0;
        animation: fadeSlideUp 0.8s ease forwards;
    }
</style>
@endsection
