<?php
/*
Template Name: Accommodation
*/
get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php endwhile; else : 

//if there isnt any content, show this.	
echo '<p> Sorry, no posts matched your criteria. </p>';

//end the loop
endif;




//get the footer
get_footer();
?>