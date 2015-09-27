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
  <?php
  wp_enqueue_style('slickcss',get_template_directory_uri().'/js/slick-1.5.7/slick/slick.css',false, false, 'all');
	wp_enqueue_style('slickcssdef',get_template_directory_uri().'/js/slick-1.5.7/slick/slick-theme.css',false, false, 'all');
	wp_enqueue_script('slickjs',get_template_directory_uri().'/js/slick-1.5.7/slick/slick.min.js',false, NULL, true);
	?>
  <?php wp_head();?>
  
  <!-- link to worpress style.css -->  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
 
    
</head>

<!--_________________________ ENDOF HEAD ____________________________-->

<?php if(is_user_logged_in()):?> 
<body class="lower-body">
  <?php else:?>
<body>
  <?php endif;?>
	 
		  	
	  <?php get_template_part('navbar');?>

  		
<!--________________________ ENDOF HEADER ___________________________-->
  
  