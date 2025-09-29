@extends('layouts.app')

@section('title', 'A propos')

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
				<h1 class="title">Apropos de Nous</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>Apropos</li>
				</ul>
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
								<h5 class="title" onclick="toggleAccordion(0)">Vision <i class="fa fa-chevron-up"></i></h5>
								<div class="text" style="display: block;">
									Une santé publique de qualité, accessible à tous, soutenue par la science, l’innovation, la solidarité et l’action collective, pour bâtir un système de santé plus fort et plus humain.
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
							<strong>3600+</strong> Satisfied Client
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section -->

	<!-- Services Section -->
	<section class="services-section pt-0">
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">What We’re Offering</span>
				<h2>Nos 5 axes d'action.</h2>
			</div>

			<div class="row">
				<!-- Service Block -->
				
				@foreach($axes as $axe)
				<div class="service-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
					<div class="inner-box">
						<div class="icon-box">
							<i class="icon flaticon-insurance-001-heart-rate"></i>
						</div>

						<!-- Titre dynamique -->
						<h5 class="title">{{ $axe->title }}</h5>

						<!-- Description dynamique -->
						<div class="text">
							{!! nl2br(e($axe->description)) !!}
						</div>

						<!-- Bouton Lire plus -->
						<button type="button" class="read-more" style="background-color: white;" onclick="toggleConceptSelect({{ $axe->id }})">
							<i class="fa fa-long-arrow-alt-right"></i> Réalisation(s)
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

				@endforeach
												
			</div>

			<div class="bottom-box">
				<div class="text">Agir ensemble pour une <strong>santé</strong> équitable et humaine.</div>
				<a href="page-services.html" class="theme-btn btn-style-one"><span class="btn-title">Explore now</span></a>
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

