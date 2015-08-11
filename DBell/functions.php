<?php 

	function import_javascript($test)
	{
	  $startTag = "<script>";
	  $endTag = "</script>";
	  
	  $firstPart2 = '<script src="js/'.$test.'.js"></script>';
	  $firstPart = " <script>$('head').append('".$firstPart."')</script>";
	  
	  echo($firstPart);
	}


?>
