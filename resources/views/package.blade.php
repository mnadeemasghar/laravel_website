<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width" />
<title>Home | Enskypass </title>
<link rel="stylesheet" href="{{asset('front_assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('front_assets/css/mdb.min.css')}}" />
<link rel="stylesheet" href="{{asset('front_assets/css/addons-pro/cards-extended.min.css')}}" />
<link rel="stylesheet" href="{{asset('front_assets/css/addons-pro/simple-charts.min.css')}}" />
<link rel="stylesheet" href="{{asset('front_assets/css/colors.css')}}" />
<link rel="stylesheet" href="{{asset('front_assets/css/fonts.css')}}" />
<link rel="stylesheet" href="{{asset('front_assets/css/fontstyles.css')}}" />
<link rel="stylesheet" href="{{asset('front_assets/css/buttons.css')}}" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
<link rel="stylesheet" href="{{asset('front_assets/css/mainscreen.css')}}"  />
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="img/Logo/Favicon.png" />
</head>
<style>
        /* ===== Scrollbar CSS ===== */
        /* Firefox */
        * {
            scrollbar-width: auto;
            scrollbar-color: #8f54a0 #ffffff;
        }
        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 16px;
        }
        *::-webkit-scrollbar-track {
            background: #ffffff;
        }
        *::-webkit-scrollbar-thumb {
            background-color: #8f54a0;
            border-radius: 10px;
            border: 3px solid #ffffff;
        }

        @import "lesshat";
        html,
        body {
        font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
        /* font-size: 10px;
        font-weight: bold; */
        }
        h2 {
        font-size: 1.6em;
        display: inline;
        text-transform: uppercase;
        }
        h3 {
        font-size: 1.6em;
        display: inline;
        text-transform: capitalize;
        }
        em {
        font-style: normal;
        text-decoration: underline;
        font-size: 1.7rem;
        }
        section {
        text-align: justify !important;
        text-justify: distribute-all-lines;
        font-size: 0 !important;
        }
        section > * {
        text-align: left;
        font-size: medium;
        }
        section:after {
        content: '';
        display: inline-block;
        width: 100%;
        }
        section > div {
        vertical-align: top;
        display: inline-block;
        width: 100%;
        width: 24%;
        margin-bottom: 1.9%;
        }
        @media only screen and (max-width: 529px) {
        section > div {
            width: 100%;
            margin-bottom: 1.9%;
        }
        }
        section > div.all-plans {
        width: 100%;
        margin-bottom: 1.9%;
        }
        .price-package {
        padding-top: 25px;
        margin-bottom: 10px;
        text-align: center;
        -moz-border-radius-topleft: 10px;
        -moz-border-radius-topright: 10px;
        -webkit-border-top-left-radius: 10px;
        -webkit-border-top-right-radius: 10px;
        -moz-border-radius-bottomleft: 10px;
        -moz-border-radius-bottomright: 10px;
        -webkit-border-bottom-left-radius: 10px;
        -webkit-border-bottom-right-radius: 10px;
        }
        .price-package .package-name {
        font-size: 1.4rem;
        }
        @media only screen and (max-width: 529px) {
        .price-package {
            padding-top: 1rem;
        }
        }
        .price-package .package-price {
        -moz-border-radius-topleft: 10px;
        -moz-border-radius-topright: 10px;
        -webkit-border-top-left-radius: 10px;
        -webkit-border-top-right-radius: 10px;
        -moz-border-radius-bottomleft: 10px;
        -moz-border-radius-bottomright: 10px;
        -webkit-border-bottom-left-radius: 10px;
        -webkit-border-bottom-right-radius: 10px;
        margin-top: 25px;
        }
        @media only screen and (max-width: 529px) {
        .price-package .package-price {
            margin-top: 1rem;
        }
        }
        .price-package .package-price .price {
        position: relative;
        display: inline-block;
        }
        .price-package .package-price .price sup {
        font-size: 1.6rem;
        position: absolute;
        top: 6px;
        left: -12px;
        }
        .price-package .package-price .price span {
        font-size: 3.5rem;
        }
        .price-package .package-price .term {
        display: inline-block;
        vertical-align: top;
        text-align: left;
        padding-top: 6px;
        }
        .price-package .package-price .term sup {
        font-size: 1.7rem;
        display: block;
        padding: 0;
        }
        .price-package .package-price .term span {
        font-size: 1rem;
        display: block;
        margin-top: -3px;
        }
        .price-package .package-features {
        -moz-border-radius-topleft: 10px;
        -moz-border-radius-topright: 10px;
        -webkit-border-top-left-radius: 10px;
        -webkit-border-top-right-radius: 10px;
        -moz-border-radius-bottomleft: 10px;
        -moz-border-radius-bottomright: 10px;
        -webkit-border-bottom-left-radius: 10px;
        -webkit-border-bottom-right-radius: 10px;
        margin-top: 16.666666666667px;
        }
        .price-package .package-features ul {
        font-size: 1.6rem;
        margin: 0;
        padding: 0;
        list-style: none;
        }
        .price-package .package-features ul li {
        margin: 20px auto;
        padding: 0;
        }
        @media only screen and (max-width: 529px) {
        .price-package .package-features ul li {
            margin: 10px auto;
        }
        }
        .price-package .sign-up {
        -moz-border-radius-topleft: 10px;
        -moz-border-radius-topright: 10px;
        -webkit-border-top-left-radius: 10px;
        -webkit-border-top-right-radius: 10px;
        -moz-border-radius-bottomleft: 10px;
        -moz-border-radius-bottomright: 10px;
        -webkit-border-bottom-left-radius: 10px;
        -webkit-border-bottom-right-radius: 10px;
        padding: 16.666666666667px 0;
        margin-top: 16.666666666667px;
        width: 100%;
        outline: none;
        border: none;
        cursor: pointer;
        }
        .price-package .package-arrow {
        width: 0;
        height: 0;
        margin: 0 auto 12.5px;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 8px solid;
        }
        .all-plans .all-plans-features {
        display: table;
        width: 100%;
        }
        .all-plans .all-plans-features text {
        display: table-cell;
        font-size: 1.6rem;
        vertical-align: middle;
        width: 33%;
        }
        @media only screen and (max-width: 529px) {
        .all-plans .all-plans-features text {
            display: block;
            margin: 10px auto;
        }
        }
        .average .price-package {
        background-color: #009a86;
        }
        .average .price-package .package-name {
        color: white;
        }
        .average .price-package .package-price {
        background-color: #66CAA6;
        color: white;
        }
        .average .price-package .package-features {
        background-color: #e0f2ed;
        color: #009a86;
        }
        .average .price-package .sign-up {
        background-color: #009a86;
        color: white;
        transition: background-color 0.5s ease;
        }
        .average .price-package .sign-up:hover {
        background-color: #66CAA6;
        }
        .average .price-package .sign-up:active {
        background-color: #e0f2ed;
        }
        .average .price-package .package-price .package-arrow {
        border-top-color: #009a86;
        }
        .average .price-package .package-features .package-arrow {
        border-top-color: #66CAA6;
        }
        .average .price-package .sign-up .package-arrow {
        border-top-color: #e0f2ed;
        }
        .special .price-package {
        background-color: #8654ff;
        }
        .special .price-package .package-name {
        color: white;
        }
        .special .price-package .package-price {
        background-color: #b191ff;
        color: white;
        }
        .special .price-package .package-features {
        background-color: #efe9fc;
        color: #8654ff;
        }
        .special .price-package .sign-up {
        background-color: #8654ff;
        color: white;
        transition: background-color 0.5s ease;
        }
        .special .price-package .sign-up:hover {
        background-color: #b191ff;
        }
        .special .price-package .sign-up:active {
        background-color: #efe9fc;
        }
        .special .price-package .package-price .package-arrow {
        border-top-color: #8654ff;
        }
        .special .price-package .package-features .package-arrow {
        border-top-color: #b191ff;
        }
        .special .price-package .sign-up .package-arrow {
        border-top-color: #efe9fc;
        }
        .superduper .price-package {
        background-color: #00b9f2;
        }
        .superduper .price-package .package-name {
        color: white;
        }
        .superduper .price-package .package-price {
        background-color: #7dd4fe;
        color: white;
        }
        .superduper .price-package .package-features {
        background-color: #e0f2fa;
        color: #00b9f2;
        }
        .superduper .price-package .sign-up {
        background-color: #00b9f2;
        color: white;
        transition: background-color 0.5s ease;
        }
        .superduper .price-package .sign-up:hover {
        background-color: #7dd4fe;
        }
        .superduper .price-package .sign-up:active {
        background-color: #e0f2fa;
        }
        .superduper .price-package .package-price .package-arrow {
        border-top-color: #00b9f2;
        }
        .superduper .price-package .package-features .package-arrow {
        border-top-color: #7dd4fe;
        }
        .superduper .price-package .sign-up .package-arrow {
        border-top-color: #e0f2fa;
        }
        .all-plans .price-package {
        background-color: #646c7f;
        }
        .all-plans .price-package .package-name {
        color: white;
        }
        .all-plans .price-package .package-price {
        background-color: #8b94ab;
        color: white;
        }
        .all-plans .price-package .package-features {
        background-color: #e5ebf4;
        color: #646c7f;
        }
        .all-plans .price-package .sign-up {
        background-color: #646c7f;
        color: white;
        transition: background-color 0.5s ease;
        }
        .all-plans .price-package .sign-up:hover {
        background-color: #8b94ab;
        }
        .all-plans .price-package .sign-up:active {
        background-color: #e5ebf4;
        }
        .all-plans .price-package .package-price .package-arrow {
        border-top-color: #646c7f;
        }
        .all-plans .price-package .package-features .package-arrow {
        border-top-color: #8b94ab;
        }
        .all-plans .price-package .sign-up .package-arrow {
        border-top-color: #e5ebf4;
        }
        .all-plans .package-features .package-arrow {
        border-top-color: #646c7f !important;
        }
        .all-plans .package-features {
        padding-bottom: 20px;
        }
    </style>
