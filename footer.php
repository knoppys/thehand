	</div>
		<footer>

			<?php 
			if (is_page('36')) {} else { ?>
				<section class="footer-loops">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<div class="event">
								<h3>Events</h3>
								</div>
								<?php get_template_part('template-parts/content-home-events'); ?>
							</div>
							
							<div class="col-md-3">
								<div class="event">
								<h3>Offers</h3>
								</div>
								<?php get_template_part('template-parts/content-home-offers'); ?>
							</div>
						</div>
					</div>
				</section>
			<?php } ?>

			<section class="footer-widgets content">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<p class="footertext">Contact</p>
							<p> The Hand Hotel Chirk <br />
								Church Street <br />
								Chirk <br />
								Wrexham <br />
								LL14 5EY <br />
							</p>							
							<p> <span style="color:#BA7783;">T</span> 01691 773472 <br />
								<span style="color:#BA7783;">E</span> info@thehandhotelchirk.co.uk
							</p>
							<p> 
							<a href="https://www.facebook.com/The-Hand-Hotel-Chirk-216180086205/" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/handhotel" target="_blank"><i class="fa fa-twitter"></i></a>
							</p>
						</div>
						<div class="col-sm-3"> 
							<p class="footertext">Latest News</p>
							<?php

							// WP_Query arguments
							$args = array (
								'post_type'              => array( 'post' ),
								'posts_per_page'         => 3,
							);

							// The Query
							$events = new WP_Query( $args );

							// The Loop
							if ( $events->have_posts() ) {
								
								while ( $events->have_posts() ) {
									
									$events->the_post(); ?>
									<div class="row" style="padding-bottom:10px;">
								  		<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?> "> 
 											
											<div class="col-xs-2 widget-title img">
												<?php 
									                if (has_post_thumbnail()) { the_post_thumbnail('medium'); } 
									                else { echo '<img src="'.get_template_directory_uri().'/images/default.png">'; }         
												?>
											</div>
											<div class="col-xs-10">
												<h3 class="event-title"><?php the_title(); ?></h3>
										    </div>
									           
									    </a>
									</div>
							<?php	}
							
							} else {
								// no posts found
							}

							// Restore original Post Data
							wp_reset_postdata();

							?>
						</div>
						
						<div class="col-sm-3">
							<p class="footertext">Facebook</p>
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "http://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=441105649245578";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							<div class="fb-page" data-href="https://www.facebook.com/The-Hand-Hotel-Chirk-216180086205/" data-tabs="timeline" data-width="300" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/The-Hand-Hotel-Chirk-216180086205/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/The-Hand-Hotel-Chirk-216180086205/">The Hand Hotel Chirk</a></blockquote></div>
						</div>
						<div class="col-sm-3">
							<p class="footertext">Restaurant Hours</p>
							<p> Our reception is open until 12:00 am 7 days a week.</p>
							<p class="footertext">Lunch Served</p>
							<p><b>Monday-Friday:</b> 12pm to 2.30pm</p>
							<p class="footertext">Evening Meals Served</p>
							<p><b>Monday-Friday:</b> 6pm to 7.30pm</p>
						</div>
					</div>
				</div>	
			</section>

			<section class="footernav">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p class="footernavtext">&#169; Copyright - The Hand Hotel Chirk</p>
							<p style="color:#420f16; font-weight:bold;">Website by <a style="color:#420f16; font-weight:bold;" href="http://www.knoppys.co.uk" target="_blank" title="Web Design, Web Development and SEO in Wrexham">Knopys Digital Limited</a></p>
						</div>
						<div class="col-md-6 pull-right">
							<div class="bottomnav"><?php wp_nav_menu( array('menu'=>'footer') ); ?></div>			
						</div>									
					</div>
				</div>
			</section>
		</footer>
<?php wp_footer(); ?>
</body>
</html>