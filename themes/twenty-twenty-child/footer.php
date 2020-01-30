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

$facebook = get_field("facebook", "options");
$instagram = get_field("instagram", "options");
$linkedin = get_field("linkedin", "options");
?>

<footer class="footer">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-flex">
        <p class="copyright justify-content-center align-self-center">&copy;&nbsp;All right reserved | My Equity</p>
      </div>
      <div class="col-lg-7 col-12 justify-content-center align-self-center"></div>
      <div class="col-lg-2 col-md-12 col-sm-12 col-12 justify-content-center align-self-center">
        <ul>
          <li>
            <a target="_blank" href="<?= $instagram ?>">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="<?= $linkedin ?>">
              <i class="fa fa-linkedin"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="<?= $facebook ?>">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
        </ul>
      </div>
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