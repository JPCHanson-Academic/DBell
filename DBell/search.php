<?php get_header();?>


<?php /*____________________QUERY INIT____________________________*/?>

<?php global $query_string;
$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) 
{
  $query_split = explode("=", $string);
  $search_query[$query_split[0]] = urldecode($query_split[1]);
}

$the_query = new WP_Query($search_query);?>

<?php /*__________________ENDOF QUERY INIT________________________*/?>
  



<!--_______________________ QUERY RESULTS _________________________-->

<?php /*** insert page format header ***/?>
<?php get_template_part('page_format_header');?>

	<?php if ( $the_query->have_posts() ) : ?>
	<ul>   
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
   	 	<li>
     	   	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    		</li>   
		<?php endwhile; ?>
	</ul>

	<?php else: ?>
		<p>no results to display</p>

	<?php endif; wp_reset_postdata();?>

<?php /*** insert page format footer ***/?>
<?php get_template_part('page_format_footer');?>

<!--____________________ ENDOF QUERY RESULTS ______________________-->


<?php get_footer();?>