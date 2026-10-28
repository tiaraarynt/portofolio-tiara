// Initialize Project Carousel — Infinite Loop with DOM Cloning
function initProjectCarousel() {
    const container = document.getElementById('projects-grid');
    if (!container) return;

    const realCards = Array.from(container.querySelectorAll('.project-card-item'));
    const total = realCards.length;
    if (total === 0) return;

    const CLONE_COUNT = 2;

    // Prepend clones of last N real cards, append clones of first N real cards
    for (let i = CLONE_COUNT - 1; i >= 0; i--) {
        const cloneFront = realCards[total - 1 - i].cloneNode(true);
        cloneFront.classList.add('proj-clone');
        cloneFront.removeAttribute('data-project-index');
        container.insertBefore(cloneFront, container.firstChild);
    }
    for (let i = 0; i < CLONE_COUNT; i++) {
        const cloneBack = realCards[i].cloneNode(true);
        cloneBack.classList.add('proj-clone');
        cloneBack.removeAttribute('data-project-index');
        container.appendChild(cloneBack);
    }

    const allCards = Array.from(container.querySelectorAll('.project-card-item'));
    const dots = document.querySelectorAll('[data-proj-dot]');
    let currentIndex = CLONE_COUNT; // index into allCards for the first real card
    let isJumping = false;

    function centerCard(index, animate) {
        const card = allCards[index];
        if (!card) return;
        const containerW = container.offsetWidth;
        const target = card.offsetLeft - containerW / 2 + card.offsetWidth / 2;
        if (!animate) {
            // Instant jump without smooth scroll
            container.style.scrollBehavior = 'auto';
            container.scrollLeft = target;
            container.style.scrollBehavior = '';
        } else {
            container.scrollTo({ left: target, behavior: 'smooth' });
        }
        updateActiveState(index);
    }

    function updateActiveState(centerIdx) {
        allCards.forEach((c, i) => {
            c.classList.toggle('is-active', i === centerIdx);
        });
        const realIdx = ((centerIdx - CLONE_COUNT) % total + total) % total;
        dots.forEach((dot, i) => {
            const isActive = i === realIdx;
            dot.classList.toggle('bg-[#F2D887]', isActive);
            dot.classList.toggle('ring-1', isActive);
            dot.classList.toggle('ring-[#1F3D2B]/20', isActive);
            dot.classList.toggle('w-7', isActive);
            dot.classList.toggle('bg-[#B9C8E8]/70', !isActive);
            dot.classList.toggle('w-2', !isActive);
        });
    }

    function handleLoopJump() {
        if (isJumping) return;
        if (currentIndex < CLONE_COUNT) {
            isJumping = true;
            currentIndex = currentIndex + total;
            centerCard(currentIndex, false);
            setTimeout(() => { isJumping = false; }, 50);
        } else if (currentIndex >= CLONE_COUNT + total) {
            isJumping = true;
            currentIndex = currentIndex - total;
            centerCard(currentIndex, false);
            setTimeout(() => { isJumping = false; }, 50);
        }
    }

    // Scroll listener: detect closest card → set active → handle loop jump
    let scrollTimer;
    container.addEventListener('scroll', () => {
        if (isJumping) return;
        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(() => {
            const containerCenter = container.scrollLeft + container.offsetWidth / 2;
            let closest = currentIndex;
            let minDist = Infinity;
            allCards.forEach((card, i) => {
                const cardCenter = card.offsetLeft + card.offsetWidth / 2;
                const dist = Math.abs(cardCenter - containerCenter);
                if (dist < minDist) { minDist = dist; closest = i; }
            });
            currentIndex = closest;
            updateActiveState(currentIndex);
            handleLoopJump();
        }, 80);
    }, { passive: true });

    // Nav arrow buttons (called from Blade onclick)
    window.scrollProjectsByStep = function(step) {
        currentIndex += step;
        // Wrap around if out of bounds (allCards.length includes clones)
        if (currentIndex < 0) currentIndex = CLONE_COUNT + total - 1;
        if (currentIndex >= allCards.length) currentIndex = CLONE_COUNT;
        centerCard(currentIndex, true);
        setTimeout(handleLoopJump, 450);
    };

    // Dot click navigation
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            currentIndex = i + CLONE_COUNT;
            centerCard(currentIndex, true);
        });
    });

    // Click on side (inactive) card to bring it center
    allCards.forEach((card, i) => {
        card.addEventListener('click', (e) => {
            if (!card.classList.contains('is-active') && !e.target.closest('a')) {
                currentIndex = i;
                centerCard(currentIndex, true);
                setTimeout(handleLoopJump, 450);
            }
        });
    });

    // Init: jump to first real card instantly
    setTimeout(() => centerCard(currentIndex, false), 50);

    window.addEventListener('resize', () => centerCard(currentIndex, false));
}

