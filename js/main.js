function testimonialCarousel() {
  $(".slider-holder").slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    speed: 400,
    ease: "linear",
    responsive: [
      {
        breakpoint: 900,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
}

// infinite slider
function infiniteSlider() {
  $(".slick-infinite").slick({
    speed: 6000,
    // pauseonhover: true,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: "linear",
    variableWidth: true,
    infinite: true,
    arrows: false,
    buttons: false,
  });
}

// toggles responsive class on header
function headerToggle() {
  let header = document.querySelector("header");
  header.classList.toggle("responsive");
  document.body.classList.toggle("header-open");
}

function headerClose() {
  let header = document.querySelector("header");
  if (window.innerWidth > 900) {
    header.classList.remove("responsive");
    document.body.classList.remove("header-open");
  }
}
window.addEventListener('load', headerClose);
window.addEventListener('resize', headerClose);