<?php

/**
 * 
 * Template Name: Strategy Page
 * 
 */

$housing_merket = get_field("housing_market");
$family_rentals = get_field("single_family_rentals");
$new_construction = get_field("new_construction");
$investment_strategy = get_field("investment_strategy");
$investment_strategy_mobile = array_merge($investment_strategy["circles_row_one"], $investment_strategy["circles_row_two"]);
?>
<?php get_header(); ?>

<div class="jumbotron strategy-hero m-hide" style="background-image: url(<?= get_field("hero_background_desktop")["sizes"]["large"] ?>)">
    <h2 class="page-title">STRATEGY</h2>
</div>
<div class="jumbotron strategy-hero d-hide" style="background-image: url(<?= get_field("hero_background_mobile")["sizes"]["large"] ?>)">
    <h2 class="page-title">STRATEGY</h2>
</div>

<div class="jumbotron housing-market">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3><?= $housing_merket["title"] ?></h3>
            </div>
        </div>
        <div class="row m-hide">

            <?php foreach ($housing_merket["circles"] as $key => $circle) : ?>

                <div class="col-lg-4 col-12 circle-container" id="circle-one-<?= $key + 1; ?>">
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
        <div class="row d-hide" id="circle-one-mobile">


            <?php foreach ($housing_merket["circles"] as $key => $circle) : ?>

                <div class="col-lg-4">

                    <div class=" circle-container" id="circle-one-<?= $key + 1; ?>">
                        <img class="circle-icon" src="<?= $circle["icon"]["url"] ?>" alt="<?= $circle["icon"]["alt"] ?>" />

                        <div class="circle" style="background-color: <?= $circle["circle_color"] ?>">
                            <div class="triangle" style="border-top-color: <?= $circle["triangle_color"] ?>"></div>
                        </div>
                    </div>
                    <p class="label"><?= $circle["label"] ?></p>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</div>

<div class="jumbotron family-rentals">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3><?= $family_rentals["title"] ?></h3>
            </div>
        </div>
        <div class="row m-hide">

            <?php foreach ($family_rentals["cards"] as $key => $card) : ?>

                <div class="col-lg-4">

                    <div class="card">
                        <h5><?= $card["title"] ?></h5>
                        <img src="<?= $card["image"]["url"] ?>" alt="<?= $card["image"]["alt"] ?>">
                    </div>

                </div>

            <?php endforeach; ?>

        </div>
        <div class="row d-hide" id="family-rentals-cards">

            <?php foreach ($family_rentals["cards"] as $key => $card) : ?>

                <div class="col-lg-4">

                    <div class="card">
                        <h5><?= $card["title"] ?></h5>
                        <img src="<?= $card["image"]["url"] ?>" alt="<?= $card["image"]["alt"] ?>">
                    </div>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</div>


<div class="jumbotron accordion-block">
    <div class="container">
        <div class="row first-row">
            <div class="col-lg-5 col-12">
                <h3>
                    <?= $new_construction["title"] ?>
                </h3>
            </div>
            <div class="col-lg-4 col-12"><img src="<?= $new_construction["bg"] ?>" class="bg"></div>
            <div class="col-lg-3 col-12 m-hide"><img src="<?= $new_construction["bird"] ?>" class="bird"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <div class="accordion" id="accordionExample">


                    <?php foreach ($new_construction["accordion"] as $key => $item) : ?>

                        <div class="accordion-item">
                            <div class="accordion-item-header" id="heading<?= $key + 1 ?>">
                                <div data-toggle="collapse" data-target="#collapse<?= $key + 1 ?>" aria-expanded="true" aria-controls="collapse<?= $key + 1 ?>">

                                    <h5><span>&nbsp;<?= $key + 1 ?><?php if($key == 0){echo '&nbsp;';} ?></span> &nbsp;&nbsp; <?= $item["title"] ?><i class="icon fa fa-chevron-circle-right"></i></h5>
                                </div>
                            </div>

                            <div id="collapse<?= $key + 1 ?>" class="collapse <?php if ($key == 0) {
                                                                                    echo "show";
                                                                                }  ?> accordion-item-body" aria-labelledby="heading<?= $key + 1 ?>" data-parent="#accordionExample">
                                <div><?= $item["content"] ?></div>
                            </div>
                        </div>

                    <?php endforeach; ?>


                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron housing-market">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3><?= $investment_strategy["title"] ?></h3>
            </div>
        </div>
        <div class="row m-hide">
            <?php foreach ($investment_strategy["circles_row_one"] as $key => $circle_one) : ?>

                <div class="col-lg-4 circle-container" id="circle-two-<?= $key + 1; ?>">
                    <img class="circle-icon" src="<?= $circle_one["icon"] ?>" />

                    <div class="circle" style="background-color: <?= $circle_one["circle_color"] ?>">
                        <div class="triangle" style="border-top-color: <?= $circle_one["triangle_color"] ?>"></div>
                    </div>


                </div>

            <?php endforeach; ?>
            <?php foreach ($investment_strategy["circles_row_one"] as $key => $circleLabel) : ?>
                <div class="col-lg-4">
                    <p class="label"><?= $circleLabel["label"] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row m-hide">
            <?php foreach ($investment_strategy["circles_row_two"] as $key => $circle_two) : ?>

                <div class="col-lg-4 circle-container" id="circle-three-<?= $key + 1; ?>">
                    <img class="circle-icon" src="<?= $circle_two["icon"] ?>" />

                    <div class="circle" style="background-color: <?= $circle_two["circle_color"] ?>">
                        <div class="triangle" style="border-top-color: <?= $circle_two["triangle_color"] ?>"></div>
                    </div>


                </div>

            <?php endforeach; ?>
            <?php foreach ($investment_strategy["circles_row_two"] as $key => $circleLabel) : ?>
                <div class="col-lg-4">
                    <p class="label"><?= $circleLabel["label"] ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row d-hide" id="circle-two-mobile">


            <?php foreach ($investment_strategy_mobile as $key => $circle) : ?>

                <div class="col-lg-4">

                    <div class=" circle-container" id="circle-one-<?= $key + 1; ?>">
                        <img class="circle-icon" src="<?= $circle["icon"] ?>" />

                        <div class="circle" style="background-color: <?= $circle["circle_color"] ?>">
                            <div class="triangle" style="border-top-color: <?= $circle["triangle_color"] ?>"></div>
                        </div>
                    </div>
                    <p class="label"><?= $circleLabel["label"] ?></p>

                </div>

            <?php endforeach; ?>

        </div>

    </div>
</div>
<?php get_footer(); ?>