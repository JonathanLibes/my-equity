<?php

/**
 * 
 * Template Name: Our Partners Page
 * 
 */

?>
<?php get_header(); // get header assets 
?>
<div class="jumbotron hero hero-team" style="background-image: url(<?= get_field("background_image")["sizes"]["large"] ?>)">
    <div class="container">
        <h2 class="page-title">OUR PARTNERS</h2>
    </div>
</div>

<?php $partners = get_field("partners");
$length = count($partners);
?>

<div class="jumbotron team-members">
    <div class="container">
        <?php foreach ($partners as $key => $partner) : ?>
            <div class="row d-flex team-member partner">
                <div class="col-lg-3">
                    <img class="partner-logo" src="<?= $partner["thumbnail"]["sizes"]["medium"] ?>" alt="<?= $partner["thumbnail"]["alt"] ?>" />
                </div>
                <div class="col-lg-9 justify-content-center align-self-center">
                    <p>
                        <?= $partner["bio"] ?>
                    </p>
                </div>
            </div>
            <?php if ($key+1 != $length) : ?>
                <hr>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>


<?php get_footer(); // get footer assets 
?>