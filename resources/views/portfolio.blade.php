<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Eajen Rainier S. Benabese — BSIT Student, Full-Stack Developer & Digital Designer. Awwwards-tier OLED portfolio.">
    <title>Eajen Rainier S. Benabese — Full-Stack Developer</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#050505] text-zinc-300 min-h-screen antialiased">
    {{-- Ambient WebGL constellation layer --}}
    <canvas id="constellation" class="constellation-layer" aria-hidden="true"></canvas>

    <div class="relative z-10">
        {{-- =============================================================
             A. NAVIGATION — Detached Fluid Glass Island
        ============================================================== --}}
        <nav data-navigation class="fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[92%] max-w-4xl">
            <div class="nav-inner bg-zinc-950/75 backdrop-blur-2xl border border-white/10 rounded-full px-6 py-3 flex items-center justify-between shadow-2xl shadow-black/80">
                <a href="#about" class="font-mono text-sm font-semibold tracking-wider text-white hover:text-indigo-400 transition-colors">
                    eajen.free.nf
                </a>

                <div class="hidden md:flex items-center space-x-6 text-xs uppercase tracking-widest text-zinc-400 font-medium">
                    <a href="#about" class="hover:text-white transition-colors">About</a>
                    <a href="#skills" class="hover:text-white transition-colors">Skills</a>
                    <a href="#projects" class="hover:text-white transition-colors">Projects</a>
                    <a href="#education" class="hover:text-white transition-colors">Education</a>
                    <a href="#connect" class="hover:text-white transition-colors">Connect</a>
                </div>

                <div class="flex items-center gap-3">
                    <a href="#connect" class="group hidden sm:flex items-center gap-2 pl-4 pr-1.5 py-1.5 rounded-full bg-white/10 hover:bg-white/15 text-white text-xs font-medium border border-white/10 transition-all active:scale-[0.98]">
                        <span>Get in Touch</span>
                        <span class="w-6 h-6 rounded-full bg-indigo-500 flex items-center justify-center transition-transform group-hover:translate-x-0.5">↗</span>
                    </a>

                    <button id="mobile-menu-btn" aria-expanded="false" aria-label="Toggle navigation menu"
                        class="md:hidden w-9 h-9 rounded-full bg-white/10 hover:bg-white/15 border border-white/10 text-white flex items-center justify-center active:scale-[0.98] transition-all">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/>
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Mobile menu --}}
            <div id="mobile-menu" class="hidden md:hidden mt-3 bg-zinc-950/95 backdrop-blur-2xl border border-white/10 rounded-3xl p-2 shadow-2xl shadow-black/80">
                <a href="#about" class="block px-4 py-3 rounded-2xl text-zinc-300 hover:text-white hover:bg-white/5 text-sm transition-colors">About</a>
                <a href="#skills" class="block px-4 py-3 rounded-2xl text-zinc-300 hover:text-white hover:bg-white/5 text-sm transition-colors">Skills</a>
                <a href="#projects" class="block px-4 py-3 rounded-2xl text-zinc-300 hover:text-white hover:bg-white/5 text-sm transition-colors">Projects</a>
                <a href="#education" class="block px-4 py-3 rounded-2xl text-zinc-300 hover:text-white hover:bg-white/5 text-sm transition-colors">Education</a>
                <a href="#connect" class="block px-4 py-3 rounded-2xl text-zinc-300 hover:text-white hover:bg-white/5 text-sm transition-colors">Connect</a>
            </div>
        </nav>

        <main>
            {{-- =============================================================
                 B. HERO — Profile & Contact
            ============================================================== --}}
            <section id="about" class="relative min-h-screen flex items-center justify-center overflow-hidden scroll-mt-24">
                {{-- Ambient orbs --}}
                <div aria-hidden="true" class="absolute -top-32 -left-32 w-[480px] h-[480px] orb rounded-full bg-indigo-500/15 blur-[120px] pointer-events-none"></div>
                <div aria-hidden="true" class="absolute -bottom-40 -right-24 w-[520px] h-[520px] orb orb-slow rounded-full bg-purple-500/15 blur-[130px] pointer-events-none"></div>

                <div class="max-w-4xl mx-auto px-6 py-28 text-center">
                    {{-- Profile avatar: concentric double-bezel + monogram fallback --}}
                    <div class="relative w-32 h-32 md:w-40 md:h-40 mx-auto mb-10" data-magnetic>
                        <div class="absolute -inset-2 rounded-full bg-gradient-to-br from-indigo-500/30 via-purple-500/15 to-transparent blur-2xl"></div>
                        <div class="absolute -inset-1.5 rounded-full bg-white/[0.03] border border-white/[0.08]"></div>
                        <div class="absolute -inset-0.5 rounded-full border border-white/10"></div>
                        <div class="absolute inset-0 rounded-full bg-zinc-900 flex items-center justify-center text-4xl font-bold tracking-tight text-indigo-400 select-none">EB</div>
                        <img src="{{ asset('eb.jpg') }}" alt="Eajen Rainier S. Benabese" onerror="this.style.display='none'"
                            class="relative z-10 w-full h-full rounded-full object-cover border border-white/5 group-hover:ring-2 group-hover:ring-indigo-500/40 transition-all duration-500" />
                    </div>

                    <p data-reveal class="text-[10px] uppercase font-mono tracking-[0.25em] text-indigo-400 mb-4">BSIT · Full-Stack · Digital Design</p>

                    <h1 data-reveal class="text-4xl md:text-6xl font-bold tracking-tight text-white mb-6">
                        Eajen Rainier S. <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-indigo-400">Benabese</span>
                    </h1>

                    <p data-reveal class="text-lg md:text-xl text-zinc-400 font-medium mb-6">BSIT Student · Full-Stack Developer · Digital Designer</p>

                    <p data-reveal class="text-sm md:text-base text-zinc-400/90 leading-relaxed max-w-2xl mx-auto mb-10">
                        I build clean, high-performance web applications and craft immersive digital experiences —
                        blending full-stack engineering, modern design systems, and motion kinetics.
                    </p>

                    <div data-reveal class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                        <a href="#projects"
                            class="group flex items-center gap-2 pl-5 pr-2 py-2 rounded-full bg-indigo-500 hover:bg-indigo-400 text-white text-sm font-medium shadow-lg shadow-indigo-500/25 transition-all active:scale-[0.98]">
                            <span>View Projects</span>
                            <span class="w-7 h-7 rounded-full bg-white/15 flex items-center justify-center transition-transform group-hover:translate-x-0.5">↓</span>
                        </a>
                        <a href="mailto:benabeseeajen@gmail.com"
                            class="inline-flex items-center pl-5 pr-5 py-2.5 rounded-full bg-white/[0.06] hover:bg-white/[0.1] border border-white/10 text-white text-sm font-medium transition-all active:scale-[0.98]">
                            <svg class="w-4 h-4 mr-2 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            benabeseeajen@gmail.com
                        </a>
                    </div>

                    {{-- Social chips --}}
                    <div data-reveal-stagger class="flex flex-wrap justify-center gap-3 mb-12">
                        <a href="https://github.com/benabeseeajen-hue" target="_blank" rel="noopener" data-magnetic
                            class="group rounded-2xl border border-white/[0.08] bg-white/[0.03] p-2 hover:border-indigo-500/40 transition-all duration-500 active:scale-[0.98]">
                            <span class="flex items-center gap-2 rounded-[0.75rem] bg-zinc-950/80 px-4 py-2 text-sm text-zinc-300 hover:text-white shadow-[inset_0_1px_1px_rgba(255,255,255,0.08)]">
                                <svg class="w-4 h-4 text-zinc-400 group-hover:text-indigo-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                                </svg>
                                GitHub
                            </span>
                        </a>
                        <a href="https://www.instagram.com/rainiervsthemthrfworld" target="_blank" rel="noopener" data-magnetic
                            class="group rounded-2xl border border-white/[0.08] bg-white/[0.03] p-2 hover:border-indigo-500/40 transition-all duration-500 active:scale-[0.98]">
                            <span class="flex items-center gap-2 rounded-[0.75rem] bg-zinc-950/80 px-4 py-2 text-sm text-zinc-300 hover:text-white shadow-[inset_0_1px_1px_rgba(255,255,255,0.08)]">
                                <svg class="w-4 h-4 text-zinc-400 group-hover:text-indigo-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 3a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2h10zm-5 4a5 5 0 110 10 5 5 0 010-10zm6.5-1.5h.01"/>
                                </svg>
                                Instagram
                            </span>
                        </a>
                        <a href="https://www.facebook.com/jenskie.benabese" target="_blank" rel="noopener" data-magnetic
                            class="group rounded-2xl border border-white/[0.08] bg-white/[0.03] p-2 hover:border-indigo-500/40 transition-all duration-500 active:scale-[0.98]">
                            <span class="flex items-center gap-2 rounded-[0.75rem] bg-zinc-950/80 px-4 py-2 text-sm text-zinc-300 hover:text-white shadow-[inset_0_1px_1px_rgba(255,255,255,0.08)]">
                                <svg class="w-4 h-4 text-zinc-400 group-hover:text-indigo-400 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047v-2.66c0-3.02 1.792-4.688 4.533-4.688 1.312 0 2.686.236 2.686.236v2.971H15.83c-1.491 0-1.956.93-1.956 1.886v2.255h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/>
                                </svg>
                                Facebook
                            </span>
                        </a>
                    </div>

                    <div data-reveal class="flex flex-wrap justify-center gap-x-8 gap-y-3 text-zinc-500 text-sm">
                        <span class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-indigo-400/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            Bacsil, Angad, Bangued, Abra, Philippines
                        </span>
                        <a href="tel:09650814023" class="flex items-center gap-2 hover:text-white transition-colors">
                            <svg class="w-4 h-4 text-indigo-400/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            09650814023
                        </a>
                    </div>
                </div>

                {{-- Scroll hint --}}
                <div aria-hidden="true" class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-zinc-600">
                    <span class="text-[10px] uppercase font-mono tracking-[0.25em]">Scroll</span>
                    <span class="w-px h-10 bg-white/10 overflow-hidden"><span class="scroll-line block w-full h-full bg-indigo-400/70"></span></span>
                </div>
            </section>

            {{-- =============================================================
                 C. SKILLS MATRIX
            ============================================================== --}}
            <section id="skills" class="relative py-24 md:py-32 scroll-mt-24">
                <div class="max-w-6xl mx-auto px-6">
                    <p data-reveal class="text-[10px] uppercase font-mono tracking-[0.25em] text-indigo-400 mb-3">Case // Capability Stack</p>
                    <h2 data-reveal class="text-3xl md:text-5xl font-bold tracking-tight text-white mb-16">Skills Matrix</h2>

                    <div class="space-y-8" data-reveal-stagger>
                        {{-- Category 1: Programming Languages --}}
                        <div data-reveal-item class="group rounded-[2rem] border border-white/[0.08] bg-white/[0.03] p-2 hover:border-indigo-500/30 transition-all duration-500">
                            <div class="rounded-[calc(2rem-0.5rem)] bg-zinc-950/80 p-6 md:p-10 shadow-[inset_0_1px_1px_rgba(255,255,255,0.08)]">
                                <div class="flex items-center justify-between mb-8">
                                    <h3 class="text-xl md:text-2xl font-semibold tracking-tight text-white">01 — Programming Languages</h3>
                                    <span class="hidden md:inline-flex px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs font-mono tracking-widest">9 LANGUAGES</span>
                                </div>
                                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                                    <div class="flex items-center justify-between gap-4 rounded-2xl border border-white/[0.06] bg-white/[0.02] px-4 py-3 group-hover:border-white/[0.1] transition-colors">
                                        <div class="min-w-0">
                                            <p class="font-mono text-sm text-white font-medium">PHP</p>
                                            <p class="text-zinc-500 text-xs mt-0.5 truncate">Backend logic · Laravel MVC · API routing</p>
                                        </div>
                                        <span class="shrink-0 px-2.5 py-1 rounded-full bg-indigo-500 text-white text-[10px] font-mono tracking-wider">PRIMARY</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 rounded-2xl border border-white/[0.06] bg-white/[0.02] px-4 py-3 group-hover:border-white/[0.1] transition-colors">
                                        <div class="min-w-0">
                                            <p class="font-mono text-sm text-white font-medium">HTML5</p>
                                            <p class="text-zinc-500 text-xs mt-0.5 truncate">Semantic DOM · WCAG · microdata</p>
                                        </div>
                                        <span class="shrink-0 px-2.5 py-1 rounded-full bg-indigo-500 text-white text-[10px] font-mono tracking-wider">PRIMARY</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 rounded-2xl border border-white/[0.06] bg-white/[0.02] px-4 py-3 group-hover:border-white/[0.1] transition-colors">
                                        <div class="min-w-0">
                                            <p class="font-mono text-sm text-white font-medium">CSS</p>
                                            <p class="text-zinc-500 text-xs mt-0.5 truncate">Tailwind v4 · layouts · fluid animation</p>
                                        </div>
                                        <span class="shrink-0 px-2.5 py-1 rounded-full bg-indigo-500 text-white text-[10px] font-mono tracking-wider">PRIMARY</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 rounded-2xl border border-white/[0.06] bg-white/[0.02] px-4 py-3 group-hover:border-white/[0.1] transition-colors">
                                        <div class="min-w-0">
                                            <p class="font-mono text-sm text-white font-medium">JavaScript</p>
                                            <p class="text-zinc-500 text-xs mt-0.5 truncate">ESNext · DOM · motion.dev · WebGL</p>
                                        </div>
                                        <span class="shrink-0 px-2.5 py-1 rounded-full bg-indigo-500 text-white text-[10px] font-mono tracking-wider">PRIMARY</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 rounded-2xl border border-white/[0.06] bg-white/[0.02] px-4 py-3 group-hover:border-white/[0.1] transition-colors">
                                        <div class="min-w-0">
                                            <p class="font-mono text-sm text-white font-medium">Python</p>
                                            <p class="text-zinc-500 text-xs mt-0.5 truncate">Scripting · automation · data handling</p>
                                        </div>
                                        <span class="shrink-0 px-2.5 py-1 rounded-full bg-zinc-800 text-zinc-400 text-[10px] font-mono tracking-wider">SECONDARY</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 rounded-2xl border border-white/[0.06] bg-white/[0.02] px-4 py-3 group-hover:border-white/[0.1] transition-colors">
                                        <div class="min-w-0">
                                            <p class="font-mono text-sm text-white font-medium">C++</p>
                                            <p class="text-zinc-500 text-xs mt-0.5 truncate">Algorithms · OOP fundamentals</p>
                                        </div>
                                        <span class="shrink-0 px-2.5 py-1 rounded-full bg-zinc-800 text-zinc-400 text-[10px] font-mono tracking-wider">SECONDARY</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 rounded-2xl border border-white/[0.06] bg-white/[0.02] px-4 py-3 group-hover:border-white/[0.1] transition-colors">
                                        <div class="min-w-0">
                                            <p class="font-mono text-sm text-white font-medium">C#</p>
                                            <p class="text-zinc-500 text-xs mt-0.5 truncate">.NET applications · OO design</p>
                                        </div>
                                        <span class="shrink-0 px-2.5 py-1 rounded-full bg-zinc-800 text-zinc-400 text-[10px] font-mono tracking-wider">SECONDARY</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 rounded-2xl border border-white/[0.06] bg-white/[0.02] px-4 py-3 group-hover:border-white/[0.1] transition-colors">
                                        <div class="min-w-0">
                                            <p class="font-mono text-sm text-white font-medium">VB.NET</p>
                                            <p class="text-zinc-500 text-xs mt-0.5 truncate">Legacy & desktop systems</p>
                                        </div>
                                        <span class="shrink-0 px-2.5 py-1 rounded-full bg-zinc-800 text-zinc-400 text-[10px] font-mono tracking-wider">SECONDARY</span>
                                    </div>
                                    <div class="flex items-center justify-between gap-4 rounded-2xl border border-white/[0.06] bg-white/[0.02] px-4 py-3 group-hover:border-white/[0.1] transition-colors">
                                        <div class="min-w-0">
                                            <p class="font-mono text-sm text-white font-medium">Java</p>
                                            <p class="text-zinc-500 text-xs mt-0.5 truncate">Core OOP · software architecture</p>
                                        </div>
                                        <span class="shrink-0 px-2.5 py-1 rounded-full bg-zinc-800 text-zinc-400 text-[10px] font-mono tracking-wider">SECONDARY</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Category 2: Tools, Frameworks & Environments --}}
                        <div data-reveal-item class="group rounded-[2rem] border border-white/[0.08] bg-white/[0.03] p-2 hover:border-indigo-500/30 transition-all duration-500">
                            <div class="rounded-[calc(2rem-0.5rem)] bg-zinc-950/80 p-6 md:p-10 shadow-[inset_0_1px_1px_rgba(255,255,255,0.08)]">
                                <h3 class="text-xl md:text-2xl font-semibold tracking-tight text-white mb-8">02 — Tools, Frameworks & Environments</h3>
                                <div class="flex flex-wrap gap-2.5">
                                    @foreach ([
                                        'Laravel', 'Tailwind CSS', 'Vite', 'Composer', 'npm', 'MySQL', 'phpMyAdmin',
                                        'VS Code', 'Git', 'GitHub CLI', 'Windows PowerShell',
                                        'Microsoft Office 365', 'Google Workspace',
                                    ] as $tool)
                                    <span class="px-4 py-2 rounded-full border border-white/[0.08] bg-white/[0.03] text-zinc-300 text-xs font-mono tracking-wider hover:border-indigo-500/40 hover:text-white hover:bg-indigo-500/5 transition-all duration-500 active:scale-[0.98]">{{ $tool }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- Category 3: Creative & Professional Competencies --}}
                        <div data-reveal-item class="group rounded-[2rem] border border-white/[0.08] bg-white/[0.03] p-2 hover:border-indigo-500/30 transition-all duration-500">
                            <div class="rounded-[calc(2rem-0.5rem)] bg-zinc-950/80 p-6 md:p-10 shadow-[inset_0_1px_1px_rgba(255,255,255,0.08)]">
                                <h3 class="text-xl md:text-2xl font-semibold tracking-tight text-white mb-8">03 — Creative & Professional Competencies</h3>
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <p class="text-[10px] uppercase font-mono tracking-[0.25em] text-zinc-500 mb-4">Visual Design</p>
                                        <ul class="space-y-3">
                                            @foreach (['Photography', 'Video Editing', 'Digital Media Production', 'UI/UX Wireframing'] as $skill)
                                            <li class="flex items-start gap-3 text-sm text-zinc-400">
                                                <span class="mt-0.5 w-5 h-5 shrink-0 rounded-full bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center">
                                                    <svg class="w-3 h-3 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                </span>
                                                {{ $skill }}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div>
                                        <p class="text-[10px] uppercase font-mono tracking-[0.25em] text-zinc-500 mb-4">Professional</p>
                                        <ul class="space-y-3">
                                            @foreach (['Problem-Solving', 'Team Collaboration', 'Technical Documentation', 'Work Immersion Administration'] as $skill)
                                            <li class="flex items-start gap-3 text-sm text-zinc-400">
                                                <span class="mt-0.5 w-5 h-5 shrink-0 rounded-full bg-purple-500/10 border border-purple-500/20 flex items-center justify-center">
                                                    <svg class="w-3 h-3 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                </span>
                                                {{ $skill }}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- =============================================================
                 D. PROJECTS
            ============================================================== --}}
            <section id="projects" class="relative py-24 md:py-32 scroll-mt-24">
                <div class="max-w-6xl mx-auto px-6">
                    <p data-reveal class="text-[10px] uppercase font-mono tracking-[0.25em] text-indigo-400 mb-3">Selected // Work</p>
                    <h2 data-reveal class="text-3xl md:text-5xl font-bold tracking-tight text-white mb-16">Projects</h2>

                    <div class="grid md:grid-cols-2 gap-8" data-reveal-stagger>
                        {{-- Project 1: Featured --}}
                        <div data-reveal-item class="group rounded-[2rem] border border-white/[0.08] bg-white/[0.03] p-2 hover:border-indigo-500/30 transition-all duration-500 md:col-span-2">
                            <div class="h-full rounded-[calc(2rem-0.5rem)] bg-zinc-950/80 p-6 md:p-10 shadow-[inset_0_1px_1px_rgba(255,255,255,0.08)] grid lg:grid-cols-[1.2fr_1fr] gap-8 items-center">
                                <div>
                                    <div class="flex items-center flex-wrap gap-3 mb-5">
                                        <span class="px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/25 text-indigo-300 text-[10px] font-mono tracking-widest">FEATURED</span>
                                        <span class="text-[10px] uppercase font-mono tracking-[0.25em] text-zinc-500">Full-Stack Clinic System</span>
                                    </div>
                                    <h3 class="text-2xl md:text-3xl font-bold tracking-tight text-white mb-4">Bayugo Dental Record Management</h3>
                                    <p class="text-sm md:text-base text-zinc-400 leading-relaxed mb-6">
                                        Centralized medical/dental clinic management system built for Bayugo Dental Clinic.
                                        Handles patient demographic records, tooth charting history, appointment scheduling,
                                        billing invoices, and prescription logging with role-based access control.
                                    </p>
                                    <div class="flex flex-wrap gap-2 mb-8">
                                        @foreach (['PHP', 'Laravel', 'MySQL', 'Tailwind CSS', 'Blade'] as $stack)
                                        <span class="px-3 py-1.5 rounded-full border border-white/[0.08] bg-white/[0.03] text-zinc-300 text-xs font-mono">{{ $stack }}</span>
                                        @endforeach
                                    </div>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="#connect"
                                            class="group/btn flex items-center gap-2 pl-4 pr-2 py-2 rounded-full bg-white/[0.06] hover:bg-white/[0.1] border border-white/10 text-white text-xs font-medium transition-all active:scale-[0.98]">
                                            <span>Discuss Similar Build</span>
                                            <span class="w-6 h-6 rounded-full bg-indigo-500 flex items-center justify-center transition-transform group-hover/btn:translate-x-0.5">↗</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="relative h-56 md:h-64 lg:h-full min-h-56 rounded-3xl overflow-hidden border border-white/[0.06]">
                                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/20 via-purple-500/10 to-transparent"></div>
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="relative w-32 h-32 md:w-40 md:h-40">
                                            <div class="absolute inset-0 rounded-full border border-indigo-400/40"></div>
                                            <div class="absolute inset-4 rounded-full border border-white/15"></div>
                                            <div class="absolute inset-8 rounded-full bg-indigo-500/20 blur-md"></div>
                                            <svg class="absolute inset-0 m-auto w-12 h-12 text-indigo-300/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Project 2 --}}
                        <div data-reveal-item class="group rounded-[2rem] border border-white/[0.08] bg-white/[0.03] p-2 hover:border-indigo-500/30 transition-all duration-500 md:col-span-2">
                            <div class="h-full rounded-[calc(2rem-0.5rem)] bg-zinc-950/80 p-6 md:p-10 shadow-[inset_0_1px_1px_rgba(255,255,255,0.08)] grid lg:grid-cols-2 gap-8 items-center">
                                <div>
                                    <div class="flex items-center flex-wrap gap-3 mb-5">
                                        <span class="text-[10px] uppercase font-mono tracking-[0.25em] text-zinc-500">Modern Web Experience</span>
                                    </div>
                                    <h3 class="text-2xl md:text-3xl font-bold tracking-tight text-white mb-4">High-End Developer Portfolio</h3>
                                    <p class="text-sm md:text-base text-zinc-400 leading-relaxed mb-6">
                                        Awwwards-inspired personal web experience featuring OLED ethereal glass surfaces,
                                        hardware-style double bezels, smooth spring transitions, and responsive scroll dynamics.
                                    </p>
                                    <div class="flex flex-wrap gap-2 mb-8">
                                        @foreach (['Laravel', 'Tailwind CSS v4', 'motion.dev', 'Three.js'] as $stack)
                                        <span class="px-3 py-1.5 rounded-full border border-white/[0.08] bg-white/[0.03] text-zinc-300 text-xs font-mono">{{ $stack }}</span>
                                        @endforeach
                                    </div>
                                    <div class="flex flex-wrap gap-3">
                                        <a href="https://github.com/benabeseeajen-hue/portfolio" target="_blank" rel="noopener"
                                            class="group/btn flex items-center gap-2 pl-4 pr-2 py-2 rounded-full bg-white/[0.06] hover:bg-white/[0.1] border border-white/10 text-white text-xs font-medium transition-all active:scale-[0.98]">
                                            <span>View Repository</span>
                                            <span class="w-6 h-6 rounded-full bg-indigo-500 flex items-center justify-center transition-transform group-hover/btn:translate-x-0.5">↗</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="relative rounded-3xl border border-white/[0.06] p-6 md:p-8 overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 via-indigo-500/10 to-transparent"></div>
                                    <div class="relative">
                                        <p class="text-[10px] uppercase font-mono tracking-[0.25em] text-zinc-500 mb-6">eajen.free.nf</p>
                                        <div class="space-y-3">
                                            <div class="flex items-center justify-between rounded-2xl border border-white/[0.06] bg-white/[0.02] px-4 py-3">
                                                <span class="text-xs font-mono text-zinc-300">Visual Tier</span>
                                                <span class="px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/25 text-indigo-300 text-[10px] font-mono tracking-widest">AWWWARDS TIER</span>
                                            </div>
                                            <div class="flex items-center justify-between rounded-2xl border border-white/[0.06] bg-white/[0.02] px-4 py-3">
                                                <span class="text-xs font-mono text-zinc-300">Kinetics</span>
                                                <span class="px-3 py-1 rounded-full bg-purple-500/10 border border-purple-500/25 text-purple-300 text-[10px] font-mono tracking-widest">MOTION KINETICS</span>
                                            </div>
                                            <div class="flex items-center justify-between rounded-2xl border border-white/[0.06] bg-white/[0.02] px-4 py-3">
                                                <span class="text-xs font-mono text-zinc-300">Surface</span>
                                                <span class="px-3 py-1 rounded-full bg-zinc-800 text-zinc-300 text-[10px] font-mono tracking-widest">OLED ETCHED GLASS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- =============================================================
                 E. EDUCATION
            ============================================================== --}}
            <section id="education" class="relative py-24 md:py-32 scroll-mt-24">
                <div class="max-w-6xl mx-auto px-6">
                    <p data-reveal class="text-[10px] uppercase font-mono tracking-[0.25em] text-indigo-400 mb-3">Journey // Academic</p>
                    <h2 data-reveal class="text-3xl md:text-5xl font-bold tracking-tight text-white mb-16">Education</h2>

                    <div class="grid md:grid-cols-2 gap-8" data-reveal-stagger>
                        <div data-reveal-item class="group rounded-[2rem] border border-white/[0.08] bg-white/[0.03] p-2 hover:border-indigo-500/30 transition-all duration-500">
                            <div class="h-full rounded-[calc(2rem-0.5rem)] bg-zinc-950/80 p-6 md:p-8 shadow-[inset_0_1px_1px_rgba(255,255,255,0.08)]">
                                <div class="mb-6 w-12 h-12 rounded-2xl bg-gradient-to-br from-indigo-500/20 to-purple-500/10 border border-indigo-500/25 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/>
                                    </svg>
                                </div>
                                <p class="text-[10px] uppercase font-mono tracking-[0.25em] text-indigo-400 mb-2">2022 — Present</p>
                                <h3 class="text-xl font-semibold tracking-tight text-white mb-1">Data Center Colleges</h3>
                                <p class="text-indigo-300/80 text-sm font-medium mb-4">Bachelor of Science in Information Technology (BSIT)</p>
                                <p class="text-zinc-500 text-sm leading-relaxed">Information Technology — full-stack software engineering and web development track.</p>
                            </div>
                        </div>

                        <div data-reveal-item class="group rounded-[2rem] border border-white/[0.08] bg-white/[0.03] p-2 hover:border-indigo-500/30 transition-all duration-500">
                            <div class="h-full rounded-[calc(2rem-0.5rem)] bg-zinc-950/80 p-6 md:p-8 shadow-[inset_0_1px_1px_rgba(255,255,255,0.08)]">
                                <div class="mb-6 w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-500/20 to-transparent border border-purple-500/25 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/>
                                    </svg>
                                </div>
                                <p class="text-[10px] uppercase font-mono tracking-[0.25em] text-purple-400 mb-2">2021 — 2022</p>
                                <h3 class="text-xl font-semibold tracking-tight text-white mb-1">Abra Valley Colleges</h3>
                                <p class="text-purple-300/80 text-sm font-medium mb-4">Senior High School</p>
                                <p class="text-zinc-500 text-sm leading-relaxed">Humanities and Social Sciences — foundation in critical thinking and communication.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- =============================================================
                 F. CONNECT
            ============================================================== --}}
            <section id="connect" class="relative py-24 md:py-32 scroll-mt-24">
                <div class="max-w-6xl mx-auto px-6">
                    <div data-reveal class="group relative rounded-[2rem] border border-white/[0.08] bg-white/[0.03] p-2 hover:border-indigo-500/30 transition-all duration-500">
                        <div class="rounded-[calc(2rem-0.5rem)] bg-zinc-950/80 p-8 md:p-14 text-center shadow-[inset_0_1px_1px_rgba(255,255,255,0.08)] relative overflow-hidden">
                            <div aria-hidden="true" class="absolute -top-24 left-1/2 -translate-x-1/2 w-[420px] h-[420px] orb rounded-full bg-indigo-500/15 blur-[120px] pointer-events-none"></div>
                            <div class="relative">
                                <p class="text-[10px] uppercase font-mono tracking-[0.25em] text-indigo-400 mb-4">Final // Channel</p>
                                <h2 class="text-3xl md:text-5xl font-bold tracking-tight text-white mb-5">Let's Build Something Remarkable</h2>
                                <p class="text-sm md:text-base text-zinc-400 leading-relaxed max-w-2xl mx-auto mb-10">
                                    Open for internships, freelance work, collaborations, and full-stack opportunities.
                                    Based in Bacsil, Angad, Bangued, Abra, Philippines — working across time zones.
                                </p>

                                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                                    <a href="mailto:benabeseeajen@gmail.com"
                                        class="group/btn flex items-center gap-2 pl-5 pr-2 py-2 rounded-full bg-indigo-500 hover:bg-indigo-400 text-white text-sm font-medium shadow-lg shadow-indigo-500/25 transition-all active:scale-[0.98]">
                                        <span>benabeseeajen@gmail.com</span>
                                        <span class="w-8 h-8 rounded-full bg-white/15 flex items-center justify-center transition-transform group-hover/btn:translate-x-0.5">↗</span>
                                    </a>
                                    <a href="tel:09650814023"
                                        class="inline-flex items-center px-5 py-2.5 rounded-full bg-white/[0.06] hover:bg-white/[0.1] border border-white/10 text-white text-sm font-medium transition-all active:scale-[0.98]">
                                        <svg class="w-4 h-4 mr-2 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                        09650814023
                                    </a>
                                </div>

                                <div class="flex flex-wrap justify-center gap-3">
                                    <a href="https://github.com/benabeseeajen-hue" target="_blank" rel="noopener" data-magnetic
                                        class="rounded-2xl border border-white/[0.08] bg-white/[0.03] px-4 py-2 text-sm text-zinc-300 hover:text-white hover:border-indigo-500/40 transition-all active:scale-[0.98]">
                                        GitHub
                                    </a>
                                    <a href="https://www.instagram.com/rainiervsthemthrfworld" target="_blank" rel="noopener" data-magnetic
                                        class="rounded-2xl border border-white/[0.08] bg-white/[0.03] px-4 py-2 text-sm text-zinc-300 hover:text-white hover:border-indigo-500/40 transition-all active:scale-[0.98]">
                                        Instagram
                                    </a>
                                    <a href="https://www.facebook.com/jenskie.benabese" target="_blank" rel="noopener" data-magnetic
                                        class="rounded-2xl border border-white/[0.08] bg-white/[0.03] px-4 py-2 text-sm text-zinc-300 hover:text-white hover:border-indigo-500/40 transition-all active:scale-[0.98]">
                                        Facebook
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        {{-- Footer --}}
        <footer class="border-t border-white/[0.06] py-10">
            <div class="max-w-6xl mx-auto px-6 flex flex-col items-center gap-4 text-center">
                <a href="#about" class="font-mono text-sm font-semibold tracking-wider text-white hover:text-indigo-400 transition-colors">eajen.free.nf</a>
                <p class="text-zinc-600 text-sm">&copy; {{ date('Y') }} Eajen Rainier S. Benabese · Bacsil, Angad, Bangued, Abra, Philippines</p>
                <p class="text-zinc-700 text-xs font-mono tracking-widest">BUILT WITH LARAVEL · MOTION.DEV · THREE.JS</p>
            </div>
        </footer>
    </div>
</body>
</html>