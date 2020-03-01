<?php

/**
 * 
 * Template Name: Front Page
 * 
 */

?>
<?php get_header(); // get header assets 

$hero = get_field('home_hero_banner');
?>

<div class="home-page-content">

    <div class="jumbotron home-hero-banner" style="background-image: url(<?= $hero["background_image"] ?>)">
        <div class="container-fluid">

            <div class="row cloud-group">
                <div class="col-lg-6 column">
                    <div class="cloud-group-one">
                        <img class="cloud_one" src="<?= $hero["cloud_group_one"]["cloud_one"] ?>" />
                        <img class="cloud_two" src="<?= $hero["cloud_group_one"]["cloud_two"] ?>" />
                    </div>
                </div>
                <div class="col-lg-6 column">
                    <div class="cloud-group-two">
                        <img class="cloud_one" src="<?= $hero["cloud_group_two"]["cloud_one"] ?>" />
                        <img class="cloud_two" src="<?= $hero["cloud_group_two"]["cloud_two"] ?>" />
                    </div>
                </div>
            </div>
            <div class="row hero-text-container">
                <div class="col-lg-12">
                    <?= $hero["hero_text"] ?>
                </div>
            </div>

            <div class="row hero-house-container">
                <div class="col-lg-4 house-group-one">
                    <img class="house" src="<?= $hero["houses"]["house_one"] ?>" />
                    <img class="tree" src="<?= $hero["trees"]["tree_one"] ?>">
                </div>
                <div class="col-lg-4 house-group-two">
                    <img class="house" src="<?= $hero["houses"]["house_two"] ?>" />
                </div>
                <div class="col-lg-4 house-group-three">
                    <img class="tree" src="<?= $hero["trees"]["tree_two"] ?>">
                    <img class="house" src="<?= $hero["houses"]["house_three"] ?>" />
                </div>
            </div>
        </div>
    </div>

    <!-- Home Page Animation Section -->

    <?php get_template_part("template-parts/home-animation-section"); ?>

    <!-- Home Page Animation Section Ends -->


    <!-- Start Your Journey Section -->

    <div class="jumbotron start-your-journey">
        <div class="container">
            <?php $journey_sections = get_field("journey_sections"); ?>
            <?php $journey_cta = get_field("journey_call_to_action"); ?>

            <div class="row circle-outlines m-hide">

                <?php foreach ($journey_sections as $key => $circle) : ?>

                    <div class="col-lg-4 col-12">

                        <h4><?= $circle["title"] ?></h4>

                        <div class="circle-container" id="circle-home-<?= $key + 1; ?>">
                            <img class="circle-icon" src="<?= $circle["icon"]["url"] ?>" alt="<?= $circle["icon"]["alt"] ?>" />

                            <div class="circle" style="background-color: <?= $circle["circle_colour"] ?>">
                                <div class="triangle" style="border-top-color: <?= $circle["triangle_colour"] ?>"></div>
                            </div>
                        </div>

                        <p class="label"><?= $circle["label"] ?></p>
                    </div>

                <?php endforeach; ?>

            </div>
            <div class="row circle-outlines d-hide" id="circle-one-mobile">


                <?php foreach ($journey_sections as $key => $circle) : ?>


                    <div class="col-lg-4">

                        <h4><?= $circle["title"] ?></h4>

                        <div class=" circle-container" id="circle-home-<?= $key + 1; ?>">
                            <img class="circle-icon" src="<?= $circle["icon"]["url"] ?>" alt="<?= $circle["icon"]["alt"] ?>" />

                            <div class="circle" style="background-color: <?= $circle["circle_colour"] ?>">
                                <div class="triangle" style="border-top-color: <?= $circle["triangle_colour"] ?>"></div>
                            </div>
                        </div>

                        <p class="label"><?= $circle["label"] ?></p>


                    </div>

                <?php endforeach; ?>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a class="journey_cta" href="<?= $journey_cta["link"] ?>"><?= $journey_cta["text"] ?></a>
                    <div class="arrow-down">
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Why Invest Section -->

    <div class="jumbotron why-invest">
        <div class="container">
            <!-- Desktop -->
            <div class="row m-hide">

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
            <!-- Mobile -->
            <div class="d-hide" id="why-invest-mobile">
                <?php foreach ($why_invest as $key => $section) : ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="text-center"><?= get_field("why_section_title") ?></h4>
                        </div>
                        <div class="col-lg-4 why-invest-block">
                            <h5><?= $section["title"] ?></h5>
                            <img id="why-invest-icon-<?= $key + 1 ?>" class="why-invest-icon" src="<?= $section["thumbnail"]["sizes"]["medium"] ?>" alt="<?= $section["thumbnail"]["alt"] ?>">
                            <a class="why-invest-cta" href="<?= $section["cta"]["link"] ?>"><?= $section["cta"]["text"] ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="arrow-down">
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>
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
                            <div class="col-lg-3 col-md-12 justify-content-center align-self-center">
                                <img class="testimonial-img" src="<?= $testimonial["thumbnail"]["sizes"]["medium"] ?>" alt="<?= $testimonial["thumbnail"]["alt"] ?>">
                            </div>
                            <div class="col-lg-9 col-md-12 justify-content-center align-self-center testimonial-text">
                                <img class="quote-one" src="<?= get_stylesheet_directory_uri() ?>/images/quote-one.png" />
                                <?= $testimonial["content"] ?>
                                <img class="quote-two" src="<?= get_stylesheet_directory_uri() ?>/images/quote-two.png" />
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </div>

    <!-- Upcoming events -->

    <div class="jumbotron upcoming-events">
        <div class="container calendar-container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Upcoming Events</h4>
                    <h6>Choose a date</h6>
                    <div id="evoCalendar"></div>
                    <!-- Try this as well -->
                    <!-- http://kylestetz.github.io/CLNDR/ -->
                </div>
            </div>
        </div>
    </div>