// Drag and Touch to scroll horizontally for Netflix-style carousels
function initDragToScroll() {
    const sliders = [
        document.getElementById('exp-scroll-container'),
        document.getElementById('projects-grid')
    ];

    sliders.forEach(slider => {
        if (!slider) return;

        let isDown = false;
        let startX;
        let scrollLeft;

        // Mouse Drag Events
        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 1.6;
            slider.scrollLeft = scrollLeft - walk;
        });

        // Touch Swipe Events for mobile / touch devices
        let touchStartX = 0;
        let touchScrollLeft = 0;

        slider.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].pageX - slider.offsetLeft;
            touchScrollLeft = slider.scrollLeft;
        }, { passive: true });

        slider.addEventListener('touchmove', (e) => {
            const touchX = e.touches[0].pageX - slider.offsetLeft;
            const walk = (touchX - touchStartX) * 1.2;
            slider.scrollLeft = touchScrollLeft - walk;
        }, { passive: true });
    });
}

// Interactive Parallax Background & Section Gradient Accents
function initParallaxGradients() {
    // Respect user's motion preferences
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    const orbs = document.querySelectorAll('.parallax-orb');
    const sectionGradients = document.querySelectorAll('.section-gradient-accent');
    if (!orbs.length && !sectionGradients.length) return;

    const isTouch = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);
    let mouseX = 0;
    let mouseY = 0;
    let currentMouseX = 0;
    let currentMouseY = 0;
    let ticking = false;

    function renderParallax() {
        const scrollY = window.pageYOffset || document.documentElement.scrollTop;

        // Animate global background orbs
        orbs.forEach((orb) => {
            const speed = parseFloat(orb.dataset.speed || '0.05');
            const axis = orb.dataset.axis || 'y';

            const yOffset = scrollY * speed;
            const xMouse = isTouch ? 0 : currentMouseX * speed * 30;
            const yMouse = isTouch ? 0 : currentMouseY * speed * 30;

            if (axis === 'both') {
                orb.style.transform = `translate3d(${xMouse.toFixed(1)}px, ${(yOffset + yMouse).toFixed(1)}px, 0)`;
            } else if (axis === 'x') {
                orb.style.transform = `translate3d(${xMouse.toFixed(1)}px, 0, 0)`;
            } else {
                orb.style.transform = `translate3d(0, ${(yOffset + yMouse).toFixed(1)}px, 0)`;
            }
        });

        // Animate localized section gradient accents based on viewport visibility
        const viewHeight = window.innerHeight;
        sectionGradients.forEach((grad) => {
            const parent = grad.parentElement;
            if (!parent) return;
            const rect = parent.getBoundingClientRect();
            if (rect.top < viewHeight && rect.bottom > 0) {
                const speed = parseFloat(grad.dataset.speed || '0.04');
                const progress = (viewHeight - rect.top) / (viewHeight + rect.height);
                const shiftY = (progress - 0.5) * speed * 350;
                const shiftX = isTouch ? 0 : currentMouseX * speed * 80;
                grad.style.transform = `translate3d(${shiftX.toFixed(1)}px, ${shiftY.toFixed(1)}px, 0)`;
            }
        });

        ticking = false;
    }

    // Scroll listener with RAF throttle
    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(renderParallax);
            ticking = true;
        }
    }, { passive: true });

    // Desktop interactive mouse cursor shift
    if (!isTouch) {
        window.addEventListener('mousemove', (e) => {
            mouseX = (e.clientX / window.innerWidth) - 0.5;
            mouseY = (e.clientY / window.innerHeight) - 0.5;

            // Gentle smoothing
            currentMouseX += (mouseX - currentMouseX) * 0.15;
            currentMouseY += (mouseY - currentMouseY) * 0.15;

            if (!ticking) {
                requestAnimationFrame(renderParallax);
                ticking = true;
            }
        }, { passive: true });
    }

    // Initial render
    renderParallax();
}

