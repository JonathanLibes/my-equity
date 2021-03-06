jQuery(function () {

    const flightPath = {
        curviness: 2,
        autoRotate: true,
        values: [
            { x: 100, y: 50 },
            { x: 300, y: 80 },
            { x: 500, y: 100 },
            { x: 750, y: 150 },
            { x: 1000, y: 300 },
            { x: 1200, y: 400 },
            { x: 1500, y: 500 },
        ]
    }

    const tween = new TimelineLite();

    tween.add(
        TweenLite.to('.our-bird', 1, {
            bezier: flightPath,
            ease: Power1.easeInOut
        })
    );

    const controller = new ScrollMagic.Controller();

    if (jQuery(window).width() > 1024) {
        const scene = new ScrollMagic.Scene({
            triggerElement: ".scroll-animation",
            duration: 8000,
            triggerHook: 0
        })
            .setTween(tween)
            .setPin('.scroll-animation')
            .addTo(controller);
    }
});