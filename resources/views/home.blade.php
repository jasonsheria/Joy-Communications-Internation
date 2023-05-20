<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" href="favicon.ico">
    <!-- all additional css -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script> -->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Joy Communications International</title>
    <style>
        body {
            width: 100vw;
            overflow-x: hidden;
        }

        .title {
            background: rgba(255, 255, 255, 0.7);
            color: #333;
            position: fixed;
            text-align: right;
            top: 0;
            right: 0;
            padding: 10px 15px;
            margin: 0;
            z-index: 100;
        }

        .slider {
            position: relative;
            overflow: hidden;
            height: 100vh;
            width: 100vw;
        }

        .slide {
            background-position: center center;
            background-size: cover;
            position: absolute;
            top: 0;
            left: 100%;
            height: 100%;
            width: 100%;
        }

        .slide.active {
            transform: translateX(-100%);
        }

        .slide .info {
            background-color: rgba(255, 255, 255, 0.7);
            color: #333;
            padding: 20px 15px;
            position: absolute;
            opacity: 0.1;
            top: 40%;
            left: 40px;
            text-align: center;
            width: 700px;
            max-width: 100%;
        }

        .slide.active .info {
            opacity: 1;
            transform: translateY(-40px);
            transition: all 0.5s ease-in-out 0.8s;
        }

        .slide .info h1 {
            margin: 10px 0;
        }

        .slide .info p {
            letter-spacing: 1px;
        }

        .eraser {
            background: #f5f5f5;
            position: absolute;
            transition: transform 0.5s ease-in-out;
            opacity: 0.95;
            top: 0;
            left: 100%;
            height: 100%;
            width: 100%;
            z-index: 100;
        }

        .eraser.active {
            transform: translateX(-100%);
        }

        .buttons-container {
            position: absolute;
            bottom: 50px;
            right: 60px;
            /*   display: flex; */

        }

        .buttons-container button {
            border: 2px solid #fff;
            background-color: transparent;
            color: #fff;
            cursor: pointer;
            padding: 8px 30px;
            margin-right: 10px;
        }

        .buttons-container button:hover {
            background-color: #fff;
            color: #A9A9A9;
            opacity: 0.9;
        }


        @media (max-width: 400px) {
            .slide .info {
                top: 100px;
                left: 10px;
            }
        }

        .navbar.affix-top {
            padding-top: 6.8vh;
            background: white;
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- prelaoder start -->
    <div id="preloader-wrapper">
        <div class="preloader-wave-effect"></div>
    </div>
    <!-- prelaoder end -->
    <!-- page wrapper start -->
    <div id="page-top" class="wrapper">
        <!-- header area start -->

        <header>
            <div class="container d-flex dark" style="color: white;
                background: black;
                width: 100vw;
                font-family: monospace;
                padding: 11px;
                display: flex;
                    z-index: 1200;
    position: relative;">
                <div class="m-3" style="width:66%;padding-left:33px">
                    <a class="link" href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </div>
                <div class="m-3">
                    adressemail@gmail.com | Kinshasa/Gombe +2439999999
                </div>
            </div>
            <nav class="navbar navbar-fixed-top" data-spy="affix" data-offset-top="1">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href=""><img src="img/logo/logo.png" alt="logo" class="img-responsive"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="{{('home')}}">Acceuil</a></li>
                            <li><a href="{{('actualite')}}">Actualités</a></li>
                            <li><a href="{{('aide')}}">Faire un Don!</a></li>
                            <li><a href="{{('contact')}}">Contactez Nous!</a></li>
                            <li><a href="{{('apropos')}}">Apropos de Nous!</a></li>
                            <li><a href="{{('dashboard')}}">dashboard</a></li>


                            @guest
                            @if (Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if(Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                    </div>
                    </li>
                    @endguest


                    </ul>
                </div>
    </div>
    </nav>
    </header>
    <div class="slider">
        <div class="slider-container">
            <div class="slide active">
                <img src="{{ url('storage/banniere/child-malnutrition.jpg') }}" alt="" style="width:100%; height:100vh">
                <div class=" info">
                    <h1> Joy Communications International </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum.</p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ url('storage/banniere/refuger.jpg') }}" alt="" style="width:100%; height:100vh" />

                <div class="info">
                    <h1> JCI Activités </h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, vero earum perspiciatis officia</p>
                </div>
            </div>

            <div class="slide">
                <img src="{{ url('storage/banniere/operations_dassistance_des_vulnerables_touches_par_la_covid_dans_la_commune_de_la_nsele_a_kinshasa.jpg') }}" alt="" style="width:100%; height:100vh" />

                <div class="info">
                    <h1> Joy Actualités</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt recusandae unde autem</p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ url('storage/banniere/child-malnutrition.jpg') }}" alt="" style="width:100%; height:100vh" />

                <div class="info">
                    <h1> Aide ! </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>

        </div>
        <div class="eraser"></div>
        <div class="buttons-container">
            <button id="previous"><i class="fas fa-chevron-left"></i></i></button>
            <button id="next"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>

    <!-- slider area end -->
    <!-- app features area start -->
    <section id="app-features-area" class="ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 p-0 wow fadeIn" data-wow-duration="2s">
                    <div class="single-feature media">
                        <div class="feature-icon media-left">
                            <img src="img/icons/app-feature-1.png" alt="">
                        </div>
                        <div class="feature-details media-body">
                            <h5 class="text-uppercase">Description</h5>
                            <p> Le JCI, Est Associations Sans
                                But Lucratif non Confessionnel dont le siège se situe dans la ville de Kinshasa capitale de la République
                                Démocratique du Congo au n°11 de l’avenue Grand Séminaire,
                                Q/Nganda..</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-0 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="single-feature media">
                        <div class="feature-icon media-left">
                            <img src="img/icons/app-feature-2.png" alt="">
                        </div>
                        <div class="feature-details media-body">
                            <h5 class="text-uppercase">Objectif</h5>
                            <p>
                                Contribuer au maximum, à la
                                transformation et au bienêtre de nos frères et Soeurs ; émuent par le désir de
                                promouvoir le développement économique et social .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-0 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="single-feature media">
                        <div class="feature-icon media-left">
                            <img src="img/icons/app-feature-3.png" alt="">
                        </div>
                        <div class="feature-details media-body">
                            <h5 class="text-uppercase">Partenaire</h5>
                            <p>Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod teporara incididunt ugt labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- app features area end -->
    <!-- app about area start -->
    <section id="app-about-area" class="gray-bg ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-heading text-center">
                        <h2> Apropos de Nous </h2>
                        <p>
                            "JOY
                            COMMUNICATIONSINTERNATIONAL" en sigle « JCI » exerce ses
                            activités sur toute l’étendue de République démocratique du Congo.

                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-app mt-100">
                        <h3>Membres</h3>
                        <p>
                            Soucieux de préserver les
                            liens historiques qui nous unissent ;
                            Préoccupés par le retard sinon le manque
                            de développement social dans plusieurs milieux de vie ; « Joy Communications International
                            » en sigle JCI, est une association basé en Republique Democratique du Congo dont lt siège est situé à Kinshasa
                        </p>
                        <p>
                            Cependant les membres de JCI et partenaires sont d'un peu partout dans et en dehors de la RDC, celle- ci peut avoir à intervenir par ses actions, en dehors de la
                            République démocratique du Congo
                        </p>
                        <div class="button-group store-buttons">
                            <a href="#" class="btn btn-bordered-grad">
                                <i class="icofont icofont-brand-android-robot dsp-tc"></i>
                                <p class="dsp-tc">Suivez-nous
                                    <br> <span>Twitter</span>
                                </p>
                            </a>
                            <a href="#" class="btn btn-bordered-grad">
                                <i class="icofont icofont-brand-apple dsp-tc"></i>
                                <p class="dsp-tc">Suivez-Nous
                                    <br> <span>Facebook</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs" style="padding-top: 8%;">
                    <div class="about-app-mockup animated wow bounceIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <img src="{{ url('storage/banniere/8960ADFC-383E-42A6-8E21-68B24E34A42F.jpeg') }}" alt="" class=" img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="awesome-features-area" class="overlay-white ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-heading text-center">
                        <h2>Nos Activités</h2>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 p-0 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="awesome-feature one media">
                        <div class="awesome-feature-icon media-left">
                            <span><i class="icofont icofont-dart"></i></span>
                        </div>
                        <div class="asesome-feature-details media-body">
                            <h5> Séminaires de Formations</h5>
                            <p>
                                Organiser des séminaires de formation pour les jeunes, des ateliers,
                                des colloques en vue d’une mise à niveau efficace car le premier
                                patrimoine dans toute entreprise est l’être humain
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-0 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="awesome-feature two media">
                        <div class="awesome-feature-icon media-left">
                            <span><i class="icofont icofont-light-bulb"></i></span>
                        </div>
                        <div class="asesome-feature-details media-body">
                            <h5>Campagne d'aide</h5>
                            <p>
                                Combattre la pauvreté, l’analphabétisation, l’insalubrité, les
                                pandémies, en venant en aide aux chrétiens et aux non chrétiens les plus démunis
                                en les assistants en besoin essentiels de la vie, à savoir,
                                l’habillement, la nourriture.
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-0 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="awesome-feature three media">
                        <div class="awesome-feature-icon media-left">
                            <span><i class="icofont icofont-eye"></i></span>
                        </div>
                        <div class="asesome-feature-details media-body">
                            <h5>Travaux et Constructions</h5>
                            <p>
                                construction des écoles et hôpitaux, pour les démunies.
                                En RDC les taux des déplacé est en hausse avec tant de problèmes que traverse notre pays. D'où la nécessité d'agir en Urgence
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 p-0 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">
                    <div class="awesome-feature four media">
                        <div class="awesome-feature-icon media-left">
                            <span><i class="icofont icofont-code"></i></span>
                        </div>
                        <div class="asesome-feature-details media-body">
                            <h5> Campagne & Sensibilisations</h5>
                            <p> Vulgariser, et promouvoir auprès de la population, des droits
                                reconnus à toute personne.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-0 wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
                    <div class="awesome-feature five media">
                        <div class="awesome-feature-icon media-left">
                            <span> <i class="icofont icofont-space-shuttle"></i></span>
                        </div>
                        <div class="asesome-feature-details media-body">
                            <h5>Recolte de fond !</h5>
                            <p>
                                Nous ne pouvons pas y parvenir seul sans votre Aide! raison pour laquelle nous vous demandons de faire un don! via les moyens indiqué dans la plateforme.
                                Votre aide sauvera peut être des milié des vies humaines!
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- <section id="fun-fact-area" class="overlay-grad-one ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-fact text-center">
                        <i class="icofont icofont-safety"></i>
                        <h5>APP DOWNLOADS</h5>
                        <h2 class="counter">1200</h2>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-fact text-center">
                        <i class="icofont icofont-heart-alt"></i>
                        <h5>HAPPY CLIENTS</h5>
                        <h2 class="counter">1080</h2>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-fact text-center">
                        <i class="icofont icofont-boy"></i>
                        <h5>ACTIVE ACCOUNTS</h5>
                        <h2 class="counter">1170</h2>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-fact text-center">
                        <i class="icofont icofont-star"></i>
                        <h5>TOTAL APP RATES</h5>
                        <h2 class="counter">720</h2>
                    </div>
                </div>
            </div>
        </div>
    </section> -->




    <!-- fun fact area end -->
    <!-- app screenshot area start -->
    <!-- <section id="app-screenshot-area" class="ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-heading text-center">
                        <h2>APP Screenshots</h2>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="slider-wrapper-2">
                    <div class="slide one">
                        <div class="slider-image">
                            <img src="img/app-screenshots/1.jpg" alt="" class="img-responsive">
                            <div class="preview-icon">
                                <a href="img/app-screenshots/1.jpg"><i class="icofont icofont-image"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="slide two">
                        <div class="slider-image">
                            <img src="img/app-screenshots/2.jpg" alt="" class="img-responsive">
                            <div class="preview-icon">
                                <a href="img/app-screenshots/2.jpg"><i class="icofont icofont-image"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="slide three">
                        <div class="slider-image">
                            <img src="img/app-screenshots/3.jpg" alt="" class="img-responsive">
                            <div class="preview-icon">
                                <a href="img/app-screenshots/3.jpg"><i class="icofont icofont-image"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="slide four">
                        <div class="slider-image">
                            <img src="img/app-screenshots/4.jpg" alt="" class="img-responsive">
                            <div class="preview-icon">
                                <a href="img/app-screenshots/4.jpg"><i class="icofont icofont-image"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="slide five">
                        <div class="slider-image">
                            <img src="img/app-screenshots/2.jpg" alt="" class="img-responsive">
                            <div class="preview-icon">
                                <a href="img/app-screenshots/2.jpg"><i class="icofont icofont-image"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- app screenshot area end -->
    <!-- team area start -->


    <!-- <section id="team-area" class="overlay-grad-one ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-heading white-shape text-center">
                            <h2>AWESOME TEAM</h2>
                            <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-3 animated wow fadeIn">
                        <div class="single-member one text-center">
                            <img src="img/members/member-1.jpg" alt="" class="img-responsive">
                            <div class="member-description">
                                <div class="member-description-inner">
                                    <h3 class="member-name">JASON ADAMS</h3>
                                    <p class="designation">UI UX Designer</p>
                                    <p class="short-description">Lorem ipsum dolor sit amet, secte tur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <ul class="social list-inline">
                                        <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 animated wow fadeIn" data-wow-delay=".2s">
                        <div class="single-member two text-center">
                            <img src="img/members/member-2.jpg" alt="" class="img-responsive">
                            <div class="member-description">
                                <div class="member-description-inner">
                                    <h3 class="member-name">JASON ADAMS</h3>
                                    <p class="designation">UI UX Designer</p>
                                    <p class="short-description">Lorem ipsum dolor sit amet, secte tur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <ul class="social list-inline">
                                        <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 animated wow fadeIn" data-wow-delay=".4s">
                        <div class="single-member three text-center">
                            <img src="img/members/member-3.jpg" alt="" class="img-responsive">
                            <div class="member-description">
                                <div class="member-description-inner">
                                    <h3 class="member-name">JASON ADAMS</h3>
                                    <p class="designation">UI UX Designer</p>
                                    <p class="short-description">Lorem ipsum dolor sit amet, secte tur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <ul class="social list-inline">
                                        <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 hidden-sm animated wow fadeIn" data-wow-delay=".6s">
                        <div class="single-member four text-center">
                            <img src="img/members/member-4.jpg" alt="" class="img-responsive">
                            <div class="member-description">
                                <div class="member-description-inner">
                                    <h3 class="member-name">JASON ADAMS</h3>
                                    <p class="designation">UI UX Designer</p>
                                    <p class="short-description">Lorem ipsum dolor sit amet, secte tur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <ul class="social list-inline">
                                        <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="icofont icofont-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


    <!-- team area end -->
    <!-- testimonial area start -->


    <!-- <section id="testimonial-area" class="ptb-120">
            <div class="container">
                <div class="slider-wrapper-3">
                    <div class="slide">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="slider-content text-center">
                                    <div class="client-image">
                                        <img src="img/clients/client-1.jpg" alt="" class="img-responsive img-circle center-block">
                                    </div>
                                    <div class="client-testimonial">
                                        <h3>JASON ADAMS</h3>
                                        <p class="client-designation">Faltu Designer</p>
                                        <p class="client-review">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incubt consectetur aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut com modo consequat. Duis aute irure dolor in reprehenderit.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="slider-content text-center">
                                    <div class="client-image">
                                        <img src="img/clients/client-1.jpg" alt="" class="img-responsive img-circle center-block">
                                    </div>
                                    <div class="client-testimonial">
                                        <h3>JASON ADAMS</h3>
                                        <p class="client-designation">Faltu Designer</p>
                                        <p class="client-review">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incubt consectetur aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut com modo consequat. Duis aute irure dolor in reprehenderit.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->



    <!-- testimonial area end -->
    <!-- pricing table area start -->
    <!-- <section id="pricing-table-area" class="overlay-white ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-heading text-center">
                        <h2>PRICING TABLE</h2>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-duration="2s">
                    <div class="single-price-table one text-center transition-3s">
                        <div class="pricing-head">
                            <div class="price-tage-wrap">
                                <h1 class="price-value transition-3s"><sub class="doller-sign">$</sub>20<sub class="duration"> /Month</sub></h1>
                            </div>
                            <h5 class="plan-title blue-grad-bg">BASIC</h5>
                        </div>
                        <div class="pricing-content">
                            <ul class="table-content">
                                <li>100 MB Disk Space</li>
                                <li>2 Subdomains</li>
                                <li>5 Email Accounts</li>
                                <li>Webmail Support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer transition-3s">
                            <p class="transition-3s">(Save 20 USD)</p>
                            <a class="btn btn-bordered-grad" href="#">purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="single-price-table two text-center transition-3s">
                        <div class="pricing-head">
                            <div class="price-tage-wrap">
                                <h1 class="price-value transition-3s"><sub class="doller-sign">$</sub>39<sub class="duration"> /Month</sub></h1>
                            </div>
                            <h5 class="plan-title blue-grad-bg">STANDARD</h5>
                        </div>
                        <div class="pricing-content">
                            <ul class="table-content">
                                <li>100 MB Disk Space</li>
                                <li>2 Subdomains</li>
                                <li>5 Email Accounts</li>
                                <li>Webmail Support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer transition-3s">
                            <p class="transition-3s">(Save 20 USD)</p>
                            <a class="btn btn-bordered-grad" href="#">purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                    <div class="single-price-table three text-center transition-3s">
                        <div class="pricing-head">
                            <div class="price-tage-wrap">
                                <h1 class="price-value transition-3s"><sub class="doller-sign">$</sub>79<sub class="duration"> /Month</sub></h1>
                            </div>
                            <h5 class="plan-title blue-grad-bg">PREMIUM</h5>
                        </div>
                        <div class="pricing-content">
                            <ul class="table-content">
                                <li>100 MB Disk Space</li>
                                <li>2 Subdomains</li>
                                <li>5 Email Accounts</li>
                                <li>Webmail Support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer transition-3s">
                            <p class="transition-3s">(Save 20 USD)</p>
                            <a class="btn btn-bordered-grad" href="#">purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                    <div class="single-price-table four text-center transition-3s">
                        <div class="pricing-head">
                            <div class="price-tage-wrap">
                                <h1 class="price-value transition-3s"><sub class="doller-sign">$</sub>199<sub class="duration"> /Year</sub></h1>
                            </div>
                            <h5 class="plan-title blue-grad-bg">UNLIMITED</h5>
                        </div>
                        <div class="pricing-content">
                            <ul class="table-content">
                                <li>100 MB Disk Space</li>
                                <li>2 Subdomains</li>
                                <li>5 Email Accounts</li>
                                <li>Webmail Support</li>
                            </ul>
                        </div>
                        <div class="pricing-footer transition-3s">
                            <p class="transition-3s">(Save 20 USD)</p>
                            <a class="btn btn-bordered-grad" href="#">purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- pricing table area end -->
    <!-- frequently asked questions area start -->
    <section id="faq-area" class="ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-heading text-center">
                        <h2>Faire un don! </h2>
                        <p>
                            Pour réaliser certaines actions ponctuelles, Joy Communications
                            International peut recourir à des quêtes spéciales ou des sollicitations
                            auprès des tiers et des instances publiques.

                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 hidden-sm p-0 wow bounceInLeft">
                    <div class="faq-right-img-mockup">
                        <img src="{{url('storage/banniere/Screenshot_20230513_050739_com.airtel.africa.selfcare.jpg')}}" style="margin-left: 100%; height: 79vh;" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 p-0">
                    <div class="faq-content-wrapper">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed">1. Via l'application?</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>Allez dans la page "Donnez l'aide et suivez les insctructions indiquées dessus, le moyens de payement également."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="">2. Via un compte bancaire?</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>
                                            Obtener ici un numéro de compte dediez à recevoir vos dons!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" class="collapsed">3. Via Les services Mobile Money?</a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>
                                            Voicie nos numéros mobile money :
                                            1. Airtel : +2439...............
                                            1. Vodacom : +24382...............
                                            1. Orange : +2489...............
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour" class="collapsed">4. Autres Moyens ?</a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <p>
                                            Non disponible
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog-area" class="home-style-1 ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-heading text-center">
                        <h2>Dernière Actualité</h2>
                        <p>Suivez l'actualité tous les 24h ici sur la plateforme avec nous ! partout dans le monde.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 animated wow fadeIn" data-wow-duration="2s">
                    <article class="blog-post">
                        <div class="post-thumbnail">
                            <a href="blog-details-left-sidebar.html">
                                <img src="{{url('storage/banniere/IMG_8424.jpeg')}}" alt="" style="max-height: 250px; width: 400px;" class="img-responsive center-block">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <ul class="meta-info list-inline">
                                    <li class="posted-by">By <a href="#">Admin</a></li>
                                    <li class="post-date"><a href="#">Janu. 15 2017</a></li>
                                    <li class="comments-quantity"><a href="#">(20) Comments</a></li>
                                </ul>
                                <h5 class="post-title"><a href="blog-details-left-sidebar.html">How To Showcase your Awesome App?</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adiiga elit, abuci sedeiusmod tempor inccsetetur aliquatraiy enimni ad numminim veniam, quis nostrud layers.</p>
                            </div>
                            <div class="read-more-wrapper">
                                <a href="blog-details-left-sidebar.html" class="read-more-btn">Read More <i class="icofont icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                    <article class="blog-post">
                        <div class="post-thumbnail">
                            <a href="blog-details-left-sidebar.html">
                                <img src="{{url('storage/banniere/child-malnutrition.jpg')}}" style="max-height: 250px; width: 400px;" alt="" class="img-responsive center-block">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <ul class="meta-info list-inline">
                                    <li class="posted-by">By <a href="#">Admin</a></li>
                                    <li class="post-date"><a href="#">Janu. 15 2017</a></li>
                                    <li class="comments-quantity"><a href="#">(20) Comments</a></li>
                                </ul>
                                <h5 class="post-title"><a href="blog-details-left-sidebar.html">How To Showcase your Awesome App?</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adiiga elit, abuci sedeiusmod tempor inccsetetur aliquatraiy enimni ad numminim veniam, quis nostrud layers.</p>
                            </div>
                            <div class="read-more-wrapper">
                                <a href="blog-details-left-sidebar.html" class="read-more-btn">Read More <i class="icofont icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 hidden-sm wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
                    <article class="blog-post">
                        <div class="post-thumbnail">
                            <a href="blog-details-left-sidebar.html">
                                <img src="{{url('storage/banniere/IMG-20230507-WA0019.jpg')}}" style="max-height: 250px; width: 400px;" alt="" class="img-responsive center-block">
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <ul class="meta-info list-inline">
                                    <li class="posted-by">By <a href="#">Admin</a></li>
                                    <li class="post-date"><a href="#">Janu. 15 2017</a></li>
                                    <li class="comments-quantity"><a href="#">(20) Comments</a></li>
                                </ul>
                                <h5 class="post-title"><a href="blog-details-left-sidebar.html">How To Showcase your Awesome App?</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adiiga elit, abuci sedeiusmod tempor inccsetetur aliquatraiy enimni ad numminim veniam, quis nostrud layers.</p>
                            </div>
                            <div class="read-more-wrapper">
                                <a href="blog-details-left-sidebar.html" class="read-more-btn">Read More <i class="icofont icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row" style="padding-top:40px">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Notre Adresse</h4>
                                <span> Kinshasa, au n°11 de l’avenue Grand Séminaire,
                                    Q/Nganda</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Appelez nous au</h4>
                                <span>+2439.........</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Adresse Mail</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row" style="padding-top:40px">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="g" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p> JOY COMMUNICATIONS
                                    INTERNATIONAL, situé En République Démocratique du Congo et dont le siège actuelle est Kinshasa oeuvrant dans et en dehors de la RDC pour la lutte contre la pauvrété.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Suivez Nous</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Touts les liens </h3>
                            </div>
                            <ul>
                                <li><a href="{{('home')}}">Acceuil</a></li>
                                <li><a href="{{('actualite')}}">Actualité</a></li>
                                <li><a href="{{('apropos')}}">Apropos </a></li>
                                <li><a href="{{('aide')}}">Faire un don!</a></li>
                                <li><a href="{{('contact')}}">Contact</a></li>
                                <li><a href="{{('login')}}">Login</a></li>
                                <!-- <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Souscrire</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>souscrivez vous pour recevoir des notifications par mail.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Adresse Email">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="{{('home')}}">acceuil</a></li>
                                <li><a href="{{('home')}}">Terms</a></li>
                                <li><a href="{{('home')}}">Privacy</a></li>
                                <li><a href="{{('home')}}">Policy</a></li>
                                <li><a href="{{('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>
    <!-- page wrapper end -->
    <!-- All Js files-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/ajax-subscribe.js"></script>
    <!-- map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8hjTJwTaYk3q7ccXZ9SNl5F9Ey6UPEhg"></script>
    <script src="js/appai.map.js"></script>
    <script src="js/main.js"></script>
</body>

</html>