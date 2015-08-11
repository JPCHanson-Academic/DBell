<!--__________________________ HEADER _____________________________-->

<!--__________________________ DOCTYPE ____________________________-->
<!DOCTYPE html>
<!-- _______________________ENDOF DOCTYPE _________________________-->


<html lang="en">

<!--___________________________ HEAD ______________________________-->  

<head>
  	<title><?php bloginfo('name');?></title>
  	<!-- Include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  
  <?php wp_head();?>
   <link rel="stylesheet" href="<?php echo(get_stylesheet_directory_uri()); ?>/themes/DBell.min.css" />
  <link rel="stylesheet" href="<?php echo(get_stylesheet_directory_uri()); ?>/themes/jquery.mobile.icons.min.css" />
  <!-- Include jQuery Mobile stylesheets -->
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <!-- link to worpress style.css -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen"></link>
  
  <!-- Include the jQuery library -->
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <!-- Include the jQuery Mobile library -->
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  
  <script src="<?php echo(get_stylesheet_directory_uri()); ?>/js/imports.js"></script>
    
</head>

<!--_________________________ ENDOF HEAD ____________________________-->

<?php if(is_user_logged_in()):?> 
<body class="lower-body">
  <?php else:?>
<body>
  <?php endif;?>


  <div data-role="page"> 	
	 
	<?php get_sidebar(); ?>
	 
	 <?php if(is_user_logged_in()):?> 
		<div data-role="header" data-position="fixed" class="lower-header header">
 	 <?php else:?>
		<div data-role="header" data-position="fixed" class="header">
  	 <?php endif;?>
	 
		  	 <a href="#myPanel" class="ui-btn ui-corner-all ui-icon-bars ui-btn-icon-notext"></a>
		  <?php if(is_user_logged_in()):?> 
		  			<a class="ui-btn" href="<?php echo wp_logout_url(home_url());?>">Logout</a>
  			<?php else:?>
					<a class="ui-btn" href="<?php echo wp_login_url(home_url());?>">Login</a>         
 			<?php endif;?>
	  		<h1><?php bloginfo('name');?></h1>
   	</div>

  		
<!--________________________ ENDOF HEADER ___________________________-->
  
  