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
          <div class="col-sm-9 col-md-9 templatemo_col9">
          	<div id="top-menu">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a class="menu" href="#templatemo_home">Home</a></li>
                <li><a class="menu" href="#templatemo_about">About</a></li>
                <li><a class="menu" href="#templatemo_portfolio">Portfolio</a></li>
                <li><a class="menu" href="#templatemo_blog">Blog</a></li>
                <li><a class="menu" href="#templatemo_contact">Contact</a></li>
              </ul>
            </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="clear"></div>
    <!-- end menu -->
      	<div  id="slider"  class="nivoSlider templatemo_slider">
        	<a href="#"><img src="{{ asset("assets/images/slider/img1.jpg") }}" alt="slide 1" ></a>
			    <a href="#"><img src="{{ asset("assets/images/slider/img2.jpg") }}" alt="slide 2" ></a>
          <a href="#"><img src="{{ asset("assets/images/slider/img3.jpg") }}" alt="slide 3" ></a>
          <a href="#"><img src="{{ asset("assets/images/slider/img4.jpg") }}" alt="slide 4" ></a>
          <a href="#"><img src="{{ asset("assets/images/slider/img5.jpg") }}" alt="slide 5" ></a>
          <a href="#"><img src="{{ asset("assets/images/slider/img6.jpg") }}" alt="slide 6" ></a>
          <a href="#"><img src="{{ asset("assets/images/slider/img7.jpg") }}" alt="slide 7" ></a>

    	  </div>
             <div class="templatemo_caption">
                    <div class="templatemo_slidetitle">Dinas Kebudayaan dan Pariwisata Bangli</div>
                    <div class="clear"></div>
                    <h1>Decision Support System (DSS)</h1>
                    <div class="clear"></div>
             		<p>This Decision Support System will help you to support your choice when you visiting Bangli Regency in Bali. </p>
	          	    <a class="btn btn-large btn-primary" href="{{ URL::to('wisatawan/create') }}">Try DSS</a>
              </div>
  </header>
<div class="templatemo_lightgrey_about" id="templatemo_about">
	<div class="container">
    	<div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><i class="fa fa-bell-o"></i></span>
                      	  </div>
                     	   Pixel Perfect Design</div>
						<div class="col-xs-12 col-sm-6 col-md-3 hover-box" >
							<div class="inner-hover-box">
								<p>Nunc sed ullamcorper massa, vitae tristique lectus. Curabitur ultricies, nunc ac tincidunt sollicitudin, neque leo commodo nisl.</p>
							</div>
						</div>
					</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><i class="fa fa-tablet"></i></span>
                      	  </div>
                     	   Responsive Layout</div>
						<div class="col-xs-6 col-sm-6 col-md-3 hover-box" >
							<div class="inner-hover-box">
								<p>Morbi ac vestibulum nisl. Praesent lacinia id mi eget dictum. Fusce egestas turpis nec erat lobortis, ut tempus purus suscipit.</p>
							</div>
						</div>
					</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><i class="fa fa-lock"></i></span>
                      	  </div>
                     	   Secured Website</div>
						<div class="col-xs-6 col-sm-6 col-md-3 hover-box" >
							<div class="inner-hover-box">
								<p>Etiam venenatis egestas magna sit amet varius. Vivamus neque eros, sollicitudin a ligula quis, interdum venenatis justo.</p>
							</div>
						</div>
					</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
        	<div class="item project-post">
						<div class="templatemo_about_box">
                        	<div class="square_coner">
                     		   <span class="texts-a"><i class="fa fa-rocket"></i></span>
                      	  </div>
                     	   Quick Service</div>
						<div class="col-xs-6 col-sm-6 col-md-3 hover-box" >
							<div class="inner-hover-box">
								<p>Vestibulum convallis leo vel tortor ultricies aliquam. Nullam faucibus urna vel volutpat ornare. Donec molestie accumsan ante.</p>
							</div>
						</div>
					</div>
        </div>
    </div>
