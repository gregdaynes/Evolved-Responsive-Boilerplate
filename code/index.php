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
<body>
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
	     chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	
	<header>
		<jdoc:include type="modules" name="toolbar" />
		<jdoc:include type="modules" name="icon" />
		<jdoc:include type="modules" name="title" />
		
		<jdoc:include type="message" />
	</header>
	
	<div role="main">
		<jdoc:include type="modules" name="top" />
		
		<jdoc:include type="modules" name="left" />
		<jdoc:include type="component" />
		<jdoc:include type="modules" name="right" />
		
		<jdoc:include type="modules" name="user1" />
		<jdoc:include type="modules" name="user2" />
		<jdoc:include type="modules" name="user3" />
		<jdoc:include type="modules" name="user4" />
	</div>
	
	<footer>
		<jdoc:include type="modules" name="syndicate" />
	</footer>
	
	<jdoc:include type="modules" name="debug" />
	 
</body>