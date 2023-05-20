<!DOCTYPE html>
<html lang="en">

<head>
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
        <title>Admministration</title>


        <style>
            body {
                background: rgba(0, 0, 0, 0) linear-gradient(to right, #00c9fd 0%, #0b426e 100%) repeat scroll 0 0;
                padding: 40px;
                font-family: 'Rubik', sans-serif;
                margin: 0;
            }

            .sidenav {
                width: 250px;
                height: calc(100% - 58px);
                position: fixed;
                background: #fff;
                border-radius: 12px 0px 0px 12px;
            }

            .msidenav {
                width: 250px;
                height: calc(100%);
                top: 0;
                z-index: 99;
                left: -250px;
                position: fixed;
                background: #fff;
                border-radius: 0px;
                box-shadow: 00px 0px 00px 0px rgba(0, 0, 0, 0);
                transition-duration: 500ms;
            }

            .content-area {
                background-color: #f6f6fc;
                position: fixed;
                width: calc(100vw - 340px);
                height: calc(100vh - 58px);
                margin-left: 250px;
                border-radius: 0px 12px 12px 0px;
            }

            .content-bar {
                width: calc(100% - 40px);
                margin-left: 20px;
                margin-top: 6px;
                background: #fff;
                box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.06);
                border-radius: 12px;
                display: grid;
                grid-template-rows: 1fr;

                grid-template-columns: 0fr 2fr 2fr 2fr 3fr 1fr;
            }

            .page-title {
                font-weight: 500;
                font-size: 26px;
                padding-left: 10px;
                padding-top: 20px;
            }

            .page-desc {
                padding-left: 0px;
                font-weight: 300;
                color: #525252;
                max-width: 100%;
                margin-left: 0px;
            }

            .logo {
                font-family: 'Rubik', sans-serif;
                font-weight: 600;
                font-size: 70px;
                background: -webkit-linear-gradient(#4d4d4d, #171717);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                text-align: center;
                margin-top: 20px;
                padding: 0px;
                margin-bottom: 20px;
            }

            .search {
                border-left: 1px solid #dfe2e6;
                border-top: 1px solid #dfe2e6;
                border-bottom: 1px solid #dfe2e6;
                border-right: 1px none;
                border-radius: 12px 0px 0px 12px;
                padding: 8px;
                margin-left: 20px;
                width: 145px;
                font-family: 'Rubik', sans-serif;
                font-weight: 300;
                color: #525252;
            }

            .search:focus {
                outline: none;
            }

            .sbtn {
                padding: 8px;
                padding-right: 15px;
                padding-left: 15px;
                background: none;
                border-radius: 0px 12px 12px 0px;
                border-right: 1px solid #dfe2e6;
                border-top: 1px solid #dfe2e6;
                border-bottom: 1px solid #dfe2e6;
                border-left: 1px none;
                transform: translate(-4px, 0px);
                color: #d0d4d9;
                cursor: pointer;
            }

            .sbtn:focus {
                outline: none;
            }

            .sbtn:hover {
                color: #a8adb3;
            }

            .sbtn:active {
                color: black;
            }

            .spacer {
                margin: 20px;
            }

            .mbtn {
                border-radius: 12px;
                text-align: left;
                margin-left: 20px;
                width: 210px;
                height: 40px;
                border: none;
                background: none;
                font-family: 'Rubik', sans-serif;
                font-size: 18px;
                color: #d0d4d9;
                transition-duration: 0ms;
                cursor: pointer;
            }

            .icon {
                padding-left: 20px;
                padding-right: 10px;
                color: #b4b9bf;

            }

            .mbtn:hover {
                transition-duration: 0ms;
                text-align: left;
                width: 210px;
                height: 40px;
                border: none;
                background: #f6f6fc;
                color: black;
            }

            .mbtn:hover i {

                color: #3895e0;
            }

            .mbtn:focus {
                outline: none;
                background: #3a94de;
                color: rgba(255, 255, 255, 0.9);
                cursor: pointer;
            }

            .mbtn:focus i {
                color: white;

            }

            .mobilebar {
                width: 100%;
                height: 70px;
                background: #fff;
                box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.06);
                display: none;
            }

            .sml {
                text-align: left;
                font-size: 34px;
                display: inline-block;
                padding-left: 20px;
                margin-top: 14px;
            }

            .mnubtn {
                height: 35px;
                float: right;
                margin-right: 0px;
                border: none;
                border-radius: 12px;
                background: -webkit-linear-gradient(#4d4d4d, #171717);
                color: white;
                font-size: 18px;
                padding: 8px 10px;
            }

            .mnubtn:focus {
                outline: none;
            }

            .mnubtn:hover {
                background: black;
            }

            .mnubtn:active {
                background: #3a94de;
                color: black;
            }

            .mbh {
                display: inline-block;
                float: right;
                margin-top: 17px;
                margin-right: 20px;
            }


            .itemnum {
                padding: 15px;
                color: gray;
                font-weight: 300;
            }

            .itemtitle {
                padding: 15px;
                padding-bottom: 15px;
                padding-left: 50px;
                color: black;
                min-width: 80px;
            }

            .itemprice {
                padding: 15px;
                padding-bottom: 15px;
                color: #319959;
                min-width: 80px;
            }

            .itemstock {

                padding: 15px;
                padding-bottom: 15px;
                color: black;
                font-weight: 300;
            }

            .btncontainer {
                width: 90px;
                background: none;
            }

            .cbbtn {
                float: right;
                margin-right: 10px;
                width: 35px;
                height: 35px;
                margin-top: 7px;
                border-radius: 12px;
                border: none;
            }


            @media only screen and (max-width: 1160px) {
                body {
                    padding: 0;
                    margin: 0;
                    font-size: 14px;
                }

                .sidenav {
                    height: 100%;
                    border-radius: 0px;
                }

                .content-area {
                    height: 100%;
                    width: calc(100% - 250px);
                    border-radius: 0px;
                }
            }

            @media only screen and (max-width: 780px) {
                body {
                    padding: 0;
                    margin: 0;
                    font-size: 13px;
                }

                .sidenav {
                    height: 100%;
                    border-radius: 0px;
                    left: -251px;
                }

                .content-area {
                    height: 100%;
                    width: calc(100%);
                    border-radius: 0px;
                    margin-left: 0px;
                }

                .mobilebar {
                    background: #fff;
                    box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.06);
                    display: block;
                }

                .content-bar {
                    grid-template-columns: 0fr 1fr 0fr;
                }

                .itemprice {
                    display: none;
                }

                .itemstock {
                    display: none;
                }

                .cbbtn {
                    margin-top: 5px;
                    margin-right: 5px;
                }
            }



            .container {
                position: relative;
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .wrapper {
                position: absolute;
                top: 180px;
                transform: scale(1.5);
            }

            .loader {
                height: 25px;
                width: 1px;
                position: absolute;
                animation: rotate 3.5s linear infinite;
            }

            .loader .dot {
                top: 30px;
                height: 7px;
                width: 7px;
                background: #076d9c;

                border-radius: 50%;
                position: relative;
            }



            @keyframes rotate {
                30% {
                    transform: rotate(220deg);
                }

                40% {
                    transform: rotate(450deg);
                    opacity: 1;
                }

                75% {
                    transform: rotate(720deg);
                    opacity: 1;
                }

                76% {
                    opacity: 0;
                }

                100% {
                    opacity: 0;
                    transform: rotate(0deg);
                }
            }

            .loader:nth-child(1) {
                animation-delay: 0.15s;
            }

            .loader:nth-child(2) {
                animation-delay: 0.3s;
            }

            .loader:nth-child(3) {
                animation-delay: 0.45s;
            }

            .loader:nth-child(4) {
                animation-delay: 0.6s;
            }

            .loader:nth-child(5) {
                animation-delay: 0.75s;
            }

            .loader:nth-child(6) {
                animation-delay: 0.9s;
            }

            #prelo {
                display: none;
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

            .modal-backdrop {
                --bs-backdrop-zindex: 1050;
                --bs-backdrop-bg: #000;
                --bs-backdrop-opacity: 0.5;
                position: fixed;
                top: 0;
                left: 0;
                z-index: var(--bs-backdrop-zindex);
                width: 0vw;
                height: 0vh;
            }

            .btn-add {
                background: rgba(0, 0, 0, 0) linear-gradient(to right, #00c9fd 0%, #0b426e 100%) repeat scroll 0 0;
                border: none;
                color: white;
            }

            .btn-add:hover,
            .btn-add:active {
                color: white;
            }

            .hiden {
                display: none;
            }

            .btn-file {
                position: relative;
                overflow: hidden;
            }

            .btn-file input[type=file] {
                position: absolute;
                top: 0;
                right: 0;
                min-width: 100%;
                min-height: 100%;
                font-size: 100px;
                text-align: right;
                filter: alpha(opacity=0);
                opacity: 0;
                outline: none;
                background: white;
                cursor: inherit;
                display: block;
            }

            input[readonly] {
                background-color: white !important;
                cursor: text !important;
            }

            .media div {
                width: 100px;
                height: 73px;
                margin-right: 10px;
                border-radius: 10px;
            }

            .add-media {
                margin-top: -41px;
                margin-left: 19px;
                padding-bottom: 10px;
            }

            .add-media span {
                font-size: 23px;
                margin-right: 17px;
                margin-left: -24px;
                position: relative;
                color: #9E9E9E;
            }

            .modal-footer {
                padding: 0px;
            }

            #header {
                display: flex;
                align-items: center;
                font-size: 1em;
                font-weight: 600;
                color: #bdbdbd;
                padding: 20px;
                box-sizing: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                text-align: center;
            }

            #header .button-col {
                width: 240px;
                text-align: left;
            }

            #header .status-col {
                width: 145px;
            }

            #header .progress-col {
                width: 190px;
            }

            #header .dates-col {
                width: 150px;
            }

            #header .priority-col {
                width: 170px;
            }

            #header .icon-col {
                width: 30px;
                text-align: right;
            }

            #header button {
                color: #bdbdbd;
                outline: none;
                border: none;
                background: #d5d5d5;
                padding: 10px 20px;
                border-radius: 2.5px;
                margin-right: 20px;
                font-size: 1em;
                font-weight: 600;
            }

            #header button:hover {
                cursor: pointer;
                background: #3d3d44;
            }

            #header label {
                display: inline-block;
                margin: 0 20px;
                text-align: center;
            }

            #header .icon-col {
                padding-right: 20px;
            }

            ul.task-items li.item {
                display: flex;
                align-items: center;
                margin: 9px 31px 9px 0px;
                padding: 8px;
                background: #fff;
                border-radius: 5px;
                box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.1);
            }

            ul.task-items li.item.type1 .task .icon {
                background: #9575cd;
            }

            ul.task-items li.item.type2 .task .icon {
                background: #f48fb1;
            }

            ul.task-items li.item.type3 .task .icon {
                background: #9575cd;
            }

            ul.task-items li.item.type4 .task .icon {
                background: #4FC3F7;
            }

            ul.task-items li.item .task {
                display: flex;
                align-items: center;
                width: 180px;
            }

            ul.task-items li.item .task .icon {
                background: #bdbdbd;
                width: 50px;
                height: 50px;
                border-radius: 5px;
            }

            ul.task-items li.item .task .name {
                background: #eeeeee;
                margin-left: 20px;
                width: 180px;
                height: 25px;
                border-radius: 15px;
            }

            ul.task-items li.item .status {
                display: flex;
                align-items: center;
                font-size: 1em;
                color: #2e7d32;
                width: 145px;
                margin-left: 30px;
            }

            ul.task-items li.item .status .icon {
                background: #2e7d32;
                margin-right: 10px;
                width: 14px;
                height: 14px;
                border-radius: 50%;
            }

            ul.task-items li.item .status .icon.risk {
                background: red;
            }

            ul.task-items li.item .status .icon.warning {
                background: #FFA000;
            }

            ul.task-items li.item .status .icon.off {
                background: #BF360C;
            }

            ul.task-items li.item .progress {
                width: 190px;
            }

            ul.task-items li.item .progress progress {
                display: block;
                margin-left: 0;
                -webkit-appearance: none;
                height: 12.5px;
                width: 142.5px;
            }

            ul.task-items li.item .progress progress::-webkit-progress-bar {
                background-color: #eeeeee;
                border-radius: 5px;
            }

            ul.task-items li.item .progress ::-webkit-progress-value {
                background-color: #4dd0e1;
                border-radius: 5px;
            }

            ul.task-items li.item .dates {
                width: 150px;
            }

            ul.task-items li.item .dates .bar,
            ul.task-items li.item .priority .bar {
                background: #eeeeee;
                width: 100px;
                height: 25px;
                border-radius: 15px;
            }

            ul.task-items li.item .priority {
                width: 144.5px;
            }

            ul.task-items li.item .priority .bar {
                background: #ffcdd2;
            }

            ul.task-items li.item .user {
                width: 30px;
            }

            ul.task-items li.item .user img {
                border-radius: 50%;
            }

            /* this is only due to codepen display don't use this outside of codepen */
        </style>

    </head>