</div>

    <div class="clear"></div>
    <div class="templatemo_reasonbg">
    	<h2>Reasons to choose us?</h2>
       		<p>Mauris placerat lacinia justo vitae feugiat. Free templates by templatemo.</p>
            <div class="clear height10"></div>
	        <div class="fa fa-bell-o"></div>
            <div class="fa fa-tablet"></div>
            <div class="fa fa-lock"></div>
			<div class="clear height20"></div>
            <a class="btn btn-large btn-primary" href="{{ URL::to('wisatawan/create') }}">Try DSS</a>
    </div>
    <div class="clear"></div>
    <!--Our Portfolio Start-->
    <div class="templatemo_portfolio" id="templatemo_portfolio">
        	<h2>Our portfolio</h2>
            <p>Donec eget congue ligula, eget pharetra urna. Nam tempor tellus sit amet bibendum dapibus.</p>

            <div class="container">
           	  <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="{{ asset("assets/images/portfolio/1.jpg") }}" alt="portfolio 1">
								<div class="overlay-p">
									<a href="{{ asset("assets/images/portfolio/1.jpg") }}" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Blue Sky</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>

              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="{{ asset("assets/images/portfolio/2.jpg") }}" alt="portfolio 2">
								<div class="overlay-p">
									<a href="{{ asset("assets/images/portfolio/2.jpg") }}" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Forest</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>

              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="{{ asset("assets/images/portfolio/3.jpg") }}" alt="portfolio 3">
								<div class="overlay-p">
									<a href="{{ asset("assets/images/portfolio/3.jpg") }}" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Forest</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>

              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="{{ asset("assets/images/portfolio/4.jpg") }}" alt="portfolio 4">
								<div class="overlay-p">
									<a href="{{ asset("assets/images/portfolio/4.jpg") }}" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Black and White</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>

              </div>
             </div>
               <div class="clear"></div>
              <div class="container">
              		<div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="{{ asset("assets/images/portfolio/5.jpg") }}" alt="portfolio 5">
								<div class="overlay-p">
									<a href="{{ asset("assets/images/portfolio/5.jpg") }}" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Rotary</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>

              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="{{ asset("assets/images/portfolio/6.jpg") }}" alt="portfolio 6">
								<div class="overlay-p">
									<a href="{{ asset("assets/images/portfolio/6.jpg") }}" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Rotary</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>

              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="{{ asset("assets/images/portfolio/7.jpg") }}" alt="portfolio 7">
								<div class="overlay-p">
									<a href="{{ asset("assets/images/portfolio/7.jpg") }}" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Blue Sky</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>

              </div>
              <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
              	<div class="portfolio-item">
							<div class="portfolio-thumb">
								<img src="{{ asset("assets/images/portfolio/8.jpg") }}" alt="portfolio 8">
								<div class="overlay-p">
									<a href="{{ asset("assets/images/portfolio/8.jpg") }}" data-rel="lightbox[portfolio]">
                                    	<ul>
                                        	<li>Black and White</li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-circle"></li>
                                            <li class="fa fa-circle fsmall"></li>
                                            <li class="fa fa-search fa-2x"></li>
                                        </ul>
									</a>
								</div>
							</div> <!-- /.portfolio-thumb -->
						</div>

              </div>

              </div>
            <a class="btn btn-large btn-primary" href="#">View More</a>
    </div>
    <!--Our Portfolio End-->
    <div class="clear"></div>
    <!--Our Blog Start-->
    <div class="templatemo_blog" id="templatemo_blog">
    	<h2>Our blog</h2>
        	<p>Check out our latest posts.</p>
        <div class="clear"></div>
        <div class="container">
       		<div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
            	<div class="templatemo_wrapperblogbox">
                	<a href="#" class="fa fa-calendar tooltip1" title="28 January 2084"></a>
                    <a href="#" class="fa fa-user tooltip2" title="Booker"></a>
                    <a href="#" class="fa fa-tag tooltip3" title="HTML5, CSS3"></a>
                    <a href="#" class="fa fa-comment tooltip4" title="Comments (4)"></a>
                </div>
                <div class="clear"></div>
                <img src="{{ asset("assets/images/templatemo_blogimage01.jpg") }}" alt="blog image 1">
                <div class="clear"></div>
                <div class="templatemo_blogtext">
                	<span class="left">New Touring</span>
                    <span class="right">
                    <a href="#" title="Click more"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></a>
                    </span>
                </div>
        	</div>
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12">
            	<div class="templatemo_wrapperblogbox">
                	<a href="#" class="fa fa-calendar tooltip1" title="26 January 2084"></a>
                    <a href="#" class="fa fa-user tooltip2" title="George"></a>
                    <a href="#" class="fa fa-tag tooltip3" title="Template, Design"></a>
                    <a href="#" class="fa fa-comment tooltip4" title="Comments (8)"></a>
                </div>
                <div class="clear"></div>
                <img src="{{ asset("assets/images/templatemo_blogimage02.jpg") }}" alt="blog image 2">
                <div class="clear"></div>
                <div class="templatemo_blogtext">
                	<span class="left">Coffee Shop</span>
                    <span class="right">
                    <a href="#" title="Click more"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></a>
                    </span>
                </div>
        	</div>
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
            	<div class="templatemo_wrapperblogbox">
                	<a href="#" class="fa fa-calendar tooltip1" title="24 January 2084"></a>
                    <a href="#" class="fa fa-user tooltip2" title="Jelly Bean"></a>
                    <a href="#" class="fa fa-tag tooltip3" title="Web Design, Portfolio"></a>
                    <a href="#" class="fa fa-comment tooltip4" title="Comments (16)"></a>
                </div>
                <div class="clear"></div>
                <img src="{{ asset("assets/images/templatemo_blogimage03.jpg") }}" alt="blog image 3">
                <div class="clear"></div>
                <div class="templatemo_blogtext">
                	<span class="left">Tea Time</span>
                    <span class="right">
                    <a href="#" title="Click more"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></a>
                    </span>
                </div>
        	</div>
            <div class="col-xs-6 col-sm-6 col-md-3 templatemo_col12 templatemo_margintop10">
            	<div class="templatemo_wrapperblogbox">
                	<a href="#" class="fa fa-calendar tooltip1" title="22 January 2084"></a>
                    <a href="#" class="fa fa-user tooltip2" title="John Walker"></a>
                    <a href="#" class="fa fa-tag tooltip3" title="Logo, Creative"></a>
                    <a href="#" class="fa fa-comment tooltip4" title="Comments (32)"></a>
                </div>
                <div class="clear"></div>
                <img src="{{ asset("assets/images/templatemo_blogimage04.jpg") }}" alt="blog image 4">
                <div class="clear"></div>
                <div class="templatemo_blogtext">
                	<span class="left">Mobile First</span>
                    <span class="right">
                    <a href="#" title="Click more"><i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i></a>
                    </span>
                </div>
        	</div>
        </div>
    </div>
    <!--Our Blog End-->
	<!--Our Partner Start-->
    <div class="section6 templatemo_partner" id="templatemo_partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="secHeader">
              <h2 class="text-center">Our partners</h2>
              <p class="text-center">Etiam faucibus turpis id ipsum egestas porta. Cras in aliquet purus, ac varius turpis.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="partnerWrap">
        <div class="slideshow"
            data-cycle-fx=carousel
            data-cycle-timeout=0
            data-cycle-carousel-visible=4
            data-cycle-next="#next"
            data-cycle-prev="#prev"
            data-cycle-carousel-fluid=true
            >
            <img alt="partner 1" src="{{ asset("assets/images/partners/partner1.jpg") }}" >
            <img alt="partner 2" src="{{ asset("assets/images/partners/partner2.jpg") }}" >
            <img alt="partner 3" src="{{ asset("assets/images/partners/partner3.jpg") }}" >
            <img alt="partner 4" src="{{ asset("assets/images/partners/partner4.jpg") }}" >
            <img alt="partner 5" src="{{ asset("assets/images/partners/partner5.jpg") }}" >
            <img alt="partner 6" src="{{ asset("assets/images/partners/partner6.jpg") }}" >
            <img alt="partner 7" src="{{ asset("assets/images/partners/partner7.jpg") }}" >
            <img alt="partner 8" src="{{ asset("assets/images/partners/partner8.jpg") }}" >
        </div>
        <a href="#" id="prev">&lt;&lt; Prev </a>
        <a href="#" id="next"> Next &gt;&gt; </a>
      </div>

    </div>
    <!--Our Partner End-->
    <!--Our Client Start-->
    <div class="templatemo_reasonbg">
    	<h2>What our clients say?</h2>
        <div class="container">
        	<div class="col-xs-11 templatemo_col12 templatemo_clientwrapper">
            	<div class="templatemo_clientimage">
                <p class="templatemo_clientdes">Duis consequat ut quam ut sollicitudin. Donec eget congue ligula, eget pharetra urna. Nam tempor tellus sit amet bibendum dapibus.</p>
            	  <img src="{{ asset("assets/images/client/1.jpg") }}" alt="client image 1" />
                  <div class="clear"></div>
                  <div class="fa fa-circle mleft1"></div>
			  	</div>
                <div class="templatemo_clientimage">
                <p class="templatemo_clientdes">Nam auctor elementum dolor. Donec euismod, justo sed convallis blandit, ipsum erat mattis lectus, vel pharetra neque enim tristique risus.</p>
  				<img src="{{ asset("assets/images/client/2.jpg") }}" alt="client image 2" />
                <div class="clear"></div>
                  <div class="fa fa-circle mleft2"></div>
				</div>
                <div class="templatemo_clientimage">
                <p class="templatemo_clientdes">Quisque tincidunt risus et enim. Vestibulum gravida sem at sem bibendum vehicula. Sed et leo. </p>
  				<img src="{{ asset("assets/images/client/3.jpg") }}" alt="client image 3" />
                <div class="clear"></div>
                  <div class="fa fa-circle mleft3"></div>
				</div>
                <div class="templatemo_clientimage next templatemo_marginleft50">
                <p class="templatemo_clientdes">Curabitur commodo arcu vel enim mollis consequat. Nulla pharetra tortor vel arcu. In rhoncus fermentum ipsum. </p>
  				<img src="{{ asset("assets/images/client/4.jpg") }}" alt="client image 4" />
                <div class="clear"></div>
                  <div class="fa fa-circle mleft4"></div>

				</div>
              <div class="templatemo_clientimage next">
                <p class="templatemo_clientdes">Nam auctor elementum dolor. Donec euismod, justo sed convallis blandit, ipsum erat mattis lectus, vel pharetra neque enim tristique risus. </p>
		      <img src="{{ asset("assets/images/client/5.jpg") }}" alt="client image 5" />
 				 <div class="clear"></div>
                  <div class="fa fa-circle mleft5"></div>
				</div>

          </div>
            <div class="clear"></div>
        </div>

	</div>
     <div class="clear"></div>
    <!--Our Client End-->
    <!--Contact Start -->
    <div class="templatemo_lightgrey" id="templatemo_contact">
    	<div class="templatemo_paracenter">
    	<h2>Contact us</h2></div>
        <div class="clear"></div>
        <div class="container">
        	<div class="templatemo_paracenter">
            Pellentesque aliquam in risus eu ultrices. Suspendisse id interdum nibh. Etiam vel mattis augue, a vestibulum arcu. Nam rutrum diam dolor, eu vehicula nisl tincidunt non. Fusce tincidunt id justo eu tempor. Phasellus sit amet ante lobortis, mattis sapien id, dictum ipsum.
            </div>
            <div class="clear"></div>
            <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="templatemo_maps">
              <div class="fluid-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12084.143170610365!2d-73.96770330299584!3d40.783227259584116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589a018531e3%3A0xb9df1f7387a94119!2sCentral+Park!5e0!3m2!1sen!2s!4v1391601567888"></iframe>
              </div>
            </div>
          </div>
          <div class="container">
        <div class="row">
          <div class="col-md-3">
            <form role="form">
              <div class="form-group">
                <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name" maxlength="30">
              </div>
              <div class="form-group">
                <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" maxlength="30">
              </div>
              <div class="form-group">
                <input name="subject" type="text" class="form-control" id="subject" placeholder="Your Subject" maxlength="40">
              </div>
              <div><button type="button" class="btn btn-primary">Send Message</button></div>
            </form>
          </div>
          <div class="col-md-9">
            <div class="txtarea">
              <textarea name="message" rows="10" class="form-control" id="message"></textarea>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
        </div>
  </div>

    <!--Contact End-->
    <!--Footer Start-->

@include('layout.footer')
