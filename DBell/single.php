<?php get_header();?>
<div class="container-fluid">
<!-- __________________________CONTENT AREA__________________________-->
  <div class="panel panel-default">
 
<!-- STARTOF POST LIST  -->
<?php if ( have_posts() ) :?>
		<!-- STARTOF MAIN LOOP -->
		<?php while ( have_posts() ) : the_post();?>


<!--______________________________ POST _____________________________-->

					<div class="panel-heading">
					<!-- post title and link -->
					<h2 ><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
	 				</div>
	
	 				<div class="panel-body">
					<!-- thumbnail and link -->  
			 		<?php if(has_post_thumbnail()):?>
			  			<div>
				  			<a href="<?php the_permalink()?>"><?php the_post_thumbnail();?></a>
			  			</div>
			 		<?php endif;?>
				 	<!-- endof thumbnail and link -->

				 
			 	 	<!-- the content of the post -->
					<div data-role="main" class="ui-content content">
			   	<?php the_content(); ?>
					</div>
	 				</div>
 </div>
					<!-- the comments associated with this post -->
					<?php comments_template();?>


<!--____________________________ ENDOF POST __________________________-->


		<?php endwhile;?>
		<!-- ENODF MAIN LOOP -->		

<?php else :?>
	<h2>Sorry No Posts Found </h2>
	<p>Try searching for something else </p>
	<p><a href=<?php echo get_option('home');?>>Return to Homepage</a></p>
</div>
<?php endif;?>
<!-- ENDOF POST LIST  -->

<!-- _______________________ENDOF CONTENT AREA______________________ --> 
</div>

<?php get_footer();?>