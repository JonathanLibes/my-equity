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

});