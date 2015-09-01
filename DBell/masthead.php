<?php $pages = get_pages(array('sort_column' => 'menu_order'));?>

<?php if(wp_is_mobile()==true) { ?>

<div class="siteTitle" ><h1><?php bloginfo('name'); ?></h1></div>
  <div class="siteDescription" ><h2><?php bloginfo('description'); ?></h2></div>
  <div class="btnContainer">
  	<?php foreach ( $pages as $page ) { ?>  
		<a class ="pagebuttons btn btn-lg btn-warning" href="<?php echo get_page_link($page->ID);?>"><?php echo $page->post_title;?> </a>	
  	<?php } ?>	
	</div>

<?php } else { ?>

<?php get_template_part('carousel'); ?>


<div class="overlay">
  <div class="siteTitle" ><h1><?php bloginfo('name'); ?></h1></div>
  <div class="siteDescription" ><h2><?php bloginfo('description'); ?></h2></div>
  <div class="btnContainer">
  	<?php foreach ( $pages as $page ) { ?>  
		<a class ="pagebuttons btn btn-lg btn-warning" href="<?php echo get_page_link($page->ID);?>"><?php echo $page->post_title;?> </a>	
  	<?php } ?>	
	</div>
</div>
<?php } ?>