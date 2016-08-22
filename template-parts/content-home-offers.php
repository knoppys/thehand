<?php

// WP_Query arguments
$args = array (
	'post_type'              => array( 'offer' ),
	'posts_per_page'         => 1,
);

// The Query
$offers = new WP_Query( $args );

// The Loop
if ( $offers->have_posts() ) {
	echo '<div class="row">';
	while ( $offers->have_posts() ) {
		$offers->the_post(); ?>

			<div class="col-md-12 featured-image-offers">
				<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"> 
					<?php 
	                if (has_post_thumbnail()) { the_post_thumbnail('medium'); } 
	                else { echo '<img src="'.get_template_directory_uri().'/images/default.png">'; }         
					?>				
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