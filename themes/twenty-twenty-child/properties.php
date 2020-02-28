<?php

/**
 * 
 * Template Name: Properties
 * 
 */

?>
<?php get_header(); // get header assets 
?>
<div class="jumbotron properties-map">
    <div class="container">
        <h2 class="page-title text-center">Properties</h2>
        <?php get_template_part("template-parts/usa-map"); ?>

    </div>
</div>

<div class="jumbotron properties-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?php get_template_part("template-parts/properties-card"); ?>
            </div>
            <div class="col-lg-4">
                <?php get_template_part("template-parts/properties-card"); ?>
            </div>
            <div class="col-lg-4">
                <?php get_template_part("template-parts/properties-card"); ?>
            </div>
            <div class="col-lg-4">
                <?php get_template_part("template-parts/properties-card"); ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); // get footer assets 
?>