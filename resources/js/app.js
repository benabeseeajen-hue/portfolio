import { animate, inView, stagger } from 'motion';

const SPRING = [0.32, 0.72, 0, 1];

// Ambient WebGL background, clamped DPR, static mesh fallback.
const constellationCanvas = document.getElementById('constellation');
if (constellationCanvas) {
    import('./constellation')
        .then(({ initConstellation }) => initConstellation(constellationCanvas))
        .catch(() => {
            document.body.classList.add('ambient-mesh');
        });
} else {
    document.body.classList.add('ambient-mesh');
}

// Scroll reveals: opacity, y, blur -> visible, staggered, spring easing.
const revealTargets = document.querySelectorAll('[data-reveal], [data-reveal-item]');
revealTargets.forEach((el) => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(24px)';
    el.style.filter = 'blur(4px)';
});

const setVisible = (el) => {
    el.style.opacity = '1';
    el.style.transform = '';
    el.style.filter = '';
};

inView('[data-reveal]', (element) => {
    animate(
        element,
        { opacity: 1, y: 0, filter: 'blur(0px)' },
        {
            duration: 0.8,
            easing: SPRING,
            delay: stagger(0.08, { start: 0 }),
        }
    );
});

inView('[data-reveal-stagger]', (container) => {
    animate(
        container.querySelectorAll('[data-reveal-item]'),
        { opacity: 1, y: 0, filter: 'blur(0px)' },
        {
            duration: 0.7,
            easing: SPRING,
            delay: stagger(0.09),
        }
    );
});

// Failsafe: if any reveal target is still invisible inside the viewport
// (observer error, missing entries, etc.), force it visible so content is never lost.
setTimeout(() => {
    revealTargets.forEach((el) => {
        if (getComputedStyle(el).opacity === '0') {
            const rect = el.getBoundingClientRect();
            const withinViewport = rect.top < window.innerHeight && rect.bottom > 0;
            if (withinViewport) {
                setVisible(el);
            }
        }
    });
}, 2500);

// Haptic magnetic pull on chips that are not reveal-driven.
document.querySelectorAll('[data-magnetic]').forEach((chip) => {
    const strength = 10;
    let frame = null;

    chip.addEventListener('pointermove', (event) => {
        const rect = chip.getBoundingClientRect();
        const x = (event.clientX - rect.left - rect.width / 2) / (rect.width / 2);
        const y = (event.clientY - rect.top - rect.height / 2) / (rect.height / 2);

        cancelAnimationFrame(frame);
        frame = requestAnimationFrame(() => {
            chip.style.transform = `translate(${x * strength}px, ${y * strength}px)`;
        });
    });

    chip.addEventListener('pointerleave', () => {
        cancelAnimationFrame(frame);
        chip.style.transition = 'transform 0.45s cubic-bezier(0.32, 0.72, 0, 1)';
        chip.style.transform = 'translate(0, 0)';
        setTimeout(() => {
            chip.style.transition = '';
        }, 450);
    });
});

// Nav scroll state: blend the floating island deeper after leaving the top.
const NAV_ACTIVATED = 24;
const navBar = document.querySelector('[data-navigation]');
const onScroll = () => {
    if (!navBar) {
        return;
    }
    const scrolled = window.scrollY > NAV_ACTIVATED;
    navBar.classList.toggle('nav-scrolled', scrolled);
};
window.addEventListener('scroll', onScroll, { passive: true });
onScroll();

// Mobile menu.
const menuButton = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
if (menuButton && mobileMenu) {
    const closeMenu = () => {
        mobileMenu.classList.add('hidden');
        menuButton.setAttribute('aria-expanded', 'false');
    };
    menuButton.addEventListener('click', () => {
        const open = mobileMenu.classList.toggle('hidden') === false;
        menuButton.setAttribute('aria-expanded', String(open));
    });
    mobileMenu.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
}