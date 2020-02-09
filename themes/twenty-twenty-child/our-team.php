<?php

/**
 * 
 * Template Name: Our Team Page
 * 
 */

?>
<?php get_header(); // get header assets 
?>
<div class="jumbotron hero hero-team m-hide" style="background-image: url(<?= get_field("background_image")["sizes"]["large"] ?>)">
    <div class="container">
        <h2 class="page-title">OUR TEAM</h2>
    </div>
</div>
<div class="jumbotron hero hero-team d-hide" style="background-image: url(<?= get_field("background_image_mobile")["sizes"]["large"] ?>)">
</div>

<?php $team = get_field("team_members"); ?>

<div class="jumbotron team-members">
    <div class="container">
        <?php foreach ($team as $key => $member) : ?>
            <div class="row d-flex team-member <?php if ($key == 3) {
                                                    echo "team-member-no-border";
                                                } ?>">
                <div class="col-lg-3 col-12">
                    <img class="team-member-img" src="<?= $member["thumbnail"]["sizes"]["medium"] ?>" alt="<?= $member["thumbnail"]["alt"] ?>" />
                </div>
                <div class="col-lg-9 col-12 justify-content-center align-self-center">
                    <h5 class="name"><?= $member["name"] ?></h5>
                    <p><?= $member["job_title"] ?></p>
                    <p class="text">
                        <?= $member["bio"] ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php get_footer(); // get footer assets 
?>