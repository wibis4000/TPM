

document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.carousel-track');
    const slides = Array.from(document.querySelectorAll('.carousel-slide'));
  
    let currentIndex = 0;
  
    function updateCarousel() {
      track.style.transform = `translateX(${-currentIndex * 100}%)`;
    }
  
    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      updateCarousel();
    }
  
 
    setInterval(nextSlide, 4000);
  });

  function toggleFAQ(faq1, faq2, answer) {
    const faq1Element = document.querySelector(`.${faq1}`);
    const faq2Element = document.querySelector(`.${faq2}`);
    const answerElement = document.querySelector(`.${answer}`);

    if (faq1Element.style.display !== 'none') {
        
        faq1Element.style.display = 'none';
        faq2Element.style.display = 'block';
        answerElement.style.display = 'block';
    } else {
        
        faq1Element.style.display = 'block';
        faq2Element.style.display = 'none';
        answerElement.style.display = 'none';
    }
}

let currentIndex = 0;

  function showSlide(index) {
    const slider = document.querySelector('.slider-wrapper');
    const cardWidth = document.querySelector('.card').offsetWidth;
    slider.style.transform = `translateX(${-index * cardWidth}px)`;
    currentIndex = index;
  }

  function nextSlide() {
    const totalSlides = document.querySelectorAll('.card').length;
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
  }

  function prevSlide() {
    const totalSlides = document.querySelectorAll('.card').length;
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    showSlide(currentIndex);
  }

  function startAutoPlay() {
    autoPlayInterval = setInterval(() => {
      nextSlide();
    }, 3000); 
  }

  function stopAutoPlay() {
    clearInterval(autoPlayInterval);
  }

  startAutoPlay();


  const sliderContainer = document.querySelector('.slider-container');
  sliderContainer.addEventListener('mouseenter', stopAutoPlay);
  sliderContainer.addEventListener('mouseleave', startAutoPlay);

  