<?php get_header(); ?>

<section class="page-content">
	<div class="container" style="">
		<div class="row">
			<aside class="col-sm-3 nvigation boxborder">
				<div class="row">
					<div class="col-sm-12 navstyle">
						<?php dynamic_sidebar( 'pagesidebar' ); ?> 	
					</div>
				</div>									
			</aside>
			<main class="col-sm-9 archive" style="border-left: 1px solid #cccccc;">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<div class="row item">
						<div class="col-md-4">
							<?php
							if (has_post_thumbnail()) {
								the_post_thumbnail('medium');
							} else { ?>
								<img src="<?php echo get_template_directory(); ?>/images/default.png">
							<?php } ?>	
							<a style="display:block;border-radius:0px;"class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>					
						</div>
						<div class="col-md-8">
							<div class="pagetitle h2"> 
							<h2><?php the_title(); ?></h2>
							<hr style="width:10%; float:left; border: 1px solid #CCCCCC;">
							<br />
							</div>						
							<?php the_excerpt(); ?>
							
						</div>
					</div>

				<?php endwhile; else : 
				//if there isnt any content, show this.	
				echo '<p> Sorry, no posts matched your criteria. </p>';
				//end the loop
				endif;
				?> 

			</main>
		</div>
	</div>
</section>

<?php get_footer(); ?>