/* scripts/script.js
   Terra Connect — site interactions (menu, header, hero, reveals, carousel, fullscreen)
   ------------------------------------------------------------------------------ */

(function () {
    const body = document.body;
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    const GA_MEASUREMENT_ID = 'G-2REQR762M8';
    const CONSENT_COOKIE_KEY = 'tc_cookie_consent';
    const CONSENT_MAX_AGE_DAYS = 365;
    const CONSENT_ACCEPTED = 'accepted';
    const CONSENT_DECLINED = 'declined';
    const NON_ESSENTIAL_COOKIE_PATTERNS = [
        /^_ga($|_)/i,
        /^_gid$/i,
        /^_gat/i,
        /^AMP_/i,
        /^amplitude_/i,
    ];
    const NON_ESSENTIAL_STORAGE_PATTERNS = [
        /^_ga($|_)/i,
        /^_gid$/i,
        /^_gat/i,
        /amplitude/i,
        /google_analytics/i,
        /ga:/i,
    ];

    window[`ga-disable-${GA_MEASUREMENT_ID}`] = true;

    function getCookie(name) {
        const safeName = name.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
        const match = document.cookie.match(
            new RegExp(`(?:^|; )${safeName}=([^;]*)`)
        );
        return match ? decodeURIComponent(match[1]) : null;
    }

    function setCookie(name, value, days) {
        const maxAge = Math.max(1, Math.floor(days * 24 * 60 * 60));
        const secureFlag = window.location.protocol === 'https:' ? '; Secure' : '';
        document.cookie = `${name}=${encodeURIComponent(
            value
        )}; Max-Age=${maxAge}; Path=/; SameSite=Lax${secureFlag}`;
    }

    function getCandidateDomains() {
        const host = window.location.hostname;
        if (!host) return [];
        const parts = host.split('.').filter(Boolean);
        const domains = new Set([host, `.${host}`]);
        for (let i = 1; i < parts.length - 1; i += 1) {
            const domain = parts.slice(i).join('.');
            domains.add(domain);
            domains.add(`.${domain}`);
        }
        return Array.from(domains);
    }

    function deleteCookieEverywhere(name) {
        const secureFlag = window.location.protocol === 'https:' ? '; Secure' : '';
        const expires = 'Thu, 01 Jan 1970 00:00:00 GMT';
        const domains = [null, ...getCandidateDomains()];
        domains.forEach(domain => {
            const domainPart = domain ? `; Domain=${domain}` : '';
            document.cookie = `${name}=; Expires=${expires}; Max-Age=0; Path=/${domainPart}${secureFlag}`;
            document.cookie = `${name}=; Expires=${expires}; Max-Age=0; Path=/${domainPart}; SameSite=Lax${secureFlag}`;
        });
    }

    function clearNonEssentialClientData() {
        const cookieNames = document.cookie
            .split(';')
            .map(chunk => chunk.trim())
            .filter(Boolean)
            .map(chunk => chunk.split('=')[0]);

        cookieNames.forEach(name => {
            if (NON_ESSENTIAL_COOKIE_PATTERNS.some(pattern => pattern.test(name))) {
                deleteCookieEverywhere(name);
            }
        });

        try {
            const keysToDelete = [];
            for (let i = 0; i < localStorage.length; i += 1) {
                const key = localStorage.key(i);
                if (!key) continue;
                if (
                    key !== CONSENT_COOKIE_KEY &&
                    NON_ESSENTIAL_STORAGE_PATTERNS.some(pattern => pattern.test(key))
                ) {
                    keysToDelete.push(key);
                }
            }
            keysToDelete.forEach(key => localStorage.removeItem(key));
        } catch (_err) {
            // Ignore storage access failures.
        }

        try {
            const keysToDelete = [];
            for (let i = 0; i < sessionStorage.length; i += 1) {
                const key = sessionStorage.key(i);
                if (!key) continue;
                if (NON_ESSENTIAL_STORAGE_PATTERNS.some(pattern => pattern.test(key))) {
                    keysToDelete.push(key);
                }
            }
            keysToDelete.forEach(key => sessionStorage.removeItem(key));
        } catch (_err) {
            // Ignore storage access failures.
        }
    }

    function readStoredConsent() {
        const cookieValue = getCookie(CONSENT_COOKIE_KEY);
        if (cookieValue === CONSENT_ACCEPTED || cookieValue === CONSENT_DECLINED) {
            return cookieValue;
        }

        // Backward compatibility for earlier localStorage implementation.
        try {
            const legacy = localStorage.getItem(CONSENT_COOKIE_KEY);
            if (legacy === CONSENT_ACCEPTED || legacy === CONSENT_DECLINED) {
                setCookie(CONSENT_COOKIE_KEY, legacy, CONSENT_MAX_AGE_DAYS);
                return legacy;
            }
        } catch (_err) {
            // Ignore storage access failures.
        }

        return null;
    }

    function storeConsent(value) {
        setCookie(CONSENT_COOKIE_KEY, value, CONSENT_MAX_AGE_DAYS);
        try {
            localStorage.setItem(CONSENT_COOKIE_KEY, value);
        } catch (_err) {
            // Ignore storage access failures.
        }
    }

    function ensureGoogleAnalyticsLoaded() {
        if (window.__tcGaLoaded) return;

        window.dataLayer = window.dataLayer || [];
        if (typeof window.gtag !== 'function') {
            window.gtag = function gtag() {
                window.dataLayer.push(arguments);
            };
        }

        const script = document.createElement('script');
        script.async = true;
        script.src = `https://www.googletagmanager.com/gtag/js?id=${GA_MEASUREMENT_ID}`;
        document.head.appendChild(script);

        window.gtag('js', new Date());
        window.gtag('config', GA_MEASUREMENT_ID, {
            anonymize_ip: true,
            allow_google_signals: false,
            allow_ad_personalization_signals: false,
        });

        window.__tcGaLoaded = true;
    }

    function applyAnalyticsConsent(consent) {
        if (consent === CONSENT_ACCEPTED) {
            window[`ga-disable-${GA_MEASUREMENT_ID}`] = false;
            ensureGoogleAnalyticsLoaded();
            return;
        }
        window[`ga-disable-${GA_MEASUREMENT_ID}`] = true;
        clearNonEssentialClientData();
    }

    function buildCookieBanner() {
        const existing = document.getElementById('cookieConsent');
        if (existing) return existing;

        const banner = document.createElement('div');
        banner.id = 'cookieConsent';
        banner.className = 'cookie-consent';
        banner.setAttribute('role', 'dialog');
        banner.setAttribute('aria-label', 'Cookie consent');
        banner.style.display = 'none';
        banner.innerHTML = `
            <div class="cookie-consent-content">
                <p>We use essential cookies to run this website and optional analytics cookies to improve performance. Click &ldquo;Accept&rdquo; to allow analytics cookies, or &ldquo;Decline&rdquo; to continue with essential cookies only. See our <a href="/cookie-policy/">Cookie Policy</a> for details.</p>
                <div class="cookie-consent-buttons">
                    <button id="cookieAccept" class="btn cookie-btn-accept" type="button">Accept</button>
                    <button id="cookieDecline" class="btn cookie-btn-decline" type="button">Decline</button>
                </div>
            </div>
        `;

        body.appendChild(banner);
        return banner;
    }

    function setBannerVisible(banner, visible) {
        if (!banner) return;
        banner.style.display = visible ? 'flex' : 'none';
    }

    function bindCookieBannerEvents(banner) {
        if (!banner || banner.dataset.bound === 'true') return;
        const acceptBtn = banner.querySelector('#cookieAccept');
        const declineBtn = banner.querySelector('#cookieDecline');
        if (!acceptBtn || !declineBtn) return;

        acceptBtn.addEventListener('click', () => {
            storeConsent(CONSENT_ACCEPTED);
            applyAnalyticsConsent(CONSENT_ACCEPTED);
            setBannerVisible(banner, false);
        });

        declineBtn.addEventListener('click', () => {
            storeConsent(CONSENT_DECLINED);
            applyAnalyticsConsent(CONSENT_DECLINED);
            setBannerVisible(banner, false);
        });

        banner.dataset.bound = 'true';
    }

    function initCookieConsent() {
        const consent = readStoredConsent();
        applyAnalyticsConsent(consent);

        const banner = buildCookieBanner();
        bindCookieBannerEvents(banner);
        setBannerVisible(banner, !consent);
    }

    function normalizePath(pathname) {
        if (!pathname) return '/';
        let path = pathname.split('?')[0].split('#')[0];
        path = path.replace(/\/index\.(html|php)$/i, '/');
        path = path.replace(/\/{2,}/g, '/');
        if (path !== '/' && path.endsWith('/')) path = path.slice(0, -1);
        return path || '/';
    }

    function hrefToPath(href) {
        try {
            const url = new URL(href, window.location.origin);
            return normalizePath(url.pathname);
        } catch (_err) {
            return normalizePath(href);
        }
    }

    function fallbackLabelFromPath() {
        const parts = normalizePath(window.location.pathname)
            .split('/')
            .filter(Boolean);
        const last = parts[parts.length - 1] || 'Page';
        return decodeURIComponent(last)
            .replace(/[-_]+/g, ' ')
            .replace(/\b\w/g, c => c.toUpperCase());
    }

    function buildDynamicMenuLabel() {
        const h1 = document.querySelector('h1');
        const headingText = (h1 ? h1.textContent : '')
            .replace(/\s+/g, ' ')
            .trim();
        if (!headingText) return fallbackLabelFromPath();
        const words = headingText.split(' ');
        if (words.length > 3) return words.slice(0, 3).join(' ');
        return headingText;
    }

    function syncCurrentPageInHeaderMenu() {
        if (!navMenu) return;
        const list = navMenu.querySelector('ul');
        if (!list) return;

        const currentPath = normalizePath(window.location.pathname);
        const isProcessSection =
            currentPath === '/process' || currentPath.startsWith('/process/');
        const isServicesSection =
            currentPath === '/services' || currentPath.startsWith('/services/');
        const links = Array.from(list.querySelectorAll('a[href]'));
        const linkData = links.map(link => ({
            link,
            path: hrefToPath(link.getAttribute('href')),
        }));

        let matchedLink = null;

        // 1) Exact path match
        matchedLink =
            linkData.find(item => item.path === currentPath)?.link || null;

        // 2) Section fallback for process steps: keep "Our Process" active
        if (!matchedLink && isProcessSection) {
            matchedLink =
                linkData.find(item => item.path.startsWith('/process'))?.link ||
                null;
        }

        // 3) Section fallback for new service detail pages
        if (!matchedLink && isServicesSection) {
            matchedLink =
                linkData.find(item => item.path === '/our-services')?.link ||
                null;
        }

        const matched = Boolean(matchedLink);

        links.forEach(link => {
            const isCurrent = link === matchedLink;
            if (isCurrent) {
                link.classList.add('active-page');
                link.setAttribute('aria-current', 'page');
            } else {
                link.classList.remove('active-page');
                link.removeAttribute('aria-current');
            }
        });

        if (matched || currentPath === '/') return;

        const li = document.createElement('li');
        li.className = 'menu-dynamic-current';

        const link = document.createElement('a');
        link.href =
            window.location.pathname === '/'
                ? '/'
                : window.location.pathname.endsWith('/')
                  ? window.location.pathname
                  : window.location.pathname + '/';
        link.textContent = buildDynamicMenuLabel();
        link.classList.add('active-page');
        link.setAttribute('aria-current', 'page');

        li.appendChild(link);
        list.appendChild(li);
    }

    syncCurrentPageInHeaderMenu();
    document.addEventListener('DOMContentLoaded', syncCurrentPageInHeaderMenu);
    window.addEventListener('pageshow', syncCurrentPageInHeaderMenu);
    initCookieConsent();

    /* =======================
     Mobile menu toggle
  ======================= */

    function setMenuToggleIcon(isOpen) {
        if (!menuToggle) return;
        if (isOpen) {
            menuToggle.innerHTML =
                '<img src="/images/img-svg/close.svg" alt="" width="28" height="28" aria-hidden="true" />';
            return;
        }

        menuToggle.innerHTML =
            '<img src="/images/img-svg/burger.svg" alt="" width="28" height="28" aria-hidden="true" />';
    }

    function openMenu() {
        navMenu.classList.add('active');
        body.classList.add('no-scroll');
        menuToggle.setAttribute('aria-expanded', 'true');
        menuToggle.setAttribute('aria-label', 'Close menu');
        setMenuToggleIcon(true);
    }

    function closeMenu() {
        navMenu.classList.remove('active');
        body.classList.remove('no-scroll');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Open menu');
        setMenuToggleIcon(false);
    }

    function toggleMenu() {
        if (!navMenu) return;
        const isOpen = navMenu.classList.contains('active');
        isOpen ? closeMenu() : openMenu();
    }

    if (menuToggle && navMenu) {
        setMenuToggleIcon(false);

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
        if (window.innerWidth <= breakpoint) {
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
            if (!first) return 1;
            const rect = first.getBoundingClientRect();
            // include gap
            const styles = window.getComputedStyle(carouselWrap);
            const gap = parseFloat(styles.gap || styles.columnGap || '0') || 0;
            return Math.max(1, rect.width + gap);
        }

        function getViewportWidth() {
            const viewport = carouselWrap.parentElement;
            if (!viewport) return 0;

            const viewportRect = viewport.getBoundingClientRect();
            const catalog = document.getElementById('catalog');
            if (!catalog) return viewport.clientWidth;

            // On desktop, #catalog has overlay panels (.holl / .right-holl) that
            // visually cover part of the carousel area. Subtract that overlap so
            // last-card math uses the real visible width.
            const blockers = ['.holl', '.right-holl'];
            let coveredWidth = 0;

            blockers.forEach(selector => {
                const el = catalog.querySelector(selector);
                if (!el) return;
                const r = el.getBoundingClientRect();
                const yOverlap =
                    Math.max(
                        0,
                        Math.min(viewportRect.bottom, r.bottom) -
                            Math.max(viewportRect.top, r.top)
                    );
                if (yOverlap <= 0) return;
                const overlap =
                    Math.max(
                        0,
                        Math.min(viewportRect.right, r.right) -
                            Math.max(viewportRect.left, r.left)
                    );
                coveredWidth += overlap;
            });

            return Math.max(1, viewport.clientWidth - coveredWidth);
        }

        function getMaxOffset() {
            const viewportWidth = getViewportWidth();
            return Math.max(0, carouselWrap.scrollWidth - viewportWidth);
        }

        function getLastItemStartOffset() {
            const items = carouselWrap.querySelectorAll('.caroucel-item');
            if (!items.length) return 0;
            const last = items[items.length - 1];
            return Math.max(0, last.offsetLeft);
        }

        function getEndOffset() {
            const maxOffset = getMaxOffset();
            // Desktop requirement: final stop should place the last card as the
            // only visible card in the carousel window (aligned at the start).
            if (window.innerWidth > 1024) {
                return Math.max(maxOffset, getLastItemStartOffset());
            }
            return maxOffset;
        }

        function maxIndex() {
            const step = getStep();
            const endOffset = getEndOffset();
            return Math.max(0, Math.ceil(endOffset / step));
        }

        function applyTransform() {
            const step = getStep();
            const endOffset = getEndOffset();
            const offset = Math.min(currentIndex * step, endOffset);
            carouselWrap.style.transform = `translateX(-${offset}px)`;
            updateButtons(offset, endOffset);
        }

        const dotsContainer = document.getElementById('carouselDots');

        function buildDots() {
            if (!dotsContainer) return;
            dotsContainer.innerHTML = '';
            const totalSteps = maxIndex() + 1;

            for (let i = 0; i < totalSteps; i++) {
                const dot = document.createElement('button');
                dot.className = 'carousel-dot' + (i === currentIndex ? ' active' : '');
                dot.setAttribute('role', 'tab');
                dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
                dot.setAttribute('aria-selected', i === currentIndex ? 'true' : 'false');
                dot.addEventListener('click', function () {
                    currentIndex = i;
                    applyTransform();
                });
                dotsContainer.appendChild(dot);
            }
        }

        function updateDots() {
            if (!dotsContainer) return;
            var dots = dotsContainer.querySelectorAll('.carousel-dot');
            dots.forEach(function (dot, i) {
                var isActive = i === currentIndex;
                dot.classList.toggle('active', isActive);
                dot.setAttribute('aria-selected', String(isActive));
            });
        }

        function updateButtons(offset = 0, endOffset = getEndOffset()) {
            const atStart = currentIndex <= 0;
            const atEnd = offset >= endOffset - 1;
            prevBtn.disabled = atStart;
            nextBtn.disabled = atEnd;
            prevBtn.setAttribute('aria-disabled', String(atStart));
            nextBtn.setAttribute('aria-disabled', String(atEnd));
            updateDots();
        }

        function move(dir) {
            if (dir === 'next') {
                currentIndex = Math.min(currentIndex + 1, maxIndex());
            } else {
                currentIndex = Math.max(currentIndex - 1, 0);
            }
            applyTransform();
        }

        prevBtn.addEventListener('click', e => {
            e.preventDefault();
            e.stopPropagation();
            if (prevBtn.disabled) return;
            move('prev');
        });
        nextBtn.addEventListener('click', e => {
            e.preventDefault();
            e.stopPropagation();
            if (nextBtn.disabled) return;
            move('next');
        });

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
            buildDots();
            applyTransform();
        });
        ro.observe(carouselWrap);
        ro.observe(carouselWrap.closest('.carousel-container'));

        // Init
        currentIndex = 0;
        buildDots();
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

/* FAQ Accordion */
const faqItems = document.querySelectorAll('.faq-item');
faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    if (!question) return;
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
const contactForm = document.querySelector('.contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
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
            if (!input) {
                isValid = false;
                return;
            }
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
}
