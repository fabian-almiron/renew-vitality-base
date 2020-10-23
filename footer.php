<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Almiron_Digital_Group_-_Base
 */

?>
</div><!-- #page -->
	<footer id="colophon" class="site-footer">
		<div class="footer-content padder">
			<div class="container">
				<div class="row">
				<div class="col-md-6 text-right">
					<img class="footer-logo" src="<?php the_field('logo','option');?>">
				</div>

				<div class="col-md-6 text-left">
						<div class="address">
							<a onclick="ga('PhoneCalls','FooterClick');" href="mailto:<?php the_field('email', 'option');?>"> <?php the_field('email', 'option');?></a><br>
							<a onclick="ga('PhoneCalls','FooterClick');" href="tel:<?php the_field('phone', 'option');?>"> <?php the_field('phone', 'option');?></a><br>
					<!-- <div class="social-icons">
							<a  href="/" target="_blank"><img src="/wp-content/uploads/2020/10/instagram-black.svg"></a>
							<a href="/" target="_blank"><img src="/wp-content/uploads/2020/10/facebook-black.svg"></a>
							<a href="/" target="_blank"><img src="/wp-content/uploads/2020/10/twitter-square-black.svg"></a>
							<a href="/" target="_blank"><img src="/wp-content/uploads/2020/10/youtube-square-black.svg"></a>
						</div> -->

					</div>
			  </div>


		</div>
			</div>
	</div>

		<div class="site-info">
				© Copyright <?php echo date("Y"); ?> <?php the_field('footer_text');?> | <a href="/privacy-policy">Privacy Policy</a> <a href="/terms">Terms & Conditions</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
