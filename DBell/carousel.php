<header id="myCarousel" class="carousel slide" data-ride="carousel">
  
  <?php 
		$dir= get_template_directory().'/images/carousel/';
		$files = scandir($dir);
		$sinQuote = "'";
	?>
    
 	<div class="carousel-inner" role="listbox"> 	
  		<?php
			for($i = 2; $i <= (count($files)-1); ++$i)
			{
			  	if ($i == 2 ) {echo '<div class="item active">';}
			  	else {echo '<div class="item">';}
			  echo('<div class="fill" style="background-image:url('.$sinQuote.get_stylesheet_directory_uri().'/images/carousel/'.$files[$i].$sinQuote.');"></div>');
			  //echo '<img src="'.get_stylesheet_directory_uri().'/images/carousel/'.$files[$i].'" class="carouselImg">'; 
				echo '</div>';
			}
		?>  
  </div>
	 
 
</header>
