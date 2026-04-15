/**
 * main.js
 * Thinkbix — lightweight JS for UI interactions
 */

document.addEventListener('DOMContentLoaded', () => {

    // ── THEME TOGGLE ────────────────────────────────────────────
    const html      = document.documentElement;
    const toggleBtn = document.getElementById('themeToggle');

    // Sync button state with whatever the inline script already applied
    function applyTheme(theme) {
        html.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
    }

    // Ensure attribute is set (fallback if inline script missed)
    if (!html.hasAttribute('data-theme')) {
        const saved = localStorage.getItem('theme') ||
            (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        html.setAttribute('data-theme', saved);
    }

    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            const next = html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
            applyTheme(next);
        });
    }

    // ── MOBILE NAV CLOSE ────────────────────────────────────────
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)');
    const navCollapse = document.getElementById('mainNav');

    if (navCollapse) {
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                const bsCollapse = bootstrap.Collapse.getInstance(navCollapse);
                if (bsCollapse) bsCollapse.hide();
            });
        });
    }

    // Subtle scroll-in animation for service cards
    if ('IntersectionObserver' in window) {
        const cards = document.querySelectorAll('.service-card');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        cards.forEach((card, i) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(24px)';
            card.style.transition = `opacity 0.5s ease ${i * 80}ms, transform 0.5s ease ${i * 80}ms`;
            observer.observe(card);
        });
    }

});
