document.addEventListener('DOMContentLoaded', () => {
  
  // burger btn
  const navTriggerBtn = document.getElementById("nav-trigger-btn");
  const menuList = document.getElementById("menu-list");

  navTriggerBtn.addEventListener("click", () => {
    menuList.classList.toggle("nav-is-open");
  });

  // parallax
  var image = document.querySelectorAll(".hero__img");
  new simpleParallax(image, {
    orientation: "down",
    scale: 1.30,
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
})


