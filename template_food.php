<?php
/*
Template Name: Food
*/
get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="home-slider">
	<div class="container-fluid">
		<div class="row">
		<?php if( have_rows('foods') ):
		    while ( have_rows('foods') ) : the_row(); ?>
		    	<div class="col-md-12" style="background: url(<?php the_sub_field('food_image'); ?>) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; background-size: cover;">
		    		<div class="container">
		    			<div class="row">
			    			<div class="col-md-7 home-slide">
			    				<h1><?php the_sub_field('food_title'); ?></h1>
			    				<span style="display:block;width:100%;"></span>
			    				<p><?php the_sub_field('food_content'); ?></p>
			    			</div>
			    		</div>
		    		</div>
		    	</div>
		    <?php endwhile; else : endif; ?>
		</div>		
	</div>
</section>
<section class="content">
	<div class="container">
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
<?php endwhile; else : 

//if there isnt any content, show this.	
echo '<p> Sorry, no posts matched your criteria. </p>';

//end the loop
endif;




//get the footer
get_footer();
?>