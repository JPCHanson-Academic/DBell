<?php get_header(); ?> 



<!--____________________________ POST LIST ___________________________-->


<?php if ( have_posts() ) : ?>

	<!-- Category Title and Description -->
	<h1><?php single_cat_title('Category: ');?> </h1>
	<p> <?php echo category_description();?></p>

	<!-- POST LOOP -->
	<?php while ( have_posts() ) : the_post();?>

		<!-- title, link, author name and publish date -->
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

		<!-- post excerpt -->
		<?php the_excerpt(); ?>

		<!-- comment stats -->
		<p>
		<?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');?>
		</p>


	<?php endwhile;?>
	<!-- ENDOF POST LOOP -->

<?php else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<!--_________________________ ENDOF POST LIST _________________________-->


<?php get_footer(); ?>
