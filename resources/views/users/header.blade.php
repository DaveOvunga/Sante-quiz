<header class="main-header header-style-two">
    <!-- Header Top -->
    <div class="header-top">
        <div class="inner-container">
            <div class="top-left">
                <!-- Info List -->
                <ul class="list-style-one">
                    <li><i class="fa fa-envelope"></i> <a href="mailto:santequiz@gmail.com">santequiz@gmail.com</a></li>
                    <li><i class="fa fa-map-marker"></i> 144, Blvd du 30 Juin 3ème niveau, Local A Immeuble Dijon Center Gombe / Kinshasa</li>
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
                    <div class="logo"><a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="" title="Insumo"></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation">
                            <li class="current dropdown"><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="{{route('home')}}">Accueil</a></li>
                                    <!-- <li><a href="index-2.html">Home page 02</a></li>
                                    <li><a href="index-3.html">Home page 03</a></li>
                                    <li><a href="index-4.html">Home page 04</a></li>
                                    <li><a href="index-5.html">Home page 05</a></li> -->
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Pages</a>
                                <ul>
                                    <li><a href="{{ route('about') }}">A propos</a></li>
                                    <li><a href="{{ route('project') }}">Réalisation(s)</a></li>
                                    <!-- <li class="dropdown"><a href="#">Packages</a>
                                        <ul>
                                            <li><a href="{{ route('project') }}">Projet Liste</a></li>                                           
                                        </ul>
                                    </li> -->
                                    <li class="dropdown"><a href="#">Team</a>
                                        <ul>
                                            <li><a href="{{ route('team') }}">Notre Equipe</a></li>
                                            <li><a href="{{ route('teamdetails') }}">Team Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="page-testimonial.html">Testimonial</a></li>
                                    <li><a href="page-pricing.html">Pricing</a></li>
                                    <li><a href="page-faq.html">FAQ</a></li>
                                    <li><a href="page-404.html">Page 404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Services</a>
                                <ul>
                                    <li><a href="{{ route('service') }}">Services List</a></li>
                                    <li><a href="{{ route('servicedetails') }}">Service Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">News</a>
                                <ul>
                                    <li><a href="{{ route('news') }}">News Grid</a></li>
                                    <li><a href="{{ route('newsdetails') }}">News Details</a></li>
                                </ul>
                            </li>
                            
                                @guest
                                    <li><a href="{{ route('login') }}">Se connecter</a></li>
                                    <li><a href="{{ route('register') }}">S'inscrire</a></li>
                                @endguest

                                @auth
                                    <li>Bienvenue, {{ Auth::user()->name }}</li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit">Se déconnecter</button>
                                        </form>
                                    </li>
                                @endauth                            

                        </ul>
                    </nav>
                    <!-- Main Menu End-->
                </div>

                <div class="outer-box">
                    <div class="ui-btn-outer">
                        <button class="ui-btn ui-btn search-btn">
                            <span class="icon lnr lnr-icon-search"></span>
                        </button>
                    </div>

                    <a href="tel:+92(8800)9806" class="info-btn">
                        <i class="icon fa fa-phone"></i>
                        <small>Call Anytime</small>+ 88 ( 9800 ) 6802-00
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
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="" title=""></a></div>
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
                        <span class="title">Call Now</span>
                        <a href="tel:+92880098670">+92 (8800) - 98670</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Send Email</span>
                        <a href="mailto:help@company.com">help@company.com</a>
                    </div>
                </li>
                <li>
                    <!-- Contact Info Box -->
                    <div class="contact-info-box">
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">Send Email</span>
                        Mon - Sat 8:00 - 6:30, Sunday - CLOSED
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
                    <a href="index.html" title=""><img src="{{ asset('images/logo-2.png') }}" alt="" title=""></a>
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
