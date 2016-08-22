<?php
/*
Template Name: Page
*/

//get the header
get_header(); 

//start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part('templates-parts/content-slider'); ?>

		<section class="page-content">
			<div class="container">
				<div class="row">
					<aside class="col-sm-3 navigation">
						<?php dynamic_sidedar('pageSidebar'); ?>
					</aside>
					<main class="col-sm-9">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</main>
				</div>
			</div>
		</section>

<?php 	get_template_part('templates-parts/content-callout');

endwhile; else : 

//if there isnt any content, show this.	
echo '<p> Sorry, no posts matched your criteria. </p>';

//end the loop
endif;




//get the footer
get_footer();
?>