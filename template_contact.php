<?php
/*
Template Name: Contact
*/

//get the header
get_header(); //start the page loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="home-slider">
			<div class="container-fluid">
				<div class="row">
					<?php
					$location = get_field('contact_map');
					if( ! empty($location) ):
					?>
					<div id="map" style="width: auto;height: 400px;"></div>
					<script src='http://maps.googleapis.com/maps/api/js?sensor=false' type='text/javascript'></script>

					<script type="text/javascript">
					  //<![CDATA[
						function load() {
						var lat = <?php echo $location['lat']; ?>;
						var lng = <?php echo $location['lng']; ?>;
					// coordinates to latLng
						var latlng = new google.maps.LatLng(lat, lng);
					// map Options
						var myOptions = {
						scrollwheel: false,
						draggable: false,
						zoom: 17,
						center: latlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					   };
					//draw a map
						var map = new google.maps.Map(document.getElementById("map"), myOptions);
						var marker = new google.maps.Marker({
						position: map.getCenter(),
						map: map
					   });
					}
					// call the function
					   load();
					//]]>
					</script>
					<?php endif; ?> 

				   </div>
				</div>		
		</section>

		<section class="address">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<center>
							<p>Church Street &bull; Chirk &bull; Wrexham &bull; LL14 5EY</p>
							<p><a style="color:#fff!important" href="tel:01691773472"><i class="fa fa-phone"></i> 01691 773 472</a></p>
							<p><a style="color:#fff!important" href="mailto:info@thehandhotelchirk.co.uk"><i class="fa fa-envelope"></i> info@thehandhotelchirk.co.uk</a></p>
						</center>
					</div>
				</div>
			</div>
		</section>
		<section class="page-content contact-content">
			<div class="container">
				
				<div class="row">
					<main>						
						<div class="col-md-12 pull-left boxborder">	
						<?php get_template_part('template-parts/pageheader'); ?>					
						<p><?php the_content(); ?></p>		
						<div class="contactform">
							<center><?php echo do_shortcode( '[contact-form-7 id="168" title="Contact form 1"]' ); ?></center>
						</div>
					</main>
				</div>
			</div>

		</section>
<?php
endwhile; else : 

//if there isnt any content, show this.	
echo '<p> Sorry, no posts matched your criteria. </p>';

//end the loop
endif;




//get the footer
get_footer();
?>