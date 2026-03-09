/* scripts/script.js
   Terra Connect — site interactions (menu, header, hero, reveals, carousel, fullscreen)
   ------------------------------------------------------------------------------ */

(function () {
    const body = document.body;

    /* =======================
     Mobile menu toggle
  ======================= */
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    function openMenu() {
        navMenu.classList.add('active');
        body.classList.add('no-scroll');
        menuToggle.setAttribute('aria-expanded', 'true');
        menuToggle.setAttribute('aria-label', 'Close menu');
        // swap icon (bars -> times)
        menuToggle.innerHTML =
            '<i class="fas fa-times" aria-hidden="true"></i>';
    }

    function closeMenu() {
        navMenu.classList.remove('active');
        body.classList.remove('no-scroll');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Open menu');
        // swap icon back
        menuToggle.innerHTML = '<i class="fas fa-bars" aria-hidden="true"></i>';
    }

    function toggleMenu() {
        if (!navMenu) return;
        const isOpen = navMenu.classList.contains('active');
        isOpen ? closeMenu() : openMenu();
    }

    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', e => {
            e.stopPropagation();
            toggleMenu();
        });

        // Close when clicking outside the nav on small screens
        document.addEventListener('click', e => {
            if (!navMenu.classList.contains('active')) return;
            const clickInsideNav =
                navMenu.contains(e.target) || menuToggle.contains(e.target);
            if (!clickInsideNav) closeMenu();
        });

        // Close on ESC
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape' && navMenu.classList.contains('active')) {
                closeMenu();
            }
        });
    }

    /* =======================
     Header background on scroll
  ======================= */
    const header = document.getElementById('site-header');
    function updateHeader() {
        if (!header) return;
        if (window.scrollY > 0) header.classList.add('scrolled');
        else header.classList.remove('scrolled');
    }
    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader();

    /* =======================
     Hero entrance animations
  ======================= */
    // const heroH1 = document.querySelector('.hero-h1');
    // const heroP = document.querySelector('.hero-p');

    // function runHeroAnimations() {
    //     const desktop = window.innerWidth > 1024;
    //     if (!heroH1 || !heroP) return;
    //     if (desktop) {
    //         // start entrance
    //         requestAnimationFrame(() => {
    //             heroH1.classList.add('animate-h1');
    //             heroP.classList.add('animate-p');
    //         });
    //     } else {
    //         // ensure visible on mobile (no slide-in)
    //         heroH1.classList.add('animate-h1');
    //         heroP.classList.add('animate-p');
    //     }
    // }
    // runHeroAnimations();
    // window.addEventListener('resize', runHeroAnimations);

    document.addEventListener('DOMContentLoaded', () => {
        const heroH1 = document.querySelector('.hero-h1');
        const heroP = document.querySelector('.hero-p');

        if (!heroH1 || !heroP) return;

        function runHeroAnimations() {
            const desktop = window.innerWidth > 1024;

            if (desktop) {
                // desktop → trigger animation once
                requestAnimationFrame(() => {
                    heroH1.classList.add('animate-h1');
                    heroP.classList.add('animate-p');
                });
            } else {
                // mobile → ensure always visible, skip animation
                heroH1.classList.add('animate-h1');
                heroP.classList.add('animate-p');
            }
        }

        runHeroAnimations();

        // Optional: recheck only if viewport crosses the 1024px threshold
        let wasDesktop = window.innerWidth > 1024;
        window.addEventListener('resize', () => {
            const isDesktop = window.innerWidth > 1024;
            if (isDesktop !== wasDesktop) {
                wasDesktop = isDesktop;
                runHeroAnimations();
            }
        });
    });

    /* ===== Hero H1 & P zoom-on-scroll (desktop only) ===== */
    // (function () {
    //     const breakpoint = 1024; // desktop threshold

    //     // configure both targets in one place
    //     const targets = [
    //         {
    //             el: document.querySelector('.hero-text h1'),
    //             initial: 65,
    //             mobile: 35,
    //             min: 25,
    //             rate: 0.1,
    //         }, // H1 shrinks faster
    //         {
    //             el: document.querySelector('.hero-text p'),
    //             initial: 25,
    //             mobile: 15,
    //             min: 12,
    //             rate: 0.05,
    //         }, // P shrinks slower
    //     ];

    //     let bound = false;

    //     function onScroll() {
    //         const y =
    //             window.pageYOffset || document.documentElement.scrollTop || 0;
    //         for (const t of targets) {
    //             if (!t.el) continue;
    //             const size = Math.max(t.initial - y * t.rate, t.min);
    //             t.el.style.fontSize = size + 'px';
    //         }
    //     }

    //     function bind() {
    //         if (!bound) {
    //             window.addEventListener('scroll', onScroll, { passive: true });
    //             bound = true;
    //         }
    //     }

    //     function unbind() {
    //         if (bound) {
    //             window.removeEventListener('scroll', onScroll);
    //             bound = false;
    //         }
    //     }

    //     function apply() {
    //         if (window.innerWidth >= breakpoint) {
    //             // desktop: set starting sizes, bind scroll, and update once
    //             for (const t of targets)
    //                 if (t.el) t.el.style.fontSize = t.initial + 'px';
    //             bind();
    //             onScroll();
    //         } else {
    //             // mobile: fixed sizes, no scroll handler
    //             unbind();
    //             for (const t of targets)
    //                 if (t.el) t.el.style.fontSize = t.mobile + 'px';
    //         }
    //     }

    //     window.addEventListener('load', apply);
    //     window.addEventListener('resize', apply);
    // })();

    (function () {
        const breakpoint = 1024; // desktop only

        // If we're on mobile, exit immediately (no scroll handler at all)
        if (window.innerWidth < breakpoint) {
            document.addEventListener('DOMContentLoaded', () => {
                const h1 = document.querySelector('.hero-text h1');
                const p = document.querySelector('.hero-text p');
                if (h1) h1.style.fontSize = '35px'; // mobile fixed size
                if (p) p.style.fontSize = '15px';
            });
            return; // 🚀 nothing else runs
        }

        // Desktop behavior only
        const targets = [
            {
                el: document.querySelector('.hero-text h1'),
                initial: 65,
                min: 25,
                rate: 0.1,
            },
            {
                el: document.querySelector('.hero-text p'),
                initial: 25,
                min: 12,
                rate: 0.05,
            },
        ];

        function onScroll() {
            const y =
                window.pageYOffset || document.documentElement.scrollTop || 0;
            for (const t of targets) {
                if (!t.el) continue;
                const size = Math.max(t.initial - y * t.rate, t.min);
                t.el.style.fontSize = size + 'px';
            }
        }

        window.addEventListener('load', () => {
            targets.forEach(t => {
                if (t.el) t.el.style.fontSize = t.initial + 'px';
            });
            onScroll();
            window.addEventListener('scroll', onScroll, { passive: true });
        });
    })();

    /* =======================
     Reveal on scroll (h2 & .service-block & process rows)
     Uses IntersectionObserver for perf
  ======================= */
    const io =
        'IntersectionObserver' in window
            ? new IntersectionObserver(
                  entries => {
                      entries.forEach(entry => {
                          if (entry.isIntersecting)
                              entry.target.classList.add('visible');
                          else entry.target.classList.remove('visible');
                      });
                  },
                  { root: null, rootMargin: '0px 0px -10% 0px', threshold: 0.1 }
              )
            : null;

    const revealSelectors = [
        'h2',
        '.service-block',
        '.top-block',
        '.lower-block',
    ];
    revealSelectors.forEach(sel => {
        document.querySelectorAll(sel).forEach(el => {
            if (io) io.observe(el);
            else el.classList.add('visible'); // fallback
        });
    });

    /* =======================
     Carousel
  ======================= */
    const carouselWrap = document.getElementById('carouselWrap');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    if (carouselWrap && prevBtn && nextBtn) {
        let currentIndex = 0;

        function getStep() {
            const first = carouselWrap.querySelector('.caroucel-item');
            if (!first) return 0;
            const rect = first.getBoundingClientRect();
            // include gap
            const styles = window.getComputedStyle(carouselWrap);
            const gap = parseFloat(styles.gap || styles.columnGap || '0') || 0;
            return rect.width + gap;
        }

        function getVisibleCount() {
            const container = carouselWrap.closest('.carousel-container');
            if (!container) return 1;
            const cw = container.clientWidth;
            // approximate current card width from first card
            const first = carouselWrap.querySelector('.caroucel-item');
            const rect = first ? first.getBoundingClientRect() : { width: 300 };
            return Math.max(1, Math.floor(cw / rect.width));
        }

        function maxIndex() {
            const total =
                carouselWrap.querySelectorAll('.caroucel-item').length;
            const visible = getVisibleCount();
            return Math.max(0, total - visible);
        }

        function applyTransform() {
            const step = getStep();
            const offset = currentIndex * step;
            carouselWrap.style.transform = `translateX(-${offset}px)`;
            updateButtons();
        }

        function updateButtons() {
            const atStart = currentIndex <= 0;
            const atEnd = currentIndex >= maxIndex();
            prevBtn.disabled = atStart;
            nextBtn.disabled = atEnd;
            prevBtn.setAttribute('aria-disabled', String(atStart));
            nextBtn.setAttribute('aria-disabled', String(atEnd));
        }

        function move(dir) {
            if (dir === 'next') {
                currentIndex = Math.min(currentIndex + 1, maxIndex());
            } else {
                currentIndex = Math.max(currentIndex - 1, 0);
            }
            applyTransform();
        }

        prevBtn.addEventListener('click', () => move('prev'));
        nextBtn.addEventListener('click', () => move('next'));

        // Keyboard when carousel has focus
        carouselWrap.addEventListener('keydown', e => {
            if (e.key === 'ArrowLeft') move('prev');
            if (e.key === 'ArrowRight') move('next');
        });

        // Touch / swipe
        let startX = 0;
        let dragging = false;
        carouselWrap.addEventListener(
            'touchstart',
            e => {
                if (!e.touches[0]) return;
                startX = e.touches[0].clientX;
                dragging = true;
            },
            { passive: true }
        );

        carouselWrap.addEventListener('touchend', e => {
            if (!dragging) return;
            dragging = false;
            const endX =
                e.changedTouches && e.changedTouches[0]
                    ? e.changedTouches[0].clientX
                    : startX;
            const dx = startX - endX;
            if (Math.abs(dx) > 50) move(dx > 0 ? 'next' : 'prev');
        });

        // Resize observer keeps measurements fresh
        const ro = new ResizeObserver(() => {
            currentIndex = Math.min(currentIndex, maxIndex());
            applyTransform();
        });
        ro.observe(carouselWrap);
        ro.observe(carouselWrap.closest('.carousel-container'));

        // Init
        currentIndex = 0;
        applyTransform();
    }

    /* =======================
     Fullscreen modal
  ======================= */
    const fullscreenContainer = document.getElementById('fullscreenContainer');
    const fullscreenContent = document.getElementById('fullscreenContent');

    function openFullscreen(button) {
        // button is the 🔍 inside a .caroucel-item
        const item = button?.parentElement;
        if (!item || !fullscreenContainer || !fullscreenContent) return;

        const bg = window.getComputedStyle(item).backgroundImage; // url("...")
        fullscreenContent.style.backgroundImage = bg;
        fullscreenContainer.style.display = 'flex';
        fullscreenContainer.setAttribute('aria-hidden', 'false');
        body.style.overflow = 'hidden';
    }

    function closeFullscreen() {
        if (!fullscreenContainer) return;
        fullscreenContainer.style.display = 'none';
        fullscreenContainer.setAttribute('aria-hidden', 'true');
        body.style.overflow = '';
    }

    // Click backdrop to close
    if (fullscreenContainer) {
        fullscreenContainer.addEventListener('click', e => {
            if (e.target === fullscreenContainer) closeFullscreen();
        });
    }

    // ESC to close
    document.addEventListener('keydown', e => {
        if (
            e.key === 'Escape' &&
            fullscreenContainer &&
            fullscreenContainer.style.display === 'flex'
        ) {
            closeFullscreen();
        }
    });

    // Expose for inline onclick handlers
    window.openFullscreen = openFullscreen;
    window.closeFullscreen = closeFullscreen;
})();