<body>
<nav class="navbar navbar-expand-xl navbar-dark fixed-top scrolling-navbar shadow-none">
    <a class="navbar-brand ml-lg-5 ml-1" href="/"> 
        <img class="icon-sm" src="{{asset('front_assets/img/Logo/logo.png')}}" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse mx-auto pr-5 " id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-md-3 mx-auto ">
            <li class="nav-item d-inline-block d-lg-none">
                <a class="nav-link " href="{{route('signup')}}" data-offset="90">Sign Up</a>
            </li>
            <li class="nav-item d-inline-block d-lg-none">
                <a class="nav-link " href="{{route('login')}}" data-offset="90">Login-M</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('faq')}}" data-offset="90">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('privacy')}}" data-offset="90">Privacy</a>
            </li>
        </ul>
        <ul class="navbar-nav nav-flex-icons loginitems px-2 d-none d-md-flex">
            <li class="nav-item">
                <a class="nav-link navregister" href="{{route('signup')}}" data-offset="90">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navregister" href="{{route('login')}}" data-offset="90">Login</a>
            </li>
        </ul>
    </div>
</nav>

<div style="background-image: url('front_assets//img/Mainpage/Section 1-min.png'); background-repeat: no-repeat; background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-12 py-5 ">
                <h1 class="white-text font-weight-bold text-center py-2">
                    Buy Package
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3 pt-5">
<section>
    <div class="average">
      <div class="price-package">
          <div class="package-name">
            <h2>Economical</h2>
          </div>
        <div class="package-price">
            <div class="package-arrow"></div>
            <div class="price">
              <span style="font-size: 15px;">50$</span>
            </div>
          <div class="package-features">
            <div class="package-arrow"></div>
            <ul>
              <li>Investment 50$</li>
              <li>Earning  150$</li>
              <li>Daily Earning 15$</li>
              <li>Earning on 8X Referal 50$</li>
            </ul>
            <a href="{{route('deposit')}}">
            <button class="sign-up">
              <h3>Buy Now</h3>
            </button>
            </a>
          </div><!--package-features-->
        </div><!--package-price-->
      </div><!--price-package-->
    </div><!--Economical-->  
  
  <div class="average">
    <div class="price-package">
      <div class="package-name">
        <h2>Start-Up</h2>
      </div>
      <div class="package-price">
        <div class="package-arrow"></div>
          <div class="price">
          
          <span style="font-size: 15px;">100$ -1000$</span>
        </div>
        <div class="package-features">
          <div class="package-arrow"></div>
          <ul>
            <li>Investment 50$</li>
            <li>Earning  150$</li>
            <li>Daily Earning 15$</li>
            <li>Earning on 8X Referal 50$</li>
            <li>Daily Earning 15$</li>
          </ul>
          <button class="sign-up">
            <h3>Buy Now</h3>
          </button>
        </div><!--package-features-->
      </div><!--package-price-->
    </div><!--price-package-->
  </div><!--average-->

  <div class="special">
    <div class="price-package">
      <div class="package-name">
        <h2>Business</h2>
      </div>
      <div class="package-price">
        <div class="package-arrow"></div>
        <div class="price">
          
          <span style="font-size: 15px;">1000$ - 4000$</span>
        </div>
        <div class="package-features">
          <div class="package-arrow"></div>
            <ul>
              <li>Investment 50$</li>
              <li>Earning  150$</li>
              <li>Daily Earning 15$</li>
              <li>Earning on 8X Referal 50$</li>
              <li>Daily Earning 15$</li>
            <ul> 
          <button class="sign-up">
            <h3>Buy Now</h3>
          </button>
        </div><!--package-features-->
      </div><!--package-price-->
    </div><!--price-package-->
  </div><!--special-->

  <div class="superduper">
    <div class="price-package">
      <div class="package-name">
        <h2>super duper</h2>
      </div>
      <div class="package-price">
        <div class="package-arrow"></div>
        <div class="price">
          <span style="font-size: 15px;">4000$ -8000$</span>
        </div>
        <div class="package-features">
          <div class="package-arrow"></div>
            <ul>
              <li>Investment 50$</li>
              <li>Earning  150$</li>
              <li>Daily Earning 15$</li>
              <li>Earning on 8X Referal 50$</li>
            </ul>
          <button class="sign-up">
            <h3>Buy Now</h3>
          </button>
        </div><!--package-features-->
      </div><!--package-price-->
    </div><!--price-package-->
  </div><!--superduper-->
