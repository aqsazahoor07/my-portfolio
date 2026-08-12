// ============================================
// MOBILE MENU TOGGLE
// ============================================
function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    if (menu) {
        menu.classList.toggle('hidden');
    }
}

// ============================================
// SCROLL PROGRESS BAR
// ============================================
function initScrollProgress() {
    const progressBar = document.getElementById('scrollProgress');
    if (!progressBar) return;
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = (scrollTop / docHeight) * 100;
        progressBar.style.width = progress + '%';
    });
}

// ============================================
// SCROLL REVEAL ANIMATION
// ============================================
function initScrollReveal() {
    const revealElements = document.querySelectorAll('.scroll-reveal');
    if (revealElements.length === 0) return;
    
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        const windowWidth = window.innerWidth || document.documentElement.clientWidth;
        
        return (
            rect.top < windowHeight * 0.85 &&
            rect.bottom > 0 &&
            rect.left < windowWidth &&
            rect.right > 0
        );
    }
    
    function triggerAnimations() {
        revealElements.forEach(el => {
            if (isElementInViewport(el)) {
                el.classList.add('visible');
            }
        });
    }
    
    setTimeout(triggerAnimations, 100);
    
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                triggerAnimations();
                ticking = false;
            });
            ticking = true;
        }
    });
    
    window.addEventListener('resize', triggerAnimations);
}

// ============================================
// SMOOTH SCROLL FOR NAV LINKS
// ============================================
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
            // Close mobile menu
            const mobileMenu = document.getElementById('mobileMenu');
            if (mobileMenu) {
                mobileMenu.classList.add('hidden');
            }
        });
    });
}

// ============================================
// READ MORE TOGGLE (About Section)
// ============================================
function initReadMore() {
    const readMoreBtn = document.getElementById('readMoreBtn');
    const container = document.getElementById('readMoreContainer');
    const btnText = document.getElementById('btnText');
    const btnIcon = document.getElementById('btnIcon');

    if (readMoreBtn) {
        readMoreBtn.addEventListener('click', function() {
            container.classList.toggle('hidden');
            
            if (container.classList.contains('hidden')) {
                btnText.textContent = 'Read More';
                btnIcon.className = 'fas fa-chevron-down text-xs group-hover:translate-y-0.5 transition-transform duration-300';
            } else {
                btnText.textContent = 'Read Less';
                btnIcon.className = 'fas fa-chevron-up text-xs group-hover:-translate-y-0.5 transition-transform duration-300';
                
                setTimeout(() => {
                    container.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }, 200);
            }
        });
    }
}

// ============================================
// CIRCULAR SCROLL PROGRESS
// ============================================
function initCircularProgress() {
    const circle = document.getElementById('scrollCircleFill');
    const percent = document.getElementById('circlePercent');
    const circumference = 2 * Math.PI * 20;
    
    if (!circle) return;
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = (scrollTop / docHeight) * 100;
        const offset = circumference - (progress / 100) * circumference;
        
        circle.style.strokeDashoffset = offset;
        
        if (percent) {
            percent.textContent = Math.round(progress) + '%';
        }
    });
}

// ============================================
// TYPING ANIMATION - PROFESSIONAL STATUS
// ============================================
function initTypingAnimation() {
    const words = [
        'Available for projects',
        'Open to collaboration',
        'Ready to build',
        'Creative mode on',
        'Code in progress',
        'Design thinking',
        'Problem solving'
    ];
    
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const typingText = document.getElementById('typing-text');
    const typingSpeed = 80;
    const deletingSpeed = 40;
    const pauseBetweenWords = 2500;
    
    if (!typingText) return;
    
    function typeEffect() {
        const currentWord = words[wordIndex];
        
        if (isDeleting) {
            typingText.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
            
            if (charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                setTimeout(typeEffect, 500);
                return;
            }
            
            setTimeout(typeEffect, deletingSpeed);
        } else {
            typingText.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
            
            if (charIndex === currentWord.length) {
                isDeleting = true;
                setTimeout(typeEffect, pauseBetweenWords);
                return;
            }
            
            setTimeout(typeEffect, typingSpeed);
        }
    }
    
    setTimeout(typeEffect, 800);
}