<body>

    <div id="mnu" class="msidenav">
        <div class="logo">Logo</div>
        <div class="searchbar">
            <input class="search">
            <button class="sbtn"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        <div class="spacer"></div>
        <button class="mbtn membres"> Membres </button>
        <button class="mbtn posts"> Publication </button>
        <button class="mbtn">Option Three</button>
        <button class="mbtn"> Option Four</button>
        <button class="mbtn"> Option Five</button>
    </div>


    <div class="sidenav">
        <div class="logo">Logo</div>
        <div class="searchbar">
            <input class="search">
            <button class="sbtn"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        <div class="spacer"></div>
        <button class="mbtn membres"> Membres </button>
        <button class="mbtn posts"> Publication </button>
        <button class="mbtn Gposts">Gestions Pub</button>
        <button class="mbtn"> Option Four</button>
        <button class="mbtn"> Option Five</button>
    </div>
    <div class="content-area membre">
        <div class="mobilebar">
            <div class="logo sml">Logo</div>
            <div class="mbh">
                <button class="mnubtn" onclick="slideMenu()"><i class="fa fa-bars" aria-hidden="true"></i></button>
            </div>
        </div>

        <div class="page-desc row" style="padding-bottom:10px; border-bottom:1px solid white">
            <div class="col-md-4 page-title"> Gestion des Membres </div>
            <div class="col-md-8" style="align-items:left; padding-top:2%">
                <div class="searchbar">
                    <input class="search" id="search-input" placeholder="nom du membre" style="width: 385px;">
                    <button class="sbtn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    <button class="btn btn-add" data-bs-toggle="modal" data-bs-target="#exampleModal1"> Ajouter Membre</button>

                    <!-- Modal Edit-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un membre</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form id="edit-member" action="edit-membre">
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="nom" class="form-label">Nom</label>
                                            <input type="text" value="" class="form-control" name="nom" id="nom">
                                        </div>
                                        <div class="mb-3">
                                            <label for="postNom" class="form-label">Post Nom</label>
                                            <input type="text" value="" class="form-control" name="postNom" id="postNom">
                                        </div>
                                        <div class="mb-3">
                                            <label for="adresse" class="form-label">Adresse</label>
                                            <input type="text" value="" class="form-control" name="adresse" id="adresse">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" value="" class="form-control" name="email" id="email" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="telephone" class="form-label">Telephone</label>
                                            <input type="text" value="" class="form-control" name="telephone" id="telephone" placeholder="243">
                                            <input type="number" value="" class="form-control" name="id" id="id" style="display:none">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-add" data-bs-dismiss="modal">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                    <!-- Modeal add -->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un membre</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form id="add-member" action="ajouter-membres">
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="nom1" class="form-label">Nom</label>
                                            <input type="text" class="form-control" name="nom" id="nom1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="postNom1" class="form-label">Post Nom</label>
                                            <input type="text" class="form-control" name="postNom" id="postNom1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="adresse1" class="form-label">Adresse</label>
                                            <input type="text" class="form-control" name="adresse" id="adresse1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" name="email" id="email1" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="telephone1" class="form-label">Telephone</label>
                                            <input type="text" class="form-control" name="telephone" id="telephone1" placeholder="243">
                                            <input type="number" class="form-control" name="id" id="id1" style="display:none">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-add" data-bs-dismiss="modal">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                </div>
            </div>
        </div>
        <div class="container ">
            <div id="prelo">
                <div class="wrapper">
                    <div class="loader">
                        <div class="dot"></div>
                    </div>
                    <div class="loader">
                        <div class="dot"></div>
                    </div>
                    <div class="loader">
                        <div class="dot"></div>
                    </div>
                    <div class="loader">
                        <div class="dot"></div>
                    </div>
                    <div class="loader">
                        <div class="dot"></div>
                    </div>
                    <div class="loader">
                        <div class="dot"></div>
                    </div>
                </div>
                
            </div>
        </div>
        <h5 class="text-left p-2"> Listes des Membres </h5>

        <div class="content-bar" style="display:none; margin-top: 20px;">

            <div class="itemnum">Num</div>
            <div class="itemtitle" style="padding-left: 22px;">Nom</div>
            <div class="itemstock" style="padding-left: 0px; margin-left: -7px;"> Post-Nom</div>
            <div class="itemstock" style="padding-left: 0px; margin-left: -7px;"> Adresse</div>
            <div class="itemprice" style="padding-left: 1px;">Fonction</div>
            <div class="itemprice d-flex " style="padding:0px">
            </div>
        </div>
        <div id="showTable"></div>

        <div class="a paginat" style="display:none">
            <a href="javascript:getPereviousPage()" id="previousPage">Previous </a>
            <span id="paginationPage"></span>
            <a href="javascript:getNextPage()" id="nextPage">Next</a>

        </div>



    </div>
    <div class="content-area post hiden">
        <div class="mobilebar">
            <div class="logo sml">Logo</div>
            <div class="mbh">
                <button class="mnubtn" onclick="slideMenu()"><i class="fa fa-bars" aria-hidden="true"></i></button>
            </div>
        </div>

        <div class="page-desc row" style="padding-bottom:10px; border-bottom:1px solid white">
            <div class="col-md-4 page-title"> Page publications </div>
            <div class="col-md-8" style="align-items:left; padding-top: 2%;">
                <div class="searchbar">
                    <input class="search" id="search-input" placeholder="" style="width: 385px;">
                    <button class="sbtn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    <button class="btn btn-add"> New Post</button>
                </div>
            </div>
        </div>
        <!-- New Post -->
        <div>
            <div class="row" style="margin: 17px;">
                <div>
                    <form action="create-post" id="form" enctype="multipart/form-data">
                        <h5 style="display: inline-block; margin-right: 31px;"> Nouvelle publication </h5><span id="notif" style="display: inline-block; color: #db3f3f;"></span>


                        <div class="form-group p-1">
                            <textarea class="form-control bcontent" name="Description" style="height: 250px;"> Description.... </textarea>
                            <div class="add-media">
                                <input type="file" name="image[1]" class="UploadPhoto" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0;" accept="image/png, image/jpg, image/jpeg" multiple><span><i class="fa fa-image"></i> </span> <input type="file" class="UploadVideo" name="video[1]" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0;" /><span> <i class="fa fa-video"></i></span>
                            </div>
                            <div class="add-media" style="display:none">

                                <input type="file" name="image[2]" class="UploadPhoto" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0;" accept="image/png, image/jpg, image/jpeg" multiple><span><i class="fa fa-image"></i> </span> <input type="file" class="UploadVideo" name="video[2]" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0; " /><span> <i class="fa fa-video"></i></span>
                            </div>
                            <div class="add-media" style="display:none">

                                <input type="file" name="image[3]" class="UploadPhoto" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0;" accept="image/png, image/jpg, image/jpeg" multiple><span><i class="fa fa-image"></i> </span> <input type="file" class="UploadVideo" name="video[3]" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0; " /><span> <i class="fa fa-video"></i></span>
                            </div>
                            <div class="add-media" style="display:none">

                                <input type="file" name="image[4]" class="UploadPhoto" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0;" accept="image/png, image/jpg, image/jpeg" multiple><span><i class="fa fa-image"></i> </span> <input type="file" class="UploadVideo" name="video[4]" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0; " /><span> <i class="fa fa-video"></i></span>
                            </div>
                            <div class="add-media" style="display:none">

                                <input type="file" name="image[5]" class="UploadPhoto" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0;" accept="image/png, image/jpg, image/jpeg" multiple><span><i class="fa fa-image"></i> </span> <input type="file" class="UploadVideo" name="video[5]" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0; " /><span> <i class="fa fa-video"></i></span>
                            </div>
                            <div class="add-media" style="display:none">

                                <input type="file" name="image[6]" class="UploadPhoto" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0;" accept="image/png, image/jpg, image/jpeg" multiple><span><i class="fa fa-image"></i> </span> <input type="file" class="UploadVideo" name="video[6]" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0; " /><span> <i class="fa fa-video"></i></span>
                            </div>
                            <div class="add-media" style="display:none">

                                <input type="file" name="image[7]" class="UploadPhoto" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0;" accept="image/png, image/jpg, image/jpeg" multiple><span><i class="fa fa-image"></i> </span> <input type="file" class="UploadVideo" name="video[7]" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0; " /><span> <i class="fa fa-video"></i></span>
                            </div>
                            <div class="add-media" style="display:none">

                                <input type="file" class="UploadPhoto" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0;" accept="image/png, image/jpg, image/jpeg" multiple><span><i class="fa fa-image"></i> </span> <input type="file" class="UploadVideo" name="videos" style="position: relative;WIDTH: 33px; padding-bottom: 0px; z-index: 100; opacity: 0; " accept="video/*" /><span> <i class="fa fa-video"></i></span>
                            </div>

                        </div>
                        <div class="form-group p-1">
                            <input type="text" placeholder="titre" class="form-control" name="titre" rows="10" cols="10" />
                        </div>
                        <div class="d-flex" style="border-bottom: 1px solid white; padding-bottom: 7px;">
                            <div class=" media d-flex" style="width:90%">

                            </div>
                            <div>
                                <span> Type d'article </span>
                                <select name="type" class="form-input form-select">
                                    <option> Politique </option>
                                    <option> music </option>
                                    <option> religion </option>
                                    <option> sport </option>
                                    <option> RDC News </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group d-flex" style="padding-left:70%; padding-top:5px">
                            <input type="cancel" value="Annuler" class="btn btn form-control" />
                            <input type="submit" name="Submit" value="Publier" class="btn btn-add form-control" />
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </div>
    <!-- End -->
    <div class="content-area Gpost hiden">
        <div class="mobilebar">
            <div class="logo sml">Logo</div>
            <div class="mbh">
                <button class="mnubtn" onclick="slideMenu()"><i class="fa fa-bars" aria-hidden="true"></i></button>
            </div>
        </div>

        <div class="page-desc row" style="padding-bottom:10px; border-bottom:1px solid white">
            <div class="col-md-4 page-title"> Listes publications </div>
            <div class="col-md-8" style="align-items:left; padding-top: 2%;">
                <div class="searchbar">
                    <input class="search" id="search-input" placeholder="" style="width: 385px;">
                    <button class="sbtn"><i class="fa fa-search" aria-hidden="true"></i></button>
                    <button class="btn btn-add"> Ancien Post</button>
                </div>
            </div>
        </div>
        <div>
            <section>


                <header id="header">
                    <div class="button-col">
                        <button class="btn" name="Add Task"> Supprimer </button>
                    </div>

                    <div class="status-col">
                        <label> titre </label>
                    </div>

                    <div class="progress-col">
                        <label>Description</label>
                    </div>

                    <div class="dates-col">
                        <label> Date </label>
                    </div>

                    <div class="priority-col">
                        <label> Priority </label>
                    </div>

                    <div class="icon-col">
                        Admin
                    </div>

                </header>

                <!-- List Items -->
                <ul class="task-items">

                    <!-- List Item -->
                    <li class="item type1">
                        <div class="task">
                            <div class="icon"><img src="{{url('storage/banniere/child-malnutrition.jpg')}}" style="width:100%"alt="" /> </div>
                            <div class="name" style="width:150px"> TITRE DE LA PUB </div>
                        </div>

                        <div class="status">
                            <div class="icon off"> </div>
                            <div class="text"> Off Track </div>
                        </div>

                        <div class="progress">
                            <progress value="15" max="100" />
                        </div>

                        <div class="dates">
                            <div class="bar"> </div>
                        </div>

                        <div class="priority">
                            <div class="bar"> </div>
                        </div>

                        <div class="user">
                            <img src="https://source.unsplash.com/40x40/?indian" alt="Image 001" class="owner-img" />
                        </div>
                    </li>

                    <li class="item type4">
                        <div class="task">
                            <div class="icon"> </div>
                            <div class="name" style="width:120px"> </div>
                        </div>

                        <div class="status">
                            <div class="icon warning"> </div>
                            <div class="text"> At Risk </div>
                        </div>

                        <div class="progress">
                            <progress value="45" max="100" />
                        </div>

                        <div class="dates">
                            <div class="bar"> </div>
                        </div>

                        <div class="priority">
                            <div class="bar"> </div>
                        </div>

                        <div class="user">
                            <img src="https://source.unsplash.com/40x40/?face" alt="Image 001" class="owner-img" />
                        </div>
                    </li>

                    <li class="item type2">
                        <div class="task">
                            <div class="icon"> </div>
                            <div class="name" style="width:120px"> </div>
                        </div>

                        <div class="status">
                            <div class="icon off"> </div>
                            <div class="text"> Off Track </div>
                        </div>

                        <div class="progress">
                            <progress value="10" max="100" />
                        </div>

                        <div class="dates">
                            <div class="bar"> </div>
                        </div>

                        <div class="priority">
                            <div class="bar"> </div>
                        </div>

                        <div class="user">
                            <img src="https://source.unsplash.com/40x40/?european" alt="Image 001" class="owner-img" />
                        </div>
                    </li>

                    <li class="item type2">
                        <div class="task">
                            <div class="icon"> </div>
                            <div class="name" style="width:100px"> </div>
                        </div>

                        <div class="status">
                            <div class="icon"> </div>
                            <div class="text"> On Track </div>
                        </div>

                        <div class="progress">
                            <progress value="75" max="100" />
                        </div>

                        <div class="dates">
                            <div class="bar"> </div>
                        </div>

                        <div class="priority">
                            <div class="bar"> </div>
                        </div>

                        <div class="user">
                            <img src="https://source.unsplash.com/40x40/?asian" alt="Image 001" class="owner-img" />
                        </div>
                    </li>

                    <li class="item type1">
                        <div class="task">
                            <div class="icon"> </div>
                            <div class="name"> </div>
                        </div>

                        <div class="status">
                            <div class="icon warning"> </div>
                            <div class="text"> At Risk </div>
                        </div>

                        <div class="progress">
                            <progress value="35" max="100" />
                        </div>

                        <div class="dates">
                            <div class="bar"> </div>
                        </div>

                        <div class="priority">
                            <div class="bar"> </div>
                        </div>

                        <div class="user">
                            <img src="https://source.unsplash.com/40x40/?american" alt="Image 001" class="owner-img" />
                        </div>
                    </li>

                </ul>

            </section>
        </div>
    </div>

    <script>
        var mnu = document.getElementById("mnu");
        var mstate = false;

        function slideMenu() {
            mstate = !mstate;
            if (mstate) {
                mnu.style.left = "0px";
                mnu.style.boxShadow = "100px 0px 300px 0px rgba(0,0,0,0.3)";
            } else {
                mnu.style.left = "-250px";
                mnu.style.boxShadow = "0px 0px 00px 0px rgba(0,0,0,0.0)";
            }
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: "{{ url('get-members') }}",
                dataType: 'json',
                success: function(res) {
                    $('#prelo').css('display', 'none');
                    $('.a').css('display', 'inline-block');
                    $('.content-bar').css('display', 'grid');


                    paginationf(res);
                    console.log(res)
                    validateEachPage(1);
                },
                beforeSend: function() {
                    // Handle the beforeSend event

                    $('#prelo').css('display', 'inline-block');

                }
            });
        });
        $('.UploadVideo').change(function(e) {
            this.parentElement.style.display = "none";

            var div = this.parentElement;
            div.nextElementSibling.style.display = "block";
            var div = document.getElementsByClassName('uploader');
            var note = document.getElementById('notif');

            if (div.length > 6) {
                note.innerHTML = "<strong>vous avez atteint la limite des fichier</strong>";


            } else {
                var min = 1;
                var max = 100;
                var random = "preview-" + Math.floor(Math.random() * (max - min)) + min + "";

                let that = e.currentTarget
                if (that.files && that.files[0]) {

                    let reader = new FileReader()
                    reader.onload = (e) => {
                        $("#" + random + "").attr('src', e.target.result)
                    }

                    reader.readAsDataURL(that.files[0])
                }
                var file = this.files[0];
                var fileType = file["type"];

                var validImageTypes = ["video/mp4", "video/avi", "video/mov", "video/WebM", "video/WMV", "video/MKV", "video/SWF"];
                if ($.inArray(fileType, validImageTypes) < 0) {
                    note.innerHTML = "<strong> L'extension du fichier non prise en charge </strong>";
                } else {
                    if (file.size / 1024 / 1024 > 20) {

                        note.innerHTML = "<strong> veillez inserer une video de taille inferieure a 20mega </strong>";

                    } else {
                        $('.media').append("<div class='uploader' style='width:100px; height:auto; background:gray'><video src='' id=" + random + " style='width:100%; height:100%'></video></div>");
                    }
                }

            }
        })
        $('.UploadPhoto').change(function(e) {
            this.parentElement.style.display = "none";

            var div = this.parentElement;
            div.nextElementSibling.style.display = "block";
            // var divstyle=div.style;
            // divstyle.display="none";
            // alert(((div).nextSibling).css("display","inline"));
            // L'image img#image
            var div = document.getElementsByClassName('uploader');
            var note = document.getElementById('notif');

            if (div.length > 6) {
                note.innerHTML = "<strong>vous avez atteint la limite des fichier</strong>";

            } else {
                var image;
                var min = 1;
                var max = 100;
                var random = "preview-" + Math.floor(Math.random() * (max - min)) + min + "";

                let that = e.currentTarget
                if (that.files && that.files[0]) {

                    let reader = new FileReader()
                    reader.onload = (e) => {
                        $("#" + random + "").attr('src', e.target.result)
                    }

                    reader.readAsDataURL(that.files[0])
                }
                var file = this.files[0];
                var fileType = file["type"];
                var validImageTypes = ["image/jpg", "image/jpeg", "image/png"];
                if ($.inArray(fileType, validImageTypes) < 0) {
                    note.innerHTML = "<strong> L'extension du fichier non prise en charge </strong>";


                } else {
                    $('.media').append("<div class='uploader' style='width:100px; height:80px; background:gray'><img src='' id=" + random + " style='width:100%; height:100%'/></div>");

                }


            }

        })
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
            // if (paginationPage == 1) {
            //     previousPage.style.visibility = "hidden";
            // } else {
            //     previousPage.style.visibility = "visible";
            // }
            // if (paginationPage == numberOfPages()) {
            //     nextPage.style.visibility = "hidden";
            // } else {
            //     nextPage.style.visibility = "visible";
            // }
        }
        //function per number of Pages
        function numberOfPages() {
            return Math.ceil(paginationObject.length / CountPerEachPage);
        }
        //loading al JavaScript functions functionality
        // window.onload = function() {

        // };
        $('#search-input').keyup(function(e) {
            // alert(e.target.value);
            var data = e.target.value;
            $.ajax({
                type: "POST",
                data: data,
                url: "{{ url('search-members') }}",
                dataType: 'json',
                success: function(res) {
                    // $('#prelo').css('display', 'none');
                    // $('.a').css('display', 'inline-block');
                    // $('.content-bar').css('display', 'grid');


                    paginationf(res);

                    validateEachPage(1);
                },
                catch: function() {
                    // Handle the beforeSend event

                    // $('#prelo').css('display', 'inline-block');

                }
            });

        });
        $('#add-member').submit(function(e) {
            e.preventDefault();

            var form = $("#add-member");
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(res) {

                    paginationf(res);

                    validateEachPage(1);
                },
                error: function(data) {
                    this.reset();
                    // Some error in ajax call
                    alert("some Error");

                }
            });


        });

        function deleteId(id) {
            var formData = {
                // name: $("#name").val(),
                id: id

            };

            $.ajax({
                type: "POST",
                url: "delete-membre",

                data: formData,
                dataType: "json",
                encode: true,
                success: function(res) {

                    paginationf(res);


                    validateEachPage(1);
                },
                error: function(data) {

                    // Some error in ajax call
                    alert("some Error");

                }
            })

        }

        function editId(id) {

            var formData = {

                id: id

            };
            $.ajax({
                type: "POST",
                url: "get-membre",
                data: formData,
                dataType: "json",
                encode: true,
                success: function(data) {


                    console.log(data);
                    document.getElementById('nom').value = data['nom'];
                    document.getElementById('adresse').value = data['adresse'];
                    document.getElementById('postNom').value = data['postNom'];
                    document.getElementById('email').value = data['email'];
                    document.getElementById('telephone').value = data['telephone'];
                    document.getElementById('id').value = data['id'];


                },
                error: function(data) {

                    // Some error in ajax call
                    alert("some Error");
                    console.log(data)
                }
            })

        }
        $('#edit-member').submit(function(e) {
            e.preventDefault();
            var form = $("#edit-member");
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(res) {

                    paginationf(res);

                    validateEachPage(1);
                },
                error: function(data) {

                    // Some error in ajax call
                    alert("some Error");

                }
            });
        });
        $('#nom').change(function(e) {
            $nom = e.target.value;
            document.getElementById('nom').value = $nom;

        })
        $('#postNom').change(function(e) {
            $nom = e.target.value;
            document.getElementById('postNom').value = $nom;

        })
        $('#adresse').change(function(e) {
            $nom = e.target.value;
            document.getElementById('adresse').value = $nom;

        })
        $('#telephone').change(function(e) {
            $nom = e.target.value;
            document.getElementById('telephone').value = $nom;

        })
        $('#email').change(function(e) {
            $nom = e.target.value;
            document.getElementById('email').value = $nom;

        });
        $('.mbtn').click(function() {
            $('.content-area').addClass('hiden');
            if ($(this).hasClass('membres')) {
                $('.membre').removeClass('hiden');
            }
            if ($(this).hasClass('posts')) {
                $('.post').removeClass('hiden');
            }
            if ($(this).hasClass('Gposts')) {
                $('.Gpost').removeClass('hiden');
            }
        });


        // Creation des publications 
        // $('#UploadPhoto').change(function() {
        //     var formData = new FormData();

        //     formData.append("image", document.getElementById('UploadPhoto').files[0]);
        //     alert("image telecharger ");
        //     $.ajax({
        //         type: 'POST',
        //         url: 'image-media',
        //         data: formData,
        //         contentType: false,
        //         processData: false,
        //         success: (response) => {
        //             if (response) {

        //                 console.log(response);
        //                 alert('Image has been uploaded ');
        //             }
        //         },
        //         error: function(response) {
        //             alert('Image has not been uploaded successfully');

        //         }
        //     });

        // });
        $('#form').submit(function(e) {
            e.preventDefault();

            // alert(totalfiles);
            var form = $("#form");
            var url = form.attr('action');

            let formData = new FormData(this);


            $('#image-input-error').text('');

            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    if (response) {
                        this.reset();
                        $('.media').html('');
                        console.log(response);

                    }
                },
                error: function(response) {
                    console.log(response);

                }
            });

        })
    </script>

</body>

</html>