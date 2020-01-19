<?php

/**
 * 
 * Template Name: Services > Investors
 * 
 */

?>

<?php get_header(); // get header assets 
?>

<div class="jumbotron full-screen services services__investors">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 full-screen sidenav">
                <a class="sidemenu d-flex active">
                    <p class="menu-text justify-content-center align-self-center">Investors</p>
                </a>
                <a class="sidemenu d-flex">
                    <p class="menu-text justify-content-center align-self-center">Builders</p>
                </a>
                <a class="sidemenu d-flex">
                    <p class="menu-text justify-content-center align-self-center">Seminars</p>
                </a>
            </div>
            <div class="col-lg-11 full-screen service-body">
                <div class="investor-carousel">
                    <div>
                        <h2 class="text-center">As a My Equity Investor you will recieve:</h2>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-center">As a My Equity Investor you will recieve:</h2>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
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