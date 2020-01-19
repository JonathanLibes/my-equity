<?php

/**
 * 
 * Template Name: Our Team Page
 * 
 */

?>
<?php get_header(); // get header assets 
?>
<div class="jumbotron hero hero-team" style="background-image: url(<?= get_field("background_image")["sizes"]["large"] ?>)">
    <div class="container">
        <h2 class="page-title">OUR TEAM</h2>
    </div>
</div>

<?php $team = get_field("team_members"); ?>

<div class="jumbotron team-members">
    <div class="container">
        <?php foreach ($team as $key => $member) : ?>
            <div class="row d-flex team-member">
                <div class="col-lg-2">
                    <img src="<?= $member["thumbnail"]["sizes"]["medium"] ?>" alt="<?= $member["thumbnail"]["alt"] ?>" />
                </div>
                <div class="col-lg-10 justify-content-center align-self-center">
                    <h5 class="name"><?= $member["name"] ?></h5>
                    <p><?= $member["job_title"] ?></p>
                    <p>
                        <?= $member["bio"] ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php get_footer(); // get footer assets 
?>