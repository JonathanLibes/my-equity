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

    <div class="jumbotron who-we-are">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    <h2 class="subtitle">WHO<br /> WE<br /> ARE</h2>
                </div>
                <div class="col-lg-10">
                    <p>My Equity (ME) is a residential marketplace focused on new-construction properties in the United States.</p>
                    <p>We use technology backed analysis protocols to help our clients choose the best performing investments in the US new-construction single-family rental market.</p>
                    <p>From one rental property to a portfolio, you can continue to build your equity with our asset management services and hand-picked properties in leading markets across the US.</p>
                    <p>We specialize in working with leading US builders, analyzing investment properties in emerging markets, managing our clients' properties from purchase to lease and sale\refinance, providing mortgages from Canadian banks, providing US certified accountants for annual tax statements and an end-to-end closing process.</p>
                    <p>Our customer-focused approach and market expertise provide key advantages by leveraging our local relationships with banks, builders, property managers, lawyers and accountants to provide a comprehensive solution to investing in rental properties in the US.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron what-we-do">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-3">

                </div>
                <div class="col-lg-3">

                </div>
                <div class="col-lg-3">
                    
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); // get footer assets 
?>