/* =======================
 Carousel update on resize (centering active card on mobile)
 ======================= */
function updateCarousel() {
    const container = document.querySelector('.carousel-container');
    if (!container || !carousel) return;

    const firstCard = carousel.querySelector('.caroucel-item');
    const styles = window.getComputedStyle(carousel);

    // Real measurements
    const cardWidth = firstCard ? firstCard.getBoundingClientRect().width : 0;
    const gap = parseFloat(styles.gap || styles.columnGap || '0') || 0;
    const paddingLeft = parseFloat(styles.paddingLeft || '0') || 0;
    const paddingRight = parseFloat(styles.paddingRight || '0') || 0;

    const step = cardWidth + gap;

    if (window.innerWidth <= 1024) {
        // Center the ACTIVE card (currentPosition) exactly in the viewport
        const containerWidth = container.clientWidth;
        const center = (containerWidth - cardWidth) / 2;

        // Position of the active card's left edge inside the wrap
        const cardLeft = paddingLeft + currentPosition * step;

        // Translate so that active card is centered:
        //   translateX = center - cardLeft
        carousel.style.transform = `translateX(${center - cardLeft}px)`;
    } else {
        // Desktop: normal left-based shifting
        const offset = currentPosition * step;
        carousel.style.transform = `translateX(-${offset}px)`;
    }

    updateNavigationState();
}

