<?php

/**
 * 
 * Template Name: Services > Builders
 * 
 */


get_header(); // get header assets 

$page_title = get_field("page_title");
$page_content = get_field("page_content");
$builder_slider = get_field("builder_slider");
?>
<div class="jumbotron services services__builders">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 full-screen sidenav">
                <a href="/investors" class="sidemenu d-flex">
                    <p class="menu-text justify-content-center align-self-center">Investors</p>
                </a>
                <a href="/builders" class="sidemenu d-flex builder-active">
                    <p class="menu-text justify-content-center align-self-center">Builders</p>
                </a>
                <a href="/seminars" class="sidemenu d-flex">
                    <p class="menu-text justify-content-center align-self-center">Seminars</p>
                </a>
            </div>
            <div class="col-lg-11 full-screen services-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="builder-title text-center"><?= $page_title ?></h3>
                            <?= $page_content ?>
                        </div>
                    </div>
                </div>
                <div class="builder-carousel">
                    <?php foreach($builder_slider as $key => $builder): ?>
                        <div class="builder-property">
                            <img src="<?= $builder["image"]["sizes"]["medium"] ?>" alt="<?= $builder["image"]["alt"] ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // jQuery(function() {
    //     jQuery('.builder-carousel').slick({
    //         infinite: true,
    //         slidesToShow: 3,
    //         slidesToScroll: 1,
    //         autoplay: true,
    //         arrows: false,
    //         dots: true,
    //     });
    // });
</script>
<?php get_footer(); // get footer assets 
?>