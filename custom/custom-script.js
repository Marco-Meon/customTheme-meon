/* ! Gsap register plugin
---------------------------------------------------------------------------------------------------*/
gsap.registerPlugin(Flip);


/* ! Refresh on resize
---------------------------------------------------------------------------------------------------*/
let breakpoints = [450, 768, 991];
let currentBreakpoint = getCurrentBreakpoint();
window.onresize = function () {
  let newBreakpoint = getCurrentBreakpoint();
  if (newBreakpoint !== currentBreakpoint) {
    location.reload();
  }
  currentBreakpoint = newBreakpoint;
};
function getCurrentBreakpoint() {
  let windowWidth = window.innerWidth;
  for (let i = breakpoints.length - 1; i >= 0; i--) {
    if (windowWidth >= breakpoints[i]) {
      return breakpoints[i];
    }
  }
  return 0;
}



/*---------------------------------------------------------------------------------------------------
/* ! Menù animations
---------------------------------------------------------------------------------------------------*/
document.addEventListener("DOMContentLoaded", function() {
  let menuLink = document.querySelector(".menu-link");
  let menuOverlay = document.querySelector(".menu-grid");
  let menu = document.querySelector(".menu");
  let body = document.body;

  menuLink.addEventListener("click", function(e) {
    e.preventDefault();

    menuOverlay.classList.toggle("open");
    menu.classList.toggle("open");

    if (menu.classList.contains("open")) {
      body.classList.add("menu-open");
      const menuItemsToAnimate = document.querySelectorAll('.menu-overlay__text, .menu-overlay__social, .menu-overlay__image');
      gsap.from(menuItemsToAnimate, {opacity: 0,y: 50,duration: 0.5,stagger: 0.1,ease: 'power2.out',});
      showImage(1);
    } else {
      body.classList.remove("menu-open");
      hideImage();
    }
  });

  /* ! Menù animations image hover
  ---------------------------------------------------------------------------------------------------*/
  const menuItems = document.querySelectorAll("#custom-menu .menu-item a");

  menuItems.forEach((item, index) => {
    item.addEventListener("mouseover", function () {
      showImage(index + 1);
    });
  });

  function showImage(imageNumber) {
    for (let i = 1; i <= 4; i++) {
      document.getElementById(`image${i}`).classList.remove('visible');
      document.getElementById(`image${i}`).classList.add('hidden');
    }

    document.getElementById(`image${imageNumber}`).classList.remove('hidden');
    document.getElementById(`image${imageNumber}`).classList.add('visible');
  }

  function hideImage() {
    for (let i = 1; i <= 4; i++) {
      document.getElementById(`image${i}`).classList.remove('visible');
      document.getElementById(`image${i}`).classList.add('hidden');
    }
  }

  /* ! Menù animations text hover
  ---------------------------------------------------------------------------------------------------*/
  const menuItems2 = document.querySelectorAll(".menu-overlay li");

  if(window.innerWidth > 768){
    menuItems2.forEach((item) => {
      item.addEventListener("mouseover", function () {
        menuItems2.forEach((otherItem) => {
          if (otherItem !== item) {
            otherItem.classList.add('blur');
          }
        });
      });

      item.addEventListener("mouseout", function () {
        menuItems2.forEach((otherItem) => {
          otherItem.classList.remove('blur');
        });
      });
    });
  }

});


/*  -----------------------------------------------------------------------------------------------
  ! Validate contact form 
--------------------------------------------------------------------------------------------------- */
function validateContactForm() {
  let emailInput = document.getElementById('email');
  let emailValue = emailInput.value.trim();
  let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!emailRegex.test(emailValue)) {
    document.getElementById('email-error').innerText = 'Inserisci un indirizzo email valido.';
    emailInput.focus();
    return false;
  } else {
    document.getElementById('email-error').innerText = '';
  }

  let phoneInput = document.getElementById('phone-number');
  let phoneValue = phoneInput.value.trim();
  let phoneRegex = /^\d+$/; 

  if (!phoneRegex.test(phoneValue)) {
    document.getElementById('phone-error').innerText = 'Inserisci solo numeri nel campo telefono.';
    phoneInput.focus();
    return false;
  } else {
    document.getElementById('phone-error').innerText = '';
  }

  let maxDigits = 10;

  if (phoneValue.length >= maxDigits) {
    document.getElementById('phone-error').innerText = 'Inserisci un numero corretto';
    phoneInput.focus();
    return false;
  } else {
    document.getElementById('phone-error').innerText = '';
  }
  return true; 
}



