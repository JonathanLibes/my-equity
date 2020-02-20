<?php

/**
 * 
 * Template Name: About Page
 * 
 */

?>
<?php get_header(); // get header assets 
?>

<div class="about-page-content">

    <div class="jumbotron about-hero" style="background-image: url(<?= get_field("background_image")["sizes"]["large"] ?>)">
        <div class="container">
            <h2 class="page-title">ABOUT</h2>
        </div>
    </div>

    <?php $what_we_do = get_field("what_we_do"); ?>

    <div class="jumbotron housing-market what-we">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?= $what_we_do["title"] ?></h3>
                </div>
            </div>
            <div class="row m-hide">

                <?php foreach ($what_we_do["sections"] as $key => $circle) : ?>

                    <div class="col-lg-3 col-12 circle-container" id="circle-one-<?= $key + 1; ?>">
                        <img class="circle-icon" src="<?= $circle["icon"]["url"] ?>" alt="<?= $circle["icon"]["alt"] ?>" />

                        <div class="circle" style="background-color: <?= $circle["circle_colour"] ?>">
                            <div class="triangle" style="border-top-color: <?= $circle["triangle_colour"] ?>"></div>
                        </div>


                    </div>

                <?php endforeach; ?>
                <?php foreach ($what_we_do["sections"] as $key => $circleLabel) : ?>
                    <div class="col-lg-3">
                        <p class="label"><?= $circleLabel["labels"] ?></p>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="row d-hide" id="circle-one-mobile">


                <?php foreach ($what_we_do["sections"] as $key => $circle) : ?>

                    <div class="col-lg-4">

                        <div class=" circle-container" id="circle-one-<?= $key + 1; ?>">
                            <img class="circle-icon" src="<?= $circle["icon"]["url"] ?>" alt="<?= $circle["icon"]["alt"] ?>" />

                            <div class="circle" style="background-color: <?= $circle["circle_colour"] ?>">
                                <div class="triangle" style="border-top-color: <?= $circle["triangle_colour"] ?>"></div>
                            </div>
                        </div>
                        <p class="label"><?= $circle["labels"] ?></p>

                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <?php $who_we_are = get_field("who_we_are"); ?>

    <div class="jumbotron who-we-are">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <h2 class="subtitle m-hide"><?= $who_we_are["title"] ?></h2>
                    <h2 class="subtitle d-hide">WHO WE ARE</h2>
                </div>
                <div class="col-lg-10">
                    <?= $who_we_are["content"] ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    $our_team = get_field("our_team");
    ?>

    <div class="jumbotron our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?= $our_team["title"] ?></h3>
                </div>

            </div>
            <div class="row m-hide">
                <?php foreach ($our_team["team_members"] as $key => $member) : ?>

                    <div class="col-lg-3">
                        <img class="member-image" src="<?= $member["image"]["sizes"]["thumbnail"] ?>" alt="<?= $member["image"]["alt"] ?>">
                        <h5><?= $member["name"] ?></h5>
                        <p><?= $member["job_title"] ?></p>
                    </div>

                <?php endforeach; ?>
            </div>
            <div class="row d-hide team-slider">
                <?php foreach ($our_team["team_members"] as $key => $member) : ?>

                    <div class="col-lg-3">
                        <img class="member-image" src="<?= $member["image"]["sizes"]["thumbnail"] ?>" alt="<?= $member["image"]["alt"] ?>">
                        <h5><?= $member["name"] ?></h5>
                        <p><?= $member["job_title"] ?></p>
                    </div>

                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?= $our_team["cta"]["link"] ?>"><?= $our_team["cta"]["text"] ?></a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); // get footer assets 
?>