// Default animations
$(document).ready(function(){

  /* Fade in from bottom */
  const elementBottom = gsap.utils.toArray('.fade-in-bottom');
  elementBottom.forEach((elementBottom, i) => {
      const animateElementBottom = gsap.fromTo(elementBottom, {autoAlpha: 0, y: 50}, {duration: 1, autoAlpha: 1, y: 0});
      ScrollTrigger.create({
          trigger: elementBottom,
          animation: animateElementBottom,
          start: "top 95%",
      });
  });
  /* Fade in from right */
  const elementRight = gsap.utils.toArray('.fade-in-right');
  elementRight.forEach((elementRight, i) => {
      const animateelementRight = gsap.fromTo(elementRight, {autoAlpha: 0, x: 50}, {duration: 1, autoAlpha: 1, x: 0});
      ScrollTrigger.create({
          trigger: elementRight,
          animation: animateelementRight,
          start: "top 95%",
      });
  });
  /* Fade in from left */
  const elementleft = gsap.utils.toArray('.fade-in-left');
  elementleft.forEach((elementleft, i) => {
      const animateelementleft = gsap.fromTo(elementleft, {autoAlpha: 0, x: '-50'}, {duration: 1, autoAlpha: 1, x: 0});
      ScrollTrigger.create({
          trigger: elementleft,
          animation: animateelementleft,
          start: "top 95%",
      });
  });

});
