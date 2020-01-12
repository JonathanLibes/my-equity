const flightPath={
    curviness: 1.25,
    autoRotate: true,
    values:[
        {x: 100, y: 50},
        {x: 300, y: 80},
        {x: 500, y: 100},
        {x: 750, y: 150},
        {x: 750, y: 500},
        {x: 550, y: 700},
        {x: 350, y: 900},
        {x: 150, y: 1200},
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

const scene = new ScrollMagic.Scene({
     duration: 10000,
     triggerHook: 0 
})
.setTween(tween)
.setPin('.scroll-animation')
.addIndicators() 
.addTo(controller);