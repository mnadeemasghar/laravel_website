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

    .hidden {
        display: none;
    }
</style>
<body id="login">
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

<div class="d-flex align-items-center justify-content-center" style="min-height:100vh; background-image: url('front_assets/img/Mainpage/Section 1-min.png'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<div class="container h-100 py-3 py-md-5 mt-5">
<div class="row justify-content-center align-items-center">
<div class="col-md-7 white-text mb-3">
<h1 class="display-4 d-md-block d-none"> Create Your Account</h1>
<h1 class="h1-responsive d-md-none d-block mt-5 mt-md-0"> Create Your Account</h1>
<h3 class="h3-responsive">Fill your details on the right to sign up in elevate pass. See you inside!</h3>
</div>
<div class="col-md-5 black-text ">
<div class="card">
<div class="card-body"> 
<h4 class="mb-4"> Create Account </h4>
<form method="post" action="/Registernow">
<div class="text-danger validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>
<label for="Input_SponsorName">Your Sponsor</label>
<input type="text" id="exampleForm3" value="Admin" class="form-control disabled grey" name="Input.SponsorName">
<input type="text" id="exampleForm2" value="Admin" hidden class="form-control disabled grey" data-val="true" data-val-required="The Sponsor field is required." name="Input.Sponsor">
<span class="text-danger field-validation-valid" data-valmsg-for="Input.Sponsor" data-valmsg-replace="true"></span>
<label for="Input_FirstName">Your First Name</label>
<input type="text" id="exampleForm2" class="form-control" data-val="true" data-val-required="The FirstName field is required." name="Input.FirstName" value="">
<span class="text-danger field-validation-valid" data-valmsg-for="Input.FirstName" data-valmsg-replace="true"></span>
<label for="exampleForm2">Your Last Name</label>
<input type="text" id="exampleForm2" class="form-control" data-val="true" data-val-required="The Last Name field is required." name="Input.LastName" value="">
<span class="text-danger field-validation-valid" data-valmsg-for="Input.LastName" data-valmsg-replace="true"></span>
<label for="exampleForm2">Your Email Adress</label>
<input type="text" id="exampleForm2" class="form-control" data-val="true" data-val-email="The Email field is not a valid e-mail address." data-val-required="The Email field is required." name="Input.Email" value="">
<span class="text-danger field-validation-valid" data-valmsg-for="Input.Email" data-valmsg-replace="true"></span>
<label for="exampleForm2">Your Password</label>
<input type="password" id="exampleForm2" class="form-control" data-val="true" data-val-length="The Password must be at least 6 and at max 100 characters long." data-val-length-max="100" data-val-length-min="6" data-val-required="The Password field is required." maxlength="100" name="Input.Password">
<p class="text-muted small mt-1">Passwords must be at least 6 characters long, with at least one upper and lower case letter, one number, and one special character; e.g. s8x34Yt! </p>
<span class="text-danger field-validation-valid" data-valmsg-for="Input.Password" data-valmsg-replace="true"></span>
<label for="exampleForm2">Confirm Password</label>
<input type="password" id="exampleForm2" class="form-control" data-val="true" data-val-equalto="The password and confirmation password do not match." data-val-equalto-other="*.Password" name="Input.ConfirmPassword">
<span class="text-danger field-validation-valid" data-valmsg-for="Input.ConfirmPassword" data-valmsg-replace="true"></span>
<input hidden type="text" id="exampleForm2" class="form-control" name="Input.SalesPage" value="">
<input hidden type="text" id="exampleForm2" class="form-control" name="Input.SalesPageUTM" value="">
<div class="custom-control custom-checkbox my-3">
<input type="checkbox" class="custom-control-input" id="defaultUnchecked" data-val="true" data-val-required="The Accept Terms field is required." name="Input.Terms" value="true">
<label class="custom-control-label" for="defaultUnchecked">Accept <a href="/Home/Terms">Terms and Condition</a> and <a href="/Home/Privacy">Privacy Policy</a></label>
</div>
 <button type="submit" class="btn btn-lg-platform w-100 my-3"> Sign Up </button>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8O5gIo7GiTBLtnRDPhfOgvN7GSDd4r8zMKrrTAEPsuqNYvq9GiPXNu5q6wYw8YfAPWP3FuZsGOvvUMSVSET1In-m7jzHWqZVVrNZ8_4U1GQV9C4nXFN5kWPtBR4-YBuIBfw2sk7ZqRBWemkgHo4YSLc" /><input name="Input.Terms" type="hidden" value="false"></form>
</div>
</div>
</div>
</div>
</div>
</div>
</header>

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

        new WOW().init();

        $('.mdb-select').materialSelect();

    </script>
</body>
</html>
