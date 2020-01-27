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

    <a href="<?= $register["link"] ?>" class="register-seminar"><?= $register["text"] ?></a>
</div>

<?php get_footer(); // get footer assets 
?>