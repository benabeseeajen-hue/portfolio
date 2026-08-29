# Portfolio Master Patch Specification (patchup.md)

**Governor Directive:** Absolute Awwwards-tier execution. OLED dark modern aesthetic (`#050505`), double-bezel concentric containment, haptic micro-interactions, spring dynamics via `motion` (motion.dev), WebGL ambient depth, and zero layout drift.

---

## 1. Design Tokens & Visual Architecture

### A. Vibe & Palette Archetype (Ethereal Glass / OLED)
- **Canvas Base:** `#050505` (Deepest Obsidian)
- **Card Shells (Outer):** `bg-white/[0.03] border border-white/[0.08] rounded-[2rem] p-2`
- **Card Cores (Inner):** `bg-zinc-950/80 rounded-[calc(2rem-0.5rem)] p-6 shadow-[inset_0_1px_1px_rgba(255,255,255,0.08)]`
- **Gradients:** `from-indigo-500/20 via-purple-500/10 to-transparent`
- **Typography Hierarchy:**
  - Micro Eyebrows: `text-[10px] uppercase font-mono tracking-[0.25em] text-indigo-400`
  - Display Headers: `text-4xl md:text-6xl font-bold tracking-tight text-white`
  - Body Prose: `text-zinc-400 text-sm md:text-base leading-relaxed`

### B. Motion & Kinetics (motion.dev)
- **Easing Curve:** `cubic-bezier(0.32, 0.72, 0, 1)` (mass-spring emulation)
- **Scroll Reveals:** Staggered entry `opacity: 0, y: 24, filter: blur(4px)` -> `opacity: 1, y: 0, filter: blur(0)`
- **Interactive Islands:** Magnetic scale `active:scale-[0.98]`, hover highlight rings `group-hover:border-indigo-500/40`

---

## 2. Core Profile & Contact Specifications

- **Full Name:** Eajen Rainier S. Benabese
- **Title / Tagline:** BSIT Student · Full-Stack Developer · Digital Designer
- **Location:** Bacsil, Angad, Bangued, Abra, Philippines
- **Phone:** `09650814023`
- **Email:** `benabeseeajen@gmail.com`
- **Header Profile Pic:** `eb.jpg` (Concentric double-bezel ring with fallback monogram avatar)
- **Brand Slug:** `eajen.free.nf`

### Verified Socials & Repositories
- **GitHub:** `https://github.com/benabeseeajen-hue`
- **Instagram:** `https://www.instagram.com/rainiervsthemthrfworld`
- **Facebook:** `https://www.facebook.com/jenskie.benabese`

---

## 3. Skills Matrix Breakdown

### Category 1: Programming Languages
| Language | Focus & Proficiency | Badge Treatment |
|---|---|---|
| **PHP** | Backend logic, Laravel MVC, API routing | Primary Accent Badge |
| **HTML5** | Semantic DOM, accessibility (WCAG), microdata | Primary Accent Badge |
| **CSS** | Tailwind v4, modern layouts, fluid animations | Primary Accent Badge |
| **JavaScript** | ESNext, DOM manipulation, motion.dev, WebGL | Primary Accent Badge |
| **Python** | Scripting, automation, data handling | Secondary Badge |
| **C++** | Algorithms, OOP fundamentals | Secondary Badge |
| **C#** | .NET applications, object-oriented design | Secondary Badge |
| **VB.NET** | Legacy & desktop application systems | Secondary Badge |
| **Java** | Core OOP, software architecture | Secondary Badge |

### Category 2: Tools, Frameworks & Environments
- **Stack:** Laravel, Tailwind CSS, Vite, Composer, npm, MySQL, phpMyAdmin
- **Developer Tools:** VS Code, Git, GitHub CLI, Windows PowerShell
- **Productivity & Office:** Microsoft Office 365 (Word, Excel, PowerPoint), Google Workspace

### Category 3: Creative & Professional Competencies
- **Visual Design:** Photography, Video Editing, Digital Media Production, UI/UX Wireframing
- **Professional:** Problem-Solving, Team Collaboration, Technical Documentation, Work Immersion Administration

---

## 4. Projects Specification

### Project 1 (Featured): Bayugo Dental Record Management
- **Type:** Full-Stack Clinic Information & Record System
- **Stack:** PHP · Laravel · MySQL · Tailwind CSS · Blade
- **Description:** Centralized medical/dental clinic management system built for Bayugo Dental Clinic. Handles patient demographic records, tooth charting history, appointment scheduling, billing invoices, and prescription logging with role-based access control.

### Project 2: High-End Developer Portfolio (eajen.free.nf)
- **Type:** Modern Web Experience & Portfolio
- **Stack:** Laravel · Tailwind CSS v4 · motion.dev · Three.js
- **Description:** Awwwards-inspired personal web experience featuring OLED ethereal glass surfaces, hardware-style double bezels, smooth spring transitions, and responsive scroll dynamics.
- **Repository / Link:** `https://github.com/benabeseeajen-hue/portfolio`
- **Visual Pill:** `Awwwards Tier` · `Motion Kinetics`

---

## 5. UI Component Architecture & Layout Directives

### A. Navigation: Detached Fluid Glass Island
```html
<nav class="fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[92%] max-w-4xl">
  <div class="bg-zinc-950/75 backdrop-blur-2xl border border-white/10 rounded-full px-6 py-3 flex items-center justify-between shadow-2xl shadow-black/80">
    <!-- Brand -->
    <a href="#" class="font-mono text-sm font-semibold tracking-wider text-white hover:text-indigo-400 transition-colors">eajen.free.nf</a>
    <!-- Links -->
    <div class="hidden md:flex items-center space-x-6 text-xs uppercase tracking-widest text-zinc-400 font-medium">
      <a href="#about" class="hover:text-white transition-colors">About</a>
      <a href="#skills" class="hover:text-white transition-colors">Skills</a>
      <a href="#projects" class="hover:text-white transition-colors">Projects</a>
      <a href="#education" class="hover:text-white transition-colors">Education</a>
      <a href="#connect" class="hover:text-white transition-colors">Connect</a>
    </div>
    <!-- CTA Button-in-Button -->
    <a href="#connect" class="group flex items-center gap-2 pl-4 pr-1.5 py-1.5 rounded-full bg-white/10 hover:bg-white/15 text-white text-xs font-medium border border-white/10 transition-all">
      <span>Get in Touch</span>
      <span class="w-6 h-6 rounded-full bg-indigo-500 flex items-center justify-center transition-transform group-hover:translate-x-0.5">↗</span>
    </a>
  </div>
</nav>
```

### B. Double-Bezel Card Archetype (Doppelrand)
```html
<div class="group bg-white/[0.03] border border-white/[0.08] rounded-[2rem] p-2 hover:border-indigo-500/30 transition-all duration-500">
  <div class="bg-zinc-950/90 rounded-[calc(2rem-0.5rem)] p-6 md:p-8 h-full flex flex-col justify-between shadow-[inset_0_1px_1px_rgba(255,255,255,0.06)]">
    <!-- Card Content -->
  </div>
</div>
```

### C. Ambient 3D / WebGL Background Layer
- Interactive subtle Three.js particle constellation canvas behind hero (`pointer-events-none fixed inset-0 z-0 opacity-40`).
- Clamped device pixel ratio (`Math.min(window.devicePixelRatio, 1.5)`).
- WebGL fallback: Static radial CSS mesh gradient.

---