// Init (force first slide, then apply transform on next frame)
currentPosition = 0;
requestAnimationFrame(updateCarousel);

// If you use a ResizeObserver, keep this clamp so it never jumps forward:
const ro = new ResizeObserver(() => {
    currentPosition = Math.min(
        currentPosition,
        Math.max(0, totalItems - getVisibleItems())
    );
    updateCarousel();
});

/* FAQ Accordion */
const faqItems = document.querySelectorAll('.faq-item');
faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    question.setAttribute('aria-expanded', 'false');

    question.addEventListener('click', () => {
        const isActive = item.classList.contains('active');

        // close others
        faqItems.forEach(other => {
            if (other !== item) {
                other.classList.remove('active');
                other
                    .querySelector('.faq-question')
                    .setAttribute('aria-expanded', 'false');
            }
        });

        // toggle this one
        if (isActive) {
            item.classList.remove('active');
            question.setAttribute('aria-expanded', 'false');
        } else {
            item.classList.add('active');
            question.setAttribute('aria-expanded', 'true');
        }
    });
});

//   About Us Page JS

// Add animation on scroll (simple intersection observer)
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px',
};

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe all sections for animation
document.querySelectorAll('.about-section').forEach(section => {
    section.style.opacity = '0';
    section.style.transform = 'translateY(30px)';
    section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(section);
});

