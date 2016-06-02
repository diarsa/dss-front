<!DOCTYPE html>
<!--
    Free Responsive Template by templatemo
    http://www.templatemo.com
-->
<html>
  <head>
    <title>SPK - @yield('title')</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ asset("assets/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/css/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/css/templatemo_style.css") }}" rel="stylesheet">
   	<link rel="stylesheet" href="{{ asset("assets/css/templatemo_misc.css") }}">

    <link href="{{ asset("assets/css/circle.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/css/jquery.bxslider.css") }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset("assets/css/nivo-slider.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/slimbox2.css") }}" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ asset("assets/js/jquery.min.js") }}"></script>
    <script type="text/JavaScript" src="{{ asset("assets/js/slimbox2.js") }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/ddsmoothmenu.css") }}" />
	<script type="text/javascript" src="{{ asset("assets/js/jquery.min.js") }}"></script>
	<script type="text/javascript" src="{{ asset("assets/js/ddsmoothmenu.js") }}"></script>

<!--/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

-->


<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_flicker", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

  </head>
  <body>

    @section('header')

    <header>
    <!-- start menu -->
    <div id="templatemo_home">
    	<div class="templatemo_top">
      <div class="container templatemo_container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="logo">
              <a href="{{ URL::to('dashboard') }}"><img src="{{ asset("assets/images/templatemo_logo.png") }}" alt="logo"></a>
            </div>
          </div>

        </div>
      </div>
    </div>
    </div>
    <div class="clear"></div>
    <!-- end menu -->

  </header>

  <div class="section6 templatemo_partner" id="templatemo_partners">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="secHeader">
            <h2 class="text-center">Decission Support System</h2>
            <p class="text-center"> This Decision Support System will help you to support your choice when you visiting Bangli Regency in Bali.  </p>

            @show
            @yield('conten')

          </div>
        </div>
      </div>
    </div>

  </div>

@include('layout.footer')

    <!--Contact End-->
    <!--Footer Start-->
