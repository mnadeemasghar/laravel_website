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
        main {
        width:90%;
        }

        .text {
        height: 60%;
        width: 60%;
        border-radius: 10px;
        background: #017366;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.25);
        position: absolute;
        top: 40%;
        left: 5%;
        z-index: 0;
        }

        .text p {
        color:#fff;
        font-size: 14px;
        padding: 10% 70% 30% 5%;
        padding-right: 70%;
        }

        .container1 {
        max-width: 400px;
        width: 100%;
        margin: 0 auto;
        position: relative;
        z-index: 1;
        }

        .container1::before {
        content:'';
        height: 90%;
        width: 95%;
        border-radius: 10px;
        background: #fff;
        position: absolute;
        top: -2%;
        left: 8%;
        z-index: -1;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact select#profissao,
        #contact button[type="submit"] {
        font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
        }

        #contact {
        right: 10px;
        top:10px;
        background: #FFFFFF;
        padding: 25px;
        margin: 50px 0;
        border-radius: 10px;
        box-shadow: 5px 10px 30px 1px rgba(0, 0, 0, 0.15);
        }

        #contact h3 {
        display: block;
        font-size: 30px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #1C1C1C;
        }

        #contact h4 {
        margin: 0px 0 15px;
        display: block;
        font-size: 13px;
        font-weight: 400;
        color: #CCD0CF;
        }

        fieldset {
        border: medium none !important;
        margin: 0 0 10px;
        min-width: 100%;
        padding: 0;
        width: 100%;
        }

        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact select#profissao {
        width: 100%;
        border: 1px solid #ccc;
        background: #FFF;
        margin: 0 0 5px;
        padding: 10px;
        border:none;
        color: #88888C;
        background-color: #F5FBF8;
        }

        #contact input[type="text"]:hover,
        #contact input[type="email"]:hover,
        #contact input[type="tel"]:hover,
        #contact input[type="url"]:hover,
        #contact select#profissao:hover {
        -webkit-transition: border-color 0.3s ease-in-out;
        -moz-transition: border-color 0.1s ease-in-out;
        transition: border-color 0.1s ease-in-out;
        border: 1px solid #c1c1c1;
        }

        #contact button[type="submit"] {
        cursor: pointer;
        width: 100%;
        border: none;
        border-radius: 5px;
        background: #017366;
        color: #FFF;
        margin: 0 0 5px;
        padding: 15px;
        font-size: 15px;
        font-weight: 600;
        }

        #contact button[type="submit"]:hover {
        background: #03A693;
        -webkit-transition: background 0.3s ease-in-out;
        -moz-transition: background 0.3s ease-in-out;
        transition: background-color 0.3s ease-in-out;
        }

        #contact button[type="submit"]:active {
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .copyright {
        text-align: center;
        }

        #contact input:focus,
        #contact textarea:focus {
        outline: 0;
        border: 1px solid #aaa;
        }

        ::-webkit-input-placeholder {
        color: #888;
        }

        :-moz-placeholder {
        color: #888;
        }

        ::-moz-placeholder {
        color: #888;
        }

        :-ms-input-placeholder {
        color: #888;
        }
    </style>
<body>
@include('layouts.nav')

<div style="background-image: url('front_assets//img/Mainpage/Section 1-min.png'); background-repeat: no-repeat; background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-12 py-5 ">
                <h1 class="white-text font-weight-bold text-center py-2">
                 Recharge
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <main>
        <div class="container1">
            <form id="contact" action="{{route('recharge.store')}}" method="post" enctype="multipart/form-data">
                <div class="card m-2">
                    <div class="card-header">
                        <div class="card-title">Binance</div>
                    </div>
                    <img src="{{asset('qr.jpeg')}}" alt="" srcset="" class="img-fluid">
                    <div class="card-footer">
                        TQWFmq4gTcGp92Fnf9yYKbA2Vh4qGsKckn
                    </div>
                </div>
                <div class="card m-2">
                    <div class="card-header">
                        <div class="card-title">Payoneer</div>
                    </div>
                    <div class="card-footer">
                        54321@enskypass.com
                    </div>
                </div>
                @csrf
                <h3>Recharge Amount</h3>
                <fieldset>
                    <input class="form-control" type="number" name="amount" required autofocus>
                </fieldset>
                <h3>Screenshot</h3>
                <fieldset>
                    <input type="file" name="image" required>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit">Recharge</button>
                </fieldset>
            </form>
        </div>
    </main>
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
