<?php

/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function social_customizer( $wp_customize ) {
  
   ////////////////////////////SOCIAL MEDIA SECTION//////////////////////////////////    
	$wp_customize->add_section
	 (
       	'Social_Media',
			array
			(
            'title' => 'Social Engagement',
            'description' => 'This allows you to configure the social media panel',
            'priority' => 35,
        	)
    );
  //*******************************ADD BUTTON CHECKBOXES******************************
   $wp_customize->add_setting('socialPanelHideShow');
  
  	$wp_customize->add_control
	(
   	'socialPanelHideShow',
		array
		(
        'type' => 'checkbox',
        'label' => 'Check to show social media panel',
        'section' => 'Social_Media',
		)
	);
  
	$wp_customize->add_setting('googlePlus');
  
  	$wp_customize->add_control
	(
   	'googlePlus',
		array
		(
        'type' => 'checkbox',
        'label' => 'Add Google+ share button',
        'section' => 'Social_Media',
		)
	);
  
  	$wp_customize->add_setting('twitter');
  
  	$wp_customize->add_control
	(
   	'twitter',
		array
		(
        'type' => 'checkbox',
        'label' => 'Add Twitter share button',
        'section' => 'Social_Media',
		)
	);
  
  	$wp_customize->add_setting('facebook');
  
  	$wp_customize->add_control
	(
   	'facebook',
		array
		(
        'type' => 'checkbox',
        'label' => 'Add Facebook share button',
        'section' => 'Social_Media',
		)
	);
  
  	$wp_customize->add_setting('linkedIn');
  
  	$wp_customize->add_control
	(
   	'linkedIn',
		array
		(
        'type' => 'checkbox',
        'label' => 'Add LinkedIn share button',
        'section' => 'Social_Media',
		)
	);
  //*****************************ENDOF ADD BUTTON CHECKBOXES**************************
  
  //*****************************POSITION SOCIAL MEDIA PANEL**************************
  	$wp_customize->add_setting
	(
    	'panel_placement',
   	 array
	  	(
        'default' => 'topleft',
    	)
	);
 
	$wp_customize->add_control
	(
		'panel_placement',
    	array
		(
        'type' => 'radio',
        'label' => 'Social panel placement',
        'section' => 'Social_Media',
        'choices' => array
		  					(
           					'topleft' => 'top-left',
           					'topright' => 'top-right',
         					'bottomleft' => 'bottom-left',
			 					'bottomright' => 'bottom-right',
      					),
    	)
	);
  //*************************ENDOF POSITION SOCIAL MEDIA PANEL*************************
  ////////////////////////////ENDOF SOCIAL MEDIA SECTION///////////////////////////////  
}
add_action( 'customize_register', 'social_customizer' );

/**
 * This class defines a custom control that displays a series of checkboxes that are used to 
 * display social media icons.
 **/

?>