// Copy to Clipboard with Toast Notification
window.copyToClipboard = function(text, label = 'Text') {
    const successMsg = `✨ ${text} copied to clipboard!`;

    navigator.clipboard.writeText(text).then(() => {
        showToast(successMsg);
    }).catch(err => {
        console.error('Failed to copy:', err);
        showToast('Failed to copy to clipboard.', 'error');
    });
};

// Toast notification helper
function showToast(message, type = 'success') {
    const container = document.getElementById('toast-container');
    if (!container) return;

    const toast = document.createElement('div');
    toast.className = `flex items-center gap-3 px-4 py-3 rounded-2xl shadow-xl transition-all duration-300 transform translate-y-4 opacity-0 text-sm font-medium border backdrop-blur-md ${
        type === 'success' 
            ? 'bg-stone-900/90 text-stone-100 border-[#F2D887]/50' 
            : 'bg-rose-900/90 text-rose-100 border-rose-700/50'
    }`;
    toast.innerHTML = `
        <span class="inline-block w-2 h-2 rounded-full bg-[#F2D887] animate-pulse"></span>
        <span>${message}</span>
    `;

    container.appendChild(toast);

    // Animate in
    requestAnimationFrame(() => {
        toast.classList.remove('translate-y-4', 'opacity-0');
        toast.classList.add('translate-y-0', 'opacity-100');
    });

    // Animate out after 3.5s
    setTimeout(() => {
        toast.classList.remove('translate-y-0', 'opacity-100');
        toast.classList.add('translate-y-2', 'opacity-0');
        setTimeout(() => toast.remove(), 300);
    }, 3500);
}

// Project Filter by Category
function initProjectFilter() {
    const filterButtons = document.querySelectorAll('[data-filter-btn]');
    const projectCards = document.querySelectorAll('[data-project-category]');

    if (!filterButtons.length) return;

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const category = btn.getAttribute('data-filter-btn');

            // Update active button state
            filterButtons.forEach(b => {
                b.classList.remove('bg-[#1F3D2B]', 'text-white', 'shadow-xs');
                b.classList.add('bg-stone-100', 'text-stone-700');
            });

            btn.classList.remove('bg-stone-100', 'text-stone-700');
            btn.classList.add('bg-[#1F3D2B]', 'text-white', 'shadow-xs');

            // Filter items with smooth animation
            projectCards.forEach(card => {
                const cardCat = card.getAttribute('data-project-category');
                if (category === 'all' || cardCat.toLowerCase().includes(category.toLowerCase())) {
                    card.style.display = 'flex';
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.96)';
                    setTimeout(() => {
                        card.style.transition = 'all 0.3s ease';
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}

// Mobile Menu Toggle
function initMobileMenu() {
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const links = document.querySelectorAll('.mobile-nav-link');

    if (!toggleBtn || !menu) return;

    toggleBtn.addEventListener('click', () => {
        const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
        toggleBtn.setAttribute('aria-expanded', !isExpanded);
        menu.classList.toggle('hidden');
    });

    links.forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
            toggleBtn.setAttribute('aria-expanded', 'false');
        });
    });
}

