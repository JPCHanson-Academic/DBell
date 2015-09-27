<!--required scripts-->
<?php wp_enqueue_script('googleplus', 'https://apis.google.com/js/platform.js', false, NULL, true);?>
<?php wp_enqueue_script('twitter',get_template_directory_uri().'/js/twitterBtn.js',false, NULL, true);?>
<?php wp_enqueue_script('facebook',get_template_directory_uri().'/js/facebookBtn.js',false, NULL, true);?>
<?php wp_enqueue_script('slide',get_template_directory_uri().'/js/socialMediaPanel.js',false, NULL, true);?>

<?php if( get_theme_mod( 'socialPanelHideShow' ) == '1') { ?>

<?php
    $panel_position = get_theme_mod( 'panel_placement' );
    if( $panel_position != '' ) {
        switch ( $panel_position ) 
		  {
            case 'topleft':
					echo('<div id="socialMediaPanelLeft">');
			 echo('<div id="SocialLabelTopLeft"><b>Share</b></div>');
			 		echo('<div id="socialBtnContainerTopLeft">');
            break;
			 
            case 'topright':
			 		echo('<div id="socialMediaPanelRight">');
			 		echo('<div id="SocialLabelTopRight"><b>Share</b></div>');
			 		echo('<div id="socialBtnContainerTopRight">');
            break;
			 
            case 'bottomleft':
			 		echo('<div id="socialMediaPanelLeft">');
               echo('<div id="SocialLabelBottomLeft"><b>Share</b></div>');
			 		echo('<div id="socialBtnContainerBottomLeft">');
            break;
			 
			 	case 'bottomright':
			 		echo('<div id="socialMediaPanelRight">');
               echo('<div id="SocialLabelBottomRight"><b>Share</b></div>');
			 		echo('<div id="socialBtnContainerBottomRight">');
            break;
        }
    }
?>


  <!--buttons-->
	<?php if( get_theme_mod( 'googlePlus' ) == '1') { ?>
		<div id="googlePlusBtn">
			<div id="googlePlusBtn" class="g-plusone" data-size="tall" data-annotation="none" data-recommendations=false>test</div><br>
		</div>
	<?php }?>
		
	<?php if( get_theme_mod( 'twitter' ) == '1') { ?>
		<div id="twitterBtn">
			<a id="twitterBtn" href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><br>
		</div>
	<?php }?>
		
	<?php if( get_theme_mod( 'facebook' ) == '1') { ?>
		<div id="facebookBtn">
			<div class="fb-share-button" data-layout="button"></div><br>
		</div>
	<?php }?>
		
	<?php if( get_theme_mod( 'linkedIn' ) == '1') { ?>
		<div id="linkedInBtn">
			<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
			<script type="IN/Share" data-counter="none"></script>
		</div>
	<?php }?>
  </div>
  
</div>
<?php } ?>
