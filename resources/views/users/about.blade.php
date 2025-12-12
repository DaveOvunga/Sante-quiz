@extends('layouts.app')

@section('title', 'A propos')

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
				<h1 class="title">Qui Sommes-Nous ?</h1>				
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- About Section -->
	<section class="about-section-six">
		<div class="auto-container">
			<div class="row">
				<div class="content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title">
							<!-- <span class="sub-title">Apropos de  Notre Asbl</span> -->
							<h2>Qui Sommes-Nous <strong>?</strong></h2>
							<div class="text" style="margin-top: 5px;">SANTEQUIZ – ASBL est une Association Sans But Lucratif qui œuvre dans les domaines de la santé publique, de la médecine et du développement durable, en République Démocratique du Congo et au-delà.

							Face aux urgences sanitaires de l’heure, aux inégalités d’accès aux soins et aux défis structurels, nous développons des actions concrètes, inclusives et intergénérationnelles, mobilisant les professionnels de santé, les étudiants, les partenaires, les communautés et les institutions. Nous croyons que la santé est un pilier essentiel du progrès humain, économique et social.
							</div>
						</div>

						<div class="content-box">
							<div class="info-box">
								<h5 class="title">Protéger aujourd’hui, pour mieux vivre demain</h5>
								<a href="#" class="read-more">More <i class="fa fa-long-arrow-alt-right"></i></a>
							</div>

							<div class="about-block-six">
								<i class="icon flaticon-insurance-026-love"></i>
								<h5 class="title" onclick="toggleAccordion(0)">Genèse <i class="fa fa-chevron-up"></i></h5>
								<div class="text" style="display: block;">
									Santequiz est née de la crise de la Covid-19 pour 
                                    répondre au besoin pressant de promotion de la 
                                    santé, de prévention des maladies et d’éducation 
                                    sanitaire communautaire à travers des actions de 
                                    proximité.
								</div>
							</div>

							<div class="about-block-six">
								<i class="icon flaticon-insurance-001-heart-rate"></i>
								<h5 class="title" onclick="toggleAccordion(1)">Mission <i class="fa fa-chevron-down"></i></h5>
								<div class="text" style="display: none;">
									Promouvoir, renforcer et transformer le secteur de la santé en RDC et en Afrique à travers la formation, l’innovation, la valorisation des élites et des initiatives sociales durables.
								</div>
							</div>



						</div>

						<div class="btm-box">
							<a href="#" class="theme-btn btn-style-one"><span class="btn-title">SANTEQUIZ</span></a>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft">
						<figure class="image-1 overlay-anim wow fadeInUp"><img src="{{ asset('images/resource/about-10.jpg') }}" alt=""></figure>
						<figure class="image-2 overlay-anim wow fadeInRight"><img src="{{ asset('images/resource/23.jpg') }}" alt=""></figure>
						<div class="experience bounce-y">
							<img src="{{ asset('images/resource/about-2.jpg') }}" alt="" class="icon">
							<strong>1000+</strong> Medecin(s)
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section -->

	<!-- Services Section -->
	<section class="services-section py-5">
		<div class="auto-container">
			<div class="sec-title text-center mb-5">
			<span class="sub-title">SantéQuiz</span>
			<h2>Nos axes d'Action.</h2>
			</div>

			<div class="row g-4">
			@foreach($axes as $index => $axe)
				<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="project-card fade-in" style="animation-delay: {{ $index * 0.1 }}s;">
					<div class="project-image">
					<img src="{{ asset('projectImage/' . $axe->image) }}" alt="{{ $axe->title }}">
					</div>
					<div class="card-body">
					<h5 class="card-title">{{ $axe->title }}</h5>
					<!-- <p class="card-text">{!! nl2br(e(\Illuminate\Support\Str::limit($axe->description, 143))) !!}</p> -->

					<button type="button" class="read-more" onclick="toggleConceptSelect({{ $axe->id }})">
						Réalisation(s) →
					</button>

					<div id="concept-select-{{ $axe->id }}" style="display: none; margin-top: 15px;">
						<label for="concepts-{{ $axe->id }}">Choisissez un concept :</label>
						<select id="concepts-{{ $axe->id }}" onchange="goToConcept(this.value)">
						<option value="">-- Sélectionner --</option>
						@foreach($axe->projects as $concept)
							<option value="{{ route('projetdetails', ['id' => $concept->id]) }}">
							{{ $concept->title }}
							</option>
						@endforeach
						</select>
					</div>
					</div>
				</div>
				</div>
			@endforeach
			</div>

			<div class="bottom-box text-center mt-5">
			<p class="text">Agir ensemble pour une <strong>santé</strong> équitable et humaine.</p>
			<a href="page-services.html" class="read-more">Explore now →</a>
			</div>
		</div>
		</section>


	<!--  -->
	<section class="team-section pt-5 pb-5">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">Notre Structure</span>
            <h2>Organigramme de <br><strong>SANTEQUIZ</strong></h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="content-box">
                    <!-- Ton contenu ici -->
                    <div class="text-block mb-4">
                        <p class="lead text-center">SANTEQUIZ est structuré autour de deux grandes composantes :</p>
                        <ul>
                            <li>Le Comité d’Administration</li>
                            <li>Les Départements</li>
                        </ul>
                        <p>Elle regroupe également :</p>
							<ul>
								<li>Les Membres Effectifs</li>
								<li>Les Membres d’Honneur</li>
							</ul>
                    </div>

					<div class="text-block mb-4">
                <h4>1. Comité d’Administration</h4>
                <ul>
                    <li><strong>Coordonnateur :</strong> <strong>Dr Bienvenu ILEKA ILONGO</strong></li>
                    <li><strong>Coordonnateur Adjoint :</strong> Dr Christian SUDILA TSHISHIMBI</li>
                    <li><strong>Secrétaire et Trésorier :</strong> Dr Michel KIVULA MOMAKA</li>
                </ul>
            </div>

            <div class="text-block mb-4">
                <h4>2. Les Départements</h4>

                <h5>Département Scientifique</h5>
                <p>Dirigé avec excellence par les parrains de notre association :</p>
                <ul>
                    <li>Dr Pascal TSHIAMALA – CEO de la Clinique Astryd et Coordonnateur du Programme National de Lutte contre les Hépatites Virales</li>
                    <li>Prof Dr Daniel OKITUNDU – Médecin Directeur du CNPP / UNIKIN</li>
                    <li>Prof Dr Jean Marie KAYEMBE – Recteur de l’Université de Kinshasa</li>
                </ul>

                <h5>Département Logistique</h5>
                <ul>
                    <li>Dr Joe KANKU KANKU</li>
                    <li>Dr Prince MUSANKISHAYI LUNDA</li>
                </ul>

                <h5>Département Accueil et Restauration</h5>
                <ul>
                    <li>Dr Lisa MBELU</li>
                    <li>Mme Ornella ILEKA</li>
                </ul>

                <h5>Département Communication</h5>
                <ul>
                    <li>Ir Chris MASHIA</li>
                </ul>
            </div>

            <div class="text-block mb-4">
                <h4>3. Les Membres Effectifs</h4>
                <p>Regroupent toutes les personnes participant activement aux activités de SANTEQUIZ, parmi lesquelles :</p>
                <ul>
                    <li>Professionnels de santé</li>
                    <li>Étudiants</li>
                    <li>Autres membres engagés</li>
                </ul>
            </div>

            <div class="text-block mb-4">
                <h4>4. Les Membres d’Honneur</h4>
                <p>Personnalités qui soutiennent activement la mission et les initiatives de SANTEQUIZ :</p>
                <ul>
                    <li>SEM Samuel Roger KAMBA – Ministre de la Santé Publique, Hygiène et Prévention</li>
                    <li>Dr Polydor MBUNGANI – Coordonnateur du Comité National de la Couverture Santé Universelle</li>
                    <li>Prof Dr Antoine MODIA – Président et Fondateur de la Fondation des Anges</li>
                </ul>
            </div>

                    <!-- Et ainsi de suite pour les autres blocs -->
                </div>
            </div>
        </div>
    </div>