/* ! Header remover 
---------------------------------------------------------------------------------------------------*/
let lastScrollPosition = 0;
const header = document.getElementById("site-header");

window.addEventListener("scroll", () => {

  const isMenuOpen = document.body.classList.contains("menu-open");
  if (isMenuOpen) {
    return;
  }

  const currentScrollPosition = window.scrollY;
  
  if (currentScrollPosition > lastScrollPosition) {
    // Scrollo verso il basso
    header.classList.add("hidden");
    header.classList.remove("visible");
  } else {
    // Scrollo verso l'alto
    header.classList.add("visible");
    header.classList.remove("hidden");
  }
  
  lastScrollPosition = currentScrollPosition;
});

/*  ! Newsletter
--------------------------------------------------------------------------------------------------- */
document.addEventListener("DOMContentLoaded", function () {

  (function($) {
    window.fnames = new Array(); 
    window.ftypes = new Array();
    fnames[0]='EMAIL';ftypes[0]='email';
    fnames[1]='FNAME';ftypes[1]='text';
  }
  (jQuery));var $mcj = jQuery.noConflict(true);

  if (window.location.pathname === "/" || window.location.pathname === "/contatti"){
    let form = document.getElementById("mc-embedded-subscribe-form");
    form.addEventListener("submit", function (event) {
      let checkbox = document.getElementById("privacy-checkbox-news");
      let errorMessage = document.getElementById("privacy-error");

      if (!checkbox.checked) {
        errorMessage.style.display = "block";
        event.preventDefault(); 
      } else {
        errorMessage.style.display = "none";
      }
    });
  }

});

/*  -----------------------------------------------------------------------------------------------
  ! Animations
--------------------------------------------------------------------------------------------------- */

/* ! Cursor 
---------------------------------------------------------------------------------------------------*/
// let outline = document.querySelector('.outline');
// let cursor = document.querySelector('.cursor');
// let a = document.querySelectorAll('a');

// document.addEventListener('mousemove', function(e){
//   let x = e.clientX;
//   let y = e.clientY;

//   outline.style.transform = `translate( calc(${x}px - 50%), calc(${y}px - 50%) )`;
//   cursor.style.transform = `translate( calc(${x}px - 50%), calc(${y}px - 50%) )`;

// });

// a.forEach((item) => {
//   item.addEventListener("mouseover", function() {
//     outline.classList.add('hover');
//     cursor.classList.add('hover');
//   });
//   item.addEventListener("mouseleave", function() {
//     outline.classList.remove('hover');
//     cursor.classList.remove('hover');
//   });
// });

/*  ! lenis 
---------------------------------------------------------------------------------------------------*/
const lenis = new Lenis()

lenis.on('scroll', (e) => {})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)

  const isMenuOpen2 = document.body.classList.contains("menu-open");
  if (isMenuOpen2) {
    lenis.isStopped = true;
  } else {
    lenis.isStopped = false;
  }
}
requestAnimationFrame(raf)


/* ! Preloader 
---------------------------------------------------------------------------------------------------*/
// let preloader = document.querySelector(".preloader");

// if (window.location.pathname === '/') {
//   window.addEventListener("load", function() {
//     setTimeout(function() {
//       preloader.classList.add("fade-out");
//     }, 2500);
//   });
// }

/* ! Loader
--------------------------------------------------------------------------------------------------- */
document.addEventListener("DOMContentLoaded", function() {
  let loaderContainer = document.querySelector(".loader");

  window.addEventListener("load", function() {
    loaderContainer.classList.add("loader-hidden");
  });
});



