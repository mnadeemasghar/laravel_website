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

<div style="background-image: url('front_assets//img/Mainpage/Section 1-min.png'); background-repeat: no-repeat; background-size: cover; background-position: top center;">
<div class="container">
<div class="row justify-content-center align-items-center py-5">
<div class="col-12 py-5 ">
<h1 class="white-text font-weight-bold text-center py-5">
FAQ
</h1>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row py-5">
<div class="col-12 text-center mb-5">
<h1 class="black-text mb-0 fw-500">Frequently Asked Questions</h1>
<p class="text-black-50  fw-500">
Below you can find Frequently Asked Questions. If you still can't find the answer you're looking for you can always contact us!
</p>
</div>
<div class="col-md-6 col-12">
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

<div class="card border-top border-bottom-0 border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingOne1">
<a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
<h5 class="black-text font-weight-normal mb-0">
What is Elevate Pass ?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
<div class="card-body">
Elevate Pass is the platform that introduces and focuses on low cost entry and allows you to build a lasting passive income from as little as $10 per pack. The company pays a weekly cashback profit for buying packs. We utilize the trading experience we have to generate profits and share these profits with our users. Website
<a href="https://elevatepass.net">https://elevatepass.net</a>
</div>
</div>
</div>


<div class="card border-bottom-0 border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingTwo2">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
<h5 class="black-text font-weight-normal mb-0">
Is my personal information protected with your company?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

 <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
<div class="card-body">
Any personal information that you provide to any of our businesses is privacy protected. Your information will never be shared or sold to anyone.
</div>
</div>
</div>


<div class="card border-bottom-0 border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree3">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
<h5 class="black-text font-weight-normal mb-0">
What is the minimum amount to get started?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
<div class="card-body">
Minimum amount to get started is $10.
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree4">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
<h5 class="black-text font-weight-normal mb-0">
What is the maximum amount I can purchase?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4" data-parent="#accordionEx">
<div class="card-body">
There is no maximum limit.
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree5">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree5" aria-expanded="false" aria-controls="collapseThree4">
<h5 class="black-text font-weight-normal mb-0">
When can I withdraw funds from my balance?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingThree5" data-parent="#accordionEx">
<div class="card-body">
Withdrawals are manually processed 7 days a week and the minimum withdrawal is $5. Withdrawals are done once a day and processed within 48 hours. You can choose from BTC, ETH, USDT, LTC, TRX, XRP and BNB <br />
<br />
If you choose a binance deposit address we will also refund your fees. If you don't have a binance account you can <a href="https://accounts.binance.com/en/register?ref=WAKGT2WT" target="_blank">
Register Here
</a>
</div>
</div>
</div>

<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree6">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree4">
<h5 class="black-text font-weight-normal mb-0">
Do I need to refer others to be able to earn money in Elevate Pass?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree6" data-parent="#accordionEx">
<div class="card-body">
No you do not. Members of Elevate Pass do not need to refer others to be able to earn money from the company. Members can join Elevate Pass and purchase as many packs and simply let the system do the work for them.
</div>
</div>
</div>



