//Greensock js animation
CSSPlugin.defaultTransformPerspective = 700;
// TweenMax.set('#welcome-text-message', {scale:.6, rotationX:60, rotationY:25, rotation:40});

let timeline = new TimelineLite();

//Greensock animation text-box front page
timeline.staggerFrom('.text-box', 2, {delay: 1.5, duration: 3, opacity:0, y:100, scale:.2, ease: "back"}, .4, .2);

//Greensock animation miniatures My Services page
// timeline.staggerFrom('#miniature-box', 1, {delay: .5, duration: 3, opacity:0, y:20, scale:.1, ease: "back"}, .4, .2);

let minibox = new TimelineLite();

minibox.staggerFrom(".miniature-box", 1, {delay: .2, duration: 3, opacity: 0, y: 20, scale: .1, ease: "back"}, .4, .2);







