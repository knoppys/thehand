<?php
/*
Template Name: Default
*/

//get the header
get_header(); 

//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="home-slider">
			<div class="container-fluid">
				<div class="row" id="slider">

					<?php
					if (get_field('slides')) {
						if( have_rows('slides') ):
						    while ( have_rows('slides') ) : the_row(); ?>
						   
						    	<div class="col-md-12" style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat center center scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; background-size: cover;">
						    		<div class="row">
						    			<div class="container">
						    				<div class="row">	    					
					    						<div class="col-md-6 home-slide">
								    				<h1><?php the_sub_field('slide_title'); ?></h1>
								    				<span style="display:block;width:100%;"></span>
								    				<p><?php the_sub_field('slide_content'); ?></p>
								    			</div>	    					
						    				</div>
						    			</div>
						    		</div>
						    	</div>
						
						    <?php endwhile; else : 				    	
						endif;
					} else {
						if( have_rows('slides',4) ):
						    while ( have_rows('slides',4) ) : the_row(); ?>
						   
						    	<div class="col-md-12" style="background: url(<?php the_sub_field('background_image',4); ?>) no-repeat center center scroll;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; background-size: cover;">
						    		<div class="row">
						    			<div class="container">
						    				<div class="row">	    					
					    						<div class="col-md-6 home-slide">
								    				<h1><?php the_sub_field('slide_title'); ?></h1>
								    				<span style="display:block;width:100%;"></span>
								    				<p><?php the_sub_field('slide_content',4); ?></p>
								    			</div>	    					
						    				</div>
						    			</div>
						    		</div>
						    	</div>
						
						    <?php endwhile; else : 				    	
						endif;
					} ?>
				
				</div>		
			</div>
		</section>

		<section class="page-content">
			<div class="container" style="">
				<div class="row">
					<aside class="col-sm-3 nvigation boxborder">
						<div class="row">
							<div class="col-sm-12 navstyle">
								<?php dynamic_sidebar( 'pagesidebar' ); ?> 	
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 menudownload">
								<center>								
									<?php if (get_field('menu_link')) { ?>
										<img height="auto" max-width="230px" src="<?php the_field('menu_image'); ?>" />
										<a target="_blank" href="<?php the_field('menu_link'); ?>"class="btn btn-primary"><i class="fa fa-download"></i>  Download</a>
									<?php } else {} ?>
							 		
								</center>	
							</div>
						</div>					
					</aside>
					<main class="col-sm-9" style="border-left: 1px solid #cccccc;">

						<div class="pagetitle h2"> 
						<h2><?php the_title(); ?></h2>
						<hr style="width:10%; float:left; border: 1px solid #CCCCCC;">
						<br />
						</div>						
						<?php the_content(); ?>
						<br />
						<br />

					</main>
				</div>
			</div>
		</section>

		<?php 
			if (get_field('call_out_text')) { ?>
				<section class="content" style="padding:36px!important;">
					<div class="container">
						<div class="row">
							<div class="col-md-12 callout">
								<div class="row">
									<div class="col-sm-9 callouttable">
										<p style="color:#420f16;font-size:16px;text-transform:uppercase;"><?php the_field('call_out_text'); ?>
										</p>
									</div>
									<div class="col-sm-3 callouttable-button">						
										<a class="btn btn-primary" href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php } else { ?>
				<section class="content" style="padding:36px!important;">
					<div class="container">
						<div class="row">
							<div class="col-md-12 callout">
								<div class="row">
									<div class="col-sm-9 callouttable">
										<p style="color:#420f16;font-size:16px;text-transform:uppercase;"><?php the_field('call_out_text',4); ?></p>
									</div>
									<div class="col-sm-3 callouttable-button">						
										<a class="btn btn-primary" href="<?php the_field('button_link',4); ?>"><?php the_field('button_text',4); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php } ?>
		

<?php endwhile; else : 

//if there isnt any content, show this.	
echo '<p> Sorry, no posts matched your criteria. </p>';

//end the loop
endif;




//get the footer
get_footer();
?>