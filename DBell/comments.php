<?php

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
    <div class="help">
        <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
    </div>
  <?php
    return;
  }
?>

<?php if ( have_comments() ) : ?>

   <h5>
		<?php comments_number('No Responses','One Response','% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;
	</h5>

	<ul>
      <?php wp_list_comments(); ?>
	</ul>

	<?php if($wp_query->max_num_pages > 1):?>
    <nav>
        <ul class="clearfix">
            <li><?php previous_comments_link() ?></li>
            <li><?php next_comments_link() ?></li>
        </ul>
    </nav>
	<?php endif;?>

<?php else :?>

<?php endif;?>


<?php if ( comments_open() ) : ?>

<div class="modComments">
<?php comment_form(); ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>