<!-- __________________________NAVBAR_____________________________ -->

<!-- add 'lower-navbar' class if user is logged in -->
  <?php if(is_user_logged_in()):?> 
<nav class="navbar navbar-default navbar-fixed-top lower-navbar">
  <?php else:?>
<nav class="navbar navbar-default navbar-fixed-top">	 
  <?php endif;?>
  
  
  <div class="container-fluid">
	 
	 
	 <!--NAVBAR HEADER-->
    <div class="navbar-header">
		
		
        <!-- COLLAPSED MODE BUTTON -->
         <button type="button" class="navbar-toggle opaque" data-toggle="collapse" data-target="#myNavBar">
         	<span class="icon-bar"></span>
         	<span class="icon-bar"></span>
         	<span class="icon-bar"></span>
       	</button>
        <!-- ENDOF COLLAPSED MODE BUTTON -->
		
		
		
		<!-- BRAND IMAGE/TEXT -->
		<img class="navbar-left logo opaque" alt="brand" src="http://jpchanson.jetos.com/wordpress/wp-content/uploads/logo.png"/>
       <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><div class="brand"><?php bloginfo('name'); ?></div></a>
	 	<!-- ENDOF BRAND IMAGE/TEXT -->
	 	 
    </div>
  	 <!--ENDOF NAVBAR HEADER-->
  
  
    <!-- NAVBAR BODY--> 
  	 <div class ="collapse navbar-collapse" id="myNavBar">
   	<?php $pages = get_pages(array('sort_column' => 'menu_order'));?>
  	 		<ul class="nav navbar-nav">
			  
			   
			  
			  <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Categories
				 <span class="caret"></span></a>
				 <ul class="dropdown-menu">
				 <?php wp_list_categories('exclude=&title_li='); ?>
				 </ul>
			  </li>
	 		</ul>
		
		
			<!-- RIGHT SIDE OF NAVBAR-->
			<?php if ( wp_is_mobile()==false ){ ?>
			<ul class="nav navbar-nav rightSide">
			<?php } else { ?>
  			<ul class="nav navbar-nav">
  			<?php }; ?>
				<!--LOGIN BUTTON-->
			  	<?php if(is_user_logged_in()):?> 
					<li><a class="" href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout">
			 			Logout
					  </a></li>
  				<?php else:?>
				<!--else display login button/link-->
					<li><a class="" href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">
			 			Login
					  </a></li>
  				<?php endif;?>
			  	<!--ENDOF LOGIN BUTTON-->
			  <li id="searchbar" class=""><?php get_search_form(); ?></li>
			</ul>
			<!-- ENDOF RIGHT SIDE NAVBAR -->
		
		
  	 </div>
 	 <!-- ENDOF NAVBAR BODY -->
  
</nav>
<!-- __________________________ENDOF NAVBAR_________________________ -->  