var swiper = new Swiper(".testimonialSwiper",{
    slidesPerView:1,
    loop:true,
    autoplay:false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView:1,
        spaceBetween: 30,
      },
      768: {
        slidesPerView:2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween:30,
      },
    },
  });