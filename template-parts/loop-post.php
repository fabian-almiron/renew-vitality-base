<?php
  //thumbnail conditional setup
  if ( has_post_thumbnail() ) { $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $postthumburl = $postthumb['0']; }
  elseif (get_field('default_post_image','option')){ $postthumburl = get_field('default_post_image','option'); }
  else {   $postthumburl = "http://via.placeholder.com/350x150?text=";
    //get_template_directory_uri() . '/inc/img/default-image.jpg';
  }
?>
<div class="card mb-3">
  <img src="<?php echo $postthumburl; ?>" class="card-img-top" alt="<?php the_title(); ?>"/>
  <div class="card-body">


    <h4 class="card-title">
      <a href="<?php the_permalink();?>" title="<?php the_title();?>">
        <?php the_title();?>
      </a>
      <br/>
      <small class="date text-muted">
          <?php echo get_the_date( 'F j, Y' ); ?>
      </small>
    </h4>
    <div class="card-text">
      <?php the_excerpt();?>
    </div>
    <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="btn btn-secondary">Read More <i class="fa fa-angle-right"></i> </a>

  
</div><!-- end .card-body -->
</div><!-- end .card -->
