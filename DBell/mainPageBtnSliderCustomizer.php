<?php 
/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function main_page_btn_slider_customizer( $wp_customize ) {
  
  //create array to be used by selection box
   $pages = get_pages(array('sort_column' => 'menu_order'));
  	foreach ($pages as $page) 
  	{
   	$tmp[$page->post_title]=$page->post_title;
	} 
  
  
   ////////////////////////////SOCIAL MAIN PAGE BUTTON SLIDER SECTION//////////////////////////////////    
	$wp_customize->add_section
	 (
       	'Main_Page_Btn_Slider',
			array
			(
            'title' => 'Main Page Button Slider',
            'description' => 'This allows you to configure the button slider on the main page',
            'priority' => 40,
        	)
    );
  //******************************************ADD CONTROLS*********************************************

   for ($y=0; $y < count($pages); $y++) 
  	{
   	$wp_customize->add_setting($pages[$y]->post_title);
  
   	$wp_customize->add_control
		(
			$pages[$y]->post_title,
    		array
			(
				'type' => 'textarea',
        		'label' => $pages[$y]->post_title,
			 	'section' => 'Main_Page_Btn_Slider',
    		)
		);
	}
  //***************************************ENDOF CONTROLS*****************************************
  
  ////////////////////////////ENDOF MAIN PAGE BUTTON SLIDER SECTION///////////////////////////////  
}
add_action( 'customize_register', 'main_page_btn_slider_customizer' );
?>

