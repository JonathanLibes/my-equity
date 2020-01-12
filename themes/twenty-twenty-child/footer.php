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
      <div class="col-lg-3 d-flex">
        <p class="copyright justify-content-center align-self-center">&copy;All right reserved | My Equity</p>
      </div>
      <div class="col-lg-7 justify-content-center align-self-center"></div>
      <div class="col-lg-2 justify-content-center align-self-center">
        <div class="socials">
          <?php if ($instagram != "") : ?>
            <a target="_blank" href="<?= $instagram ?>">
              <i class="fa fa-instagram"></i>
            </a>
          <?php endif; ?>
          <?php if ($linkedin != "") : ?>
            <a target="_blank" href="<?= $linkedin ?>">
              <i class="fa fa-linkedin-square"></i>
            </a>
          <?php endif; ?>

          <?php if ($facebook != "") : ?>
            <a target="_blank" href="<?= $facebook ?>">
              <i class="fa fa-facebook-square"></i>
            </a>
          <?php endif; ?>
        </div>
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