/*  -----------------------------------------------------------------------------------------------
  ! HOME SCRIPTS
--------------------------------------------------------------------------------------------------- */
if (window.location.pathname === "/"){

  /* ! Logo animation 
  ---------------------------------------------------------------------------------------------------*/
  // function disableScroll() {
  //   if (window.location.pathname === '/') {
  //     document.body.style.overflow = "hidden";
  //   }
  // }

  // function enableScroll() {
  //   if (window.location.pathname === '/') {
  //     document.body.style.overflow = "auto";
  //   }
  // }

  // function playAnimation() {

  //   if (window.location.pathname === '/') {
  //     let tl2 = gsap.timeline();

  //     tl2.to(".text-reveal", {clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)",y: "25vh",duration: 1,stagger: 0.3,ease: Power2.easeOut})
  //     .from(".header-logo", {left: "50%",y: "25vh",duration: "1",width: "90vw",onComplete: function () {
  //       gsap.to(".header-logo", { left: "0", duration: 1, ease: Power2.easeOut });
  //       enableScroll();
  //     }})
  //   }
  // }
  // disableScroll();
  // playAnimation();

  /* ! Animation 
  ---------------------------------------------------------------------------------------------------*/
  const splitTypes = document.querySelectorAll(".text-rewrite");
  splitTypes.forEach((word,i) =>{

    const text = new SplitType(word, {types: 'words'})

    gsap.from(text.words, {
      scrollTrigger: {trigger:word, start: 'top 20%', end: 'top -80%', scrub:true, markers: false},
      opacity: 0.2, stagger: 0.1
    })

  })

  gsap.to('.section-1__line-2',{ width:'100%',
    scrollTrigger: {trigger:'.about-content__container', start: 'top', end: 'bottom top', scrub:true, markers: false}
  })

  /* ! Cover animation 
  ---------------------------------------------------------------------------------------------------*/
  let dmp = new diff_match_patch()
  let el = document.querySelector('#scramble-text')

  async function scramble(newText) {
    let text = el.textContent
    let diff = dmp.diff_main(text, newText)
    
    let rems = []
    let adds = []
    
    el.innerHTML = ''
    for(let str of diff) {
      if(str[0] == -1) {
        let substr = document.createElement('div')
        substr.textContent = str[1]
        substr.className = 'remove'
        rems.push(substr)
        el.appendChild(substr)
      }
      else if(str[0] == 1) {
        let substr = document.createElement('div')
        substr.textContent = str[1]
        substr.className = 'add'
        adds.push(substr)
        el.appendChild(substr)
      }
      else if(str[0] == 0) {
        let substr = document.createElement('div')
        substr.textContent = str[1]
        el.appendChild(substr)
      }
    }
    
    return anime.timeline({duration: 2000, easing: 'easeInOutCubic'})
    .add({targets: rems, width: 0})
    .add({targets: adds, opacity: [0, 1], width: [0, el => el.offsetWidth]}, 0)
    .add({targets: adds, color: '#FFD600', duration: 1000})
    .finished.then(() => el.textContent = newText)
  }

  let strings = [
    'siti web',
    'design unico',
    'veloci',
    'ottimizzati',
  ]

  let cursor2 = -1;
  (function start() {
    const nextString = strings[++cursor2 % strings.length];
    scramble(nextString).then(start);
  })();

  /* ! Section 2 
  ---------------------------------------------------------------------------------------------------*/
  let tl = gsap.timeline();

  const viewportHeight = window.innerHeight;

  const element1 = document.querySelector(".section-2-text-1-cont-height");
  const element2 = document.querySelector(".section-2-text-2-cont-height");
  const element3 = document.querySelector(".section-2-text-3-cont-height");
  const element4 = document.querySelector(".section-2-text-4-cont-height");

  const elementHeight1 = element1.offsetHeight;
  const elementHeight2 = element2.offsetHeight;
  const elementHeight3 = element3.offsetHeight;
  const elementHeight4 = element4.offsetHeight;

  const centerY1 = (viewportHeight / 2) - (elementHeight1 / 2);
  const centerY2 = (viewportHeight / 2) - (elementHeight2 / 2);
  const centerY3 = (viewportHeight / 2) - (elementHeight3 / 2);
  const centerY4 = (viewportHeight / 2) - (elementHeight4 / 2);

  tl.to(".section-2-rec__title", {opacity: 0, scrollTrigger: {trigger: ".section-2",start: "top 20%", end:'+=30%',scrub: true}})
  tl.to(".section-2-rec__title-mobile", {opacity: 0, scrollTrigger: {trigger: ".section-2__mobile",start: "top 20%", end:'+=30%',scrub: true, markers:false}})


  tl.to(".section-2-container", {opacity: 1,scrollTrigger: {trigger: ".section-2-rec",start: "top -10%", scrub:true, duration:0.1}})
  tl.to(".section-2-rec", {height: "0vh",scrollTrigger: {trigger: ".section-2-rec",start: "top top",end: "+=100%",scrub: true,
    onUpdate: (self) => {
      if (self.progress > 0.3) {
        gsap.to(".section-2-text-1-cont", { opacity: 1, zIndex:1, y: centerY1, duration:0.5});
      } else {
        gsap.to(".section-2-text-1-cont", { opacity: 0, zIndex:0, duration:0.5 });
      }
    }
  }})
  .to(".section-2-img-1-cont", { height: "0vh",scrollTrigger: {trigger: ".section-2-img-1",start:"+=100%",end: "+=100%", scrub:true,
    onUpdate: (self) => {
      if (self.progress > 0.3) {
        gsap.to(".section-2-text-1-cont", { opacity: 0, zIndex:0, duration:0.5  });
        gsap.to(".section-2-text-2-cont", { opacity: 1, zIndex:1, y:centerY2, duration:0.5 });
      } else {
        gsap.to(".section-2-text-1-cont", { opacity: 1, zIndex:1, y:centerY1, duration:0.5 });
        gsap.to(".section-2-text-2-cont", { opacity: 0, zIndex:0, duration:0.5 });
      }
    }
  }})
  .to(".section-2-img-2-cont", { height: "0vh", scrollTrigger: {trigger: ".section-2-img-1",start:"+=200%",end: "+=200%", scrub:true,
  onUpdate: (self) => {
    if (self.progress > 0.3) {
      gsap.to(".section-2-text-2-cont", { opacity: 0, zIndex:0, duration:0.5  });
      gsap.to(".section-2-text-3-cont", { opacity: 1, zIndex:1, y:centerY3, duration:0.5 });
    } else {
      gsap.to(".section-2-text-2-cont", { opacity: 1, zIndex:1, y:centerY2, duration:0.5 });
      gsap.to(".section-2-text-3-cont", { opacity: 0, zIndex:0, duration:0.5  });
    }
  }}})
  .to(".section-2-img-3-cont", { height: "0vh", scrollTrigger: {trigger: ".section-2-img-1",start:"+=400%",end: "+=200%", scrub:true,
  onUpdate: (self) => {
    if (self.progress > 0.3) {
      gsap.to(".section-2-text-3-cont", { opacity: 0, zIndex:0, duration:0.5  });
      gsap.to(".section-2-text-4-cont", { opacity: 1, zIndex:1, y:centerY4, duration:0.5 });
    } else {
      gsap.to(".section-2-text-3-cont", { opacity: 1, zIndex:1, y:centerY3, duration:0.5 });
      gsap.to(".section-2-text-4-cont", { opacity: 0, zIndex:0, duration:0.5 });
    }
  }}})
  

  /* ! Service section
  ---------------------------------------------------------------------------------------------------*/
  const activeClass = "is-active";
  const inactiveClass = "is-inactive";
  const cards = document.querySelectorAll(".card");

  cards[0].classList.add(activeClass);

  cards.forEach((card, idx) => {
    card.addEventListener("click", () => {
      const state = Flip.getState(cards);
      const isCardActive = card.classList.contains(activeClass);

      cards.forEach((otherCard, otherIdx) => {
        if(window.innerWidth >= 991){
          if (!isCardActive) {
            otherCard.classList.remove(activeClass);
            otherCard.classList.remove(inactiveClass);
          }
        }else{
          otherCard.classList.remove(activeClass);
          otherCard.classList.remove(inactiveClass);
        }
        if (!isCardActive && idx !== otherIdx) {
          otherCard.classList.add(inactiveClass);
        }
      });

      if (!isCardActive) {
        card.classList.add(activeClass);
      }

      Flip.from(state, {
        duration: 1,
        ease: "expo.out",
        nested: true,
      });
    });
  });


  /* ! Horizontal section 
  ---------------------------------------------------------------------------------------------------*/
  if(window.innerWidth > 991){
    const spaceHolder = document.querySelector('.horizontal-space-holder');
    const horizontal = document.querySelector('.horizontal');
    spaceHolder.style.height = `${calcDynamicHeight(horizontal)}px`;

    function calcDynamicHeight(ref) {
      const vw = window.innerWidth;
      const vh = window.innerHeight;
      const objectWidth = ref.scrollWidth;
      return objectWidth - vw + vh + 150; 
    }

    window.addEventListener('scroll', () => {
      const sticky = document.querySelector('.horizontal-sticky');
      horizontal.style.transform = `translateX(-${sticky.offsetTop}px)`;
    });

    window.addEventListener('resize', () => {
      spaceHolder.style.height = `${calcDynamicHeight(horizontal)}px`;
    });
  }

  /* ! Review section
  ---------------------------------------------------------------------------------------------------*/
  new Splide( '.splide',{
    type   : 'loop',
    autoplay: 'play',
  }).mount();

  /* ! Home Page FAQ 
  ---------------------------------------------------------------------------------------------------*/
  const items = document.querySelectorAll(".accordion button");

  function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');
    
    for (i = 0; i < items.length; i++) {
      items[i].setAttribute('aria-expanded', 'false');
      items[i].nextElementSibling.style.maxHeight = null;
    }
    
    if (itemToggle == 'false') {
      this.setAttribute('aria-expanded', 'true');
      this.nextElementSibling.style.maxHeight = this.nextElementSibling.scrollHeight + "px";
    }
  }
  items.forEach(item => {
    item.addEventListener('click', toggleAccordion);
  });
}



