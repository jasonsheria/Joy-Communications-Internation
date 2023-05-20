@extends('layouts.app')

@section('content')
<style>
    .subContainer .ccv:after,
    .subContainer .date:after,
    .subContainer .cardNum:after {
        position: absolute;
        top: -25px;
        font-family: "Roboto", sans-serif;
        left: 0;
        color: rgba(142, 190, 255, 0.9);
        font-size: 13px;
    }

    .subContainer .ccv p,
    .subContainer .date p {
        padding: 0;
        margin: 0;
        font-size: 15px;
        font-family: "Montserrat", sans-serif;
        font-weight: lighter;
        text-align: center;
        padding: 4px 20px;
        padding-right: 25px;
    }

    * {
        font-family: "Roboto", sans-serif;
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    .container-card {
        position: absolute;
        width: 600px;
        height: 400px;
        background: #FFF;
        box-shadow: 0px 0px 40px 1px #eee;
        top: 120%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        justify-content: space-between;
        grid-template-areas: "mGrid card";
        min-height: 0;
        min-width: 0;
        border-radius: 9px;
        z-index: 7;
    }

    .mGrid {
        grid-area: mGrid;
        display: grid;
        grid-template-rows: repeat(3, 1fr);
        overflow: hidden;
        justify-content: center;
        margin-top: 15px;
        margin-left: -10px;
    }

    .total {
        padding-top: 50px;
        align-self: end;
    }

    .total p {
        text-align: center;
        font-size: 15px;
        text-transform: uppercase;
        font-weight: 400;
        color: #808eab;
        letter-spacing: 0.15rem;
    }

    .total p:last-child {
        font-size: 2rem;
        font-weight: bold;
        color: #0b82f8;
        padding-top: 10px;
        font-family: "Roboto", sans-serif;
    }

    .detail {
        font-family: "Roboto", sans-serif;
        align-self: start;
        display: grid;
        margin-top: 32px;
        grid-template-rows: repeat(3, 1fr);
    }

    .detail p {
        text-align: center;
        font-size: 15px;
        text-transform: uppercase;
        font-weight: 400;
        color: #808eab;
        letter-spacing: 0.15rem;
        margin-bottom: 10px;
    }

    .detail ul {
        list-style-type: none;
        grid-template-columns: repeat(2, 1fr);
        font-family: "Roboto", sans-serif;
        justify-content: center;
        align-content: start;
    }

    .detail ul li {
        display: inline-block;
        color: #515860;
        text-align: left;
        font-size: 15px;
    }

    .detail ul li:last-child {
        text-align: right;
        color: #0b82f8;
        font-family: "Roboto", sans-serif;
    }

    button {
        display: block;
        justify-self: center;
        align-self: center;
        font-family: "Open Sans", sans-serif;
        background: #ffffff;
        color: #0b82f8;
        border: 1px solid #0b82f8;
        text-transform: uppercase;
        font-size: 0.97rem;
        opacity: 0.8;
        font-weight: lighter;
        padding: 7px 40px;
        border-radius: 1.6rem;
        cursor: pointer;
        outline: none;
        transition: all 0.2s linear;
    }

    button:hover {
        transition: all 0.2s linear;
        background: #0b82f8;
        color: #FFF;
    }

    .subContainer {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        height: 270px;
        width: 400px;
        border-radius: 9px;
        font-family: "Roboto", sans-serif;
        bottom: 0;
        color: #fff;
        min-height: 0;
        min-width: 0;
        background: #1f8fff;
        box-shadow: -10px 10px 60px 10px #ADB7C4;
        grid-area: card;
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        grid-template-rows: repeat(3, 1fr);
        grid-template-areas: "name name  . . . visa visa " "cardNum cardNum cardNum cardNum cardNum . ." " date date date date . ccv ccv ";
    }

    .subContainer p,
    .subContainer .visaCont,
    .subContainer .cardNum,
    .subContainer .date,
    .subContainer .ccv {
        margin-left: 35px;
        margin-top: -25px;
    }

    .subContainer p {
        padding-top: 25px;
        font-weight: 600;
        grid-area: name;
        margin-top: 0px;
    }

    .subContainer .visaCont {
        display: grid;
        grid-area: visa;
        overflow: hidden;
        margin: 0;
        justify-self: center;
        align-self: center;
    }

    .subContainer .visaCont svg {
        height: 50px;
        width: 100px;
    }

    .subContainer .cardNum {
        position: relative;
        grid-area: cardNum;
        background: #3799ff;
        align-self: center;
        padding: 7px 5px;
        font-size: 19px;
    }

    .subContainer .cardNum:after {
        content: "Credit  Card  Number";
    }

    .subContainer .cardNum ul {
        list-style-type: none;
        text-align: center;
    }

    .subContainer .cardNum ul li {
        display: inline-block;
        font-family: "Montserrat", sans-serif;
        margin: 0 auto;
        letter-spacing: 1px;
    }

    .subContainer .cardNum ul li:last-child {
        text-align: right;
    }

    .subContainer .date {
        position: relative;
        grid-area: date;
        background: #3799ff;
        align-self: center;
        justify-self: left;
    }

    .subContainer .date:after {
        content: "Expiration";
    }

    .subContainer .ccv {
        position: relative;
        grid-area: ccv;
        align-self: center;
        justify-self: left;
        background: #3799ff;
        margin-left: 0;
    }

    .subContainer .ccv:after {
        content: "CCV";
    }

    .subContainer .ccv p {
        padding: 4px 12px;
        letter-spacing: 1px;
    }

    .card {
        border-radius: 4px;
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        padding: 14px 80px 18px 36px;
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
    }

    .card h3 {
        font-weight: 600;
    }

    .card img {
        position: absolute;
        top: 20px;
        right: 15px;
        max-height: 120px;
    }

    .card-1 {
        background-image: url(https://upload.wikimedia.org/wikipedia/commons/a/a4/Paypal_2014_logo.png);
        background-repeat: no-repeat;
        background-position: right;
        background-size: 80px;
    }

    .card-2 {
        background-image: url(https://ionicframework.com/img/getting-started/components-card.png);
        background-repeat: no-repeat;
        background-position: right;
        background-size: 80px;
    }

    .card-3 {
        background-image: url(https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg);
        background-repeat: no-repeat;
        background-position: right;
        background-size: 80px;
    }

    .hidden {
        display: none;
    }

    @media(max-width: 990px) {
        .card {
            margin: 20px;
        }
    }
</style>
<div>

    <div>
        <div class="container" style="margin-top:10%">
            <h4 class="text-center">
                Aidez nos frères et sœurs déracinés d’Afrique à se reconstruire
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{url('storage/banniere/child-malnutrition.jpg')}}" style="width:100%" alt="" />
                </div>
                <div class="col-md-6">
                    <p class="align-center">
                        Sur le continent africain, 33,4 millions d’hommes, de femmes et d’enfants ont été forcés de quitter leur foyer pour fuir les conflits, la violence, la persécution ou les désastres naturels.

                        Au Sahel, au Lac Chad, au Soudan, au Kenya et ailleurs en Afrique, ils ont trouvé refuge dans des camps et au sein de communautés locales qui les accueillent.

                        Au HCR, nous travaillons sans relâche pour que ces millions de familles déracinées reçoivent une aide vitale d’urgence : abri, nourriture, protection et assistance.

                        Nous les aidons surtout à s’intégrer dans les communautés qui les accueillent, à réaliser leurs projets, à se recréer une vie loin de celle qu’ils ont dû quitter, sans toutefois perdre l’espoir de revenir chez eux.

                        Nous avons besoin de votre don pour aider encore plus d’enfants réfugiés à aller à l’école, pour assurer que plus de familles aient des moyens de subsistance, pour que tous aient accès à la santé, au soutien psychologique et à l’information.

                        Ils n’ont pas choisi d’être réfugiés, mais vous pouvez choisir de les aider à survivre et à se reconstruire.
                    </p>
                </div>
            </div>

        </div>
        <div class="d-flex m-4">
            <button class="btn visa-btn">
                Visa
            </button>

            <button class="btn master-btn">
                MasterCard

            </button>
            <button class="btn paypal-btn ">
                Paypal
            </button>
            <button class="btn mobile-btn">
                Mobile Money
            </button>

        </div>

    </div>
    <div class="container-card visa ">

        <div class="mGrid">
            <div class="total">
                <p>total</p>
                <p>$898</p>
            </div>
            <div class="detail">
                <p>detail</p>
                <ul>
                    <li> Montant </li>
                    <li><input type="number" placeholder="100" class="" /></li>
                </ul>
                <ul>
                    <li> Devise </li>
                    <li>
                        <select value='devise' class="form-control">
                            <option value="dollard">dollard</option>
                            <option value="euro">euro</option>
                        </select>
                    </li>
                </ul>
            </div>
            <button>pay now</button>
        </div>
        <!-- Small Side Card detail-->
        <div class="subContainer">
            <p>Carly Ling</p>
            <!-- svg Logo-->
            <div class="visaCont">
                <svg class="visa" enable-background="new 0 0 291.764 291.764" version="1.1" viewbox="5 70 290 200" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path class="svgcolor" d="m119.26 100.23l-14.643 91.122h23.405l14.634-91.122h-23.396zm70.598 37.118c-8.179-4.039-13.193-6.765-13.193-10.896 0.1-3.756 4.24-7.604 13.485-7.604 7.604-0.191 13.193 1.596 17.433 3.374l2.124 0.948 3.182-19.065c-4.623-1.787-11.953-3.756-21.007-3.756-23.113 0-39.388 12.017-39.489 29.204-0.191 12.683 11.652 19.721 20.515 23.943 9.054 4.331 12.136 7.139 12.136 10.987-0.1 5.908-7.321 8.634-14.059 8.634-9.336 0-14.351-1.404-21.964-4.696l-3.082-1.404-3.273 19.813c5.498 2.444 15.609 4.595 26.104 4.705 24.563 0 40.546-11.835 40.747-30.152 0.08-10.048-6.165-17.744-19.659-24.035zm83.034-36.836h-18.108c-5.58 0-9.82 1.605-12.236 7.331l-34.766 83.509h24.563l6.765-18.08h27.481l3.51 18.153h21.664l-18.873-90.913zm-26.97 54.514c0.474 0.046 9.428-29.514 9.428-29.514l7.13 29.514h-16.558zm-160.86-54.796l-22.931 61.909-2.498-12.209c-4.24-14.087-17.533-29.395-32.368-36.999l20.998 78.33h24.764l36.799-91.021h-24.764v-0.01z" fill="#FFF"></path>
                    <path class="svgtipcolor" d="m51.916 111.98c-1.787-6.948-7.486-11.634-15.226-11.734h-36.316l-0.374 1.686c28.329 6.984 52.107 28.474 59.821 48.688l-7.905-38.64z" fill="#EFC75E"></path>
                </svg>
            </div>
            <div class="cardNum">
                <ul>
                    <li>4514</li>
                    <li>6188</li>
                    <li>1234</li>
                    <li>5678</li>
                </ul>
            </div>
            <div class="date">
                <p class="datepara">January        2018</p>
            </div>
            <div class="ccv">
                <p>983</p>
            </div>
        </div>
    </div>
    <div class="container-card master hidden">

        <div class="mGrid">
            <div class="total">
                <p>total</p>
                <p>$898</p>
            </div>
            <div class="detail">
                <p>detail</p>
                <ul>
                    <li>iPad Pro</li>
                    <li>$799</li>
                </ul>
                <ul>
                    <select value='devise' class="form-control">
                        <option value="dollard">dollard</option>
                        <option value="euro">euro</option>
                    </select>
                </ul>
            </div>
            <button>pay now</button>
        </div>
        <!-- Small Side Card detail-->
        <div class="subContainer" style="background: #cc0000;">
            <p>Carly Ling</p>
            <!-- svg Logo-->
            <div class="visaCont">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg" style="width: 74%;" alt="" />
            </div>
            <div class="cardNum" style="background:#FF5722;">
                <ul>
                    <li>4514</li>
                    <li>6188</li>
                    <li>1234</li>
                    <li>5678</li>
                </ul>
            </div>
            <div class="date" style="background:#FF5722;">
                <p class="datepara">January        2019</p>
            </div>
            <div class="ccv" style="background:#FF5722;">
                <p>983</p>
            </div>
        </div>

    </div>
    <div class="container-card paypal hidden">

        <div class="mGrid">
            <div class="total">
                <p>total</p>
                <p>$898</p>
            </div>
            <div class="detail">
                <p>detail</p>
                <ul>
                    <li> Montant </li>
                    <li><input type="number" placeholder="100" /></li>
                </ul>
                <ul>
                    <li> Devise </li>
                    <li>
                        <select value='devise' class="form-control">
                            <option value="dollard">dollard</option>
                            <option value="euro">euro</option>
                        </select>
                    </li>
                </ul>
            </div>
            <button>pay now</button>
        </div>
        <!-- Small Side Card detail-->
        <div class="subContainer" style="background: #ECEFF1;">
            <p>Carly Ling</p>
            <!-- svg Logo-->
            <div class="visaCont">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Paypal_2014_logo.png" style="width: 74%;" alt="" />
            </div>
            <div class="cardNum">
                <ul>
                    <li>4514</li>
                    <li>6188</li>
                    <li>1234</li>
                    <li>5678</li>
                </ul>
            </div>
            <div class="date">
                <p class="datepara">January        2019</p>
            </div>
            <div class="ccv">
                <p>983</p>
            </div>
        </div>

    </div>

    <div class="backlayer"></div>
</div>
<!-- autre moyen de payement  -->

<div class="container" style="margin-top:45%;
    margin-bottom: 5%;">
    <h1 class="text-center mb-4"> Autres Moyens </h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card card-1">
                <h3>Paypal</h3>
                <p>A curated set of ES5/ES6/TypeScript wrappers for plugins to easily add any native functionality to your Ionic apps.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-2">
                <h3>Mobile Money</h3>
                <p>Tabs, buttons, inputs, lists, cards, and more! A comprehensive library
                    of mobile UI components, ready to go.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-3">
                <h3>Master Card</h3>
                <p>Learn how to easily customize and modify your app’s design to fit your
                    brand across all mobile platform styles.</p>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $('.master-btn').click(function() {
        $('.container-card').addClass('hidden');
        $('.master').removeClass('hidden');
    });
    $('.visa-btn').click(function() {
        $('.container-card').addClass('hidden');
        $('.visa').removeClass('hidden');
    });
    $('.paypal-btn').click(function() {
        $('.container-card').addClass('hidden');
        $('.paypal').removeClass('hidden');
    });
    $('.mobile-btn').click(function() {
        $('.container-card').addClass('hidden');
        $('.mobile').removeClass('hidden');
    });
</script>
@endsection