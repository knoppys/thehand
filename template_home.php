<?php
/*
Template Name: Home
*/

//get the header
get_header(); 

//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="home-slider">
	<div class="container-fluid">
		<div class="row" id="slider">
		<?php if( have_rows('slides') ):
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
		
		    <?php endwhile; else : endif; ?>
		</div>		
	</div>
</section>

<section class="pagelinks">
	<div class="container">
		<div class="row">
			<?php
			$args = array( 'include' => '6,18,28', 'post_type' => 'page', 'order' => 'ASC' );			
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>			
					<div class="col-sm-4">
						<center>
							<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
								<?php the_post_thumbnail('medium'); ?>
								<p style="color:#420f16;font-weight:bold;font-size:16px;text-transform:uppercase;"><?php the_title(); ?></p>
								<p><?php the_excerpt(); ?></p>
							</a>	
						</center>
					</div>
			<?php endforeach; 
			wp_reset_postdata();?>
		</div>
	</div>
</section>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center>
					<main>
						<?php the_title('<h1>','</h1>'); ?>
						<hr style="width:73px; float:middle; border: 1px solid #CCCCCC;">
						<div class="home-content"><?php the_content(); ?></div>
					</main>
				</center>		
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 callout">
				<div class="row">
					<div class="col-sm-9 callouttable">
						<p style="color:#420f16;font-size:16px;text-transform:uppercase;"><?php the_field('call_out_text'); ?></p>
					</div>
					<div class="col-sm-3 callouttable-button">						
						<a class="btn btn-primary" href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 <br />
 


<?php endwhile; else : 

//if there isnt any content, show this.	
echo '<p> Sorry, no posts matched your criteria. </p>';

//end the loop
endif;




//get the footer
get_footer();
?>