/*  -----------------------------------------------------------------------------------------------
  ! About SCRIPTS
--------------------------------------------------------------------------------------------------- */
if (window.location.pathname === "/about/"){

  /* ! Page About cover animation
  --------------------------------------------------------------------------------------------------- */
  let tl = gsap.timeline();
  tl.to(".pageabout-cover__image", {width:'100vw', height: '100vh',borderRadius: '0px', scrollTrigger: {trigger: ".pageabout-cover__sticky",start: "top", end:'+=100%',scrub: true, markers:false}})
  .to(".pageabout-cover__scopri", {x:'-100vw', scrollTrigger: {trigger: ".pageabout-cover__sticky",start: "top", end:'+=100%',scrub: true, markers:false}})
  .to(".pageabout-cover__cta", {y:'100vw', scrollTrigger: {trigger: ".pageabout-cover__sticky",start: "top",scrub: true, markers:false, 
    onLeave: (self) => { 
      gsap.to(".pageabout-cover__cta", { opacity: 0, visibility: 'hidden',duration:"0.1s"});
    },
    onLeaveBack: (self) => { 
      gsap.to(".pageabout-cover__cta", { opacity: 1, visibility: 'visible',duration:"0.1s" });
    }
  }})

  
  /* ! Page About smooth scroll
  --------------------------------------------------------------------------------------------------- */
  const links = document.querySelectorAll(".scroll-trigger");

  links.forEach((link) => {
    link.addEventListener("click", clickHandler);
  })

  function clickHandler(e) {
    e.preventDefault();
    const href = this.getAttribute("href");
    const offsetTop = document.querySelector(href).offsetTop - 800;

    scroll({
      top: offsetTop,
      behavior: "smooth"
    });
  }


  /* ! Page About text rewrite
  --------------------------------------------------------------------------------------------------- */
  const splitTypes = document.querySelectorAll(".text-rewrite");
  splitTypes.forEach((word,i) =>{

    const text = new SplitType(word, {types: 'words'})

    gsap.from(text.words, {
      scrollTrigger: {trigger:word, start: 'top 80%', end: 'top 20%', scrub:true, markers: false},
      opacity: 0.2, stagger: 0.1
    })

  })


  /* ! Page About section 2
  --------------------------------------------------------------------------------------------------- */
  if(window.innerWidth < 768){
    gsap.to(".page-about__section-2-circle", {clipPath:'circle(100%)', scrollTrigger: {trigger: ".page-about__section-2",start: "top 0%", end:'+=100%',scrub: true}})
  }
  if(window.innerWidth >= 768){
    gsap.to(".page-about__section-2-circle", {clipPath:'circle(100%)', scrollTrigger: {trigger: ".page-about__section-2",start: "top", end:'+=100%',scrub: true}})
  }

  if(window.innerWidth > 768){
    let tl2 = gsap.timeline();
    tl2.to(".page-about__section-2-number-1", {opacity: 1, scrollTrigger: {trigger: ".page-about__section-2-content-1",start: "top -50%",end:'+=100%', scrub: false}})
    tl2.to(".page-about__section-2-content-1", {opacity: 1,top:0, scrollTrigger: {trigger: ".page-about__section-2-content-1",start: "top -50%",end:'+=100%', scrub: false,
      onLeave: (self) => {
        gsap.to(".page-about__section-2-content-1", {opacity:0,top:'50%'});
        gsap.to(".page-about__section-2-content-2", {opacity:1,top:0});
        gsap.to(".page-about__section-2-number-2", {opacity:1});
        gsap.to(".page-about__section-2-number-1", {opacity:0});
      },
      onLeaveBack: (self) => {
        gsap.to(".page-about__section-2-content-1", {opacity:1,top:0});
        gsap.to(".page-about__section-2-content-2", {opacity:0,top:'50%'});
        gsap.to(".page-about__section-2-number-1", {opacity:1});
        gsap.to(".page-about__section-2-number-2", {opacity:0});
      }
    }})
    tl2.to(".page-about__section-2-content-2", {opacity: 1,top:0, scrollTrigger: {trigger: ".page-about__section-2-content-2",start: "top -150%",end:'+=100%', scrub: false, 
      onLeave: (self) => {
        gsap.to(".page-about__section-2-content-2", {opacity:0,top:'50%'});
        gsap.to(".page-about__section-2-content-3", {opacity:1,top:0});
        gsap.to(".page-about__section-2-number-3", {opacity:1});
        gsap.to(".page-about__section-2-number-2", {opacity:0});
      },
      onLeaveBack: (self) => {
        gsap.to(".page-about__section-2-content-3", {opacity:0,top:'50%'});
        gsap.to(".page-about__section-2-content-2", {opacity:1,top:0});
        gsap.to(".page-about__section-2-number-2", {opacity:1});
        gsap.to(".page-about__section-2-number-3", {opacity:0});
      }
    }})
    tl2.to(".page-about__section-2-content-3", {opacity: 1,top:0, scrollTrigger: {trigger: ".page-about__section-2-content-3",start: "top -250%",end:'+=100%', scrub: false,
      onLeave: (self) => {
        gsap.to(".page-about__section-2-content-3", {opacity:0,top:'50%'});
        gsap.to(".page-about__section-2-content-4", {opacity:1,top:0});
        gsap.to(".page-about__section-2-number-4", {opacity:1});
        gsap.to(".page-about__section-2-number-3", {opacity:0});
      },
      onLeaveBack: (self) => {
        gsap.to(".page-about__section-2-content-3", {opacity:1,top:0});
        gsap.to(".page-about__section-2-content-4", {opacity:0,top:'50%'});
        gsap.to(".page-about__section-2-number-3", {opacity:1});
        gsap.to(".page-about__section-2-number-4", {opacity:0});
      }
    }})
    tl2.to(".page-about__section-2-content-4", {opacity: 1,top:0, scrollTrigger: {trigger: ".page-about__section-2-content-4",start: "top -350%",end:'+=100%', scrub: false}})
  }


  /* ! Page About section 3
  --------------------------------------------------------------------------------------------------- */
  gsap.to(".page-about__section-3-word-1", {x:'-50%', scrollTrigger: {trigger: ".page-about__section-3",start: "top 100%", scrub: true, markers:false}})
  gsap.to(".page-about__section-3-word-2", {x:'50%', scrollTrigger: {trigger: ".page-about__section-3",start: "top 100%", scrub: true, markers:false}})


  /* ! Page About section 4
  --------------------------------------------------------------------------------------------------- */
  if(window.innerWidth > 768){
    gsap.from(".page-about__section-4-img-1", {y:50, scrollTrigger: {trigger: ".page-about__section-4",start: "top 50%",end:"+=60%", scrub: true}})
    gsap.from(".page-about__section-4-img-2", {y:100, scrollTrigger: {trigger: ".page-about__section-4",start: "top 30%",end:"+=40%", scrub: true}})
  }


  /* ! Page About section 2 reverse
  --------------------------------------------------------------------------------------------------- */
  gsap.to(".page-about__section-2-reverse-circle", {clipPath:'circle(0%)', scrollTrigger: {trigger: ".page-about__section-2-reverse",start: "top 0%", end:'+=50%',scrub: true}})


  /* ! Page About accordion
  --------------------------------------------------------------------------------------------------- */
  document.addEventListener("DOMContentLoaded", function() {
  const items = document.querySelectorAll(".page-about__accordion button");

  function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');
    for (i = 0; i < items.length; i++) {
      items[i].setAttribute('aria-expanded', 'false');
      items[i].nextElementSibling.style.maxHeight = null;
    }
    if (itemToggle == 'false') {
      this.setAttribute('aria-expanded', 'true');
      this.nextElementSibling.style.maxHeight = this.nextElementSibling.scrollHeight + "px";
    }
  }
  items.forEach(item => item.addEventListener('click', toggleAccordion));
  })
}

