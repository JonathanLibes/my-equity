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
    <div class="jumbotron full-screen data-analysis">

        <div class="container-fluid d-flex h-100">

            <div class="row justify-content-center align-self-center data-analysis">
                <div class="col-lg-1"></div>
                <div class="col-lg-7 data-analysis__img">
                    <img id="bg-data-analysis" src="<?= get_field("da_background_image")["sizes"]["large"] ?>" alt="Data Analysis">
                </div>
                <div class="col-lg-3">
                    <?= get_field('da_content') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron full-screen xyz-asset-management">
        <div class="container">
            <h2>Assets Management</h2>

        </div>
    </div>
    <div class="jumbotron full-screen xyz-knowledge">
        <div class="container">
            <h2>Knowledge</h2>

        </div>
    </div>
</div>
<?php get_footer(); // get footer assets 
?>