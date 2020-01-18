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

    <?php $who_we_are = get_field("who_we_are"); ?>

    <div class="jumbotron who-we-are">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <h2 class="subtitle"><?= $who_we_are["title"] ?></h2>
                </div>
                <div class="col-lg-10">
                    <?= $who_we_are["content"] ?>
                </div>
            </div>
        </div>
    </div>

    <?php $what_we_do = get_field("what_we_do"); ?>

    <div class="jumbotron what-we-do">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-12">
                    <h3 class="text-center"><?= $what_we_do["title"] ?></h3>
                    </div>

                <?php foreach ($what_we_do["sections"] as $key => $content) : ?>

                    <div class="col-lg-3 what-we-do-block">

                        <img id="journey-icon-<?= $key + 1 ?>" class="journey-icon j-icon-<?= $key+1 ?>" src="<?= $content["icon"]["sizes"]["medium"] ?>" alt="<?= $content["icon"]["alt"] ?>" />
                        <div id="circle-home-<?= $key+1 ?>" class="circle circle--<?= $content["angle"] ?>" style="background-color: <?= $content["circle_colour"] ?>">
                            <div class="triangle" style="border-top-color: <?= $content["triangle_colour"] ?>"></div>
                        </div>
                        <p class="labels"><?= $content["labels"] ?></p>

                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <?php
    $our_team = get_field("our_team");
    ?>

    <div class="jumbotron our-team">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3><?= $our_team["title"] ?></h3>
                </div>

                <?php foreach ($our_team["team_members"] as $key => $member) : ?>

                    <div class="col-lg-3">
                        <img class="member-image" src="<?= $member["image"]["sizes"]["thumbnail"] ?>" alt="<?= $member["image"]["alt"] ?>">
                        <h5><?= $member["name"] ?></h5>
                        <p><?= $member["job_title"] ?></p>
                    </div>

                <?php endforeach; ?>

                <div class="col-lg-12">
                    <a href="<?= $our_team["cta"]["link"] ?>"><?= $our_team["cta"]["text"] ?></a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); // get footer assets 
?>