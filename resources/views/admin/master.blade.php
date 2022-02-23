<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Enskypass - DASHBAORD</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="www.sigitechnologies.com">

    <link rel="icon" href="{{asset('logo.png')}}" type="image/x-icon">
    
        <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/charts-c3/plugin.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/multi-select/css/multi-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/dropify/css/dropify.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/summernote/dist/summernote.css')}}" />
    
    
        <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
    
        <!--toastr-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   
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
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('logo.png')}}" alt="Kwik E Mart"></div>
        <p>Please wait...</p>
    </div>
</div>

<div id="wrapper">
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="{{route('home')}}"><img src="{{asset('logo.png')}}" alt="Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>
            </div>

            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href=""><i class="icon-settings"></i></a>
                        </li>
                        <li>
                            <a href="{{route('login')}}" class="icon-menu" style="background: indianred;border-radius: 5px;margin-left: 5px;"><i class="icon-power"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand text-center">
            <a href="{{route('home')}}"><img src="{{asset('logo.png')}}" alt="Enskypass" class="img-fluid"></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="active"><a href="{{route('home')}}"><i class="icon-home"></i><span>Dashboard</span></a></li>
                    <li>
                        <a href="#uiElements" class="has-arrow mb-1"><i class="icon-users"></i><span>Package Details</span></a>
                        <ul>
                            <li><a href=""> First Package</a></liclass=>
                            <li><a href=""> Second Package</a></li=>
                            <li><a href=""> Third Package</a></liss=>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="#forms" class="has-arrow mb-1"><i class="fa fa-users"></i><span>Users </span></a>
                        <ul>
                            <li><a href="">All Users</a></litName>
                            <li><a href="">Active Users</a></li>
                            <li><a href="">Un-Active Users</a></li>
                        </ul=>
                    </li>
                   
                </ul>
            </nav>
        </div>
    </div>
    <div id="main-content">
        <div class="block-header">
            @yield('content')
        </div>
    </div>

</div>


<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{!! session('error') !!}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"positionClass": "toast-bottom-full-width"
  }
  		toastr.info("{{ session('info') }}");
  @endif
  
  @if (Session::has('success'))
        toastr.options.positionClass = 'toast-bottom-right';
        toastr.success("{{ Session::get('success') }}");
  @endif
  
  
  @if (Session::has('alert'))
        toastr.options.positionClass = 'toast-bottom-right';
        toastr.alert("{{ Session::get('alert') }}");
  @endif


  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
  	"positionClass": "toast-bottom-right"
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
  
</script>

<!-- Javascript -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>


<!--Table/Data Table JS-->
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>


<!--Image Uplaod And View JS -->
<script src="{{asset('assets/vendor/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/dropify.js')}}"></script>

<!--Multi Select JS -->
<script src="{{asset('assets/vendor/multi-select/js/jquery.multi-select.js')}}"></script><!-- Multi Select Plugin Js -->
<script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>

<!--Summer Notes JS -->
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/summernote/dist/summernote.js')}}"></script>

<script>
    $(function () {
    // Summernote
    $('.textarea').summernote()
  })
  </script>
 

</body>
</html>