// // Form handling
// document.querySelector('form').addEventListener('submit', function (e) {
//     e.preventDefault();

//     // Get form data
//     const formData = new FormData(this);
//     const data = Object.fromEntries(formData);

//     // Basic validation
//     if (!data.name || !data.email || !data.message) {
//         alert('Please fill in all required fields.');
//         return;
//     }

//     // Here you would typically send the data to your server
//     // For now, we'll just show a success message
//     alert(
//         "Thank you for your message! We'll get back to you within 2-4 hours."
//     );
//     this.reset();
// });

// // Smooth scrolling for anchor links
// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function (e) {
//         e.preventDefault();
//         const target = document.querySelector(this.getAttribute('href'));
//         if (target) {
//             target.scrollIntoView({
//                 behavior: 'smooth',
//                 block: 'start',
//             });
//         }
//     });
// });

/* =======================
 Benefit Counter Animation
 ======================= */
function animateCounters() {
    const counters = document.querySelectorAll('.benefit-counter');
    if (!counters.length) return;

    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -50px 0px',
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                entry.target.classList.add('animated');
                const target = parseInt(entry.target.dataset.target, 10);
                const suffix = entry.target.dataset.suffix || '';
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // 60fps

                let current = 0;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }

                    // Display the value with the suffix
                    const displayValue = Math.floor(current);
                    entry.target.textContent = displayValue + suffix;
                }, 16);

                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
}

document.addEventListener('DOMContentLoaded', animateCounters);

// Form submission handling
document
    .querySelector('.contact-form')
    .addEventListener('submit', function (e) {
        e.preventDefault();

        // Get form data
        const formData = new FormData(this);
        const formObject = {};
        formData.forEach((value, key) => {
            formObject[key] = value;
        });

        // Simple validation
        const requiredFields = ['firstName', 'lastName', 'email', 'message'];
        let isValid = true;

        requiredFields.forEach(field => {
            const input = document.getElementById(field);
            if (!formObject[field] || formObject[field].trim() === '') {
                input.style.borderColor = '#ef4444';
                isValid = false;
            } else {
                input.style.borderColor = 'rgba(70, 87, 237, 0.3)';
            }
        });

        if (isValid) {
            // Show success message (in a real implementation, you'd send this to your server)
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Message Sent!';
            submitBtn.style.background = '#10b981';

            // Reset form after 2 seconds
            setTimeout(() => {
                this.reset();
                submitBtn.textContent = originalText;
                submitBtn.style.background = '';
            }, 2000);

            // You would typically send this data to your server here
            console.log('Form submitted with data:', formObject);
        } else {
            // Show error message
            alert('Please fill in all required fields.');
        }
    });
