<?php
/*
Template Name: Bookings
*/

//get the header
get_header(); 

//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="page-content">
			<div class="container">
				<div class="row">
					<aside class="col-sm-3 nvigation">
					</aside>
					<main class="col-sm-9">
						<div class="pagetitle h2 pagepadding"> 
						<h2><?php the_title(); ?></h2>
						</div>						
						<?php the_content(); ?>
					</main>
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