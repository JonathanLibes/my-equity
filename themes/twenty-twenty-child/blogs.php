<?php

/**
 * 
 * Template Name: Blogs
 * 
 */

get_header();

$categories = get_categories();
$category = !empty($_GET["category"]) ? $_GET["category"] : $categories[0]->slug;

?>


<?php
$wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'category_name' => $category)); ?>

<div class="container-fluid">
    <div class="row">

        <?php

        foreach ($categories as $item) {
            echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
        }
        ?>

        <?php if ($category != null) : ?>

            <div class="col-lg-12 category-nav">
                <ul>
                    <?php foreach ($categories as $item) : ?>

                        <a href="?category=<?= $item->slug ?>">
                            <li><?= $item->name ?></li>
                        </a>

                    <?php endforeach; ?>
                </ul>
            </div>

        <?php endif; ?>

        <?php if ($wpb_all_query->have_posts()) : ?>
            <div class="col-lg-9">
                <div class="blog-posts">
                    <!-- the loop -->
                    <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
                        <div class="blog-post">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?= get_field("blog_image")["url"]; ?>" alt="<?= get_field("blog_image")["alt"]; ?>">
                            </a>
                            <a href="<?php the_permalink(); ?>">
                                <h6 class="blog-post-title"><?= the_title(); ?></h6>
                            </a>
                            <p class="blog-excerpt"><?= get_field("excerpt") . "..."; ?></p>
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