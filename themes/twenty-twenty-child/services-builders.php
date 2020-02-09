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
<div class="jumbotron services services__builders m-hide">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 sidenav">
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
            <div class="col-lg-11 services-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 body-text">
                            <h3 class="builder-title text-center"><?= $page_title ?></h3>
                            <?= $page_content ?>
                        </div>
                    </div>
                </div>
                <div class="builder-carousel">
                    <?php foreach ($builder_slider as $key => $builder) : ?>
                        <a class="builder-property" href="#">
                            <img src="<?= $builder["image"]["sizes"]["medium"] ?>" alt="<?= $builder["image"]["alt"] ?>">
                            <div class="text">
                                <h5>Virtual Tours<br />Scanned Property</h5>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="builders-mobile-inner d-hide">
    <a class="menu menu-investor" href="/investors">
        <h5>Investors&nbsp;&nbsp;<i class="fa fa-angle-right"></i></h5>
    </a>
    <a class="menu menu-builder" href="#">
        <h5>Builders&nbsp;&nbsp;<i class="fa fa-angle-down"></i></h5>
    </a>
    <div class="builders-mobile-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 body-text">
                    <h3 class="builder-title text-center"><?= $page_title ?></h3>
                    <?= $page_content ?>
                </div>
            </div>
        </div>
        <div class="container">
            <?php foreach ($builder_slider as $key => $builder) : ?>
                <a class="builder-property" href="#">
                    <img src="<?= $builder["image"]["sizes"]["medium"] ?>" alt="<?= $builder["image"]["alt"] ?>">
                    <div class="text">
                        <h5>Virtual Tours<br />Scanned Property</h5>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<?php get_footer(); // get footer assets 
?>