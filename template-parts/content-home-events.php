<?php

// WP_Query arguments
$args = array (
	'post_type'              => array( 'event' ),
	'posts_per_page'         => 3,
);

// The Query
$events = new WP_Query( $args );

// The Loop
if ( $events->have_posts() ) {
	echo '<div class="row">';
	while ( $events->have_posts() ) {
		$events->the_post(); ?>

			<div class="col-sm-4 featured-image">
				<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?> "> 
					<?php 
		                if (has_post_thumbnail()) { the_post_thumbnail('medium'); } 
		                else { echo '<img src="'.get_template_directory_uri().'/images/default.png">'; }         
					?>
				<h3 class="event-title"><?php the_title(); ?></h3>
				<p> <?php the_excerpt(); ?> </p>
				</a>
			</div>

<?php	}
echo '</div>';
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();

?>