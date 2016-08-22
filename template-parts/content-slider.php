<section class="home-slider">
	<div class="container-fluid">
		<div class="row">
		<?php if( have_rows('slides') ):
		    while ( have_rows('slides') ) : the_row(); ?>
		    	<div class="col-md-12" style="background: url(<?php the_sub_field('background_image'); ?>) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; background-size: cover;">
		    		<div class="row">
		    			<div class="col-md-offset-2 col-md-4 home-slide">
		    				<h1><?php the_sub_field('slide_title'); ?></h1>
		    				<span style="display:block;width:100%;"></span>
		    				<p><?php the_sub_field('slide_content'); ?></p>
		    			</div>
		    		</div>
		    	</div>
		    <?php endwhile; else : endif; ?>
		</div>		
	</div>
</section>