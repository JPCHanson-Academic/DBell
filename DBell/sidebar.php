	 <div data-role="panel" id="myPanel" data-display="overlay" class="">
	
		<div data-role="content" class="lower-sidebar">
		  
		  
		 <a href="<?php echo get_home_url();?>" class="ui-btn">Home</a>
		  
		  <!-- PAGE LOOP -->
		  <?php $pages = get_pages(array('sort_column' => 'menu_order'));?>

        <?php foreach ( $pages as $page ) { ?>

                <a href="<?php echo get_page_link($page->ID);?>" class="ui-btn"> 
                         <?php echo $page->post_title;?> 
                </a>
                

        <?php } ?>      
		  <!-- ENDOF PAGE LOOP --> 
		  
		  <div data-role="collapsible" data-collapsed-icon="carat-r" data-expanded-icon="carat-d">
		  		<h3>categories</h3>
    			<?php wp_list_categories('exclude=&title_li='); ?> 
		  </div>
		  
			<?php if(is_user_logged_in()):?> 
		  			<a class="ui-btn" href="<?php echo wp_logout_url();?>">Logout</a>
  			<?php else:?>
					<a class="ui-btn" href="<?php echo wp_login_url();?>">Login</a>         
 			<?php endif;?>

		  
		  	<?php get_search_form(); ?>
		  
		</div>
		  
 	 </div>
	 