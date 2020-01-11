<?php

/**
 * 
 * Template Name: Front Page
 * 
 */

?>
<?php get_header(); // get header assets 
?>
<div class="home-page-content">

    <!-- Data Analysis Section -->

    <div class="jumbotron full-screen data-analysis">
        <div class="container-fluid d-flex h-100">
            <div class="row justify-content-center align-self-center data-analysis-body">
                <div class="col-lg-1"></div>
                <div class="col-lg-7 data-analysis-body__img">
                    <img id="bg-data-analysis" src="<?= get_field("da_background_image")["sizes"]["large"] ?>" alt="Data Analysis">
                </div>
                <div class="col-lg-3 d-flex">
                    <div class="justify-content-center align-self-center">
                        <?= get_field('da_content') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Asset Management Section -->

    <div class="jumbotron full-screen asset-management">
        <div class="container-fluid d-flex h-100">
            <div class="row justify-content-center align-self-center asset-management-body">
                <div class="col-lg-1"></div>
                <div class="col-lg-7 asset-management-body__img">
                    <img id="bg-asset-management" src="<?= get_field("am_background_image")["sizes"]["large"] ?>" alt="Asset Management">
                </div>
                <div class="col-lg-3 d-flex">
                    <div class="justify-content-center align-self-center">
                        <?= get_field('am_content') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Asset Management Section -->

    <div class="jumbotron full-screen knowledge">
        <div class="container-fluid d-flex h-100">
            <div class="row justify-content-center align-self-center knowledge-body">
                <div class="col-lg-3 d-flex">
                    <div class="justify-content-center align-self-center">
                        <?= get_field('k_content') ?>
                    </div>
                </div>
                <div class="col-lg-7 knowledge-body__img">
                    <img id="bg-knowledge" src="<?= get_field("k_background_image")["sizes"]["large"] ?>" alt="Asset Management">
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>

    <!-- Start Your Journey Section -->

    <div class="jumbotron start-your-journey">
        <div class="container-fluid">
            <div class="row">

                <?php $journey_sections = get_field("journey_sections"); ?>

                <?php foreach ($journey_sections as $key => $section) : ?>
                    <div class="col-lg-4 start-your-journey-block">
                        <h4><?= $section["title"] ?></h4>
                        <img id="journey-icon-<?= $key + 1 ?>" class="journey-icon" src="<?= $section["icon"]["sizes"]["medium"] ?>" alt="<?= $section["icon"]["alt"] ?>">
                    </div>
                <?php endforeach; ?>
                <?php $journey_cta = get_field("journey_call_to_action"); ?>
                <div class="col-lg-12">
                    <a class="journey_cta" href="<?= $journey_cta["link"] ?>"><?= $journey_cta["text"] ?></a>
                </div>

            </div>
        </div>
    </div>

    <!-- Why Invest Section -->

    <div class="jumbotron why-invest">
        <div class="container-fluid">
            <div class="row">

                <?php $why_invest = get_field("why_invest_sections"); ?>

                <div class="col-lg-12">
                    <h4 class="text-center"><?= get_field("why_section_title") ?></h4>
                </div>

                <?php foreach ($why_invest as $key => $section) : ?>
                    <div class="col-lg-4 why-invest-block">
                        <h5><?= $section["title"] ?></h5>
                        <img id="why-invest-icon-<?= $key + 1 ?>" class="why-invest-icon" src="<?= $section["thumbnail"]["sizes"]["medium"] ?>" alt="<?= $section["thumbnail"]["alt"] ?>">
                        <a class="why-invest-cta" href="<?= $section["cta"]["link"] ?>"><?= $section["cta"]["text"] ?></a>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

    <!-- Why Invest Section -->

    <div class="jumbotron testimonial-section">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <h4 class="text-center">Testimonials</h4>
                </div>

            </div>

            <div class="testimonial-block">

                <?php $testimonials = get_field("testimonials_section"); ?>

                <?php foreach ($testimonials as $key => $testimonial) : ?>

                    <div>
                        <div class="row d-flex">
                            <div class="col-lg-3 justify-content-center align-self-center">
                                <img src="<?= $testimonial["thumbnail"]["sizes"]["medium"] ?>" alt="<?= $testimonial["thumbnail"]["alt"] ?>">
                            </div>
                            <div class="col-lg-9 justify-content-center align-self-center testimonial-text">
                                <?= $testimonial["content"] ?>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </div>
</div>

</div>
<?php get_footer(); // get footer assets 
?>