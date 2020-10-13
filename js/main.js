//Greensock js animation
CSSPlugin.defaultTransformPerspective = 700;
// TweenMax.set('#welcome-text-message', {scale:.6, rotationX:60, rotationY:25, rotation:40});

let timeline = new TimelineLite();
timeline.staggerFrom('.text-box', 2, {delay: 2, duration: 3, opacity:0, y:100, scale:.2, ease: "back"}, .4, .2);
