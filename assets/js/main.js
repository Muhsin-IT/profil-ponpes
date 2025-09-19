/**
 * Auto generate the carousel indicators
 */
document.querySelectorAll('.carousel-indicators').forEach((carouselIndicator) => {
  carouselIndicator.closest('.carousel').querySelectorAll('.carousel-item').forEach((carouselItem, index) => {
    if (index === 0) {
      carouselIndicator.innerHTML += `<li data-bs-target="#${carouselIndicator.closest('.carousel').id}" data-bs-slide-to="${index}" class="active"></li>`;
    } else {
      carouselIndicator.innerHTML += `<li data-bs-target="#${carouselIndicator.closest('.carousel').id}" data-bs-slide-to="${index}"></li>`;
    }
  });
});
