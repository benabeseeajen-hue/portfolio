import { animate, inView, stagger } from 'motion';

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (!prefersReducedMotion) {
    document.querySelectorAll('[data-reveal]').forEach((el) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(24px)';
    });

    inView('[data-reveal]', (info) => {
        animate(
            info.target,
            { opacity: 1, y: 0 },
            {
                duration: 0.7,
                easing: [0.22, 1, 0.36, 1],
                delay: stagger(0.08, { start: 0 }),
            }
        );
    });

    inView('[data-reveal-stagger]', (info) => {
        animate(
            info.target.querySelectorAll('[data-reveal-item]'),
            { opacity: 1, y: 0 },
            {
                duration: 0.6,
                easing: [0.22, 1, 0.36, 1],
                delay: stagger(0.1),
            }
        );
    });
}