</div>

</div>

<style>
    header.site-header {
        border-bottom: unset !important;
        background-color: #eaf2fa !important;
    }
</style>

<?php get_footer(); // get footer assets 
?>

<script>
    jQuery('#evoCalendar').evoCalendar({
        todayHighlight: true,
        sidebarToggler: false,
        eventListToggler: false,
        canAddEvent: false,
        calendarEvents: [{
                name: "New Year",
                date: "Wed Jan 01 2020 00:00:00 GMT-0800 (Pacific Standard Time)",
                type: "holiday",
                everyYear: true
            },
            {
                name: "Valentine's Day",
                date: "Fri Feb 14 2020 00:00:00 GMT-0800 (Pacific Standard Time)",
                type: "holiday",
                everyYear: true
            },
            {
                name: "Patient #1",
                date: "February/3/2020",
                type: "event"
            },
            {
                name: "Patient #3",
                date: "February/3/2020",
                type: "event"
            },
            {
                name: "Patient #4",
                date: "February/3/2020",
                type: "event"
            },
            {
                name: "Holiday #3",
                date: "February/3/2020",
                type: "holiday"
            },
            {
                name: "Birthday #2",
                date: "February/3/2020",
                type: "birthday"
            },
            {
                name: "Author's Birthday",
                date: "February/15/2020",
                type: "birthday",
                everyYear: true
            },
            {
                name: "Holiday #4",
                date: "February/15/2020",
                type: "event"
            },
            {
                name: "Patient #2",
                date: "February/8/2020",
                type: "event"
            },
            {
                name: "Leap day",
                date: "February/29/2020",
                type: "holiday",
                everyYear: true
            }
        ],
        onSelectDate: function() {
            // console.log('onSelectDate!')
        },
        onAddEvent: function() {
            console.log('onAddEvent!')
        }
    });
    // $("#evoCalendar").evoCalendar('addCalendarEvent', [...]);
</script>