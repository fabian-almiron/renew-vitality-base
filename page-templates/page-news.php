<?php
/*
Template Name: News Page
*/

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="header-news padder">


</div>

<div class="wrapper container padder">

  <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

    <?php the_content(); ?>

    <?php get_template_part('template-parts/news-wrapper'); ?>
  <?php  //get_template_part('/template-parts/postnav'); ?> 

    </div><!-- .container end -->

</div><!-- .wrapper end -->


<?php
get_footer();
