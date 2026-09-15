/**
 * Lumetech Third-Party Plugins & Animations Module - Cleaned (No AOS)
 */

export function initAnimations() {
  // 1. Initialize GLightbox for image/video lightboxes
  if (typeof GLightbox !== 'undefined') {
    const lightbox = GLightbox({
      selector: '.glightbox',
      touchNavigation: true,
      loop: true,
      zoomable: true,
      autoplayVideos: true
    });
  }

  // 2. Initialize Swiper Sliders
  if (typeof Swiper !== 'undefined') {
    // Testimonials Carousel
    if (document.querySelector('.lum-testimonial-swiper')) {
      new Swiper('.lum-testimonial-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          768: { slidesPerView: 2 },
          1200: { slidesPerView: 3 }
        }
      });
    }

    // Technology Stack Swiper
    if (document.querySelector('.lum-tech-swiper')) {
      new Swiper('.lum-tech-swiper', {
        slidesPerView: 2,
        spaceBetween: 16,
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        breakpoints: {
          576: { slidesPerView: 3 },
          768: { slidesPerView: 4 },
          1024: { slidesPerView: 6 }
        }
      });
    }
  }

  // 3. Vanilla JS Counter Animation Trigger
  initCounters();
}

function initCounters() {
  const counters = document.querySelectorAll('[data-counter]');
  if (counters.length === 0) return;

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = entry.target;
        const countTo = parseFloat(target.getAttribute('data-counter'));
        const prefix = target.getAttribute('data-prefix') || '';
        const suffix = target.getAttribute('data-suffix') || '';
        const decimals = parseInt(target.getAttribute('data-decimals') || '0', 10);
        const duration = 2000; // ms

        let startTime = null;

        const animateCount = (timestamp) => {
          if (!startTime) startTime = timestamp;
          const progress = Math.min((timestamp - startTime) / duration, 1);
          const currentVal = progress * countTo;
          
          target.innerText = prefix + currentVal.toFixed(decimals) + suffix;

          if (progress < 1) {
            requestAnimationFrame(animateCount);
          } else {
            target.innerText = prefix + countTo.toFixed(decimals) + suffix;
          }
        };

        requestAnimationFrame(animateCount);
        obs.unobserve(target);
      }
    });
  }, { threshold: 0.2 });

  counters.forEach(counter => observer.observe(counter));
}
