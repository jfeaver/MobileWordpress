<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="initial-scale=1.6; maximum-scale=1.0; width=device-width; "/>
	
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  
  <?php wp_head(); ?>
  
  <!-- Included CSS Files -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <link rel="stylesheet" href="./wp-content/themes/Foundation/stylesheets/bwd.css">

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
  <!-- YUI Tab View -->
  <!-- Sam Skin CSS for TabView -->
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/tabview/assets/skins/sam/tabview.css">
   
  <!-- JavaScript Dependencies for Tabview: -->
  <script src="http://yui.yahooapis.com/2.9.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>
  <script src="http://yui.yahooapis.com/2.9.0/build/element/element-min.js"></script>
   
  <!-- OPTIONAL: Connection (required for dynamic loading of data) -->
  <script src="http://yui.yahooapis.com/2.9.0/build/connection/connection-min.js"></script>
   
  <!-- Source file for TabView -->
  <script src="http://yui.yahooapis.com/2.9.0/build/tabview/tabview-min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="./wp-content/themes/Foundation/stylesheets/YUI_TabView.css">
   
  

</head>

<body <?php body_class(); ?>>

	<!-- Begin Container -->
	<div class="container">
		
		<!-- Header Row -->
		<div class="row">
			
				<!-- Header Column -->
				<div id="access" role="navigation">

          <div class="two columns">
            <img src="./wp-content/brand/images/logo.png">
          </div>

          <div class="ten columns">
					  <!-- Site Title -->
					  <h1><a href="<?php echo site_url(); ?>"><?php bloginfo('title'); ?></a></h1>
          </div>

				
				</div>
				<!-- Header Column -->
				
		</div>
		<!-- Header Row -->
		
		
				
