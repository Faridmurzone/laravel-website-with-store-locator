<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

   	{{ HTML::script('/assets/javascript/frontend.js'); }}
   	
	{{ HTML::style('/assets/stylesheets/combined.css'); }}
    {{ HTML::style('/assets/fonts/webfontkit/stylesheet.css'); }}
    {{ HTML::style('/assets/stylesheets/sub.css'); }}
   	
	@yield('head')

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	<div id="nav-container">
      <!-- Static navbar -->
      <div class="navbar navbar-inverse" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/assets/images/logo/logo_sm.png" alt="capital_radiology" width="113" height="36" class="img-responsive fadeover shadowed"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            
   			  @yield('nav')

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
       	<div id="popOverLogin" rel="popover" data-placement="bottom" data-original-title="Notification!"
	      @if (Session::has('message'))
	         data-content="{{ Session::get('message') }}"
	      @endif >
	    </div>
      </div>
  	</div>
    <div class="container">

	@yield('content', 'This content could not be found')

        <div class="row">
            <div class="col-md-1 col-sm-1 col-xs-1"></div>
            <div id="social" class="col-md-6 col-sm-6 col-xs-12">
                <a href="#"><img src="/assets/images/social/Sample-1.pdf-1_03.jpg" alt="Sample-1.pdf-1_03" width="97" height="83" class="img-responsive fadeover" /></a>
                <a href="#"><img src="/assets/images/social/Sample-1.pdf-1_04.jpg" alt="Sample-1.pdf-1_04" width="104" height="83" class="img-responsive fadeover" /></a>
                <a href="#"><img src="/assets/images/social/Sample-1.pdf-1_05.jpg" alt="Sample-1.pdf-1_05" width="105" height="83" class="img-responsive fadeover"/></a>
                <a href="#"><img src="/assets/images/social/Sample-1.pdf-1_06.jpg" alt="Sample-1.pdf-1_06" width="100" height="83" class="img-responsive fadeover"/></a>
                <a href="#"><img src="/assets/images/social/Sample-1.pdf-1_07.jpg" alt="Sample-1.pdf-1_07" width="104" height="83" class="img-responsive fadeover"/></a>
            </div>
            <div id="copyright" class="col-md-4 col-sm-4 col-xs-12">
                Copyright (©) 2011-2014 Capital Radiology
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1"></div>
        </div>

        <svg height="0" xmlns="http://www.w3.org/2000/svg">
            <filter id="drop-shadow">
                <feGaussianBlur in="SourceAlpha" stdDeviation="2.2"/>
                <feOffset dx="12" dy="12" result="offsetblur"/>
                <feFlood flood-color="rgba(0,0,0,0.5)"/>
                <feComposite in2="offsetblur" operator="in"/>
                <feMerge>
                    <feMergeNode/>
                    <feMergeNode in="SourceGraphic"/>
                </feMerge>
            </filter>
        </svg>
    </div> <!-- /container -->
  </body>
</html>