/*  -----------------------------------------------------------------------------------------------
  ! case page SCRIPTS
--------------------------------------------------------------------------------------------------- */
let currentPath = window.location.pathname;
if (currentPath.startsWith("/case-page")) {

  /* ! case page cover
  --------------------------------------------------------------------------------------------------- */
  gsap.to(".case-page__cover-img", {width:'100vw', height: '100vh', scrollTrigger: {trigger: ".case-page__cover-sticky",start: "top", end:'+=100%',scrub: true, markers:false}})

  /* ! case page section 2
  --------------------------------------------------------------------------------------------------- */
  gsap.from(".case-page__section-2-imgcont img", {width:'120%', scrollTrigger: {trigger: ".case-page__section-2",start: "top", end:'+=30%',scrub: false, markers:false}})

  /* ! case page section 3
  --------------------------------------------------------------------------------------------------- */
  gsap.from(".case-page__section-3-imgcont-mini img", {width:'120%', scrollTrigger: {trigger: ".case-page__section-3",start: "top", end:'+=30%',scrub: false,markers:false}})
}


/*  -----------------------------------------------------------------------------------------------
  ! article page SCRIPTS
--------------------------------------------------------------------------------------------------- */
if (currentPath.startsWith("/article/")) {

  /* ! article page categorie arrow
  --------------------------------------------------------------------------------------------------- */
  document.addEventListener('DOMContentLoaded', function() {
    let categoriesContainer = document.querySelector('.article-footer__categories-container');
    let scrollArrow1 = document.querySelector('.scroll-right');
    let scrollArrow2 = document.querySelector('.scroll-left');

    function checkScroll() {
      if (categoriesContainer.scrollWidth > categoriesContainer.clientWidth) {
        scrollArrow1.style.display = 'block';
        scrollArrow2.style.display = 'block';
      } else {
        scrollArrow1.style.display = 'none';
        scrollArrow2.style.display = 'none';
      }
    }
    checkScroll();
    window.addEventListener('resize', checkScroll);
    scrollArrow1.addEventListener('click', function() {
        categoriesContainer.scrollLeft += 15;
    });
    scrollArrow2.addEventListener('click', function() {
      categoriesContainer.scrollLeft -= 15;
    });
  });

  
  /* ! article page share facebook
  --------------------------------------------------------------------------------------------------- */
  function generateSlug(text) {
    const slug = text.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]/g, '');
    return slug;
  }

  function getPostSlug() {
    const postSlug = window.wp_data.post_slug;
    return postSlug ? postSlug : '';
  }

  function shareOnFacebook() {
    const postSlug = getPostSlug();
    const postURL = "https://www.meon.it/article/" + postSlug;
    const facebookShareURL = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(postURL);
    window.open(facebookShareURL, '_blank');
  }

  function shareOnTwitter() {
    const postSlug = getPostSlug();
    const twitterShareURL = "https://twitter.com/intent/tweet?url=https://www.meon.it/article/" + postSlug;
    window.open(twitterShareURL, '_blank');
  }

  function shareViaEmail() {
    const postSlug = getPostSlug();
    const emailShareURL = "mailto:?subject=&body=Guarda questo post: https://www.meon.it/article/" + postSlug;
    window.location.href = emailShareURL;
  }

  function shareOnLinkedIn() {
    const postSlug = getPostSlug();
    const postURL = "https://www.meon.it/article/" + postSlug;
    const linkedInShareURL = "https://www.linkedin.com/sharing/share-offsite/?url=" + encodeURIComponent(postURL);
    window.open(linkedInShareURL, '_blank');
  }

}