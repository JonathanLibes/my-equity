// const flightPath={
//     curviness: 2,
//     autoRotate: true,
//     values:[
//         {x: 100, y: 50},
//         {x: 300, y: 80},
//         {x: 500, y: 100},
//         {x: 750, y: 150},
//         {x: 1000, y: 100},
//         {x: 1200, y: 200},
//         {x: 1500, y: 400},
//     ]    
// }

// const tween = new TimelineLite();

// tween.add(
//     TweenLite.to('.our-bird', 1, {
//         bezier: flightPath,
//         ease: Power1.easeInOut
//     })
// );

// const controller = new ScrollMagic.Controller();

// const scene = new ScrollMagic.Scene({
//      triggerElement: ".scroll-animation",
//      duration: 8000,
//      triggerHook: 0
// })
// .setTween(tween)
// .setPin('.scroll-animation')
// .addIndicators() 
// .addTo(controller);
