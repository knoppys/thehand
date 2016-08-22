<?php
//include the debuf file
//include 'debug.php';
?>
<!DOCTYPE html>
<html>
<head>
 <title><?php bloginfo( 'name' ); ?></title> 
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>
<body>
<header class="home-naviagtion" id="sticky"> 	
		<nav class="navbar navbar-default">
	  		<div class="container">   
		    	<div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a href="<?php echo get_site_url(); ?>" class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" title="Hand Hotel Chirk" alt="The Hand Hotel Chirk"></a>
			 	</div>	 

 				<?php
			        wp_nav_menu( array(
			            'menu'              => 'primary',
			            'theme_location'    => 'primary',
			            'depth'             => 2,
			            'container'         => 'div',
			            'container_class'   => 'collapse navbar-collapse',
			    		'container_id'      => 'bs-example-navbar-collapse-1',
			            'menu_class'        => 'nav navbar-nav pull-right',
			            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			            'walker'            => new wp_bootstrap_navwalker())
			        );
			    ?>
	    

	  
	  </div><!-- /.container-fluid -->
	</nav>
</header>








