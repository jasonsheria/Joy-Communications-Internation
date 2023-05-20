@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: "Lato", sans-serif;
        line-height: 1.25;
        background-color: #f4f4f4;
        color: #2a2a2a;
        font-weight: 500;
    }

    /* -------- For Codepen --------- */






    /* ---------------------------- */
    /* ---------- True Code ---------- */
    .container {
        max-width: 1400px;
        margin: auto;
    }


    .container .grid-cards {
        display: flex;
        justify-content: center;
        flex: 1;
        max-width: 1024px;
        margin: 1rem auto;
    }

    @media (max-width: 922px) and (min-width: 601px) {
        .container .grid-cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .container .grid-cards {
            flex-direction: column;
        }
    }

    .container .grid-cards .card {
        position: relative;
        flex: 1;
        background: #fff;
        padding: 1rem 1rem 1.5rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        border-radius: 1rem;
        min-height: 170px;
        margin: 15px;
        transition: all ease 0.3s;
        overflow: hidden;
        animation: fadeInLeft 1.5s backwards;
    }

    .container .grid-cards .card:nth-child(2) {
        animation-delay: 0.15s;
    }

    .container .grid-cards .card:nth-child(3) {
        animation-delay: 0.2s;
    }

    .container .grid-cards .card:nth-child(4) {
        animation-delay: 0.3s;
    }

    .container .grid-cards .card:hover {
        transform: translateY(-6px);
        -webkit-transform: translateY(-6px);
    }

    .container .grid-cards .card img {
        aspect-ratio: 500/320;
        width: 100%;
        border-radius: 12px;
        margin-bottom: 15px;
        position: relative;
        max-height: 320px;
        object-fit: cover;
        box-shadow: 0 6px 16px -7px #aaa;
    }

    .container .grid-cards .card .card-body {
        color: #676767;
        width: 100%;
        margin-bottom: 40px;
        padding: 0 0.8rem;
        position: relative;
    }

    .container .grid-cards .card .card-body .icon {
        display: flex;
        width: 100%;
        text-align: left;
        padding: 15px 0;
    }

    .container .grid-cards .card .card-body .icon i {
        position: relative;
        font-size: 25px;
        transition: 0.5s;
        line-height: 0;
        top: -7px;
        left: -12px;
        z-index: 2;
    }

    .container .grid-cards .card .card-body .icon i::before {
        background: #FFD854;
        background-clip: border-box;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .container .grid-cards .card .card-body .icon h3 {
        margin: -9px 0 0 20px;
    }

    .container .grid-cards .card .card-body .title-card {
        text-align: center;
        padding-bottom: 10px;
    }

    .container .grid-cards .card .card-body p {
        font-size: 14px;
        line-height: 22px;
        font-weight: 300;
    }

    .container .grid-cards .card .card-footer {
        display: flex;
        justify-content: flex-end;
        position: absolute;
        bottom: 0;
        width: calc(100% - 1rem);
    }

    .container .grid-cards .card .card-footer a {
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(0, 0, 0, 0) linear-gradient(to right, #00c9fd 0%, #0b426e 100%) repeat scroll 0 0;
        color: #fff;
        text-shadow: 0px 1px 5px rgba(0, 0, 0, 0.08);
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
        width: 56%;
        height: 40px;
        border-top-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
    }

    .container .grid-cards .card .card-footer a:hover {
        filter: brightness(0.98);
    }

    @keyframes fadeInLeft {
        0% {
            transform: translate(-100%, 0);
        }

        100% {
            opacity: 1;
            transform: none;
        }
    }

    h1 {
        text-align: center;
    }

    button {
        font-size: 1rem;
        padding: 0.35em 0.75em;
        line-height: 1;
        background-color: transparent;
        border: 0.125rem solid #2a2a2a;
        border-radius: 2rem;
        cursor: pointer;
        transition: 0.1s;
        outline: 0;
    }

    button:hover {
        background-color: #2a2a2a;
        color: #fff;
    }

    button .fa {
        font-size: 0.75em;
        margin-left: 0.5em;
    }

    button.btn--primary {
        border-color: #042A4F;
        color: #042A4F;
    }

    button.btn--primary:hover {
        background-color: #042A4F;
        color: #fff;
    }

    button.btn--accent {
        border-color: #2196F3;
        color: #2196F3;
    }

    button.btn--accent:hover {
        background-color: #2196F3;
        color: #fff;
        opacity: 0.8;
    }

    .posts {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 2.5rem;
    }

    @media (max-width: 1140px) {
        .posts {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .posts {
            grid-template-columns: repeat(1, 1fr);
        }
    }


    .post__image:before,
    .post__image:after {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
    }

    .post__image:before {
        background-size: cover;
        background-position: center center;
        transform: scale(1);
        filter: blur(0);
        transition: 2s cubic-bezier(0, 0.6, 0.2, 1);
    }

    .post__image:after {
        background: linear-gradient(30deg, #042A4F 0%, #E65891 100%);
        background-size: 100% 300%;
        background-position: bottom left;
        opacity: 0.15;
        transition: 2s cubic-bezier(0, 0.6, 0.2, 1);
    }

    .post__image--1:before {}


    .post__image--0 {

        background-position: center;
        background-position: center;
        background-origin: border-box;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .post__image--0 .first {
        padding-top: 43%;
        color: white;
    }



    .post__content {
        margin: -3rem 1.5rem 0;
        padding: 0.5rem;
        background-color: #fff;
        border-radius: 3px;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.15);
        transition: margin 0.2s ease-in-out;
        position: relative;
        z-index: 1;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .post__inside {
        overflow: hidden;
        height: 4.85rem;
        transition: height 0.2s ease-in-out;
    }

    .post__title {
        font-size: 1.35rem;
        line-height: 1;
        margin: 0 0 1rem;
        font-weight: 300;
        color: #042A4F;
    }

    .post__excerpt {
        overflow: hidden;
        margin: 0;
        max-height: 6.25rem;
        position: relative;
        line-height: 20px;

    }

    .post__button {
        margin-top: 1rem;
    }

    /* ====== HOVER ====== */
    .post1:hover .post__content,
    .post:hover .post__content {
        margin-top: -9.8rem;
    }

    .post:hover .post__inside,
    .post1:hover .post__inside {
        height: 11.65rem;
    }

    .post:hover .post__image:after,
    .post1:hover .post__image:after {
        opacity: 0.5;
    }

    .post:hover .post__image:before,
    .post1:hover .post__image:before {
        transform: scale(1.1);
        filter: blur(10px);
    }

    .s-title {
        color: white;
        font-weight: 800;
        font-size: 21px;
        font-family: sans-serif;
        letter-spacing: 0.1rem;
        padding: 6px;

    }

    .second {
        padding-top: 18%;
        padding-right: 2%;
        padding-left: 2%;
    }

    .second>p {
        font-size: 16px;
    }

    .tree {
        margin-right: 0px;
        height: 30.7vh;
        padding-top: 40%;
    }

    .tree>p {
        font-size: 13px;
    }

    small {
        border: 1px solid black;
        background: black;
        padding: 5px;
        font-weight: 600;
        color: white
    }

    .showing {
        border-bottom: 2px solid #058abb;
        padding-bottom: 15px;
    }

    .filter {
        transition: 1s ease-in-out;
        padding-bottom: 10px;
        margin-top: 31.9px;
        font-weight: bold;
        margin-left: 14px;

    }

    .container-input {

        width: 400px;
    }

    input[type="search"] {

        background-clip: padding-box;
        background-color: white;
        vertical-align: middle;
        border-radius: 0.25rem;
        border: 1px solid #e0e0e5;
        font-size: 2.3rem;
        width: 100%;
        line-height: 2;
        padding: 0.375rem 1.25rem;
        -webkit-transition: border-color 0.2s;
        -moz-transition: border-color 0.2s;
        transition: border-color 0.2s;
    }

    input[type="search"]:focus {
        transition: all 0.5s;

        outline: none;
    }

    form.search-form {
        display: flex;
        justify-content: center;
    }

    label {
        flex-grow: 1;
        flex-shrink: 0;
        flex-basis: auto;
        align-self: center;
        margin-bottom: 0;
    }

    input.search-field {
        margin-bottom: 0;
        flex-grow: 1;
        flex-shrink: 0;
        flex-basis: auto;
        align-self: center;
        height: 51px;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    input.search-submit {
        height: 51px;
        margin: 0;
        padding: 1rem 1.3rem;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        font-family: "Font Awesome 5 Free";
        font-size: 1rem;
    }

    .screen-reader-text {
        clip: rect(1px, 1px, 1px, 1px);
        position: absolute !important;
        height: 1px;
        width: 1px;
        overflow: hidden;
    }

    .button {
        display: inline-block;
        font-weight: 600;
        font-size: 0.8rem;
        line-height: 1.15;
        letter-spacing: 0.1rem;
        text-transform: uppercase;
        background: #086897;
        ;
        color: #292826;
        border: 1px solid transparent;
        vertical-align: middle;
        text-shadow: none;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        transition: all 0.2s;
    }

    .mb-2 {
        margin-bottom: 13px;
    }

    .card-mini {
        padding: 4px;
        transition: s1 ease-in-out;
        background: #ffffff8a;
    }

    .card-mini:hover {
        transition: s1 ease-in-out;
        background: white;

        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

    }

    .plus {
        margin: 40%;
        font-size: 1.5rem;
        border: 1px solid transparent;
        padding: 10px;
        background: #2196F3;
        color: white;
    }

    .plus:hover {
        transition: all 1s ease-in-out;
        opacity: 0.7;
    }

    .paginat {
        text-align: right;
        align-items: center;
        display: block;
        margin: 13px;
        margin-right: 4%;
        font-size: 19px;
        text-decoration: none;
    }

    .paginat a {
        text-decoration: none;
        margin-left: 17px;
        margin-right: 16px;
    }

    .paginat span {
        padding: 1px;
        padding-left: 7px;
        padding-right: 9px;
        background: #2196F3;
        border: 1px solid transparent;
        color: aliceblue;
    }

    .hide {
        display: none;
    }

    #slider {
        position: relative;
        overflow: hidden;
        margin: 0em;
        transition: transform .3s cubic-bezier(.175, .885, .32, 1.275), -webkit-transform .3s cubic-bezier(.175, .885, .32, 1.275);
    }

    #slider:hover {
        transform: scaleX(1.03) scaleY(1.03);
    }

    #slider ul {
        position: relative;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    #slider ul li {
        position: relative;
        display: block;
        float: left;
        margin: 0;
        padding: 0;
        width: 600px;
        height: 400px;
        text-align: center;
        line-height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .control_prev,
    .control_next {
        position: absolute;
        z-index: 999;
        display: flex;
        width: 10%;
        height: 90%;
        background: transparent;
        color: #fff;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        font-weight: 600;
        font-size: 3em;
        opacity: 1;
        cursor: pointer;
        transition: all .2s ease-in-out;
    }

    .control_prev:hover,
    .control_next:hover {
        opacity: .8;
    }

    .control_prev {
        border-radius: 0 2px 2px 0;
    }

    .control_next {
        right: 0;
        border-radius: 2px 0 0 2px;
    }

    .slide1 img {
        width: 100%;
    }

    .slide2 img {
        width: 100%;
    }

    .slide3 img {
        width: 100%;
    }

    .slide4 img {
        width: 100%;
    }

    .slider-title-wrapper {
        width: 100%;
        height: 100%;
        position: absolute;
        background-color: rgba(0, 0, 0, .5);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        line-height: 3.2em;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .slider-title-h3 {
        margin: 0;
        color: #f5f5f5;
        display: block;
        font-size: 1em;
        font-weight: 500;
        line-height: 1em;
        letter-spacing: 0.1em;
    }

    .slider-subtitle {
        color: #bababa;
        font-size: 0.9em;
        margin: 0;
    }
</style>
<?php
$month = ["", "Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre"];
?>
<div id="post" style="margin-bottom: 30px;">
    <div class="container" style="margin-top:10%">
        <!-- Carousel wrapper -->

        <!-- Indicators -->
        <!-- Filter -->
        <div class="row divfirst" style="margin:10px; border-bottom:2px solid #34323224">
            <div class="col-md-1 filter showing"> Tous </div>
            <div class="col-md-1 filter"> A la une </div>
            <div class="col-md-1 filter"> Actus </div>
            <div class="col-md-1 filter"> Journnaux </div>
            <div class="col-md-1 filter"> urgent </div>
            <div class="col-md-2"> </div>

            <div class="col-md-2  divsecond">
                <div class="container-input">
                    <form role="search" method="get" class="search-form form" action="">
                        <label>
                            <span class="screen-reader-text">Search for...</span>
                            <input type="search" class="search-field" placeholder="Type something..." value="" name="s" title="" />
                        </label>
                        <input type="submit" class="search-submit button" value="&#xf002" />
                    </form>
                </div>
            </div>
        </div>
        <div class="pane first">
            <div class="container">


                <div class=" row">
                    <div class="col-md-6 post__image--0" style="height: 70vh; margin-top:0; display:flex;justify-content: center;
  align-items: center;">

                        <!-- carousel -->

                        <div id="slider">
                            <p class="control_next"><i class="fas fa-angle-right"></i></p>
                            <p class="control_prev"><i class="fas fa-angle-left"></i></p>
                            <ul>
                                @if($slider->count()>0)
                                <?php $i = 0 ?>
                                @foreach($slider as $sl)

                                <li class="slide<?php echo $i + 1 ?>" onclick="getPage({{$sl->id}})">
                                    <div class="slider-title-wrapper">
                                        <h3 class="slider-title"><span class="slider-title-h3">{{$sl->titre}}</span>
                                            <?php $texte = substr($sl->description, 0, 65) . "..."; ?>
                                            <span class="slider-subtitle"><?php echo $texte; ?> </span>
                                        </h3>
                                        <?php
                                        $timestamp = strtotime($sl->created_at);
                                        $day = date("m", $timestamp);
                                        $jour = date('d', $timestamp);
                                        $year = date('y', $timestamp);
                                        $da = "" . $day . "";
                                        $int = (int)$da;
                                        $mt = $month[$int];

                                        ?>
                                        <strong> <?php echo $day . " / " . $mt . " /" . $year;  ?> </strong>
                                    </div>

                                    <img src="{{url('storage/'.$sl->getMedia())}}" alt="" />

                                </li>
                                <?php $i++; ?>
                                @endforeach
                                @endif

                            </ul>
                        </div>

                        <!-- end -->


                    </div>
                    @if($posts->count()>0)

                    <div class="col-md-6 p-2 post3">
                        <div class="row" style="height:30%">
                            <div class="post1">

                                <div class="post__image post__image--1" style="background-image: url(' storage/<?php echo $posts[0]->getMedia(); ?>');"></div>
                                <div class="post__content">
                                    <div class="post__inside">
                                        <h3 class="post__title">{{$posts[0]->titre}}</h3>
                                        <?php
                                        $timestamp = strtotime($posts[0]->created_at);
                                        $day = date("m", $timestamp);
                                        $jour = date('d', $timestamp);
                                        $year = date('y', $timestamp);
                                        $da = "" . $day . "";
                                        $int = (int)$da;
                                        $mt = $month[$int];

                                        ?>
                                        <strong> <?php echo $day . " / " . $mt . " /" . $year;  ?> </strong>
                                        <p class="post__excerpt">
                                            <?php $texte = substr($posts[0]->description, 0, 65) . "..."; ?>
                                            {{$texte}}
                                        </p>
                                        <button class="btn--accent post__button" onclick="getPage(<?php echo $posts[0]->id; ?>)">
                                            Lire Plus
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($posts->count()>1)
                        <div class="row p-2" style="height:30%">
                            <div class="post col-md-6">
                                <div class="post__image post__image--2" style="background-image: url(' storage/<?php echo $posts[1]->getMedia(); ?>');"></div>
                                <div class="post__content">
                                    <div class="post__inside">
                                        <h3 class="post__title">{{$posts[1]->titre}}</h3>
                                        <?php
                                        $timestamp = strtotime($posts[1]->created_at);
                                        $day = date("m", $timestamp);
                                        $jour = date('d', $timestamp);
                                        $year = date('y', $timestamp);
                                        $da = "" . $day . "";
                                        $int = (int)$da;
                                        $mt = $month[$int];

                                        ?>
                                        <strong> <?php echo $day . " / " . $mt . " /" . $year;  ?> </strong>
                                        <p class="post__excerpt">
                                            <?php $texte = substr($posts[1]->description, 0, 65) . "..."; ?>
                                            {{$texte}}
                                        </p>
                                        <button class="btn--accent post__button" onclick="getPage(<?php echo $posts[1]->id; ?>)">
                                            Lire Plus
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($posts->count()>2)
                            <div class="post col-md-6">
                                <div class="post__image post__image--3" style="background-image: url(' storage/<?php echo $posts[2]->getMedia(); ?>');"></div>
                                <div class="post__content">
                                    <div class="post__inside">
                                        <h3 class="post__title">{{$posts[2]->titre}}</h3>
                                        <?php
                                        $timestamp = strtotime($posts[2]->created_at);
                                        $day = date("m", $timestamp);
                                        $jour = date('d', $timestamp);
                                        $year = date('y', $timestamp);
                                        $da = "" . $day . "";
                                        $int = (int)$da;
                                        $mt = $month[$int];

                                        ?>
                                        <strong> <?php echo $day . " / " . $mt . " /" . $year;  ?> </strong>
                                        <p class="post__excerpt">
                                            <?php $texte = substr($posts[2]->description, 0, 65) . "..."; ?>
                                            {{$texte}}
                                        </p>
                                        <button class="btn--accent post__button" onclick="getPage(<?php echo $posts[1]->id; ?>)">
                                            Lire Plus
                                            <i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom:40px">
                <div class="col-md-8" style="padding-right:50px">
                    <div class="row" style="    margin-left: 3px;
                        margin-bottom: 4%;
                        display: flex;
                        border-bottom: 2px solid #34323224;">
                        <div class="col-md-1" style="border:1px solid #0675cd;; padding:10px; background-color:#0675cd; color:white; margin-top:22px">
                            section0
                        </div>
                        <div class="col-md-1 filter showing"> Tous </div>
                        <div class="col-md-1 filter"> Religion </div>
                        <div class="col-md-1 filter"> Politiques </div>
                        <div class="col-md-1 filter"> Cultures </div>
                        <div class="col-md-1 filter"> Urgent </div>

                    </div>
                    <div class="row">
                        @if($pubVideo->count()>0)
                        <div class="col-md-6">
                            <video title="Wildlife" preload="auto" controls class="center-block" id="video1" style="width:100%">
                                <source src="{{url('storage/video/'.$med->url)}}" type="video/mp4">
                                <p>Wildlife</p>
                            </video>
                            <h4> {{$pubVideo->titre}} </h4>
                            <p class="post__excerpt">
                                {{$pubVideo->description}}
                            </p>
                        </div>

                        <div class="col-md-6">
                            @endif
                            @if($Apost->count()>0)
                            @foreach($Apost as $ap)
                            <div class="row mb-2 card-mini">
                                <div class="col-md-4">
                                    <img src="{{url('storage/'.$ap->getMedia())}}" alt="" class="img_cat" />

                                </div>
                                <div class="col-md-8 " style="font-size:12px">
                                    <p class="post__excerpt">
                                        <?php $texte = substr($ap->description, 0, 60) . "..."; ?>
                                        {{$texte}}
                                    </p>
                                    <?php
                                    $timestamp = strtotime($ap->created_at);
                                    $day = date("m", $timestamp);
                                    $jour = date('d', $timestamp);
                                    $year = date('y', $timestamp);
                                    $da = "" . $day . "";
                                    $int = (int)$da;
                                    $mt = $month[$int];

                                    ?>
                                    <strong> <?php echo $day . " / " . $mt . " /" . $year;  ?> </strong>
                                </div>
                            </div>
                            @endforeach
                            @endif


                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row" style="border-bottom:1px solid black; padding-bottom: 0px;margin-top: 29px;">
                        <div class="col-md-4" style="border:1px solid black;     padding: 12px;
    padding-left: 25px ;background-color:black; color:white">Media Sociale</div>
                        <div class="col-md-8"></div>
                    </div>
                    <div class="row" style="margin-top:3%; display:flex">
                        <div class="col-md-2 facebook; display:flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" style="    width: 21px; margin: 15px;"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                            </svg>

                        </div>
                        <div class="col-md-2 " style="margin: 15px">
                            1200 followers
                        </div>
                        <div class="col-md-2  offset-4" style="margin: 15px">
                            3000 Liker
                        </div>
                    </div>
                    <div class="row" style="display:flex">
                        <div class="col-md-2 twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 21px;margin: 15px;"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                            </svg>
                        </div>
                        <div class="col-md-2" style="margin: 15px;">
                            1200 followers
                        </div>
                        <div class="col-md-2 offset-4" style="margin: 15px;">
                            2249990 Likers
                        </div>
                    </div>
                    <div class="row instagram" style="display:flex">
                        <div class="col-md-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="    width: 21px; margin: 15px;"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </div>
                        <div class="col-md-2 " style="margin: 15px;">
                            1200 subscribes
                        </div>
                        <div class="col-md-2 offset-4 " style="margin: 15px;">
                            souscrire maintenant
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="pane seconds" style="display:none">
            <div class="scroll">
                <div class="container one">
                    <div class="one grid-cards">
                        <div class="card">
                            <img src="https:/s.unsplash.com/photo-1507206130118-b5907f817163?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjIzMzQzMjIz&ixlib=rb-1.2.1&q=80&w=600" alt="img-1" title="card image">
                            <div class="card-body">
                                <h3 class="title-card">
                                    Lorem ipsum dolor sit amet
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in vulputate dui. Curabitur orci augue, finibus vel imperdiet eu, posuere ac eros.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#">Click here</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https:/s.unsplash.com/photo-1600880292203-757bb62b4baf?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjIzMzQzNjkw&ixlib=rb-1.2.1&q=80&w=600" alt="img-2" title="card image">
                            <div class="card-body">
                                <h3 class="title-card">
                                    Lorem ipsum dolor
                                </h3>
                                <p>Suspendisse et commodo velit. Suspendisse porttitor, nisi ac luctus suscipit, risus dolor facilisis ligula
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#">Click here</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https:/s.unsplash.com/photo-1538688273852-e29027c0c176?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjIzMzQzNjEx&ixlib=rb-1.2.1&q=80&w=600" alt="img-3" title="card image">
                            <div class="card-body">
                                <h3 class="title-card">
                                    Lorem ipsum dolor
                                </h3>
                                <p>Cras maximus eros eleifend luctus interdum. Vestibulum tincidunt nisi eget turpis faucibus, sit amet ultrices tortor tempor.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#">Click here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container one">
                    <div class="grid-cards">
                        <!-- pagination -->
                        <div id="showTable"></div>

                        <!-- end -->
                        <div class="card">
                            <img src="https:/s.unsplash.com/photo-1507206130118-b5907f817163?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjIzMzQzMjIz&ixlib=rb-1.2.1&q=80&w=600" alt="img-1" title="card image">
                            <div class="card-body">
                                <h3 class="title-card">
                                    Lorem ipsum dolor sit amet
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in vulputate dui. Curabitur orci augue, finibus vel imperdiet eu, posuere ac eros.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#">Click here</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https:/s.unsplash.com/photo-1600880292203-757bb62b4baf?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjIzMzQzNjkw&ixlib=rb-1.2.1&q=80&w=600" alt="img-2" title="card image">
                            <div class="card-body">
                                <h3 class="title-card">
                                    Lorem ipsum dolor
                                </h3>
                                <p>Suspendisse et commodo velit. Suspendisse porttitor, nisi ac luctus suscipit, risus dolor facilisis ligula
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#">Click here</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https:/s.unsplash.com/photo-1538688273852-e29027c0c176?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjIzMzQzNjEx&ixlib=rb-1.2.1&q=80&w=600" alt="img-3" title="card image">
                            <div class="card-body">
                                <h3 class="title-card">
                                    Lorem ipsum dolor
                                </h3>
                                <p>Cras maximus eros eleifend luctus interdum. Vestibulum tincidunt nisi eget turpis faucibus, sit amet ultrices tortor tempor.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#">Click here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container one">
                    <div class="grid-cards">
                        <div class="card" onclick="getPage();">
                            <img src="https:/s.unsplash.com/photo-1507206130118-b5907f817163?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjIzMzQzMjIz&ixlib=rb-1.2.1&q=80&w=600" alt="img-1" title="card image">
                            <div class="card-body">
                                <h3 class="title-card">
                                    Lorem ipsum dolor sit amet
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in vulputate dui. Curabitur orci augue, finibus vel imperdiet eu, posuere ac eros.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#">Click here</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https:/s.unsplash.com/photo-1600880292203-757bb62b4baf?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjIzMzQzNjkw&ixlib=rb-1.2.1&q=80&w=600" alt="img-2" title="card image">
                            <div class="card-body">
                                <h3 class="title-card">
                                    Lorem ipsum dolor
                                </h3>
                                <p>Suspendisse et commodo velit. Suspendisse porttitor, nisi ac luctus suscipit, risus dolor facilisis ligula
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#">Click here</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https:/s.unsplash.com/photo-1538688273852-e29027c0c176?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218fHx8fHx8fHwxNjIzMzQzNjEx&ixlib=rb-1.2.1&q=80&w=600" alt="img-3" title="card image">
                            <div class="card-body">
                                <h3 class="title-card">
                                    Lorem ipsum dolor
                                </h3>
                                <p>Cras maximus eros eleifend luctus interdum. Vestibulum tincidunt nisi eget turpis faucibus, sit amet ultrices tortor tempor.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#">Click here</a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>



    </div>
    <span class="plus"> Voir Plus ...</span>


    <div class="a paginat" style="display:none">
        <a href="javascript:getPereviousPage()" id="previousPage">Previous </a>
        <span id="paginationPage"></span>
        <a href="javascript:getNextPage()" id="nextPage">Next</a>

    </div>
</div>
<div id="details" class="hide" style="    margin-bottom: 27px;
    margin-top: 0;">

    <div class="container" style="    background: #398bc7;
    text-align: center;
    color: white;
    padding: 150px;
    width: 100vw;">

        <h1 class="title-card text-center" style="color:white">
            Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet
        </h1>
        <div class="d-flex">
            <div> <span style=" margin-right: 35px;"><img src="{{url('storage/banniere/child-malnutrition.jpg')}}" style="    border-radius: 103px;
    width: 33px;
    height: 31px;
    " alt="" /> Nom & PostNom </span><span><i class="fa fa-solid"></i>18h 54'</span><span><i class="fa fa-date"></i> 16 Novembre 2022 </span></div>
        </div>
    </div>
    <div style="    margin: 0;
    padding: 19px;
    padding-left: 20%;
    padding-right: 272px;">
        <div class="container" style="margin:5%">
            <span><i class="fa fa-solid"></i>18h 54'</span><span><i class="fa fa-date"></i> 16 Novembre 2022 </span>
        </div>
        <div>
            <img src="{{url('storage/banniere/child-malnutrition.jpg')}}" style="width:100%; height:100%" alt="" />
        </div>
        <h2 class="title-card text-center" style="margin-top: 15px;margin-bottom: 15px;">
            Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet
        </h2>
        <p>
            Lorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit amet
            Lorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit amet
            Lorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit amet
            Lorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit amet
            Lorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit amet
            Lorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet Lorem ipsum dolor sit amet


        </p>
        <span style="    padding: 10px;
    border: 1px solid transparent;
    background: #095580;
    color: white;" id="retour"> Retour </span>
    </div>
</div>
<script>
        $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        });
    function getPage() {
        $('#post').addClass('hide');
        $('#details').removeClass('hide');

    }
    $('#retour').click(function() {
        $('#post').removeClass('hide');
        $('#details').addClass('hide');
    })

    $('.filter').click(function() {
        $('.filter').removeClass('showing');
        $(this).addClass('showing');
    })
    $('.plus').click(function() {
        $(this).css('display', 'none')
        $('.paginat').css('display', 'block');
        $('.seconds').css('display', 'block');
        $('.first').css('display', 'none');
    });
    jQuery(document).ready(function($) {

        // This is for the auto sliding
        setInterval(function() {
            moveRight();
        }, 3000);

        //variables
        var slideCount = $('#slider ul li').length;
        var slideWidth = $('#slider ul li').width();
        var slideHeight = $('#slider ul li').height();
        var sliderUlWidth = slideCount * slideWidth;

        $('#slider').css({
            width: slideWidth,
            height: slideHeight
        });

        $('#slider ul').css({
            width: sliderUlWidth,
            marginLeft: -slideWidth
        });

        $('#slider ul li:last-child').prependTo('#slider ul');

        function moveLeft() {
            $('#slider ul').animate({
                left: +slideWidth
            }, 300, function() {
                $('#slider ul li:last-child').prependTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        };

        function moveRight() {
            $('#slider ul').animate({
                left: -slideWidth
            }, 300, function() {
                $('#slider ul li:first-child').appendTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        };

        $('.control_prev').click(function() {
            moveLeft();
        });

        $('.control_next').click(function() {
            moveRight();
        });

    });
    var currentPage = 1;
    var CountPerEachPage = 5;
    //json object mapping for content
    var paginationObject = null;

    function paginationf(res) {
        paginationObject = res;
    };
    //function for go to previous page
    function getPereviousPage() {
        if (currentPage > 1) {
            currentPage--;

            validateEachPage(currentPage);
        }
    }
    //function for go to next page
    function getNextPage() {
        if (currentPage < numberOfPages()) {
            currentPage++;

            validateEachPage(currentPage);
        }
    }
    //function for validating real time condition like if move to last page, last page disabled etc
    function validateEachPage(paginationPage) {
        var nextPage = document.getElementById("nextPage");
        var previousPage = document.getElementById("previousPage");
        var showMyTable = document.getElementById("showTable");
        var paginationPage_span = document.getElementById("paginationPage");
        //validating pages based on page count
        if (paginationPage < 1)
            paginationPage = 1;
        if (paginationPage > numberOfPages())
            paginationPage = numberOfPages();
        showMyTable.innerHTML = "";
        // var res = "<div class='content-bar'><div class='itemnum'> Num </div><div class='itemtitle'> Nom </div><div class='itemprice'> Post-Nom </div><div class='itemstock'> Fonction</div><div class='btncontainer'><button class='cbbtn'><i class='fa fa-shopping-cart' aria-hidden='true'></i></button><button class='cbbtn'><i class='fa fa-pencil' aria-hidden='true'></i></button></div></div>";
        for (var i = (paginationPage - 1) * CountPerEachPage; i < (paginationPage * CountPerEachPage); i++) {





            var res = " <div class='content-bar'><div class='itemnum'>" + paginationObject[i].id + " </div><div class='itemtitle'>" + paginationObject[i].nom + "</div><div class='itemprice'>" + paginationObject[i].postNom + "</div> <div class='itemstock'>" + paginationObject[i].adresse + "</div><div class='itemprice'>" + paginationObject[i].fonction + "</div><div class='btncontainer'><button class='cbbtn' value='" + paginationObject[i].id + "' onclick='deleteId(" + paginationObject[i].id + ");'><i class='fa fa-trash' aria-hidden='true'></i></button><button class='cbbtn' onclick='editId(" + paginationObject[i].id + ");' value='" + paginationObject[i].id + "' data-bs-toggle='modal' data-bs-target='#exampleModal'><i class='fa fa-edit' aria-hidden='true'></i></button></div></div>";
            // res += res2;
            // showMyTable.innerHTML += paginationObject[i].content + "<br>";
            showMyTable.innerHTML += res;


        }
        // showMyTable.innerHTML += res;


        paginationPage_span.innerHTML = paginationPage;
        
    }
    //function per number of Pages
    function numberOfPages() {
        return Math.ceil(paginationObject.length / CountPerEachPage);
    }
    $('.plus').click(function(e) {
        $(this).css('display', 'none')
        $('.paginat').css('display', 'block');
        $('.seconds').css('display', 'block');
        $('.first').css('display', 'none');

        var data = e.target.value;
        $.ajax({
            type: "POST",
            data: data,
            url: "{{ url('get-more') }}",
            dataType: 'json',
            success: function(res) {
                paginationf(res);
                validateEachPage(1);
            },
            catch: function() {
                console.log("erreur");
            }

        });

    });
</script>
@endsection