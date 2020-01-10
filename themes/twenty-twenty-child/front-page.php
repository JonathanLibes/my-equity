<?php

/**
 * 
 * Template Name: Front Page
 * 
 */

?>
<?php get_header(); // get header assets 
?>
<div class="home-page-content">

    <!-- Data Analysis Section -->

    <div class="jumbotron full-screen data-analysis">
        <div class="container-fluid d-flex h-100">
            <div class="row justify-content-center align-self-center data-analysis-body">
                <div class="col-lg-1"></div>
                <div class="col-lg-7 data-analysis-body__img">
                    <img id="bg-data-analysis" src="<?= get_field("da_background_image")["sizes"]["large"] ?>" alt="Data Analysis">
                </div>
                <div class="col-lg-3 d-flex">
                    <div class="justify-content-center align-self-center">
                        <?= get_field('da_content') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Asset Management Section -->

    <div class="jumbotron full-screen asset-management">
        <div class="container-fluid d-flex h-100">
            <div class="row justify-content-center align-self-center asset-management-body">
                <div class="col-lg-1"></div>
                <div class="col-lg-7 asset-management-body__img">
                    <img id="bg-asset-management" src="<?= get_field("am_background_image")["sizes"]["large"] ?>" alt="Asset Management">
                </div>
                <div class="col-lg-3 d-flex">
                    <div class="justify-content-center align-self-center">
                        <?= get_field('am_content') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Asset Management Section -->

    <div class="jumbotron full-screen knowledge">
        <div class="container-fluid d-flex h-100">
            <div class="row justify-content-center align-self-center knowledge-body">
                <div class="col-lg-3 d-flex">
                    <div class="justify-content-center align-self-center">
                        <?= get_field('k_content') ?>
                    </div>
                </div>
                <div class="col-lg-7 knowledge-body__img">
                    <img id="bg-knowledge" src="<?= get_field("k_background_image")["sizes"]["large"] ?>" alt="Asset Management">
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>

    <!-- Start Your Journey Section -->

    <div class="jumbotron start-your-journey">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 start-your-journey-block">
                    <h4>You Choose</h4>
                </div>
                <div class="col-lg-4 start-your-journey-block">
                    <h4>We Manage</h4>

                </div>
                <div class="col-lg-4 start-your-journey-block">
                    <h4>You Enjoy</h4>

                </div>
            </div>
        </div>
    </div>

</div>
<?php get_footer(); // get footer assets 
?>