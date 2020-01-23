<?php

/**
 * 
 * Template Name: Services > Seminars
 * 
 */

?>

<?php get_header(); // get header assets 

$invest1 = get_field("investors_recieve");
// var_dump($inves1);
?>

<div class="jumbotron services services__seminars">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 sidenav">
                <a href="/investors" class="sidemenu d-flex">
                    <p class="menu-text justify-content-center align-self-center">Investors</p>
                </a>
                <a href="/builders" class="sidemenu d-flex">
                    <p class="menu-text justify-content-center align-self-center">Builders</p>
                </a>
                <a href="/seminars" class="sidemenu d-flex seminar-active">
                    <p class="menu-text justify-content-center align-self-center">Seminars</p>
                </a>
            </div>
            <div class="col-lg-11 service-body">
                <div class="seminar-carousel">

                    <?php
                    $wpb_all_query = new WP_Query(array('post_type' => 'seminar', 'post_status' => 'publish')); ?>

                    <?php if ($wpb_all_query->have_posts()) : ?>

                        <!-- the loop -->
                        <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>


                            <div>

                                <?php
                                $left_column = get_field("left_chapters");
                                $right_column = get_field("right_chapters");
                                ?>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-8">
                                        <h4 class="seminar-title"><?= the_title(); ?></h4>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="register">Register Today</a>
                                        </div>
                                    </div>
                                </div>


                                <?php if ($left_column !== null && $right_column !== null) : ?>
                                    <div class="container-fluid">

                                        <div class="row">
                                            <div class="col-lg-6 left-column">
                                                <?php foreach ($left_column as $chapter_key => $chapter) : ?>
                                                    <div class="units">
                                                        <h5 class="unit-title"> <span><?= $chapter["chapter_number"] ?></span>
                                                            <br /><?= $chapter["name_of_the_chapter"] ?></h5>
                                                        <?php foreach ($chapter["units"] as $key => $unit1) : ?>
                                                            <?php foreach ($unit1 as $unit_key => $unit) : ?>
                                                                <li><?= $unit ?></li>
                                                            <?php endforeach; ?>
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="col-lg-6 right-column">
                                                <?php foreach ($right_column as $chapter_key => $chapter) : ?>
                                                    <div class="units">
                                                        <h5 class="unit-title"> <span><?= $chapter["chapter_number"] ?></span>
                                                            <br /><?= $chapter["name_of_the_chapter"] ?></h5>
                                                        <?php foreach ($chapter["units"] as $key => $unit2) : ?>
                                                            <?php foreach ($unit2 as $unit_key => $unit) : ?>
                                                                <li><?= $unit ?></li>
                                                            <?php endforeach; ?>
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>



                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(function() {
        jQuery('.seminar-carousel').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            dots: true,
        });
    });
</script>
<?php get_footer(); // get footer assets 
?>