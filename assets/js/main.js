document.addEventListener("DOMContentLoaded", () => {
 
    const navTriggerBtn = document.getElementById("nav-trigger-btn");
  const menuList = document.getElementById("menu-list");

  // Toggle menu on burger click
  navTriggerBtn.addEventListener("click", (event) => {
    event.stopPropagation(); // Prevent click from bubbling to document
    menuList.classList.toggle("nav-is-open");
  });

  // Close menu when clicking outside of it
  document.addEventListener("click", (event) => {
    if (
      menuList.classList.contains("nav-is-open") &&
      !menuList.contains(event.target) &&
      event.target !== navTriggerBtn
    ) {
      menuList.classList.remove("nav-is-open");
    }
  });

  // Close menu when any anchor inside it is clicked
  const anchorLinks = menuList.querySelectorAll("a");
  anchorLinks.forEach(anchor => {
    anchor.addEventListener("click", () => {
      menuList.classList.remove("nav-is-open");
    });
  });

  // swiper
  const swiper = new Swiper(".swiper", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    slidesPerView: 3,
    spaceBetween: 20,
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      960: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });

  // scroll reveal animations
  const sr = ScrollReveal({
    origin: "bottom",
    distance: "60px",
    duration: "2000",
    delay: 300,
    // reset: true
  });

  // hero
  sr.reveal(".hero__text", { origin: "top" });

  // steps
  sr.reveal(".steps__step", {
    distance: "100px",
    interval: 100,
  });

  // about
  sr.reveal(".about__text", { origin: "left" });
  sr.reveal(".about__img", {
    origin: "right",
    delay: 800,
  });

  // testimonial
  sr.reveal(".testimonial__bg", { delay: 800 });
  sr.reveal(".testimonial__title");
  sr.reveal(".testimonial__slider", { delay: 1000 });

  // brands
  sr.reveal(".brands__img", {
    delay: 600,
    distance: "100px",
    interval: 100,
  });

  // work
  sr.reveal(".work__title");
  sr.reveal(".work__subtitle", { delay: 800 });
  sr.reveal(".work__grid", { delay: 1000 });

  // stats
  sr.reveal(".stats");
  sr.reveal(".stats__item", {
    distance: "100px",
    interval: 100,
  });

  // news
  sr.reveal(".news__title");
  sr.reveal(".news__subtitle", {
    delay: 800,
  });

  sr.reveal(".news__item", {
    distance: "100px",
    interval: 100,
    delay: 1000,
  });

  // contact
  sr.reveal(".contact__container");
  sr.reveal(".contact__text", { delay: 800 });

  // footer
  sr.reveal(".footer__item", {
    distance: "100px",
    interval: 100,
  });
});
