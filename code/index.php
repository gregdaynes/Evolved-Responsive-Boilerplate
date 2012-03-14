<?php require_once "helpers/document.php"; ?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<jdoc:include type="head" />
</head>
<body id="bootstrap-js">
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	
	<!-- Toolbar -->
	<header>
		<jdoc:include type="modules" name="toolbar" />
		<jdoc:include type="modules" name="icon" />
		<jdoc:include type="modules" name="title" />
		
		<div class="navbar navbar-fixed-top">
		  <div class="navbar-inner">
		    <div class="container">
		 
		      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </a>
		 
		      <!-- Be sure to leave the brand out there if you want it shown -->
		      <a class="brand" href="#">Joomla</a>
		 
		      <!-- Everything you want hidden at 940px or less, place within here -->
		      <div class="nav-collapse">
		        <jdoc:include type="modules" name="navbar-menu" style="navBarMenu" />
		        <jdoc:include type="modules" name="navbar-search" />
		      </div>
		 
		    </div>
		  </div>
		</div>
		
		<div role="message" class="container">			
			<jdoc:include type="message" />
		</div>
		
		
		
	</header>
	<!-- Toolbar -->
	
	<!-- Introduction -->
	<div role="introduction" class="container">
		<div class="row">
			<div class="span12">
				<img src="http://placehold.it/940x223/f12c7e/ffffff" />
			</div>
		</div>
	</div>
	<!-- Introduction -->
	
	<!-- Showcase -->
	<div class="container">
		<div class="row">
			<div class="span4">
				<a href="#" class="">
					<img src="http://placehold.it/300x100" >
				</a>
			</div>
			<div class="span4">
				<a href="#" class="">
					<img src="http://placehold.it/300x100">
				</a>
			</div>
			<div class="span4">
				<a href="#" class="">
					<img src="http://placehold.it/300x100">
				</a>
			</div>
			
		</div>
	</div>
	<!-- Showcase -->
	
	<div id="main" role="main" class="container">
		<div class="row">
			<div class="span8">
				
				<jdoc:include type="component" />
				
				<jdoc:include type="modules" name="position-2" />
			</div>
			
			<div class="span4">
				<jdoc:include type="modules" name="right-top" style="stackedPills" />
				<jdoc:include type="modules" name="right" />
			</div>
		</div>
		
	</div>
	
	<footer>
		
	</footer>
	
	<jdoc:include type="modules" name="debug" />
</body>
</html>