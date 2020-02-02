<?php

/**
 * 
 * Template Name: Strategy Page
 * 
 */

$housing_merket = get_field("housing_market");
$family_rentals = get_field("single_family_rentals");
?>
<?php get_header(); ?>

<div class="jumbotron strategy-hero m-hide" style="background-image: url(<?= get_field("hero_background_desktop")["sizes"]["large"] ?>)">
    <h2 class="page-title">STRATEGY</h2>
</div>
<div class="jumbotron strategy-hero d-hide" style="background-image: url(<?= get_field("hero_background_mobile")["sizes"]["large"] ?>)">
    <h2 class="page-title">STRATEGY</h2>
</div>

<div class="jumbotron housing-market">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3><?= $housing_merket["title"] ?></h3>
            </div>
        </div>
        <div class="row">

            <?php foreach ($housing_merket["circles"] as $key => $circle) : ?>

                <div class="col-lg-4 circle-container">
                    <img class="circle-icon" src="<?= $circle["icon"]["url"] ?>" alt="<?= $circle["icon"]["alt"] ?>" />

                    <div class="circle" style="background-color: <?= $circle["circle_color"] ?>">
                        <div class="triangle" style="border-top-color: <?= $circle["triangle_color"] ?>"></div>
                    </div>


                </div>

            <?php endforeach; ?>
            <?php foreach ($housing_merket["circles"] as $key => $circleLabel) : ?>
                <div class="col-lg-4">
                    <p class="label"><?= $circleLabel["label"] ?></p>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<div class="jumbotron family-rentals">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3><?= $family_rentals["title"] ?></h3>
            </div>
        </div>
        <div class="row">

            <?php foreach ($family_rentals["cards"] as $key => $card) : ?>

                <div class="col-lg-4 card">

                    <h4><?= $card["title"] ?></h4>
                    <img src="<?= $card["image"]["url"] ?>" alt="<?= $card["image"]["alt"] ?>">

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>