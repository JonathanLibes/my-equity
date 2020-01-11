<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package my-equity
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

?>

<footer class="footer">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-lg-3 d-flex">
        <p class="copyright justify-content-center align-self-center">&copy;All right reserved | My Equity</p>
      </div>
      <div class="col-lg-6 justify-content-center align-self-center"></div>
      <div class="col-lg-3 justify-content-center align-self-center"></div>
    </div>
  </div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script>
  jQuery(function() {
    jQuery('.testimonial-block').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,
      dots: true,
    });
  });
</script>

</body>

</html>