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


		<section class="page-content contact-content">
			<div class="container">
				<div class="row">
					<main>
						<div class="col-md-6 pull-left boxborder">
						  <div class="pagetitle">
						  	<h2>CONTACT US</h2>
							<hr class="pull-left" style="width:73px; border: 1px solid #CCCCCC;">
							<br /><br /><br />



							<p> The Hand Hotel Chirk <br />
								Church Street <br />
								Chirk <br />
								Wrexham <br />
								LL14 5EY <br />
							</p>							
							<p> 
								<span style="color:#BA7783;">T</span> 01691 773472 <br />
								<span style="color:#BA7783;">E</span> info@thehandhotelchirk.co.uk
							</p>
						  		</div>
						 	<?php echo do_shortcode( '[contact-form-7 id="168" title="Contact form 1"]' ); ?>
					    </div>
						<div class="col-md-6 pull-left border1">
						  <div class="pagetitle ">
							<h2>HOTEL BOOKING ENQUIRY</h2>
							<hr style="width:73px; float:left; border: 1px solid #CCCCCC;">
							<br />
							<br />
						  </div>
						  <?php echo do_shortcode( '[contact-form-7 id="169" title="Booking Enquiry"]' ); ?>
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