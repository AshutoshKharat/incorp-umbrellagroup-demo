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

    // ── DISABLE RIGHT-CLICK + COPY ────────────────────────────────
    document.addEventListener('contextmenu', function (e) { e.preventDefault(); });
    document.addEventListener('copy',        function (e) { e.preventDefault(); });
    document.addEventListener('cut',         function (e) { e.preventDefault(); });
    document.addEventListener('selectstart', function (e) { e.preventDefault(); });
    document.addEventListener('dragstart',   function (e) { e.preventDefault(); });

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

    // ── DESKTOP DROPDOWN HOVER + PROXIMITY ────────────────────
    const desktopDropdownMedia = window.matchMedia('(min-width: 992px)');
    const navbarMenuRoot = document.querySelector('.navbar .navbar-nav');

    if (navbarMenuRoot && typeof bootstrap !== 'undefined' && bootstrap.Dropdown) {
        const dropdownItems = Array.from(navbarMenuRoot.querySelectorAll('.nav-item.dropdown'));
        const megaMenus = Array.from(
            navbarMenuRoot.querySelectorAll('.dropdown-mega > .mega-dropdown, .dropdown-mega > .subsidiary-dropdown')
        );
        const PROXIMITY_PX = 24;
        const VIEWPORT_GAP_PX = 8;
        const CLOSE_DELAY_MS = 140;

        let activeDropdown = null;
        let closeTimer = null;

        const getToggle = (dropdownItem) => dropdownItem.querySelector(':scope > .dropdown-toggle');
        const getMenu = (dropdownItem) => dropdownItem.querySelector(':scope > .dropdown-menu');

        const clearViewportShift = (menu) => {
            menu.style.setProperty('--dropdown-shift-x', '0px');
        };

        const fitMenuIntoViewport = (menu) => {
            if (!desktopDropdownMedia.matches) {
                clearViewportShift(menu);
                return;
            }

            clearViewportShift(menu);

            const rect = menu.getBoundingClientRect();
            let shiftX = 0;

            if (rect.right > window.innerWidth - VIEWPORT_GAP_PX) {
                shiftX -= rect.right - (window.innerWidth - VIEWPORT_GAP_PX);
            }

            if (rect.left + shiftX < VIEWPORT_GAP_PX) {
                shiftX += VIEWPORT_GAP_PX - (rect.left + shiftX);
            }

            menu.style.setProperty('--dropdown-shift-x', `${Math.round(shiftX)}px`);
        };

        const pointNearRect = (x, y, rect, padding) => {
            return (
                x >= rect.left - padding &&
                x <= rect.right + padding &&
                y >= rect.top - padding &&
                y <= rect.bottom + padding
            );
        };

        const isPointerNearDropdown = (event, dropdownItem) => {
            const toggle = getToggle(dropdownItem);
            const menu = getMenu(dropdownItem);
            if (!toggle || !menu) return false;

            const toggleRect = toggle.getBoundingClientRect();
            const nearToggle = pointNearRect(event.clientX, event.clientY, toggleRect, PROXIMITY_PX);
            if (nearToggle) return true;

            if (!menu.classList.contains('show')) return false;

            const menuRect = menu.getBoundingClientRect();
            return pointNearRect(event.clientX, event.clientY, menuRect, PROXIMITY_PX);
        };

        const clearCloseTimer = () => {
            if (!closeTimer) return;
            clearTimeout(closeTimer);
            closeTimer = null;
        };

        const hideDropdown = (dropdownItem) => {
            const toggle = getToggle(dropdownItem);
            if (!toggle) return;

            bootstrap.Dropdown.getOrCreateInstance(toggle).hide();
        };

        const showDropdown = (dropdownItem) => {
            const toggle = getToggle(dropdownItem);
            const menu = getMenu(dropdownItem);
            if (!toggle) return;

            if (activeDropdown && activeDropdown !== dropdownItem) {
                hideDropdown(activeDropdown);
            }

            bootstrap.Dropdown.getOrCreateInstance(toggle).show();
            activeDropdown = dropdownItem;

            if (menu) {
                requestAnimationFrame(() => {
                    fitMenuIntoViewport(menu);
                });
            }
        };

        const scheduleCloseActive = () => {
            clearCloseTimer();
            closeTimer = setTimeout(() => {
                if (activeDropdown) {
                    hideDropdown(activeDropdown);
                    activeDropdown = null;
                }
            }, CLOSE_DELAY_MS);
        };

        document.addEventListener('mousemove', (event) => {
            if (!desktopDropdownMedia.matches) return;

            const hoveredDropdown = dropdownItems.find((dropdownItem) => {
                return dropdownItem.contains(event.target) || isPointerNearDropdown(event, dropdownItem);
            });

            if (hoveredDropdown) {
                clearCloseTimer();
                showDropdown(hoveredDropdown);
                return;
            }

            scheduleCloseActive();
        });

        navbarMenuRoot.addEventListener('mouseleave', () => {
            if (!desktopDropdownMedia.matches) return;
            scheduleCloseActive();
        });

        const resetDesktopDropdownState = () => {
            clearCloseTimer();
            if (desktopDropdownMedia.matches) return;

            dropdownItems.forEach((dropdownItem) => {
                hideDropdown(dropdownItem);
            });

            activeDropdown = null;

            megaMenus.forEach((menu) => {
                clearViewportShift(menu);
            });
        };

        window.addEventListener('resize', () => {
            if (!desktopDropdownMedia.matches) return;
            megaMenus.forEach((menu) => {
                if (menu.classList.contains('show')) {
                    fitMenuIntoViewport(menu);
                }
            });
        });

        if (typeof desktopDropdownMedia.addEventListener === 'function') {
            desktopDropdownMedia.addEventListener('change', resetDesktopDropdownState);
        } else if (typeof desktopDropdownMedia.addListener === 'function') {
            desktopDropdownMedia.addListener(resetDesktopDropdownState);
        }
    }

    // ── SUBSIDIARY DROPDOWN TABS ───────────────────────────────
    const subsidiaryDropdown = document.querySelector('.subsidiary-dropdown');
    const subsidiaryToggle = document.querySelector('.dropdown-mega > .dropdown-toggle');
    const subsidiaryParent = subsidiaryToggle ? subsidiaryToggle.closest('.dropdown') : null;

    // Reset accidental persisted/open state on refresh.
    if (subsidiaryDropdown && subsidiaryToggle && subsidiaryParent) {
        subsidiaryDropdown.classList.remove('show');
        subsidiaryParent.classList.remove('show');
        subsidiaryToggle.setAttribute('aria-expanded', 'false');
    }

    if (subsidiaryDropdown) {
        const tabs = subsidiaryDropdown.querySelectorAll('.subsidiary-tab');
        const panels = subsidiaryDropdown.querySelectorAll('.subsidiary-panel');

        const collapsePanelAccordions = (panel) => {
            if (!panel) return;

            const collapses = panel.querySelectorAll('.accordion-collapse');
            collapses.forEach((collapseEl) => {
                const collapse = bootstrap.Collapse.getOrCreateInstance(collapseEl, { toggle: false });
                collapse.hide();
            });
        };

        const activateSubsidiaryPanel = (targetKey) => {
            let activePanel = null;

            tabs.forEach((tab) => {
                const isTarget = tab.dataset.subsidiaryTarget === targetKey;
                tab.classList.toggle('is-active', isTarget);
                tab.setAttribute('aria-selected', isTarget ? 'true' : 'false');
            });

            panels.forEach((panel) => {
                const isTargetPanel = panel.dataset.subsidiaryPanel === targetKey;
                panel.classList.toggle('is-active', isTargetPanel);
                if (isTargetPanel) activePanel = panel;
            });

            // Reset accordion state on panel switch; user opens desired group manually.
            collapsePanelAccordions(activePanel);
        };

        // Keep mega dropdown open while user interacts with internal tab panel.
        subsidiaryDropdown.addEventListener('click', (event) => {
            event.stopPropagation();
        });

        tabs.forEach((tab) => {
            tab.addEventListener('click', (event) => {
                event.preventDefault();
                event.stopPropagation();
                activateSubsidiaryPanel(tab.dataset.subsidiaryTarget);
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
