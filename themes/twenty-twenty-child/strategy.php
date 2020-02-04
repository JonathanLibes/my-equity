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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3><?= $family_rentals["title"] ?></h3>
            </div>
        </div>
        <div class="row">

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
        <div class="row">
            <div class="col-lg-5">
                <h3>
                    Why should I invest in new-construction?
                </h3>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">



                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <div class="accordion-item-header" id="headingOne">
                            <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                <h5><span>&nbsp;1</span> &nbsp;&nbsp; Collapsible Group Item #1<i class="icon fa fa-chevron-circle-right"></i></h5>
                            </div>
                        </div>

                        <div id="collapseOne" class="collapse show accordion-item-body" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-item-header" id="headingTwo">
                            <div data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5><span>2</span> &nbsp;&nbsp;Collapsible Group Item #1</h5>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse accordion-item-body" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
    <div class="jumbotron housing-market">
        <div class="container-fluid">
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
    <?php get_footer(); ?>