<?php get_header(); ?>


<!-- _________________________ 404 MESSAGE __________________________-->


			<h1 class="page-title"><?php _e( 'Not Found'); ?></h1>


			<div>
				<p>
				 <?php _e( 'It looks like nothing was found at this location. Maybe try a search?'); ?> 
			  	</p>

				<?php get_search_form(); ?>
			</div>

<!--_______________________ ENDOF 404 MESSAGE _______________________-->


<?php get_footer();?>
