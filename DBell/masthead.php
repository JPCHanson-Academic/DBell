<?php $pages = get_pages(array('sort_column' => 'menu_order'));

//doenst really work
function add_slick_scripts()
{
	wp_enqueue_style('slickcss',get_template_directory_uri().'/js/slick-1.5.7/slick/slick.css',false, false, 'all');
	wp_enqueue_script('migrate','//code.jquery.com/jquery-migrate-1.2.1.min.js',false, NULL, false);
	wp_enqueue_script('slickjs',get_template_directory_uri().'/js/slick-1.5.7/slick/slick.min.js',false, NULL, false);
}

add_action( 'wp_enqueue_scripts', 'add_slick_scripts' );?>




<?php if(wp_is_mobile()==true): ?>

<div class="siteTitle" ><h1><?php bloginfo('name'); ?></h1></div>
  <div class="siteDescription" ><h2><?php bloginfo('description'); ?></h2></div>
  <div class="btnContainer">
  	<?php foreach ( $pages as $page ) { ?>  
		<a class ="pagebuttons btn btn-lg btn-warning" href="<?php echo get_page_link($page->ID);?>"><?php echo $page->post_title;?> </a>	
  	<?php } ?>	
	</div>

<?php else: ?>

<?php get_template_part('carousel'); ?>


<div class="overlay">
  <div class="siteTitle" ><h1><?php bloginfo('name'); ?></h1></div>
  <div class="siteDescription" ><h2><?php bloginfo('description'); ?></h2></div>
  <div class="btnContainer">
  	<?php foreach ( $pages as $page ) { ?>
	 <span>
		<a class ="pagebuttons btn btn-lg btn-warning" href="<?php echo get_page_link($page->ID);?>"><?php echo $page->post_title;?> </a>
		<p class="panel panel-default pagebuttons"><?php echo(get_theme_mod($page->post_title));?></p>
	 </span>
  	<?php } ?>	
	</div>
</div>
<?php endif;?>

<script type="text/javascript">
    $(document).ready(function(){
      $('.btnContainer').slick({
        	infinite: true,
 			slidesToShow: 3,
  			slidesToScroll: 2,
		   swipeToSlide:true
      });
    });
  </script>