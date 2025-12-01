<section class="services-section py-5">
  <div class="auto-container">
    <div class="sec-title text-center mb-5">
      <span class="sub-title">Ce que SANTEQUIZ met à votre service</span>
      <h2>Nos Axes<br> d'Action.</h2>
    </div>

    <div class="row g-4">
      <!-- Bloc Service 1 -->
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="project-card fade-in" style="animation-delay: 0s;">
          <div class="project-image">
            <img src="../images/resource/img_1.jpg" alt="Formation continue">
          </div>
          <div class="card-body">
            <h5 class="card-title">Formation continue & accompagnement académique</h5>
            <p class="card-text">Organisation de conférences, colloques, ateliers, séminaires et formations certifiantes ...</p>
            <a href="{{ route('about') }}" class="read-more">Lire plus →</a>
          </div>
        </div>
      </div>

      <!-- Bloc Service 2 -->
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="project-card fade-in" style="animation-delay: 0.1s;">
          <div class="project-image">
            <img src="../images/resource/img_2.jpg" alt="Promotion santé publique">
          </div>
          <div class="card-body">
            <h5 class="card-title">Promotion active de la santé publique</h5>
            <p class="card-text">Campagnes communautaires de prévention et d’éducation sanitaire.</p>
            <a href="{{ route('about') }}" class="read-more">Lire plus →</a>
          </div>
        </div>
      </div>

      <!-- Bloc Service 3 -->
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="project-card fade-in" style="animation-delay: 0.2s;">
          <div class="project-image">
            <img src="../images/resource/img_3.jpg" alt="Valorisation des élites">
          </div>
          <div class="card-body">
            <h5 class="card-title">Valorisation des élites et de l’excellence en santé</h5>
            <p class="card-text">Prix et distinctions (notamment le programme SanteEliteAwards) ...</p>
            <a href="{{ route('about') }}" class="read-more">Lire plus →</a>
          </div>
        </div>
      </div>

      <!-- Bloc Service 4 -->
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="project-card fade-in" style="animation-delay: 0.3s;">
          <div class="project-image">
            <img src="../images/resource/img_4.jpg" alt="Actions sociales">
          </div>
          <div class="card-body">
            <h5 class="card-title">Actions sociales & œuvres de charité</h5>
            <p class="card-text">Organisation de soins gratuits ou subventionnés dans les milieux défavorisés ...</p>
            <a href="{{ route('about') }}" class="read-more">Lire plus →</a>
          </div>
        </div>
      </div>

      <!-- Bloc Service 5 -->
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="project-card fade-in" style="animation-delay: 0.4s;">
          <div class="project-image">
            <img src="../images/resource/img_5.jpg" alt="Innovation en santé">
          </div>
          <div class="card-body">
            <h5 class="card-title">Accompagnement des projets et de l’innovation en santé</h5>
            <p class="card-text">Conseil en entrepreneuriat médical, gestion d’établissement et investissement sanitaire</p>
            <a href="{{ route('about') }}" class="read-more">Lire plus →</a>
          </div>
        </div>
      </div>
    </div>

    <div class="bottom-box text-center mt-5">
      <p class="text">Agir ensemble pour une <strong>santé</strong> équitable et humaine.</p>
      <a href="{{ route('about') }}" class="read-more">Lire plus →</a>
    </div>
  </div>
</section>

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