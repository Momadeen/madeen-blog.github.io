<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Topaz
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<div class="about-us">
							<h2>AboutUs</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin neque nec vulputate convallis. Phasellus cursus mauris sit amet nisl ultrices commodo nec et nulla. Ut faucibus gravida lobortis. Praesent egestas posuere sem, ut auctor arcu volutpat eu. Vestibulum hendrerit dignissim tortor nec pellentesque. Aliquam erat volutpat. Nam commodo justo lorem, quis pellentesque ipsum molestie eget. Aliquam semper turpis ipsum, sed mollis eros pharetra non. Integer at sem vel felis feugiat volutpat eu vitae erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In lacinia lectus pellentesque dolor condimentum, a dignissim nunc porttitor.</p>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<?php wp_nav_menu();?>

						
						<?php 
                $facebook = get_field('facebook', 100);
                $twitter = get_field('twitter');
                $google_plus = get_field('google_plus');
                $instagram = get_field('instagram');
                ?>
                <div class="our-media">
                    <div class="social-box">
                        <a href="https://www.facebook.com/<?php echo $facebook;?>"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="social-box">
                        <a href="https://www.facebook.com/<?php echo $twitter;?>"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="social-box">
                        <a href="https://www.facebook.com/<?php echo $google_plus;?>"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                    <div class="social-box">
                        <a href="https://www.facebook.com/<?php echo $instagram;?>"><i class="fab fa-instagram"></i></a>
                    </div>
                		</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="footer-logo">
						<?php the_custom_logo(); ?>
						<p>Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut imperdiet eu, iaculis a sem imperdiet ut imperdiet.</p>
					</div>
					</div>
				</div>
			</div><!--container-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
