
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
<div class="container h-100 py-0 py-md-5">
<div class="row justify-content-center align-items-center">
<div class="col-md-7 white-text mb-3">
<h1 class="display-4 d-md-block d-none"> Forgot your password? </h1>
<h1 class="h1-responsive d-md-none d-block mt-5 mt-md-0"> Forgot your password?</h1>
<h3 class="h3-responsive">Forgot your password? Don't worry, we got you covered. You can use the form to reset your password</h3>
</div>
<div class="col-md-5 black-text ">
<div class="card">
<div class="card-body">
<h4> Fill in your email </h4>
<form method="post">
<div class="text-danger validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>
<div class="form-group">
<label for="Input_Email">Email box</label>
<input class="form-control" type="email" data-val="true" data-val-email="The Email field is not a valid e-mail address." data-val-required="The Email field is required." id="Input_Email" name="Input.Email" value="" />
<span class="text-danger field-validation-valid" data-valmsg-for="Input.Email" data-valmsg-replace="true"></span>
</div>
<p>We will send you an email confirmation</p>
<button type="submit" class="btn btn-md-platform">Submit</button>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8O5gIo7GiTBLtnRDPhfOgvMnXrMUWWWEWl8x3xxtwFkRRrr5IrAheE7-yvu5irPYBqvuzqpQFsx544geao-3J9DZfTbFXZrYtf4n7A_87bwyHFCywg5LL8dTfPiSkJzjK1MbP-sVPNq2Zmt0jHyREtA" /></form>
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
