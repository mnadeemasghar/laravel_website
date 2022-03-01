
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
<body>
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

        .hidden {
            display: none;
        }
        .top-nav-collapse {
            background: rgb(14,14,14);
            background: linear-gradient(90deg, rgba(14,14,14,1) 16%, rgba(0,173,163,1) 61%);
        }
        .top-nav-collapse a{
            color:white;
        }

        .navbar:not(.top-nav-collapse) {
            background: linear-gradient(90deg, rgba(14,14,14,1) 16%, rgba(0,173,163,1) 61%) !important;
        }
    </style>
<header>
    @include('layouts.nav')
    
</header>

@yield('content')

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
