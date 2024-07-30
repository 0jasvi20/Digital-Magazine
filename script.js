//locomative js for smooth scrolling
//gsap js for animation
const scroll = new LocomotiveScroll({
    el: document.querySelector('#main'),
    smooth: true
});
var tl=gsap.timeline()//this used for animation library
tl.to("#page1",{
    y:"100vh",
    scale:0.6,//resizing according to website
    duration:0
})
tl.to("#page1",{
    y:"30vh",
    duration:1,
    delay:1
})
tl.to("#page1",{
    y:"0vh",
    rotate:360,
    scale:1,
    duration:0.8
})
