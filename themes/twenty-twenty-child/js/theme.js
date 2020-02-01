jQuery(function(){
    jQuery(".mobile-menu").on("click", function(){
        jQuery(".mobile-menu-items").toggle('fade-in');
    });
    jQuery(".close").on("click", function(){
        jQuery(".mobile-menu-items").hide('fade-in');
    });
});