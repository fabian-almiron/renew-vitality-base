<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AO_Base
 */

get_header(); ?>


<div class="container padder">


		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );
            get_template_part('/template-parts/postnav');

		endwhile; // End of the loop.
		?>
</div>

<?php
get_footer();
