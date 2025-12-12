@extends('layouts.app')

@section('title', 'Nos projets')

@section('content')
<div class="page-wrapper">

    @include('users.header')

    <section class="page-title" style="background-image: url(images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="title-outer">
                <h1 class="title">Nos Réalisations(s)</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 🌟 RÉSUMÉ DES RÉALISATIONS (SECTION STATIQUE) -->
    <section class="pt-5 pb-3">
        <div class="container">
            <h2 class="resume-title mb-4 text-center">Résumé des Réalisations</h2>

            <div class="resume-block">
                <h3>2021</h3>
                <p>Octobre à décembre : Lancement de Santequiz Challenge (1) diffusé sur B-One et YouTube, avec la participation de plus de 10 universités et de nombreux étudiants et professionnels de santé.</p>
            </div>

            <div class="resume-block">
                <h3>2022</h3>
                <p>Janvier à Mars : Clôture de Santequiz Challenge édition 1 (tournoi interuniversitaire/hospitalier diffusé sur B-One).</p>
                <p>Octobre : Lancement des sessions de Formation Médicale Continue (Santequiz Academy) et des sessions d’éducation sanitaire dans les écoles (Santequiz Alert).</p>
            </div>

            <div class="resume-block">
                <h3>2023</h3>
                <p>Plusieurs sessions de FMC (doses pédiatriques, ECG, santé mentale, etc.) ayant touché plus de 1000 professionnels.</p>
                <p>30 Juin : Descente caritative de dons de médicaments à l’Hôpital Mabanga.</p>
                <p>14 octobre : Lancement de Santequiz Mag & Santé Élite Award (SEA) — 1er prix attribué au Prof Dr Jean-Jacques MUYEMBE.</p>
                <p>9 Novembre : Remise de 4 trophées SEA (Dr Tshiamala, Prof Kayembe, AFMED, CNCSU).</p>
                <p>9 Décembre : Session FMC avec participation du Dr Polydor MBONGANI (CNCSU).</p>
            </div>

            <div class="resume-block">
                <h3>2024</h3>
                <p>FMC ayant touché plus de 800 professionnels.</p>
                <p>Mars : Formation en anglais médical + lancement de Easy Medical English Club.</p>
                <p>Juin : Dépistage de masse de la drépanocytose.</p>
                <p>Juillet : Descente caritative de dons de médicaments à Kisantu.</p>
                <p>Octobre : Participation au 1er Congrès Européen sur la Drépanocytose (Bruxelles).</p>
            </div>

            <div class="resume-block">
                <h3>2025</h3>
                <p>Grandes conférences FMC (urgences médicales & drépanocytose) + Dons de médicaments à Kisantu.</p>
                <p>Deux éditions du Colloque Scientifique et Culturel sur la Santé à Paris (Ambassade RDC & Espace Barrault) avec plus de 150 participants, en présence de SEM Emile Ngoy Kasongo & SEM Samuel Roger Kamba.</p>
            </div>
        </div>
    </section>

    <!-- 🌟 RÉALISATIONS DYNAMIQUES (PROJECTS) -->
    <section class="pt-2 pb-4">
        <div class="container">
            <div class="row g-4">
                @foreach ($projects as $index => $project)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="project-card fade-in" style="animation-delay: {{ $index * 0.1 }}s;">

                            <div class="project-image">
                                <img src="{{ asset('projectImage/' . $project->image) }}" alt="{{ $project->title }}">
                            </div>

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

<style>
    /* TITRE DU RESUME */
    .resume-title {
        font-size: 2rem;
        font-weight: 800;
        color: #1c7c3c;
        border-left: 6px solid #1c7c3c;
        padding-left: 12px;
    }

    /* BLOCS D'ANNÉES */
    .resume-block {
        background: #f7f8f7;
        border-left: 4px solid #1c7c3c;
        padding: 18px 22px;
        margin-bottom: 18px;
        border-radius: 10px;
    }

    .resume-block h3 {
        font-size: 1.4rem;
        font-weight: 700;
        margin-bottom: 8px;
        color: #1c7c3c;
    }

    .resume-block p {
        margin: 0 0 8px;
        color: #333;
        line-height: 1.55;
    }

    /* TES STYLES DYNAMIQUES (inchangés) */
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
    }

    .read-more {
        background: var(--main-green);
        color: #fff;
        padding: 8px 18px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
    }

    @keyframes fadeSlideUp {
        from {opacity: 0; transform: translateY(30px);}
        to {opacity: 1; transform: translateY(0);}
    }
</style>

@endsection
