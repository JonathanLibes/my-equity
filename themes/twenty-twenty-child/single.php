<?php

/**
 * 
 * Single Post Template
 * 
 */

get_header();

?>


<?php
// $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish',)); ?>

<div class="container-fluid">
    <div class="row">

        <?php if ($wpb_all_query->have_posts()) : ?>
            <div class="col-lg-9">
                <div class="blog-posts">
                    <!-- the loop -->
                    <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
                        <div class="blog-post">
                            <img src="<?= get_field("blog_image")["url"]; ?>" alt="">
                            <h6 class="blog-post-title"><?= the_title(); ?></h6>

                            <p class="blog-excerpt"><?= get_field("excerpt"); ?></p>
                        </div>
                    <?php endwhile; ?>
                    <!-- end of the loop -->
                </div>
            </div>
            <div class="col-lg-3">
                <div class="blog-sidebar">
                    <h6>Follow Us:</h6>
                    <div class="social">
                        <ul>
                            <li>
                                <a target="_blank" href="<?= $instagram ?>">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="<?= $linkedin ?>">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="<?= $facebook ?>">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <img class="advertisements" src="<?= get_field("advertisement", "options"); ?>" alt="Ads">
                </div>
            </div>
    </div>
    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>

<?php get_footer(); ?>