jQuery(function () {
    /** Header Nav for Mobile */
    jQuery(".mobile-menu").on("click", function () {
        jQuery(".mobile-menu-items").toggle('fade-in');
    });
    jQuery(".close").on("click", function () {
        jQuery(".mobile-menu-items").hide('fade-in');
    });
    /** Scroll to top */
    jQuery(".scroll-top").on("click", function () {
        window.scrollTo(0, 0);
    });

    /** ================= Strategy Page ==================*/

    /** Circles One */
    jQuery('#circle-one-mobile').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: true,
    });
    /** Circles Two */
    jQuery('#circle-two-mobile').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: true,
    });

    /** Family Rentals Cards */
    jQuery('#family-rentals-cards').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: true,
    });
});

