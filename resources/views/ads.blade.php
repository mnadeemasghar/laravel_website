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
        .btn{
            padding: 0.54rem 1.5rem;
        }
        @import "lesshat";
        html,
        body {
        font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
        /* font-size: 10px;
        font-weight: bold; */
        }

        .card {
        background-color: #fff;
        border-radius: 10px;
        border: 2px solid;
        position: relative;
        cursor: pointer;
        margin-bottom: 30px;
        box-shadow: 10px 10px 10px #d1d9e6, -10px -10px 10px #f9f9f9;
        }

        a{
            text-decoration: none;
            background-color: transparent;
        }

        a:focus{
            text-decoration: none;
            background-color: transparent;
        }

        .l-bg-cherry {
            background: linear-gradient(to right, #01c7b8, #f3e7a4) !important;
            /*background: linear-gradient(to right, #493240, #f09) !important;*/
            color: #fff;
        }

        .card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fa {
            font-size: 110px;
        }

        .card .card-statistic-3 .card-icon {
            text-align: center;
            line-height: 50px;
            margin-left: 15px;
            color: #000;
            position: absolute;
            right: 4px;
            top: 20px;
            opacity: 0.4;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }

        .l-bg-green {
            background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
            color: #fff;
        }

        .l-bg-orange {
            background: linear-gradient(to right, #f9900e, #ffba56) !important;
            color: #fff;
        }

        .l-bg-cyan {
            background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
            color: #fff;
        }
        
        .fl-left{float: left;}

        .fl-right{float: right;}

        .container1
        {
        width: 90%;
        margin: 100px auto;
        }

        h1
        {
        text-transform: uppercase;
        font-weight: 900;
        border-left: 10px solid #fec500;
        padding-left: 10px;
        margin-bottom: 30px;
        }

        .row{overflow: hidden}

        .card1
        {
        display: table-row;
        width: 100%;
        background-color: #fff;
        color: #989898;
        margin-bottom: 10px;
        font-family: 'Oswald', sans-serif;
        text-transform: uppercase;
        border-radius: 4px;
        position: relative;
        }

        .card1 + .card1{margin-left: 2%}

        .date
        {
        display: table-cell;
        width: 25%;
        position: relative;
        text-align: center;
        border-right: 2px dashed #dadde6;
        }

        .date:before,
        .date:after
        {
        content: "";
        display: block;
        width: 30px;
        height: 30px;
        background-color: #DADDE6;
        position: absolute;
        top: -15px ;
        right: -15px;
        z-index: 1;
        border-radius: 50%;
        }

        .date:after
        {
        top: auto;
        bottom: -15px;
        }

        .date time
        {
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
        }

        .date time span{display: block;}

        .date time span:first-child
        {
        color: #2b2b2b;
        font-weight: 600;
        font-size: 250%;
        }

        .date time span:last-child
        {
        text-transform: uppercase;
        font-weight: 600;
        margin-top: -10px;
        }

        .card1-cont
        {
        display: table-cell;
        width: 75%;
        font-size: 85%;
        padding: 10px 10px 30px 50px;
        }

        .card1-cont h3
        {
        color: #3C3C3C;
        font-size: 130%;
        }

        .row:last-child .card1:last-of-type .card1-cont h3
        {
        text-decoration: line-through;
        }

        .card1-cont > div
        {
        display: table-row;
        }

        .card1-cont .even-date i,
        .card1-cont .even-info i,
        .card1-cont .even-date time,
        .card1-cont .even-info p
        {
        display: table-cell
        }

        .card1-cont .even-date i,
        .card1-cont .even-info i
        {
        padding: 5% 5% 0 0;
        }

        .card1-cont .even-info p
        {
        padding: 30px 50px 0 0;
        }

        .card1-cont .even-date time span
        {
        display: block;
        }

        .card1-cont a
        {
        display: block;
        text-decoration: none;
        width: 80px;
        height: 30px;
        background-color: #D8DDE0;
        color: #fff;
        text-align: center;
        line-height: 30px;
        border-radius: 2px;
        position: absolute;
        right: 10px;
        bottom: 10px;
        }

        .row:last-child .card1:first-child .card1-cont a
        {
        background-color: #037FDD;
        }

        .row:last-child .card1:last-child .card1-cont a
        {
        background-color: #F8504C;
        }

        @media screen and (max-width: 860px)
        {
            .card1
            {
                display: block;
                float: none;
                width: 100%;
                margin-bottom: 10px;
            }
            
            .card1 + .card1{margin-left: 0;}
            
            .card1-cont .even-date,
            .card-cont .even-info
            {
                font-size: 75%;
            }
        }
        @media only screen and (max-width: 600px) {
        .card1-cont {
            padding: 10px 10px 30px 75px;
        }
        }
    </style>
<body>
@include('layouts.nav')

<div style="background-image: url('front_assets//img/Mainpage/Section 1-min.png'); background-repeat: no-repeat; background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-12 py-5 ">
                <h1 class="white-text font-weight-bold text-center py-2">
                 Ads
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row ">
        @if (isset($ads) && $ads_count > 0)
            @foreach ($ads as $ad)
            <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                <!-- <a href="{{route('earnings.store',['ad_id'=>$ad->id])}}" data-toggle="modal" data-target='#exampleModalCenter' > -->
                    <div class="card l-bg-cherry">
                        <div class="card-statistic-3 p-3">
                            <div class="card-icon card-icon-large">
                                <img src="binance.png" alt="" width="60">
                            </div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">{{$ad->title}}</h5>
                            </div>
                            <div class="mt-1">
                                <a data-toggle="modal" data-target="#exampleModalCenter">
                                    <h5 class="card-title mb-0 btn btn-info" >Invest</h5>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background:#dadde6;">
                <div class="modal-body">
                    <article class="card1 fl-left">
                        <section class="date">
                            <img src="binance.png" alt="" width="50" style="position: absolute;top: 41%;left: 31%;">
                        </section>
                        <section class="card1-cont">
                            <small>Trade Time : 26-12-2022</small>
                            <h3>Trade Number : 2491745912</h3>
                            <div class="even-date">
                                <i class="fa fa-calendar"></i>
                                <time>
                                    <span>Buy 25 Units of ADA Coin</span>
                                    <span>Invest <b>250$</b></span>
                                </time>
                            </div>
                            <div class="even-info">
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    Total amount 250$  
                                </p>
                                <p>
                                    Profit 0.39$
                                </p>
                            </div>
                        </section>
                    </article>
                    <a href="{{route('earnings.store',['ad_id'=>$ad->id])}}" class="btn btn-secondary text-center">Submit</a>
                </div>
                </div>
            </div>
            </div>

            @endforeach
        @else
        {{__("No Ad Available")}}
        @endif
    </div>
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