// Sticky Navbar scroll effects (slight scale down, padding adjustment, subtle shadow, and backdrop blur)
function initStickyNavbar() {
    const navbarHeader = document.getElementById('navbar-header');
    const navbarPill = document.getElementById('navbar-pill');
    const navItems = document.querySelectorAll('.nav-pill-item');

    if (!navbarHeader || !navbarPill) return;

    let isScrolled = false;

    const handleScroll = () => {
        const scrolled = window.scrollY > 24;
        if (scrolled === isScrolled) return;
        isScrolled = scrolled;

        if (isScrolled) {
            navbarHeader.classList.remove('pt-4', 'sm:pt-6');
            navbarHeader.classList.add('pt-2.5', 'sm:pt-3');

            navbarPill.classList.remove('px-3', 'sm:px-6', 'py-2', 'sm:py-2.5', 'shadow-sm', 'bg-white/90', 'backdrop-blur-md');
            navbarPill.classList.add('px-2.5', 'sm:px-5', 'py-1.5', 'sm:py-2', 'shadow-md', 'shadow-[#B9C8E8]/25', 'bg-white/80', 'backdrop-blur-xl', 'scale-[0.98]');

            navItems.forEach(item => {
                item.classList.remove('py-1.5');
                item.classList.add('py-1');
            });
        } else {
            navbarHeader.classList.remove('pt-2.5', 'sm:pt-3');
            navbarHeader.classList.add('pt-4', 'sm:pt-6');

            navbarPill.classList.remove('px-2.5', 'sm:px-5', 'py-1.5', 'sm:py-2', 'shadow-md', 'shadow-[#B9C8E8]/25', 'bg-white/80', 'backdrop-blur-xl', 'scale-[0.98]');
            navbarPill.classList.add('px-3', 'sm:px-6', 'py-2', 'sm:py-2.5', 'shadow-sm', 'bg-white/90', 'backdrop-blur-md');

            navItems.forEach(item => {
                item.classList.remove('py-1');
                item.classList.add('py-1.5');
            });
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
}

// Back to Top button controller
function initBackToTop() {
    const backToTopBtn = document.getElementById('back-to-top');
    if (!backToTopBtn) return;

    let isVisible = false;

    const handleScroll = () => {
        const shouldShow = window.scrollY > 300;
        if (shouldShow === isVisible) return;
        isVisible = shouldShow;

        if (isVisible) {
            backToTopBtn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-3');
            backToTopBtn.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
        } else {
            backToTopBtn.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
            backToTopBtn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-3');
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Certificate Preview Modal
window.openCertificateModal = function(imageSrc, fileSrc, isPdf, title, issuer, badge) {
    const modal = document.getElementById('cert-modal');
    const modalCard = document.getElementById('cert-modal-card');
    const modalImg = document.getElementById('cert-modal-img');
    const modalTitle = document.getElementById('cert-modal-title');
    const modalIssuer = document.getElementById('cert-modal-issuer');
    const modalBadge = document.getElementById('cert-modal-badge');
    const modalDownload = document.getElementById('cert-modal-download');

    if (!modal) return;

    if (modalTitle) modalTitle.textContent = title || '';
    if (modalIssuer) modalIssuer.textContent = issuer || '';
    if (modalBadge) {
        modalBadge.textContent = badge || 'Certificate';
        modalBadge.style.display = badge ? 'inline-block' : 'none';
    }
    if (modalImg) {
        modalImg.src = imageSrc || fileSrc;
        modalImg.alt = title || 'Certificate';
    }
    if (modalDownload) {
        modalDownload.href = fileSrc || imageSrc;
        modalDownload.textContent = isPdf ? 'Open PDF' : 'Open Image';
    }

    modal.classList.remove('opacity-0', 'pointer-events-none');
    modal.classList.add('opacity-100', 'pointer-events-auto');
    if (modalCard) {
        modalCard.classList.remove('scale-95');
        modalCard.classList.add('scale-100');
    }
    document.body.classList.add('overflow-hidden');
};

window.closeCertificateModal = function() {
    const modal = document.getElementById('cert-modal');
    const modalCard = document.getElementById('cert-modal-card');

    if (!modal) return;

    modal.classList.remove('opacity-100', 'pointer-events-auto');
    modal.classList.add('opacity-0', 'pointer-events-none');
    if (modalCard) {
        modalCard.classList.remove('scale-100');
        modalCard.classList.add('scale-95');
    }
    document.body.classList.remove('overflow-hidden');
};

// Global button carousel scroller helper
window.scrollCarousel = function(containerId, offset) {
    const container = document.getElementById(containerId);
    if (container) {
        container.scrollBy({ left: offset, behavior: 'smooth' });
    }
};

// Initialize on DOM ready
document.addEventListener('DOMContentLoaded', () => {
    initStickyNavbar();
    initBackToTop();
    initProjectFilter();
    initMobileMenu();
    initDragToScroll();
    initProjectCarousel();
    initParallaxGradients();

    // Close certificate modal on backdrop click or Escape key
    const modal = document.getElementById('cert-modal');
    const backdrop = document.getElementById('cert-modal-backdrop');
    if (backdrop) {
        backdrop.addEventListener('click', () => {
            window.closeCertificateModal();
        });
    }
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal && !modal.classList.contains('pointer-events-none')) {
            window.closeCertificateModal();
        }
    });
});
