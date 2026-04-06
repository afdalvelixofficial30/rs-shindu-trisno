import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

/* ── Sticky Nav ── */
const nav = document.getElementById('main-nav');
window.addEventListener('scroll', () => {
    if (nav) {
        nav.classList.toggle('nav-scrolled', window.scrollY > 60);
    }
});

/* ── Mobile Menu ── */
const mobileToggle = document.getElementById('mobile-menu-toggle');
const mobileMenu   = document.getElementById('mobile-menu');
if (mobileToggle && mobileMenu) {
    mobileToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('open');
        const icon = mobileToggle.querySelector('svg use, svg path');
    });
}

/* ── Intersection Observer: animate-on-scroll ── */
const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -60px 0px' };
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-fade-up');
            entry.target.style.opacity = '1';
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('.reveal').forEach(el => {
    el.style.opacity = '0';
    observer.observe(el);
});

/* ── Animated Counter ── */
function animateCounter(el) {
    const target   = parseInt(el.getAttribute('data-target'));
    const duration = 2000;
    const step     = Math.ceil(target / (duration / 16));
    let current    = 0;
    const timer = setInterval(() => {
        current += step;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }
        el.textContent = current.toLocaleString('id-ID');
    }, 16);
}

const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounter(entry.target);
            counterObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

document.querySelectorAll('.counter-num').forEach(el => counterObserver.observe(el));

/* ── Doctor Carousel ── */
let carouselIndex = 0;
const track       = document.getElementById('doctor-track');
const cards       = document.querySelectorAll('.doctor-card');
const cardWidth   = () => cards[0] ? cards[0].offsetWidth + 24 : 300; // 24px gap
const visibleCount = () => window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
const maxIndex    = () => Math.max(0, cards.length - visibleCount());

function updateCarousel() {
    if (!track) return;
    const offset = carouselIndex * cardWidth();
    track.style.transform = `translateX(-${offset}px)`;
}

document.getElementById('carousel-prev')?.addEventListener('click', () => {
    carouselIndex = carouselIndex > 0 ? carouselIndex - 1 : maxIndex();
    updateCarousel();
});

document.getElementById('carousel-next')?.addEventListener('click', () => {
    carouselIndex = carouselIndex < maxIndex() ? carouselIndex + 1 : 0;
    updateCarousel();
});

window.addEventListener('resize', () => {
    if (carouselIndex > maxIndex()) carouselIndex = maxIndex();
    updateCarousel();
});

/* ── FAQ Accordion ── */
document.querySelectorAll('.faq-item').forEach(item => {
    const btn    = item.querySelector('.faq-btn');
    const answer = item.querySelector('.faq-answer');
    const icon   = item.querySelector('.faq-icon');

    btn?.addEventListener('click', () => {
        const isOpen = answer.classList.contains('open');
        // Close all
        document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('open'));
        document.querySelectorAll('.faq-icon').forEach(i => {
            i.style.transform = 'rotate(0deg)';
        });
        if (!isOpen) {
            answer.classList.add('open');
            if (icon) icon.style.transform = 'rotate(180deg)';
        }
    });
});

/* ── Active Nav Link highlight on scroll ── */
const sections   = document.querySelectorAll('section[id]');
const navLinks   = document.querySelectorAll('.nav-link');

window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        const top = section.offsetTop - 100;
        if (window.scrollY >= top) current = section.id;
    });
    navLinks.forEach(link => {
        link.classList.toggle('active-nav', link.getAttribute('href') === `#${current}`);
    });
});