</section>

	
<style>
	.team-section .content-box {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.05);
}

.team-section ul {
    list-style-type: disc;
    padding-left: 20px;
    margin-bottom: 15px;
}

.team-section h4, .team-section h5 {
    margin-top: 25px;
    color: #2c3e50;
    font-weight: bold;
}

.team-section p {
    margin-bottom: 10px;
    font-size: 16px;
    line-height: 1.7;
}

.team-section .lead {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 20px;
}

</style>

	<!-- Features Section -->
	
	<!-- End Offer Section -->

	<!-- Projects section two-->
	
	<!-- End Projects Section -->

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
  border: none;
  cursor: pointer;
}

.read-more:hover {
  background: #166b34;
}

.project-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 25px rgba(28, 124, 60, 0.25);
  border-color: #1c7c3c;
}

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

<script>
function toggleConceptSelect(id) {
    const selectBox = document.getElementById('concept-select-' + id);
    if (selectBox) {
        selectBox.style.display = selectBox.style.display === 'none' ? 'block' : 'none';
    }
}

function goToConcept(url) {
    if (url) {
        window.location.href = url;
    }
}

// partie mission et vision
function toggleAccordion(index) {
    const blocks = document.querySelectorAll('.about-block-six');
    blocks.forEach((block, i) => {
        const text = block.querySelector('.text');
        const icon = block.querySelector('h5 i');

        if (i === index) {
            text.style.display = 'block';
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
        } else {
            text.style.display = 'none';
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
        }
    });
}

</script>

