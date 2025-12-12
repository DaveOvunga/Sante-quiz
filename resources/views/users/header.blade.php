<header class="main-header header-style-two">
    <!-- Header Top -->
    <div class="header-top">
			<div class="inner-container">
				<div class="top-left">
					<!-- Info List -->
					<ul class="list-style-one">
						<li><i class="fa fa-envelope"></i> <a href="mailto:needhelp@company.com">contact@santequiz.org</a></li>
						<li><i class="fa fa-map-marker"></i> 144, Blvd du 30 Juin 3ème niveau, Local A Immeuble Dijon Center Gombe / Kinshasa</li>
					</ul>
				</div>

				<div class="top-right">
					<ul class="useful-links">
						<li><a href="#">Help</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="social-icon-one">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
    <!-- Header Top -->

    <div class="header-lower">
        <div class="container-fluid">
            <!-- Main box -->
            <div class="main-box">
                <div class="logo-box">
                    <div class="logo"><a href="#"><img src="{{ asset('images/SANT21.png') }}" alt="" title="Santéquiz"></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <!-- <li><a href="{{route('home')}}">Accueil</a></li> -->
                        <ul class="navigation">
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li><a href="{{ route('about') }}">Qui sommes-nous</a></li>
                        <li><a href="{{ route('project') }}">Réalisations</a></li>
                        <li><a href="{{ route('team') }}">Notre Équipe</a></li>
                        <li><a href="{{ route('gallery') }}">Galerie(s)</a></li>
                        <li><a href="{{ route('actualites.index') }}">Actualités</a></li>

                        <!-- <li><a href="{{ route('service') }}">Services</a></li> -->

                        @guest
                            <!-- <li><a href="{{ route('login') }}">Se connecter</a></li>
                            <li><a href="{{ route('register') }}">S'inscrire</a></li> -->
                        @endguest

                        <!-- @auth
                            <li class="dropdown">
                            <a href="#">👋 {{ Auth::user()->name }}</a>
                        <ul>
                            <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" style="background:none;border:none;color:#fff;cursor:pointer;">Se déconnecter</button>
                    </form>
                </li>
            </ul>
        </li>
    @endauth -->
</ul>

                    </nav>
                    <!-- Main Menu End-->
                </div>

                <div class="outer-box">
                    <!-- <div class="ui-btn-outer">
                        <button class="ui-btn ui-btn search-btn">
                            <span class="icon lnr lnr-icon-search"></span>
                        </button>
                    </div> -->

                    <a href="tel:+243 825 296 273" class="info-btn">
                        <i class="icon fa fa-phone"></i>
                        <small>Appelez-nous 24/7</small>+243 825 296 273
                    </a>

                    <!-- Mobile Nav toggler -->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo"><a href="#"><img src="{{ asset('images/SANT21.png') }}" alt="" title=""></a></div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
            <ul class="contact-list-one">
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <i class="icon lnr-icon-phone-handset"></i>
                        <span class="title">Appelez Maintenant</span>
                        <a href="tel:+243 825 296 273">+243 825 296 273</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a href="mailto:help@company.com">contact@santequiz.org</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Send Email</span>
                        Lun - Sam 24/7, Sunday - CLOSED
                    </div>
                </li>
            </ul>


            <ul class="social-links">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div><!-- End Mobile Menu -->

    <!-- Header Search -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="post" action="blog-showcase.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search..." required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                        <button id="santequiz" class="btn btn-outline-success">SANTEQUIZ</button>

<style>
  .btn {
    border-radius: 8px; /* Bordure arrondie */
    transition: all 0.5s ease; /* Animation fluide */
  }

  .btn-outline-success {
    color: black;
    border: 2px solid green;
    background-color: transparent;
  }

  .btn-filled-success {
    color: white;
    background-color: green;
    border: 2px solid green;
  }
</style>

<script>
  const button = document.getElementById('santequiz');

  setInterval(() => {
    button.classList.toggle('btn-outline-success');
    button.classList.toggle('btn-filled-success');
  }, 3000);
</script>
                </div>

                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>
