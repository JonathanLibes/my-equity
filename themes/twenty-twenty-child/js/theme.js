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

    /** Testimonials */
    jQuery('.testimonial-block').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: true,
    });

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

    /** Family Rentals Cards */
    jQuery('#why-invest-mobile').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: false,
    });

    /** Team Slider */
    jQuery('.team-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: true,
    });

    /** Investor -mobile */
    jQuery('.investor-mobile-carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: true,
    });

    // Builder mobile
    jQuery('#builder-carousel-mobile').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        dots: true,
    });

    // Seminars

    jQuery('.seminar-carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: true,
    });


    /** Gridify */

    const gridify = new Gridify({
        containerSelector: '.blog-posts',
        itemSelector: '.blog-post',
        resizable: true,
    });


    /** Newsletter Icon */

    jQuery(".es_subscription_form_submit").replaceWith("<button class=\"btn\" type=\"submit\"><i class=\"fa fa-angle-right\"></i></button>");
});