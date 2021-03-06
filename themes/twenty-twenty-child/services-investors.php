<?php

/**
 * 
 * Template Name: Services > Investors
 * 
 */

?>

<?php get_header(); // get header assets 

$invest1 = get_field("investors_recieve");
$invest2 = get_field("we_take_care_of_you");
// var_dump($inves1);
?>

<div class="jumbotron services services__investors m-hide">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 sidenav">
                <a href="/investors" class="sidemenu d-flex investor-active">
                    <p class="menu-text justify-content-center align-self-center">Investors</p>
                </a>
                <a href="/builders" class="sidemenu d-flex">
                    <p class="menu-text justify-content-center align-self-center">Builders</p>
                </a>
                <a href="/seminars" class="sidemenu d-flex">
                    <p class="menu-text justify-content-center align-self-center">Seminars</p>
                </a>
            </div>
            <div class="col-lg-11 service-body">
                <div class="investor-carousel">

                    <!-- Investors -> First Section -->
                    <div class="investor-carousel-inner1">
                        <h3 class="text-center"><?= $invest1["title"] ?></h3>
                        <div class="container-fluid">
                            <div class="row">
                                <?php foreach ($invest1["columns"] as $key => $column) : ?>
                                    <div class="col-lg-4 column">
                                        <h5><?= $column["title"] ?></h5>
                                        <img src="<?= $column["icon"]["sizes"]["medium"] ?>" alt="<?= $column["icon"]["alt"] ?>" />
                                        <p><?= $column["content"] ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="cta">
                            <a href="<?= $invest1["cta"]["link"] ?>"><?= $invest1["cta"]["text"] ?></a>
                        </div>
                    </div>

                    <!-- Investors -> Second Section -->
                    <div class="investor-carousel-inner2">
                        <h3 class="text-center"><?= $invest2["title"] ?></h3>
                        <div class="container-fluid">
                            <div class="row">
                                <?php foreach ($invest2["content_row_one"] as $key => $column) : ?>
                                    <div class="col-lg-4 column">
                                        <img class="img-small" src="<?= $column["icon"]["sizes"]["medium"] ?>" alt="<?= $column["icon"]["alt"] ?>" />
                                        <p><?= $column["content"] ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="row">
                                <?php foreach ($invest2["content_row_two"] as $key => $column) : ?>
                                    <div class="col-lg-4 column">
                                        <img class="img-small" src="<?= $column["icon"]["sizes"]["medium"] ?>" alt="<?= $column["icon"]["alt"] ?>" />
                                        <p><?= $column["content"] ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="cta">
                            <a href="<?= $invest2["cta"]["link"] ?>"><?= $invest2["cta"]["text"] ?></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-mobile-inner d-hide">
    <a class="menu menu-investor">
        <h5>Investors&nbsp;&nbsp;<i class="fa fa-angle-down"></i></h5>
    </a>
    <div class="investor-mobile-carousel">

        <div class="content content-one">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-center"><?= $invest1["title"] ?></h3>
                    </div>
                    <?php foreach ($invest1["columns"] as $key => $column) : ?>
                        <div class="col-lg-12 column">
                            <h5><?= $column["title"] ?></h5>
                            <img src="<?= $column["icon"]["sizes"]["medium"] ?>" alt="<?= $column["icon"]["alt"] ?>" />
                            <p><?= $column["content"] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="cta">
                <a href="<?= $invest1["cta"]["link"] ?>"><?= $invest1["cta"]["text"] ?></a>
            </div>
        </div>

        <div class="content content-two">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-center">As a My Equity Investor you will recieve:</h3>
                    </div>
                    <?php foreach ($invest1["columns"] as $key => $column) : ?>
                        <div class="col-lg-4 column">
                            <img class="img-small" src="<?= $column["icon"]["sizes"]["medium"] ?>" alt="<?= $column["icon"]["alt"] ?>" />
                            <p><?= $column["content"] ?></p>
                        </div>
                    <?php endforeach; ?>
                    <?php foreach ($invest1["columns"] as $key => $column) : ?>
                        <div class="col-lg-4 column">
                            <img class="img-small" src="<?= $column["icon"]["sizes"]["medium"] ?>" alt="<?= $column["icon"]["alt"] ?>" />
                            <p><?= $column["content"] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="cta">
                <a href="<?= $invest1["cta"]["link"] ?>"><?= $invest1["cta"]["text"] ?></a>
            </div>
        </div>

    </div>
</div>

<script>
    jQuery(function() {
        jQuery('.investor-carousel').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            dots: true,
        });
    });
</script>
<?php get_footer(); // get footer assets 
?>