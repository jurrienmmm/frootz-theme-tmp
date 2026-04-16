/**
 * Frootz Royale Theme Scripts
 *
 * @package Frootz_Royale
 * @since 1.0.0
 */

(function () {
    'use strict';

    /**
     * Theme persistence — sync body class with html element on load.
     * Initial detection happens inline in <head> to prevent flash.
     */
    if (document.documentElement.classList.contains('theme-light')) {
        document.body.classList.add('theme-light');
    }

    /**
     * Mobile menu toggle.
     */
    function initMobileMenu() {
        var toggle = document.getElementById('menu-toggle');
        var navLeft = document.getElementById('nav-left');
        var navRight = document.getElementById('nav-right');

        if (!toggle || !navLeft || !navRight) {
            return;
        }

        toggle.addEventListener('click', function () {
            var isOpen = navLeft.classList.contains('active');

            navLeft.classList.toggle('active');
            navRight.classList.toggle('active');
            toggle.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
        });

        // Close menu when clicking a nav link
        var navLinks = document.querySelectorAll('.nav-left a, .nav-right a');
        navLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                navLeft.classList.remove('active');
                navRight.classList.remove('active');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    /**
     * Smooth scroll for anchor links.
     */
    function initSmoothScroll() {
        var anchors = document.querySelectorAll('a[href^="#"]');

        anchors.forEach(function (anchor) {
            anchor.addEventListener('click', function (e) {
                var targetId = this.getAttribute('href');
                if (targetId === '#') return;

                var target = document.querySelector(targetId);
                if (!target) return;

                e.preventDefault();

                var headerHeight = document.querySelector('.site-header')
                    ? document.querySelector('.site-header').offsetHeight
                    : 0;

                var targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            });
        });
    }

    /**
     * Animate elements on scroll (IntersectionObserver).
     */
    function initScrollAnimations() {
        if (!('IntersectionObserver' in window)) {
            // Fallback: show all elements immediately
            var items = document.querySelectorAll('.animate-in');
            items.forEach(function (item) {
                item.style.opacity = '1';
            });
            return;
        }

        var observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.15,
                rootMargin: '0px 0px -50px 0px'
            }
        );

        var animatedElements = document.querySelectorAll('.animate-in');
        animatedElements.forEach(function (el) {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });
    }

    /**
     * Initialize all scripts on DOMContentLoaded.
     */
    function init() {
        initMobileMenu();
        initSmoothScroll();
        initScrollAnimations();
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
