<?php get_header(); ?>
<?php get_template_part('masthead');?>
<!-- __________________________CONTENT AREA__________________________-->
<div class="container-fluid">
		<!-- STARTOF POST LIST  -->
		<?php if ( have_posts() ) :?>
				<!-- STARTOF MAIN LOOP -->
				<?php while ( have_posts() ) : the_post();?>


<!--______________________________ POST _____________________________-->

		<div class="container-fluid panel">
		<div class="row">
		<!--post thumbnail-->
		<?php if(has_post_thumbnail()):?>
			<div class="col-md-2">
				<a href="<?php the_permalink()?>"><?php the_post_thumbnail();?></a>
			</div>
		  <div class="col-md-10 panel-body">
		<?php else: ?>
			<div class="panel-body">
		
 		<?php endif;?>

		  
		<!-- title, link, author name and publish date -->
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

		<!-- post excerpt -->
		<?php the_excerpt(); ?>

		<!-- comment stats -->
		<p>
		<?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');?>
		</p>
		  </div>
		</div>
</div>
<!--____________________________ ENDOF POST __________________________-->


				<?php endwhile;?>
				<!-- ENODF MAIN LOOP -->		

		<?php else :?>
			<h2>Sorry No Posts Found </h2>
			<p>Try searching for something else </p>
			<p><a href="<?php echo get_option('home');?>">Return to Homepage</a></p>

		<?php endif;?>
		<!-- ENDOF POST LIST  -->
  
</div>
<!-- _______________________ENDOF CONTENT AREA______________________ --> 


<?php get_footer(); ?>