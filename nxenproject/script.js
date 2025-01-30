// Wait for the DOM to finish loading before initializing Swiper
document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper(".carousel-container", {
      effect: "slide",
      speed: 1300,
      autoplay: {
        delay: 4000
      }
    });
  });