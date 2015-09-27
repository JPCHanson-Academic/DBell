<?php 
function global_styles_scripts()
{
	wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',false, NULL, false);
  
	wp_enqueue_script('bootstrap_js','//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',false, NULL, false);
   wp_enqueue_style('bootstrap_css','//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css',false, false, 'all');
  
   wp_enqueue_style('my_global_style',bloginfo('stylesheet_url'),false, false, 'all');
}

//add_action( 'wp_enqueue_scripts', 'global_styles_scripts' );
?>

<?php include('socialCustomizer.php'); ?>
<?php include('mainPageBtnSliderCustomizer.php'); ?>