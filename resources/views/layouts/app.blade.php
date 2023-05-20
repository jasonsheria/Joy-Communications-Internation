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
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script> -->
    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script type="text/javascript" src="path_to/jquery.simplePagination.js"></script>
    <link type="text/css" rel="stylesheet" href="path_to/simplePagination.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
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
    </style>
    <script>
        $(window).on('load', function() {
            $('.preloader-wave-effect').fadeOut();
            $('#preloader-wrapper').delay(75).fadeOut('fast');
        });
    </script>
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
        <div class="container d-flex dark" style="color: white;
    background: black;
    width: 100vw;
    font-family: monospace;
    padding: 11px;
    display: flex;
    z-index:2000;
    position: relative;">
            <div class="m-3" style="width:66%;padding-left:33px">
                <a class="link" href="#"><i class="fab fa-facebook-f facebook-bg" style="padding: 7px;
    background: darkblue;
    color: white;"></i></a>
                <a href="#"><i class="fab fa-twitter twitter-bg" style="    padding: 7px;
    background: #55ACEE;
    color: white;"></i></a>
                <a href="#"><i class="fab fa-google-plus-g google-bg" style="    padding: 7px;
    background: #DD4B39;
    color: white;"></i></a>
            </div>
            <div class="m-3">
                adressemail@gmail.com | Kinshasa/Gombe +2439999999
            </div>
        </div>

        <header>

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
                            <li class="active"><a href="{{('home')}}">Acceuille</a></li>
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
    <main>
        @yield('content')
    </main>
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
                                <li><a href="{{('home')}}">acceuille</a></li>
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

    <!-- page wrapper end -->
    <!-- All Js files-->

</body>

</html>