// ============================================
// FEEDBACK MODAL
// ============================================
function initFeedbackModal() {
    const modal = document.getElementById('feedbackModal');
    const openBtn = document.getElementById('openFeedbackModal');
    const closeBtn = document.getElementById('closeFeedbackModalBtn');
    const closeBackdrop = document.getElementById('closeFeedbackModal');

    if (!modal) return;

    // Open Modal
    if (openBtn) {
        openBtn.addEventListener('click', function() {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            const form = document.getElementById('feedbackForm');
            if (form) form.reset();
        });
    }

    // Close Modal
    function closeModal() {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    if (closeBackdrop) {
        closeBackdrop.addEventListener('click', closeModal);
    }

    // Close on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });

    // ============================================
    // MODAL STAR RATING
    // ============================================
    const modalStarBtns = document.querySelectorAll('.modal-star-btn');
    const modalRatingInput = document.getElementById('modal-rating-value');
    const modalRatingLabel = document.getElementById('modal-rating-label');

    if (modalStarBtns.length > 0) {
        let selectedRating = 5;

        modalStarBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const value = parseInt(this.dataset.value);
                selectedRating = value;
                modalRatingInput.value = value;

                modalStarBtns.forEach((b, index) => {
                    const star = b.querySelector('i');
                    if (index < value) {
                        star.style.color = '#fbbf24';
                    } else {
                        star.style.color = '#4b5563';
                    }
                });

                const labels = ['', 'Terrible', 'Poor', 'Average', 'Good', 'Excellent'];
                modalRatingLabel.textContent = '⭐ ' + labels[value] + ' (' + value + ' Stars)';
            });
        });
    }

    // ============================================
    // READ ALL FEEDBACKS TOGGLE
    // ============================================
    const readAllBtn = document.getElementById('readAllFeedbacksBtn');
    const allFeedbacksContainer = document.getElementById('allFeedbacksContainer');
    const btnText = document.getElementById('feedbackBtnText');
    const btnIcon = document.getElementById('feedbackBtnIcon');

    if (readAllBtn && allFeedbacksContainer) {
        readAllBtn.addEventListener('click', function() {
            allFeedbacksContainer.classList.toggle('hidden');
            
            if (allFeedbacksContainer.classList.contains('hidden')) {
                btnText.textContent = 'Read All Feedbacks';
                btnIcon.className = 'fas fa-chevron-down text-xs transition-transform duration-300';
            } else {
                btnText.textContent = 'Show Less';
                btnIcon.className = 'fas fa-chevron-up text-xs transition-transform duration-300';
                
                setTimeout(() => {
                    allFeedbacksContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }, 300);
            }
        });
    }
}

// ============================================
// STAR RATING SYSTEM (Feedback Form)
// ============================================
function initStarRating() {
    const starBtns = document.querySelectorAll('.star-btn');
    const ratingInput = document.getElementById('rating-value');
    const ratingLabel = document.getElementById('rating-label');
    
    if (!starBtns.length) return;
    
    let selectedRating = 5;
    
    starBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const value = parseInt(this.dataset.value);
            selectedRating = value;
            ratingInput.value = value;
            
            starBtns.forEach((b, index) => {
                const star = b.querySelector('i');
                if (index < value) {
                    star.className = 'fas fa-star';
                    star.style.color = '#fbbf24';
                } else {
                    star.className = 'fas fa-star';
                    star.style.color = '#4b5563';
                }
            });
            
            const labels = ['', 'Terrible', 'Poor', 'Average', 'Good', 'Excellent'];
            ratingLabel.textContent = labels[value] + ' (' + value + ' Stars)';
        });
        
        btn.addEventListener('mouseenter', function() {
            const value = parseInt(this.dataset.value);
            starBtns.forEach((b, index) => {
                const star = b.querySelector('i');
                if (index < value) {
                    star.style.color = '#fbbf24';
                } else {
                    star.style.color = '#4b5563';
                }
            });
        });
        
        btn.addEventListener('mouseleave', function() {
            starBtns.forEach((b, index) => {
                const star = b.querySelector('i');
                if (index < selectedRating) {
                    star.style.color = '#fbbf24';
                } else {
                    star.style.color = '#4b5563';
                }
            });
        });
    });
}

// ============================================
// NAVBAR HIDE/SHOW ON SCROLL
// ============================================
function initNavbarScroll() {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;
    
    let lastScrollTop = 0;
    let navbarVisible = true;
    
    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 80) {
            if (scrollTop > lastScrollTop && navbarVisible) {
                navbar.classList.add('navbar-hidden');
                navbar.classList.remove('navbar-visible');
                navbarVisible = false;
            } else if (scrollTop < lastScrollTop && !navbarVisible) {
                navbar.classList.remove('navbar-hidden');
                navbar.classList.add('navbar-visible');
                navbarVisible = true;
            }
        } else {
            navbar.classList.remove('navbar-hidden');
            navbar.classList.add('navbar-visible');
            navbarVisible = true;
        }
        
        lastScrollTop = scrollTop;
    }, { passive: true });
}

// ============================================
// MOBILE NAVIGATION TOGGLE
// ============================================
function initMobileNavToggle() {
    const menuTrigger = document.getElementById('menuTrigger');
    const mobileDropdown = document.getElementById('mobileDropdown');
    const closeMenu = document.getElementById('closeMenu');

    if (!menuTrigger || !mobileDropdown) return;

    menuTrigger.addEventListener('click', function() {
        this.classList.toggle('active');
        mobileDropdown.classList.toggle('open');
        document.body.classList.toggle('overflow-hidden');
    });

    if (closeMenu) {
        closeMenu.addEventListener('click', function(e) {
            e.preventDefault();
            menuTrigger.classList.remove('active');
            mobileDropdown.classList.remove('open');
            document.body.classList.remove('overflow-hidden');
        });
    }

    document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', function() {
            menuTrigger.classList.remove('active');
            mobileDropdown.classList.remove('open');
            document.body.classList.remove('overflow-hidden');
        });
    });
}

// ============================================
// INITIALIZE ALL FUNCTIONS ON DOM READY
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    initScrollProgress();
    initScrollReveal();
    initSmoothScroll();
    initReadMore();
    initCircularProgress();
    initTypingAnimation();
    initFeedbackModal();
    initStarRating();
    initNavbarScroll();
    initMobileNavToggle();
});