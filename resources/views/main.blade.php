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

        .contenedor {
        height: 100%;
        padding: 5% 0;
        }

h1 {
	color: #FCFBFA;
}

.container_foto {
	background-color: rgba(57, 62, 93, 0.7);
	padding: 0;
	overflow: hidden;
	max-width: 350px;
	margin: 5px;
}

.container_foto article {
	padding: 10%;
	position: absolute;
	bottom: 0;
	z-index: 1;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.container_foto h2 {
	color: #fff;
	font-weight: 800;
	font-size: 25px;
	border-bottom: #fff solid 1px;
}

.container_foto h4 {
	font-weight: 300;
	color: #fff;
	font-size: 16px;
}

.container_foto img {
	width: 100%;
	top: 0;
	left: 0;
	opacity: 0.4;
	-webkit-transition: all 4s ease;
	-moz-transition: all 4s ease;
	-o-transition: all 4s ease;
	-ms-transition: all 4s ease;
	transition: all 4s ease;
}

.ver_mas {
	background-color: #FEB66C;
	position: absolute;
	width: 100%;
	height: 70px;
	bottom: 0;
	z-index: 1;
	opacity: 0;
	transform: translate(0px, 70px);
	-webkit-transform: translate(0px, 70px);
	-moz-transform: translate(0px, 70px);
	-o-transform: translate(0px, 70px);
	-ms-transform: translate(0px, 70px);
	-webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	-ms-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
}

.ver_mas span {
	font-size: 40px;
	color: #fff;
	position: relative;
	margin: 0 auto;
	width: 100%;
	top: 13px;
}


/*hovers*/

.container_foto:hover {
	cursor: pointer;
}

.container_foto:hover img {
	opacity: 0.1;
	transform: scale(1.5);
}

.container_foto:hover article {
	transform: translate(2px, -69px);
	-webkit-transform: translate(2px, -69px);
	-moz-transform: translate(2px, -69px);
	-o-transform: translate(2px, -69px);
	-ms-transform: translate(2px, -69px);
}

.container_foto:hover .ver_mas {
	transform: translate(0px, 0px);
	-webkit-transform: translate(0px, 0px);
	-moz-transform: translate(0px, 0px);
	-o-transform: translate(0px, 0px);
	-ms-transform: translate(0px, 0px);
	opacity: 1;
}

    </style>
<body>
@include('layouts.nav')

<div style="background-image: url('front_assets//img/Mainpage/Section 1-min.png'); background-repeat: no-repeat; background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row justify-content-center align-items-center py-5">
            <div class="col-12 py-5 ">
                <h1 class="white-text font-weight-bold text-center py-2">
                    Home
                </h1>
                <h3 class="text-center white-text">
                    Ensky Pass Come to Surpass you Earning Lifestyle  
                </h3>
                <h3 class="text-center white-text">
                    Acount Type 
                    <img class="img-fluid" src="https://www.star-clicks.com/images/gold-member-icon.png" alt="" width="100">  
                </h3>
                @if (isset($status))
                    <div class="alert alert-danger">{{$status}}</div>
                @endif
            </div>
            <div class="row">
                <div class="col-3 col-md-4 col-lg-4">
                    <a href="{{route('ads')}}">
                        <img class="img-fluid" src="{{asset('ads.png')}}" alt="" width="80">
                        <p class="white-text">Ads</p> 
                    </a>
                    
                </div>
                <div class="col-3 col-md-4 col-lg-4">
                    <a href="{{route('withdraw')}}">
                        <img class="img-fluid" src="{{asset('withdraw.png')}}" alt="" width="80">
                        <p class="white-text">Withdraw</p> 
                    </a>
                </div>
                <div class="col-3 col-md-4 col-lg-4">
                    <a href="{{route('referal')}}">
                        <img class="img-fluid" src="{{asset('referal.png')}}" alt="" width="80">
                        <p class="white-text">Referal</p>         
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>




<div class="container text-center mt-5 mb-5">
    <h4>UnLocked Packages</h4>
    <div class="row">
        @if (isset($unlocked_packages) && $unlocked_packages->count() > 0)
            @foreach ($unlocked_packages as $unlocked_package)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 container_foto">
                    <div class="container_foto">
                        <div class="ver_mas text-center">
                            <span  class="lnr lnr-eye">{{$unlocked_package->name}}</span>
                        </div>
                        <article class="text-left">
                            <h2>{{$unlocked_package->requirements}}</h2>
                            <h4>{{$unlocked_package->description}}</h4>
                            <h4>Not get any rewards</h4>
                        </article>
                        <img src="level1.jpeg" alt="">
                    </div>
                </div>
            @endforeach
        @else
        {{__("No Package Available")}}
        @endif
    </div>
    <h4>Locked Packages</h4>
    <div class="row">
        @if (isset($locked_packages) && $locked_packages->count() > 0)
            @foreach ($locked_packages as $locked_package)
            <a href="{{route('deposit',['package_id'=>$locked_package->id])}}">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 container_foto">
                    <div class="container_foto">
                        <div class="ver_mas text-center">
                            <span  class="lnr lnr-eye">{{$locked_package->name}}</span>
                        </div>
                        <article class="text-left">
                            <h2>{{$locked_package->requirements}}</h2>
                            <h4>{{$locked_package->description}}</h4>
                            <h4>Not get any rewards</h4>
                        </article>
                        <img src="level1.jpeg" alt="">
                    </div>
                </div>
            </a>
            @endforeach
        @else
        {{__("No Package Available")}}
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
