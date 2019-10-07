export const PageAnimations = (function() {
  // Animations for Pages on load
  const body = document.querySelector("body");

  let viewPortSize = window.matchMedia("(max-width: 768px)");

  if (viewPortSize) {
    if (body.classList.contains("home")) {
      const mobileMenuButton = document.querySelector(
        ".menu-button-wrapper_mobile"
      );
      const footer = document.querySelector(".site-footer");

      const fpMobileAnimation = new TimelineMax({
        paused: true
      });

      fpMobileAnimation
        .fromTo(
          mobileMenuButton,
          1,
          { opacity: 0 },
          { opacity: 1, ease: Power3.easeInOut, delay: 1.7 }
        )
        .fromTo(
          footer,
          1,
          { opacity: 0 },
          { opacity: 1, ease: Power3.easeInOut }
        );

      fpMobileAnimation.play();
    }
  }

  if (body.classList.contains("home")) {
    // -- Vars
    const preLoader = document.querySelector(".preloader");
    const logo = document.querySelector(".site-branding");
    const menuButton = document.querySelector(".main-menu-toggle");
    const fpImage = document.querySelector(".front-page-image_wrapper");

    const fpAnimation = new TimelineMax({
      paused: true
    });

    fpAnimation
      .fromTo(
        preLoader,
        0.5,
        { opacity: 1 },
        { opacity: 0, y: "-100vh", height: "1px" }
      )
      .fromTo(
        fpImage,
        2,
        { scale: 1.01, y: 4, opacity: 0 },
        { scale: 1, opacity: 1, y: 0, ease: Power3.easeInOut }
      )
      .fromTo(
        logo,
        1,
        { opacity: 0 },
        { opacity: 1, ease: Power3.easeInOut },
        "-=1"
      )
      .fromTo(
        menuButton,
        1,
        { opacity: 0, y: 15 },
        { opacity: 1, y: 0, ease: Power3.easeInOut },
        "-=0.5"
      );

    fpAnimation.play();
  }

  // Page load animations for Bio Page
  // Check if page is Bio Page
  if (body.classList.contains("page-bio")) {
    // --Vars
    const bioColOne = document.querySelector(".bio-col_01");
    const bioColTwo = document.querySelector(".bio-col_02");

    const bioTl = new TimelineMax({
      paused: true
    });

    bioTl
      .to(bioColOne, 0.5, { opacity: 1, ease: Power1.easeIn, delay: 0.6 })
      .to(bioColTwo, 0.5, { opacity: 1, ease: Power1.easeIn }, "-=0.35");

    bioTl.play();
  }

  if (body.classList.contains("page-contact")) {
    // --Vars
    const contactColOne = document.querySelector(".contact-col_01");
    const contactColTwo = document.querySelector(".contact-col_02");

    const contactTl = new TimelineMax({
      paused: true
    });

    contactTl
      .to(contactColOne, 0.7, {
        opacity: 1,
        y: -6,
        ease: Power1.easeIn,
        delay: 0.5
      })
      .to(contactColTwo, 0.7, { opacity: 1, ease: Power1.easeIn });

    contactTl.play();
  }

  if (body.classList.contains("page-portfolio")) {
    // --Vars
    const portfolioListItems = document.querySelectorAll(".project-list-item");
    const portfolioImages = document.querySelector(
      ".portfolio-image-container"
    );

    const portfolioTl = new TimelineMax({
      paused: true
    });

    portfolioTl
      .staggerFromTo(
        portfolioListItems,
        0.6,
        { opacity: 0, y: 3 },
        { opacity: 1, y: 0, ease: Power1.easeIn },
        0.3
      )
      .fromTo(
        portfolioImages,
        0.9,
        { opacity: 0, y: 3 },
        { opacity: 1, y: 0, ease: Power1.easeIn },
        "-=0.3"
      );

    portfolioTl.play();
  }

  //Project Gallery Title
  if (body.classList.contains("single-projects")) {
    const projectTitle = document.querySelector(".project-heading");

    const projectTitleFadeIn = new TimelineMax({
      paused: true
    });

    projectTitleFadeIn.fromTo(
      projectTitle,
      1,
      { opacity: 0, y: 20 },
      { opacity: 1, y: 0, ease: Power1.easeIn, delay: 0.5 }
    );

    projectTitleFadeIn.play();
  }
})();