</section>
</div>



<footer class="page-footer font-small pt-4 " style="background-image: url('front_assets/img/Mainpage/Footer-min.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

<div class="container text-center text-md-left ">
    <div class="row  flex-1 ">
        <div class=" col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <div class="row align-items-center h-100">
                <div class="infocompany text-center">
                    <img class="img-fluid px-3" src="{{asset('front_assets/img/Logo/logo.png')}}" />
                    <h5 class="fw-500">
                    Smart Solutions for everyday Living
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 white-text">
            <h6 class="text-uppercase font-weight-bold">Company</h6>
            <p class="mb-2">
                <a href="/">Home</a>
            </p>
            <p class="mb-2">
                <a href="/Home/AboutUs">About Us</a>
            </p>
            <p class="mb-2">
                <a href="/Home/Cashback">Cashback Rewards</a>
            </p>
            <p class="mb-2">
                <a href="/Home/Roadmap">Road Map</a>
            </p>
            <p class="mb-2">
                <a href="/Home/Contact">Contact</a>
            </p>
            <p class="mb-2">
                <a href="/Home/Terms">Terms and Conditions</a>
            </p>
            <p class="mb-2">
                <a href="/Home/Privacy">Privacy Policy</a>
            </p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 white-text">
            <h6 class="text-uppercase font-weight-bold">Resources</h6>
            <p class="mb-2">
                <a href="/Home/News">News</a>
            </p>
            <p class="mb-2">
                <a href="/Home/Faq">FAQ</a>
            </p>
            <p class="mb-2">
                <a href="#!">Tokenomics</a>
            </p>
            <p class="mb-2">
                <a href="/Home/Foundation">Foundation</a>
            </p>
            <p class="mb-2">
                <a href="#!">Calculator</a>
            </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase font-weight-bold">Location</h6>
            <p class="mb-2"> Ensky Pass LLC</p>
            <p class="mb-2">
                Suite 305, Griffith Corporate Centre, Beachmont, Kingstown,
                St. Vincent and the Grenadines
            </p>
            
            <p class="mb-2">
                enskypass.com
            </p>
        </div>
    </div>
</div>
    <div class="footer-copyright text-center py-3">
        © 2022 Copyright:<a href="/"> Enskypass.com</a>
    </div>
</footer>
<!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<script src="{{asset('front_assets/js/jquery.min.js')}}"></script>
<script src="{{asset('front_assets/js/popper.min.js')}}"></script>
<script src="{{asset('front_assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front_assets/js/mdb.min.js')}}"></script>
<script src="{{asset('front_assets/js/buttons.min.js')}}"></script>
<script src="{{asset('front_assets/js/cards.min.js')}}"></script>
<script src="{{asset('front_assets/js/file-input.min.js')}}"></script>
<script src="{{asset('front_assets/js/collapsible.min.js')}}"></script>
<script src="{{asset('front_assets/js/simple-charts.min.js')}}"></script>



</body>
</html>
