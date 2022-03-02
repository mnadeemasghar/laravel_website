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
    <link rel="stylesheet" href="{{asset('front_assets/css/mainscreen.css')}}" />
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
        @include('layouts.nav')

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
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="text-danger validation-summary-valid" data-valmsg-summary="true">
                                        <ul>
                                            <li style="display:none"></li>
                                        </ul>
                                    </div>
                                    @if (isset($referal_id))
                                        <label for="Input_SponsorName">Your Sponsor</label>
                                        <input type="hidden" id="exampleForm3" value="{{$referal_id}}" class="form-control disabled grey" name="sponser_id">
                                        <input type="text" id="exampleForm3" value="{{App\Models\User::find($referal_id)->name}}" class="form-control disabled grey" name="sponser_name">
                                    @endif
                                    <label for="name" >{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="email" >{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror


                                    <label for="password" >{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <p class="text-muted small mt-1">Passwords must be at least 6 characters long, with at least one upper and lower case letter, one number, and one special character; e.g. s8x34Yt! </p>                                    
                                    
                                    <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                                        
                                    <div class="custom-control custom-checkbox my-3">
                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked" data-val="true" data-val-required="The Accept Terms field is required." name="Input.Terms" value="true" required>
                                        <label class="custom-control-label" for="defaultUnchecked">Accept <a href="/Home/Terms">Terms and Condition</a> and <a href="/Home/Privacy">Privacy Policy</a></label>
                                    </div>
                                    <button type="submit" class="btn btn-lg-platform w-100 my-3"> Sign Up </button>
                                    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8O5gIo7GiTBLtnRDPhfOgvN7GSDd4r8zMKrrTAEPsuqNYvq9GiPXNu5q6wYw8YfAPWP3FuZsGOvvUMSVSET1In-m7jzHWqZVVrNZ8_4U1GQV9C4nXFN5kWPtBR4-YBuIBfw2sk7ZqRBWemkgHo4YSLc" /><input name="Input.Terms" type="hidden" value="false">
                                </form>
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