<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree7">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree7" aria-expanded="false" aria-controls="collapseThree4">
<h5 class="black-text font-weight-normal mb-0">
Can I receive bonuses for referring others?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree7" class="collapse" role="tabpanel" aria-labelledby="headingThree7" data-parent="#accordionEx">
<div class="card-body">
Of course! 10% of the packs sold from your direct referrals will immediately be paid out as commission to you. On top, you receive 1.8% as the matrix commission.
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree8">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree8" aria-expanded="false" aria-controls="collapseThree8">
<h5 class="black-text font-weight-normal mb-0">
How can I earn with Elevate Pass?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree8" class="collapse" role="tabpanel" aria-labelledby="headingThree8" data-parent="#accordionEx">
<div class="card-body">
There are 3 ways of earning with Elevate Pass
<br />
1. Buy packs and earn 200% Profit!<br />
2. 10% from direct referral commissions on packs bought by your direct referrals<br />
3. 1.8% from matrix commissions on all packs purchased within your matrix
<br />
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree9">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree9" aria-expanded="false" aria-controls="collapseThree9">
<h5 class="black-text font-weight-normal mb-0">
How do I buy packs?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree9" class="collapse" role="tabpanel" aria-labelledby="headingThree9" data-parent="#accordionEx">
<div class="card-body">
Link to video
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree10">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree10" aria-expanded="false" aria-controls="collapseThree10">
<h5 class="black-text font-weight-normal mb-0">
How does the Elevate Pass commission plan work?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree10" class="collapse" role="tabpanel" aria-labelledby="headingThree10" data-parent="#accordionEx">
<div class="card-body">
When a user buys a pack then 10% ($1) goes to the direct referrer of that person. 39.6% ($3.96) gets distributed as matrix commission at 1.8% ($0.18) per level within 22 levels. You must be qualified for a level to earn from it based on the career plan. 50.4% ($5.04) is used by Elevate Pass to generate cashback profit. Once a week on Wednesday the Cashback Profit is shared with the users and this percentage can be up to 3% of your total amount of packs. Each Package works up to 200% profit and then expires.
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree11">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree11" aria-expanded="false" aria-controls="collapseThree11">
<h5 class="black-text font-weight-normal mb-0">
What is Included in the package Expiry?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree11" class="collapse" role="tabpanel" aria-labelledby="headingThree11" data-parent="#accordionEx">
<div class="card-body">
Your cashback profit, your direct referral and your matrix bonus is included in the pack expiry. Career bonus is not included in Package expiry
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree12">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree12" aria-expanded="false" aria-controls="collapseThree12">
<h5 class="black-text font-weight-normal mb-0">
How does a career plan work?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree12" class="collapse" role="tabpanel" aria-labelledby="headingThree12" data-parent="#accordionEx">
<div class="card-body">
Each career level is based on a Floor level.<br />
You can reach higher floors by increasing your team commission to unlock a higher level.<br />
To reach the first floor, the requirement is to have $200 partner income.<br />
Partner income amount includes direct and matrix commission.<br />
This will reward you with a $20 bonus.<br />
Career plan:<br />
Ground Floor (4 levels unlocked)
<br />
First Floor (8 levels unlocked ) + $20 bonus ($200 income requirement)
<br />
Second Floor (12 levels unlocked) + $100 bonus ($1000 income requirement)
<br />
Third Floor (16 levels unlocked) + $500 bonus ($5000 income requirement)
<br />
Fourth Floor (18 levels unlocked ) + $2000 bonus ($20 000 income requirement)
<br />
Fifth Floor (20 levels unlocked ) + $4000 bonus ($50 000 income requirement)<br />
Sixth Floor (22 levels unlocked )+ $7000 bonus ($100 000 income requirement)<br />
Seventh Floor (all 22 levels) + $15 000 bonus ($250 000 income requirement)<br />
Eighth Floor (all 22 levels) + $30 000 bonus ($500 000 income requirement)<br />
Ninth Floor (all 22 levels) + $80 000 bonus ($1 000 000 income requirement)<br />
Penthouse (all 22 levels) + 0.6% below 22nd level (!) + $300 000 bonus ($5 000 000 income requirement)<br />
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree13">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree13" aria-expanded="false" aria-controls="collapseThree13">
<h5 class="black-text font-weight-normal mb-0">
Can I still register when I don’t have a sponsor?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree13" class="collapse" role="tabpanel" aria-labelledby="headingThree13" data-parent="#accordionEx">
<div class="card-body">
Yes, you can!
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree14">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree14" aria-expanded="false" aria-controls="collapseThree14">
<h5 class="black-text font-weight-normal mb-0">
Are there any monthly costs?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree14" class="collapse" role="tabpanel" aria-labelledby="headingThree14" data-parent="#accordionEx">
<div class="card-body">
No, there are no monthly costs.
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree15">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree15" aria-expanded="false" aria-controls="collapseThree15">
<h5 class="black-text font-weight-normal mb-0">
How do I contact support?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree15" class="collapse" role="tabpanel" aria-labelledby="headingThree15" data-parent="#accordionEx">
<div class="card-body">
You can contact support by sending an e-mail to <a href="/cdn-cgi/l/email-protection#fede8d8b8e8e918c8abe9b929b889f8a9b8e9f8d8dd0909b8a"> <span class="__cf_email__" data-cfemail="2d5e585d5d425f596d4841485b4c59485d4c5e5e03434859">[email&#160;protected]</span></a> or just use a contact form in our back office.
</div>
</div>
</div>

<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree16">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree16" aria-expanded="false" aria-controls="collapseThree16">
<h5 class="black-text font-weight-normal mb-0">
Do you have a special coin or token?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree16" class="collapse" role="tabpanel" aria-labelledby="headingThree16" data-parent="#accordionEx">
<div class="card-body">
Yes, it’s currently in development. Check details on our Road Map <a href="/Home/RoadMap"> page here.</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-12">
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">



<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree17">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree17" aria-expanded="false" aria-controls="collapseThree17">
<h5 class="black-text font-weight-normal mb-0">
What payment options are available?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree17" class="collapse" role="tabpanel" aria-labelledby="headingThree17" data-parent="#accordionEx">
<div class="card-body">
We accept Bitcoin (BTC), Ethereum (ETH), USDT, Litecoin (LTC), Tron (TRX), Ripple (XRP) and Binance Coin (BNB) as payment options.
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree18">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree18" aria-expanded="false" aria-controls="collapseThree18">
<h5 class="black-text font-weight-normal mb-0">
Where can I find Elevate Pass on social media?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree18" class="collapse" role="tabpanel" aria-labelledby="headingThree18" data-parent="#accordionEx">
<div class="card-body">
Facebook page: <a href="https://www.facebook.com/elevatepass"> https://www.facebook.com/elevatepass </a><br />
Telegram: <a href="https://t.me/elevatepass">https://t.me/elevatepass </a><br />
Instagram: <a href="https://www.instagram.com/elevatepass">https://www.instagram.com/elevatepass </a><br />
Twitter: <a href="https://twitter.com/elevatepass"> https://twitter.com/elevatepass </a><br />
YouTube: <a href="https://www.youtube.com/channel/UCh4ujuZ75D5DuD_0eZBrAgQ"> https://www.youtube.com/channel/UCh4ujuZ75D5DuD_0eZBrAgQ </a><br />
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree19">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree19" aria-expanded="false" aria-controls="collapseThree19">
<h5 class="black-text font-weight-normal mb-0">
Is KYC Required?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree19" class="collapse" role="tabpanel" aria-labelledby="headingThree19" data-parent="#accordionEx">
<div class="card-body">
It would be enforced in the event of suspicious activity in the account.
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree20">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree20" aria-expanded="false" aria-controls="collapseThree20">
<h5 class="black-text font-weight-normal mb-0">
Are multi accounts allowed?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree20" class="collapse" role="tabpanel" aria-labelledby="headingThree20" data-parent="#accordionEx">
<div class="card-body">
Multi accounts are NOT allowed. In the event of suspicious activity in the account regarding double accounts, KYC Verification would be required.
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree21">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree21" aria-expanded="false" aria-controls="collapseThree21">
<h5 class="black-text font-weight-normal mb-0">
How many people are allowed on one IP address (household)
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree21" class="collapse" role="tabpanel" aria-labelledby="headingThree21" data-parent="#accordionEx">
<div class="card-body">
You are allowed 5 accounts per 1 IP address, 1 account per person, so you can invite your family into the business.
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree22">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree22" aria-expanded="false" aria-controls="collapseThree22">
<h5 class="black-text font-weight-normal mb-0">
Can I sell packs?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree22" class="collapse" role="tabpanel" aria-labelledby="headingThree22" data-parent="#accordionEx">
<div class="card-body">
No, there is no option to sell packs
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree23">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree23" aria-expanded="false" aria-controls="collapseThree23">
<h5 class="black-text font-weight-normal mb-0">
Is it possible to use compound interest?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree23" class="collapse" role="tabpanel" aria-labelledby="headingThree23" data-parent="#accordionEx">
<div class="card-body">
Yes, you can compound weekly. We implemented automated compounding options within the platform.
</div>
</div>
</div>



<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree24">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree24" aria-expanded="false" aria-controls="collapseThree24">
<h5 class="black-text font-weight-normal mb-0">
Do you have compounding calculator you can recommend?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree24" class="collapse" role="tabpanel" aria-labelledby="headingThree24" data-parent="#accordionEx">
<div class="card-body">
Yes, there is a calculator built in backoffice
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree25">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree25" aria-expanded="false" aria-controls="collapseThree25">
<h5 class="black-text font-weight-normal mb-0">
How many income sources does Elevate Pass have?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree25" class="collapse" role="tabpanel" aria-labelledby="headingThree25" data-parent="#accordionEx">
<div class="card-body">
Currently capital is divided in 3 bots and backings<br />
Futures bot: day trades/swing trades on Binance USDT-futures<br />
AI Bot: Spot trades and Futures Trades<br />
Trading Team: Spot Trading
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree26">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree26" aria-expanded="false" aria-controls="collapseThree26">
<h5 class="black-text font-weight-normal mb-0">
Who are the founders of the company?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree26" class="collapse" role="tabpanel" aria-labelledby="headingThree26" data-parent="#accordionEx">
<div class="card-body">
Rafael Cebula - CEO<br />
Kaja Sikora - CMO<br />
Jolanda Vroegh - COO<br />
Mark Verdellen - CFO
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree27">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree27" aria-expanded="false" aria-controls="collapseThree27">
<h5 class="black-text font-weight-normal mb-0">
Do you have marketing tools ready to use?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree27" class="collapse" role="tabpanel" aria-labelledby="headingThree27" data-parent="#accordionEx">
<div class="card-body">
Yes, you can find everything inside your backoffice under the Promotion Tab. Click Here to access.
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree28">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree28" aria-expanded="false" aria-controls="collapseThree28">
<h5 class="black-text font-weight-normal mb-0">
Are there webinars I can follow?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree28" class="collapse" role="tabpanel" aria-labelledby="headingThree28" data-parent="#accordionEx">
<div class="card-body">
Yes there are many webinars in several languages, you can also ask your questions there. See for the agenda in social media.
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree29">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree29" aria-expanded="false" aria-controls="collapseThree29">
<h5 class="black-text font-weight-normal mb-0">
How and when get I paid?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree29" class="collapse" role="tabpanel" aria-labelledby="headingThree29" data-parent="#accordionEx">
<div class="card-body">
Every Wednesday you’ll receive up to 3% cashback profit on your packs. 1.8% Instantly every time somebody in your matrix buys a pack and 10% for a direct referral will be added to your wallet.
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree30">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree30" aria-expanded="false" aria-controls="collapseThree30">
<h5 class="black-text font-weight-normal mb-0">
Where the company is registered?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree30" class="collapse" role="tabpanel" aria-labelledby="headingThree30" data-parent="#accordionEx">
<div class="card-body">
Company certificate:
<a href="/pdf/CertElevatePass.pdf" target="_blank" class="btn btn-sm-platform">View Certificate</a>
</div>
</div>
</div>
<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree32">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree32" aria-expanded="false" aria-controls="collapseThree32">
<h5 class="black-text font-weight-normal mb-0">
Where my packs are displayed?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree32" class="collapse" role="tabpanel" aria-labelledby="headingThree32" data-parent="#accordionEx">
<div class="card-body">
The ads are displaying on our <a target="_blank" href="www.coinfriend.net">coinfriend.net</a> crypto portal
</div>
</div>
</div>


<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree31">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree31" aria-expanded="false" aria-controls="collapseThree31">
<h5 class="black-text font-weight-normal mb-0">
When company officially launched?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree31" class="collapse" role="tabpanel" aria-labelledby="headingThree31" data-parent="#accordionEx">
<div class="card-body">
13 September 2021
</div>
</div>
</div>
<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree33">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree33" aria-expanded="false" aria-controls="collapseThree33">
<h5 class="black-text font-weight-normal mb-0">
How long does it take to receive my withdrawal?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree33" class="collapse" role="tabpanel" aria-labelledby="headingThree33" data-parent="#accordionEx">
<div class="card-body">
Withdrawals are manually processed within 48h
</div>
</div>
</div>
<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree34">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree34" aria-expanded="false" aria-controls="collapseThree34">
<h5 class="black-text font-weight-normal mb-0">
How to contact support?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree34" class="collapse" role="tabpanel" aria-labelledby="headingThree34" data-parent="#accordionEx">
<div class="card-body">
The easiest way to contact support is through the chat on the website. We're available from Monday till friday
</div>
</div>
</div>
<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree35">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree35" aria-expanded="false" aria-controls="collapseThree35">
<h5 class="black-text font-weight-normal mb-0">
How long does it take to receive my withdrawal?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree35" class="collapse" role="tabpanel" aria-labelledby="headingThree35" data-parent="#accordionEx">
<div class="card-body">
Withdrawals are processed and sent within 48 hours.
</div>
</div>
</div>

<div class="card border-left border-right border-light my-3">

<div class="card-header border-bottom border-light" role="tab" id="headingThree36">
<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree36" aria-expanded="false" aria-controls="collapseThree36">
<h5 class="black-text font-weight-normal mb-0">
What times support is available?
<i class="fas fa-angle-down rotate-icon"></i>
</h5>
</a>
</div>

<div id="collapseThree36" class="collapse" role="tabpanel" aria-labelledby="headingThree36" data-parent="#accordionEx">
<div class="card-body">
The support team is available Monday to Friday
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://www.google.com/recaptcha/api.js" async defer></script>
<section style=" background-color: #f4f7fa">
<div class="container my-5 py-5 ">

<section class=" text-center text-lg-left dark-grey-text">

<div class="row">

<div class="col-lg-5 col-md-12 mb-0 mb-md-0">
 <h1 class="fw-500 black-text mb-4">
Contact Us
</h1>
<p class="text-black-50">
It's very easy to get in touch with us. Just use the contact form or use the chat option! We will respond as soon as possible.
</p>
<p><span class="text-black-50 mr-2">Email:</span><a class="text-black-50" href="/cdn-cgi/l/email-protection#7555161a1b011416013510191003140110051406065b1b1001"><span class="__cf_email__" data-cfemail="492a26273d282a3d092c252c3f283d2c39283a3a67272c3d">[email&#160;protected]</span></a></p>
</div>


<div class="col-lg-7 col-md-12 mb-4 mb-md-0">

<form method="post" action="/Home/ContactUs">

<div class="md-form md-outline mb-0">
<input type="email" id="form-last-name" class="form-control" data-val="true" data-val-email="The Email field is not a valid e-mail address." data-val-required="The Email field is required." name="Email" value="">
<label class="pl-3" for="form-last-name">Enter email</label>
</div>



<div class="md-form md-outline mb-0 w-100">
<input type="text" name="name" id="form-first-name" class="form-control" data-val="true" data-val-required="The Name field is required." value="">
<label class="pl-3" for="form-first-name">Your Name</label>
</div>

<div class="md-form  mb-3 w-100">
<textarea id="form-message" class="md-textarea form-control" rows="3" data-val="true" data-val-required="The Message field is required." name="Message"></textarea>
<label for="form-message">Message</label>
</div>
<div class="g-recaptcha my-4" data-type="image" data-sitekey="6Lfub-8bAAAAAANtQ6poYPrNKFOfCNu3mGkXctPI"></div>
<button type="submit" class="btn btn-info btn-sm ml-0 btn-lg-platform">Send Message</button>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8O5gIo7GiTBLtnRDPhfOgvMyFP3Gvip6hDQWhNYx1HjVMXzLm2ocDnIgSmiomLpfdBvbBU41hxjIK4NZ-3E09T62AkGlL86PCXpLA3vJRH5lclOu0qasXtvsrY35ZpxMlTcsChv7hdQvNA4kRJKJZAY" /></form>
</div>

</div>

</section>

</div>
</section>



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
