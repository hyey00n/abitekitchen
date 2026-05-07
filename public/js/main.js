// ===================================
// 에이바이트키친 Main JavaScript v2
// ===================================

document.addEventListener('DOMContentLoaded', function() {
    
    // =================================== 
    // Swiper Slider 초기화
    // ===================================
    const swiperContainer = document.querySelector('.menuSwiper');
    if (swiperContainer) {
        const menuSwiper = new Swiper('.menuSwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            centeredSlides: true,
            // 자동 슬라이드
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            // 부드러운 전환
            speed: 1000,
            // 반응형
            breakpoints: {
                480: {
                    slidesPerView: 1.5,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2.5,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3.5,
                    spaceBetween: 40,
                },
            },
        });
    }

    // =================================== 
    // Mobile Menu Toggle
    // ===================================
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.nav');
    const body = document.body;

    if (menuToggle && nav) {
        menuToggle.addEventListener('click', function() {
            nav.classList.toggle('active');
            menuToggle.classList.toggle('active');
            body.classList.toggle('menu-open');
        });
    }

    // =================================== 
    // Smooth Scroll
    // ===================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            
            // 빈 링크 방지
            if (href === '#' || href === '#!') {
                e.preventDefault();
                return;
            }

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                
                const header = document.querySelector('.header');
                const headerHeight = header ? header.offsetHeight : 0;
                const targetPosition = target.offsetTop - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                if (nav && nav.classList.contains('active') && menuToggle) {
                    nav.classList.remove('active');
                    menuToggle.classList.remove('active');
                    body.classList.remove('menu-open');
                }
            }
        });
    });

    // =================================== 
    // Header Scroll Effect
    // ===================================
    const header = document.querySelector('.header');
    
    if (header) {
        let lastScroll = 0;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            // Add background when scrolled
            if (currentScroll > 100) {
                header.style.background = 'rgba(26, 26, 26, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'transparent';
                header.style.backdropFilter = 'none';
            }

            lastScroll = currentScroll;
        });
    }

    // =================================== 
    // Fade-in Animation on Scroll
    // ===================================
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.menu-item, .location-card').forEach(element => {
        observer.observe(element);
    });

    // =================================== 
    // Location Cards Click Event
    // ===================================
    const locationCards = document.querySelectorAll('.location-card');
    
    locationCards.forEach((card, index) => {
        card.addEventListener('click', function() {
            // GA4 이벤트 트래킹
            if (typeof gtag !== 'undefined') {
                const locationLabel = card.querySelector('.location-label');
                if (locationLabel) {
                    gtag('event', 'location_click', {
                        'event_category': 'engagement',
                        'event_label': locationLabel.textContent
                    });
                }
            }

            // Location 페이지로 이동
            window.location.href = 'location.html';
        });
        
        // Hover cursor
        card.style.cursor = 'pointer';
    });

    // =================================== 
    // Menu Items Click Event
    // ===================================
    const menuItems = document.querySelectorAll('.menu-item');
    
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            // GA4 이벤트 트래킹
            if (typeof gtag !== 'undefined') {
                const menuName = this.querySelector('.menu-name');
                if (menuName) {
                    gtag('event', 'menu_click', {
                        'event_category': 'engagement',
                        'event_label': menuName.textContent
                    });
                }
            }

            // Menu 페이지로 이동
            window.location.href = 'menu.html';
        });

        // Hover cursor
        item.style.cursor = 'pointer';
    });

    // =================================== 
    // Image Lazy Loading (for older browsers)
    // ===================================
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.classList.add('loaded');
                        imageObserver.unobserve(img);
                    }
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // =================================== 
    // Inject Animation Styles
    // ===================================
    const animationStyles = `
        .fade-in {
            animation: fadeInUp 0.6s ease forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Mobile Menu Styles */
        @media (max-width: 768px) {
            .nav {
                position: fixed;
                top: 0;
                right: -100%;
                width: 70%;
                max-width: 300px;
                height: 100vh;
                background: rgba(26, 26, 26, 0.98);
                backdrop-filter: blur(10px);
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 40px;
                transition: right 0.3s ease;
                z-index: 999;
            }

            .nav.active {
                right: 0;
            }

            .nav a {
                font-size: 20px;
            }

            .menu-toggle.active span:nth-child(1) {
                transform: rotate(45deg) translate(7px, 7px);
            }

            .menu-toggle.active span:nth-child(2) {
                opacity: 0;
            }

            .menu-toggle.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -7px);
            }

            body.menu-open {
                overflow: hidden;
            }
        }
    `;

    const styleSheet = document.createElement('style');
    styleSheet.textContent = animationStyles;
    document.head.appendChild(styleSheet);

}); // DOMContentLoaded 종료