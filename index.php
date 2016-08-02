<?php

	if ( ! defined('FB')) 
	{
		define('FB', 'facebook');
	}
	
	if ( ! defined('DS')) 
	{
		define('DS', DIRECTORY_SEPARATOR);
	}
	
	if ( ! defined('ROOT')) 
	{
		define('ROOT', realpath(dirname(__FILE__)) . DS);	
	}		
	
	if ( ! defined('ABSOLUTE_LIBS')) 
	{
		define('ABSOLUTE_LIBS', ROOT . 'libs' . DS . FB);
	}
	if ( ! defined('ABSOLUTE_VIEW')) 
	{
		define('ABSOLUTE_VIEW', ROOT . 'view' . DS . FB);
	}
	
	// Require FBLibrary
	
	require_once ABSOLUTE_LIBS . DS . 'FBLibrary.php';

	// Create FBLibrary object	
	
	$fb = new FBLibrary('Zero Production OÜ', ABSOLUTE_LIBS, ABSOLUTE_VIEW); 

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		
		<link href="public/bootstrap-3.1.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="public/bootstrap-3.1.1-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1519919508268659";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<div class="container">
			<div class="col-xs-12 col-md-12">
			<?php
				$fb->requireComponent([
					'page' => [
						//'width' => 300,
						//'height' => 300,
						'show_facepile' => false,
						'tabs' => 'timeline, events, messages',
					],
				], true);
			?>
			</div>
			<div class="col-xs-12 col-md-6">

			<?php
				$fb->requireComponent('follow', true);
			?>
			</div>
			<div class="col-xs-12 col-md-6">

			<?php
				$fb->requireComponent('like', true);
			?>
			</div>
		</div>

		<script src="public/bootstrap-3.1.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
