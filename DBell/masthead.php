<?php $pages = get_pages(array('sort_column' => 'menu_order'));?>


<?php if(is_user_logged_in()):?> 
<header class="lower-masthead">
  <div class="siteTitle"><h1><?php bloginfo('name'); ?></h1></div>
  <div class="btnContainer">
  	<?php foreach ( $pages as $page ) { ?>  
		<a class ="pagebuttons btn btn-lg btn-warning" href="<?php echo get_page_link($page->ID);?>"><?php echo $page->post_title;?> </a>	
  	<?php } ?>	
	</div>
</header>



  <?php else:?>
<header class="masthead">
  <div class="btnContainer">
  	<?php foreach ( $pages as $page ) { ?>  
		<a class ="pagebuttons btn btn-lg btn-warning" href="<?php echo get_page_link($page->ID);?>"><?php echo $page->post_title;?> </a>	
  	<?php } ?>	
	</div>
</header>
  <?php endif;?>
<br/><br/>