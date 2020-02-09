<?php

/**
 * 
 * Template Name: Contact Page
 * 
 */

get_header(); // get header assets 

$background_desktop = get_field("background_image_desktop")["sizes"]["large"];
$background_mobile = get_field("background_image_mobile")["sizes"]["large"];
$bird_image = get_field("bird_image")["sizes"]["large"];
$contact_title = get_field("contact_title");
$contact_subtitle = get_field("contact_subtitle");
$register = get_field("register_button");
?>

<div class="jumbotron contact-page-hero m-hide" style="background-image: url(<?= $background_desktop ?>)">
    <img class="bird-image" src="<?= $bird_image ?>" alt="Bird">
</div>
<div class="jumbotron contact-page-hero d-hide" style="background-image: url(<?= $background_mobile ?>)">
</div>
<div class="contact-page-form">
    <h2 class="title"><?= $contact_title ?></h2>
    <h3 class="subtitle"><?= $contact_subtitle ?></h3>
    <?php echo do_shortcode('[contact-form-7 id="223"]'); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h4 class="text-center">
                    Recieve 10% off from the seminars if you follow us on:
                </h4>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 social-promotion">
                <a href="#facebook"><i class="fa fa-facebook"></i>&nbsp;&nbsp;Follow</a>
                <a href="#linkedin"><i class="fa fa-linkedin"></i>&nbsp;&nbsp;Follow</a>
                <a href="#instagram"><i class="fa fa-instagram"></i>&nbsp;&nbsp;Follow</a>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

    <!-- <div class="contact-cta container">
        <div class="row">
            <div class="col-lg-6 columns">
                <a href="<?= $register["link"] ?>" class="register-seminar other-cta">I'm new<br/>Learn how to invest</a>
            </div>
            <div class="col-lg-6 columns">
                <a href="<?= $register["link"] ?>" class="register-seminar other-cta">I'm a professional<br />Learn how to improve</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 columns">
                <a href="<?= $register["link"] ?>" class="register-seminar large-button"><?= $register["text"] ?></a>
            </div>
        </div>
    </div> -->
</div>

<?php get_footer(); // get footer assets 
?>