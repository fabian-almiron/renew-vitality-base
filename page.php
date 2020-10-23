<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Almiron_Digital_Group_-_Base
 */


 get_header();
 ?>

 <div class="wrapper-top">
     <div class="container" id="content" tabindex="-1">
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

         <div class="row align-items-center">
           <?php if( have_rows('content_sections') ): ?>
           <?php while( have_rows('content_sections') ): the_row(); ?>

               <?php if( have_rows('flexible_content') ): ?>
                 <?php while( have_rows('flexible_content') ): the_row(); ?>

                   <?php if( get_row_layout() == 'header_section' ): ?>

                     <div class="header-section safe_bg full_width" style="background-image: url('<?php the_sub_field('header_image');?>'); height:<?php the_sub_field('header_height');?>px;">
                       <div class="wrapper">
                         <?php the_sub_field('header_text');?>
                       </div>
                     </div>
                     <div class="form-section full_width <?php the_sub_field('hide_form'); ?>">
                       <div class="container">
                          <h4>Get a free estimate</h4>
                           <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');?>
                       </div>
                     </div>

                   <?php endif; ?>


                   <?php if( get_row_layout() == 'welcome_section' ): ?>
                     <div class="welcome-section padder_lg">
                       <div class="wrapper">
                         <div class="copy-wrap">
                           <?php the_sub_field('welcome_blurb');?>
                         </div>
                       </div>
                     </div>
                 <?php endif; ?>

                 <?php if( get_row_layout() == 'gallery_section' ): $images = get_sub_field('gallery');?>
                   <div class="galerry-section">
                     <div class="wrapper">
                       <div class="galerry-wrap">
                           <?php foreach( $images as $image ): ?>

                            <div class="gimage" style="background-image:url('<?php echo $image['url']?>')">

                            </div>

                           <?php endforeach; ?>
                       </div>
                     </div>
                   </div>
               <?php endif; ?>




                   <?php if( get_row_layout() == 'wysiwyg_content' ): ?>
                     <div class="wysiwyg-section  <?php the_sub_field('class');?>">

                         <div class="wysiwyg-wrap">
                           <?php the_sub_field('wysiwyg');?>
                         </div>

                     </div>
                 <?php endif; ?>


                 <?php if( get_row_layout() == 'showcases' ): ?>

                     <div class="showcase-section gray_bg full_width padder">

                         <di class="row wrapper">
                           <?php while ( have_rows('showcase') ) : the_row(); ?>
                           <div class="col-md-4">
                             <div class="showcase">
                               <?php the_sub_field('column_maker');?>
                             </div>
                           </div>
                           <?php endwhile; ?>
                         </div>

                 <?php endif; ?>



                 <?php if( get_row_layout() == 'accordion' ): ?>
                   <div class="accordio-wrapper container padder max-800">

                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php while ( have_rows('accordion_content') ) : the_row(); $i++; ?>
                            <div class="panel panel-default">

                         <div class="panel-heading" role="tab" id="heading-<?=$i?>">
                             <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?=$i?>" aria-expanded="true" aria-controls="collapseOne">
                                  <?php the_sub_field('title'); ?>
                                </a>
                            </h4>
                         </div>

                        <div id="collapse-<?=$i?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?=$i?>">
                          <div class="panel-body">
                            <?php the_sub_field('content'); ?>
                          </div>
                        </div>

                        </div>

                      <?php endwhile; ?>
                    </div>


                  </div><!--- accordion wrapper-->
              <?php endif; ?>





                 <?php if( get_row_layout() == 'featured_content' ): ?>

                     <div class="featured-content-section <?php the_sub_field('size');?> <?php the_sub_field('left_or_right');?>">
                       <div class="wrapper">
                       <div class="row">

                         <div class="col-md-6" style="background-image: url('<?php the_sub_field('featured_image');?>');">
                         <div class="image"></div>
                         </div>

                         <div class="col-md-6">
                           <div class="copy">
                             <?php the_sub_field('featured_text');?>
                           </div>
                         </div>

                       </div>
                       </div>
                     </div>

                 <?php endif; ?>

                 <?php if( get_row_layout() == 'cta' ): ?>
                   <div class="cta-section full_width">
                     <div class="wrapper">
                       <?php the_sub_field('cta_text');?> <a href="<?php the_sub_field('button_link');?>"><?php the_sub_field('button_text');?></a>

                     </div>
                   </div>
               <?php endif; ?>


               <?php if( get_row_layout() == 'template_parts' ): ?>
                 <div class="template-parts-section">
                   <div class="wrapper">
                     <?php the_sub_field('template');?>
                   </div>
                 </div>
             <?php endif; ?>





           <?php endwhile; ?> <!-- for flexible -->
               <?php endif; ?> <!-- for flexible --


           <?php endwhile; ?> <!-- for group --
       <?php endif; ?> <!-- for group --

         </div>
     </div><!-- .container end -->
 </div><!-- .wrapper end -->

 <?php endwhile; endif; ?>

 <?php
 get_footer();
