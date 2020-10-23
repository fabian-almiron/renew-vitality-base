<div id="post-nav" class="row">
    <?php $nextPost = get_next_post(true); if($nextPost) {

        ?>
    <div class="nav-box previous col-sm-6">
        <?php
            $next_post_link_url = get_permalink( get_adjacent_post(false,'',false)->ID );
            $next_post_title = get_the_title( get_adjacent_post(false,'',false)->ID );
            $next_thumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) );
        ?>
        <a href="<?php echo $next_post_link_url; ?>" title="<?php echo $next_post_title; ?>">

            <?php echo $next_thumbnail; ?>
            <div class="post_nav_inner">
                <h5 class="alt-font">PREVIOUS</h5>
                <h6><?php echo $next_post_title; ?></h6>
            </div>

            <svg class="arrow_svg" width="30" height="30" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg>
        </a>
    </div>

    <?php  } $prevPost = get_previous_post(true); if($prevPost) {
        $nextPost = get_next_post(true);
        if(!$nextPost) { $offset = "col-sm-offset-6"; }
        ?>
    <div class="nav-box next col-sm-6 <?php echo $offset; ?>">
        <?php
            $prev_post_link_url = get_permalink( get_adjacent_post(false,'',true)->ID );
            $prev_post_title = get_the_title( get_adjacent_post(false,'',true)->ID );
            $prev_thumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );
        ?>
        <a href="<?php echo $prev_post_link_url; ?>" title="<?php echo $prev_post_title; ?>">

            <?php echo $prev_thumbnail; ?>
            <div class="post_nav_inner">
                <h5 class="alt-font">NEXT</h5>
                <h6><?php echo $prev_post_title; ?></h6>
            </div>
            <svg class="arrow_svg" width="30" height="30" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg>
        </a>


    </div>
    <?php } else { ?>

        <div class="nav-box next col-sm-6 <?php echo $offset; ?>">
            <?php
                $page_id = "507";
                $image = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'thumbnail', array(100,100) );
                $image_URI = $image[0];
            ?>
            <a href="/about">

                <?php echo "<img src='".$image[0]."'>"; ?>
                <div class="post_nav_inner">
                    <h6 class="alt-font">NEXT</h6>
                </div>
                <svg class="arrow_svg" width="30" height="30" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg>
            </a>


        </div>

    <?php } ?>
</div><!--#post-nav div -->
