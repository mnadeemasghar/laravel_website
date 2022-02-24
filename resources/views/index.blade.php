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
    </style>
<header>
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
                <a class="nav-link " href="{{route('user.signup')}}" data-offset="90">Sign Up</a>
            </li>
            <li class="nav-item d-inline-block d-lg-none">
                <a class="nav-link " href="{{route('user.login')}}" data-offset="90">Login-M</a>
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
                <a class="nav-link navregister" href="{{route('user.signup')}}" data-offset="90">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navregister" href="{{route('user.login')}}" data-offset="90">Login</a>
            </li>
        </ul>
    </div>
</nav>


<div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('front_assets/img/Mainpage/Section 1-min.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

<div class="mask  d-flex justify-content-center align-items-center">

<div class="container">

<div class="row wow fadeIn justify-content-center align-items-center">
<div class="col-md-6 col-12  white-text smooth-scroll">
<h1 class="font-weight-bold">Advertising with Weekly Cashback</h1>
<h4 class="mb-md-5 mb-3"> Some say that if you want to be successful you need to take the stairs. We disagree</h4>
<a href="#sec2" class="rounded border px-3 py-2 btnplatformtransparent"> Learn More</a>
</div>
<div class="col-md-6 d-none d-md-block">
<img src="{{asset('front_assets/img/Mainpage/Mobile Marketing-rafiki (1).svg')}}" class="img-fluid" />
</div>
</div>

</div>

</div>

</div>

</header>

<div class="container mt-md-5 mt-5 pt-md-5 pt-0 pb-5" id="sec2">
<div class="row">
<div class="col-md-10 col-12 mb-5">
<h5 class="fw-500 mb-0">What we're about?</h5>
<h1 class="black-text mt-0 fw-600" style="line-height:1.3 !important;">
We believe that everyone can achieve greatness.
</h1>
</div>
<div class="col-12">
<div class="row flex-1">
<div class="col-6 col-md-3 ">
<div class="card h-100">
<div class="card-body">
<img class="img-fluid w-25 black-text ml-2" src="{{asset('front_assets/img/Mainpage/megaphone-min.png')}}" />
<h5 class="font-weight-bold black-text h5-responsive mt-3 mb-4"> Advertising</h5>
<p class="text-black-50 small">
Use our platform to advertise any program, tool or product. Our Advert niche is in Cryptocurrencies
</p>
</div>
</div>
</div>
<div class="col-6 col-md-3 ">
<div class="card h-100">
<div class="card-body">
<img class="img-fluid w-25 ml-2 " src="{{asset('front_assets/img/Mainpage/Passive Income.png')}}" />
<h5 class="font-weight-bold black-text h5-responsive mt-3 mb-4">Cashback Rewards</h5>
<p class="text-black-50 small">
Everyone can enjoy our cashback rewards, direct + matrix commissions and more!
</p>
</div>
</div>
</div>
<div class="col-6 col-md-3 mt-4 mt-md-0">
<div class="card h-100">
<div class="card-body">
<img class="img-fluid w-25 ml-2" src="{{asset('front_assets/img/Mainpage/Commissions-min.png')}}" />
<h5 class="font-weight-bold black-text h5-responsive mt-3 mb-4"> Team Bonuses</h5>
<p class="text-black-50 small ">
Refer to your friends and partners to receive commissions! Lucrative solutions for everyone with Matrix Commissions!
</p>
</div>
</div>
</div>
<div class="col-6 col-md-3 mt-4 mt-md-0">
<div class="card h-100">
<div class="card-body">
<img class="img-fluid w-25 ml-2" src="{{asset('front_assets/img/Mainpage/Blockchain.png')}}" />
<h5 class="font-weight-bold black-text h5-responsive mt-3 mb-4"> Tokenomics</h5>
<p class="text-black-50 small">
Crypto is the future and tokenomics is the way forward. Be the first one to own a piece of that pie!
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="mt-5 pb-5 passivehomepage">

<div class="mask  d-flex justify-content-center align-items-center">

<div class="container px-md-3 px-sm-0">

<div class="row wow fadeIn justify-content-center align-items-center">
<div class="col-md-6 col-12  ">
<h1 class="fw-600 black-text">
Everyone can achieve Financial Freedom
</h1>
<h5 class="mb-md-5 mb-3  text-black-50">
Learn how purchasing our packs can help you build your Weekly cashback rewards for years to come. Up to 3% per week based on your advertising packs. Stable profit focused on a long run!
</h5>
</div>
<div class="col-md-6 d-none d-md-block">
</div>
</div>

</div>

</div>

</div>
<div class="py-5" style="background-image: url('front_assets/img/Mainpage/Section 2-min.png'); background-repeat: no-repeat; background-size: cover; background-position: top center;">

<div class="mask  d-flex justify-content-center align-items-center">

<div class="container px-md-3 px-sm-0">

<div class="row wow fadeIn justify-content-center align-items-center">
<div class="col-12 pt-md-5 pt-1 mb-md-5 mb-2 text-center">
<h1 style="font-size:3rem!important" class="h1  d-md-block d-none fw-600 white-text"> Build Your Team and Reach Higher Floors </h1>
<h1 class="h1 d-block d-md-none  fw-600 white-text"> Build Your Team and Reach Higher Floors </h1>
</div>
<div class="col-12">
<div class="row pb-md-5 pb-1 mb-5 justify-content-center align-items-center">
<div class="col-md-6 d-none d-md-block">
<img src="{{asset('front_assets/img/Mainpage/Graphic dartboard-min.png')}}" class="img-fluid mt-5" />
</div>
<div class="col-md-6 col-12  white-text ">
<h5>Invite Your friends and business partners and <span class="font-weight-bold"> receive 10% direct commision</span> based on their package purchase.</h5>
<br />
<h5>
Earn extra commissions with our<span class="font-weight-bold"> 22 Level Matrix. Get 1.8% for every person</span> who buys a package in your team.
</h5>
<br />
<h5>With more partner income and more people, <span class="font-weight-bold"> you can Reach Higher Floors in Our Carer Plan! </span></h5>
</div>
</div>
</div>
</div>

</div>

</div>

</div>
<div class="container my-5 p-5 ">


<h5 class="text-center fw-500">
Discover Career and Matrix
</h5>

<h1 class="text-center fw-600 black-text mx-auto mb-5 pb-5">
Building a team was never that easy before!
</h1>

<div class="row">

<div class="col-md-4">

<div class="row mb-3 justify-content-center align-items-center">

<div class="col-3">
<img class="img-fluid" src="{{asset('front_assets/img/Mainpage/Diamond.png')}}" />
</div>


<div class="col-9">
<h5 class="font-weight-bold mb-3 black-text">Matrix Commisions</h5>
<p class="text-black-50 small">
Earn lucrative commissions from each package bought in your matrix.
</p>
</div>

</div>


<div class="row mb-3 justify-content-center align-items-center">

<div class="col-3">
<img class="img-fluid" src="{{asset('front_assets/img/Mainpage/22 levels.png')}}" />
</div>


<div class="col-9">
<h5 class="font-weight-bold mb-3 black-text">Unlock 22 levels </h5>
<p class="grey-text small">
We implemented a 2 x 22 Matrix. Unlock the power of 22 levels and the option to have more than 8 million people in your team.
</p>
</div>

</div>


<div class="row mb-md-0 mb-3 justify-content-center align-items-center">

<div class="col-3">
<img class="img-fluid" src="{{asset('front_assets/img/Mainpage/1.8.png')}}" />
</div>


<div class="col-9 ">
<h5 class="font-weight-bold mb-3 black-text">Receive 1.8% per package</h5>
<p class="text-black-50 mb-md-0 small">
Every package in your team brings more commissions. Receive 1.8% for every package in your matrix
</p>
</div>

</div>

</div>


<div class="col-md-4 text-center">
<img class="img-fluid" style="width:65%;" src="{{asset('front_assets/img/Mainpage/phone3-min.png')}}" alt="Sample image">
</div>


<div class="col-md-4 mt-4 mt-lg-0">

<div class="row mb-3 justify-content-center align-items-center">
<div class="col-9  text-md-right text-left">
<h5 class="font-weight-bold mb-3 black-text">Motivating Career Plan</h5>
<p class="text-black-50 text-md-right text-left small">
Career plan which motivates you to reach higher ranks and earn even more!
</p>
</div>

<div class="col-3">
<img class="img-fluid" src="{{asset('front_assets/img/Mainpage/career.png')}}" />
</div>



</div>


<div class="row mb-3 justify-content-center align-items-center">
<div class="col-9 text-md-right text-left">
<h5 class="font-weight-bold mb-3 black-text">Reach Higher Floors</h5>
<p class="text-black-50  small">
Each Career rank is a floor. The higher the floor you'll reach the more levels and bonuses you unlock.
</p>
</div>

<div class="col-3">
<img class="img-fluid" src="{{asset('front_assets/img/Mainpage/Floor 9.png')}}" />
</div>



</div>


<div class="row justify-content-center align-items-center">
<div class="col-9 text-md-right text-left">
<h5 class="font-weight-bold mb-3 black-text ">Power of Duplication</h5>
<p class="grey-text mb-0 small ">
Our system is designed for everyone. But remember you’re the one who sets the example.
</p>
</div>

<div class="col-3">
<img class="img-fluid" src="{{asset('front_assets/img/Mainpage/duplication.png')}}" />
</div>
</div>
</div>
</div>
</div>
    <div class="py-5 " style="background-image: url('front_assets/img/Mainpage/Section 3.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="mask  d-flex justify-content-center align-items-center">
            <div class="container px-md-3 px-sm-0">
                <div class="row wow fadeIn justify-content-center align-items-center">
                    <div class="col-12 pt-md-3 pt-1 mb-md-5 mb-2 text-center">
                        <h1 style="font-size:3rem!important" class="h1  d-md-block d-none fw-600 white-text">Watch Video Overview </h1>
                        <h1 class="h1 d-block d-md-none  fw-600 white-text"> Watch Video Overview </h1>
                    </div>
                    <div class="col-md-10 col-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MsdQmuVzaEA" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mt-3">
                    <h5 class="white-text">
                        Do you wanna know all the details? We’ve got you covered. Go to the<a class="readmore fw-500" href="/Home/Cashback"> Cashback Rewards page </a> and learn more!
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .crop-text-1 {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* number of lines to show */
        -webkit-box-orient: vertical;
    }
</style>

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



<script>
        window.Clipboard = (function (window, document, navigator) {
            var textArea,
                copy;

            function isOS() {
                return navigator.userAgent.match(/ipad|iphone/i);
            }

            function createTextArea(text) {
                textArea = document.createElement('textArea');
                textArea.value = text;
                document.body.appendChild(textArea);
            }

            function selectText() {
                var range,
                    selection;

                if (isOS()) {
                    range = document.createRange();
                    range.selectNodeContents(textArea);
                    selection = window.getSelection();
                    selection.removeAllRanges();
                    selection.addRange(range);
                    textArea.setSelectionRange(0, 999999);
                } else {
                    textArea.select();
                }
            }

            function copyToClipboard() {
                document.execCommand('copy');
                document.body.removeChild(textArea);
            }

            copy = function (text) {
                createTextArea(text);
                selectText();
                copyToClipboard();
            };

            return {
                copy: copy
            };
        })(window, document, navigator);

        function CopyToClipboardButton(texttocopy) {

            Clipboard.copy(texttocopy);
            toastr.info('Copied link ' + texttocopy);

        };

        $('.tocopybtn').on('click',
            function () {
                CopyToClipboardButton(valuetoinform);
            });

    </script>
<script type="text/javascript">(function(){window['__CF$cv$params']={r:'6e07fc70ad4c0c09',m:'xPEeXazGeHCRNzGahBBiImLomaPxt1jFgAYz7BPvCpw-1645362742-0-AbWsCPhUT9Od4hhszCA78Y09He72ZtBmYpmvTb06V+0KCkvjn9wdY4x1baY7Lq1Md72p61OduOBHwjT70GIDUET0gN1DoqY9RaokJemZ9IjzwsNhTVl0W6bC0a2bWQes4A==',s:[0xb6e48ca978,0xb49e61014d],u:'/cdn-cgi/challenge-platform/h/b'}})();</script></body>
</html>
