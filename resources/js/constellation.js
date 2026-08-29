import * as THREE from 'three';

const DPR_CLAMP = 1.5;

export function initConstellation(canvas) {
    if (!canvas) {
        return;
    }

    let renderer;
    try {
        renderer = new THREE.WebGLRenderer({
            canvas,
            alpha: true,
            antialias: true,
            powerPreference: 'high-performance',
        });
    } catch (err) {
        document.body.classList.add('ambient-mesh');
        return;
    }

    const gl = renderer.getContext();
    if (!gl) {
        document.body.classList.add('ambient-mesh');
        return;
    }

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 60;

    const COUNT = 1500;

    const positions = new Float32Array(COUNT * 3);
    const colors = new Float32Array(COUNT * 3);

    const palette = [
        [129, 140, 248],
        [168, 85, 247],
        [255, 255, 255],
        [99, 102, 241],
        [52, 211, 153],
    ];

    for (let i = 0; i < COUNT; i++) {
        positions[i * 3] = (Math.random() - 0.5) * 220;
        positions[i * 3 + 1] = (Math.random() - 0.5) * 130;
        positions[i * 3 + 2] = (Math.random() - 0.5) * 130;

        const tint = palette[i % palette.length];
        colors[i * 3] = tint[0] / 255;
        colors[i * 3 + 1] = tint[1] / 255;
        colors[i * 3 + 2] = tint[2] / 255;
    }

    const geometry = new THREE.BufferGeometry();
    geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
    geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));

    const material = new THREE.PointsMaterial({
        size: 0.32,
        vertexColors: true,
        transparent: true,
        opacity: 0.85,
        blending: THREE.AdditiveBlending,
        depthWrite: false,
        sizeAttenuation: true,
    });

    const constellation = new THREE.Points(geometry, material);
    scene.add(constellation);

    const setViewport = () => {
        const width = window.innerWidth;
        const height = window.innerHeight;
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, DPR_CLAMP));
        renderer.setSize(width, height);
    };

    setViewport();
    renderer.render(scene, camera);

    let mouseX = 0;
    let mouseY = 0;
    let rafId = null;
    let running = true;

    const onPointerMove = (event) => {
        mouseX = (event.clientX / window.innerWidth - 0.5) * 2;
        mouseY = (event.clientY / window.innerHeight - 0.5) * 2;
    };

    const tick = () => {
        if (!running) {
            return;
        }
        rafId = requestAnimationFrame(tick);

        constellation.rotation.y += 0.00045;
        constellation.rotation.x += 0.00012;

        camera.position.x += (mouseX * 7 - camera.position.x) * 0.035;
        camera.position.y += (-mouseY * 7 - camera.position.y) * 0.035;
        camera.lookAt(scene.position);

        renderer.render(scene, camera);
    };

    const onVisibilityChange = () => {
        if (document.hidden) {
            running = false;
            cancelAnimationFrame(rafId);
        } else if (!running) {
            running = true;
            tick();
        }
    };

    const onResize = () => {
        setViewport();
    };

    window.addEventListener('pointermove', onPointerMove, { passive: true });
    window.addEventListener('resize', onResize, { passive: true });
    document.addEventListener('visibilitychange', onVisibilityChange);

    tick();

    return () => {
        running = false;
        cancelAnimationFrame(rafId);
        geometry.dispose();
        material.dispose();
        renderer.dispose();
        window.removeEventListener('pointermove', onPointerMove);
        window.removeEventListener('resize', onResize);
        document.removeEventListener('visibilitychange', onVisibilityChange);
    };
}