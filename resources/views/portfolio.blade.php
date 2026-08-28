<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eajen Rainier S. Benabese - Portfolio</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-900 text-gray-100 min-h-screen">
        <!-- Navigation -->
        <nav class="fixed top-0 left-0 right-0 bg-gray-900/95 backdrop-blur-sm border-b border-gray-800 z-50">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <div class="flex-shrink-0">
                        <span class="text-xl font-bold text-indigo-400">EB</span>
                    </div>
                    <div class="hidden md:flex space-x-8">
                        <a href="#about" class="text-gray-300 hover:text-white transition-colors">About</a>
                        <a href="#education" class="text-gray-300 hover:text-white transition-colors">Education</a>
                        <a href="#experience" class="text-gray-300 hover:text-white transition-colors">Experience</a>
                        <a href="#skills" class="text-gray-300 hover:text-white transition-colors">Skills</a>
                        <a href="#projects" class="text-gray-300 hover:text-white transition-colors">Projects</a>
                    </div>
                    <div class="md:hidden">
                        <button id="mobile-menu-btn" class="text-gray-300 hover:text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-gray-800 border-b border-gray-700">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#about" class="block px-3 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">About</a>
                    <a href="#education" class="block px-3 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">Education</a>
                    <a href="#experience" class="block px-3 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">Experience</a>
                    <a href="#skills" class="block px-3 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">Skills</a>
                    <a href="#projects" class="block px-3 py-2 text-gray-300 hover:text-white hover:bg-gray-700 rounded-md">Projects</a>
                </div>
            </div>
        </nav>

        <main class="pt-16">
            <!-- Hero Section -->
            <section id="about" class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                    <div class="text-center">
                        <div class="mb-8">
                            <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-4xl font-bold text-white shadow-lg shadow-indigo-500/30">
                                EB
                            </div>
                        </div>
                        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-4">
                            <span class="text-white">Eajen Rainier S.</span>
                            <span class="text-indigo-400"> Benabese</span>
                        </h1>
                        <p class="text-xl text-gray-400 mb-8 max-w-2xl mx-auto">
                            BSIT Student | Dance Choreographer | Creative Designer
                        </p>
                        <p class="text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed">
                            I am a student ready to help with a passion for design, image editing, video production, and also a dance choreographer. I combine technical skills with digital design to create clean, easy-to-use apps and eye-catching visual content.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                            <a href="mailto:benabeseeajen@gmail.com" class="inline-flex items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                Contact Me
                            </a>
                            <a href="https://github.com/benabeseeajen-hue" target="_blank" class="inline-flex items-center px-6 py-3 bg-gray-700 hover:bg-gray-600 text-white font-medium rounded-lg transition-colors">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                                </svg>
                                GitHub
                            </a>
                        </div>
                        <div class="flex justify-center space-x-6 text-gray-400">
                            <span class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                Bangued, Abra
                            </span>
                            <span class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                09650814023
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Education Section -->
            <section id="education" class="py-20 bg-gray-900">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-center mb-12 text-white">Educational Background</h2>
                    <div class="space-y-8">
                        <!-- Current Education -->
                        <div class="bg-gray-800 rounded-xl p-6 border border-gray-700 hover:border-indigo-500 transition-colors">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-white">Data Center Colleges</h3>
                                    <p class="text-indigo-400 font-medium">Bachelor of Science in Information Technology (BSIT)</p>
                                    <p class="text-gray-400 mt-1">2022 — Present</p>
                                    <p class="text-gray-300 mt-2">Information Technology</p>
                                </div>
                            </div>
                        </div>

                        <!-- Previous Education -->
                        <div class="bg-gray-800 rounded-xl p-6 border border-gray-700 hover:border-indigo-500 transition-colors">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-white">Abra Valley Colleges</h3>
                                    <p class="text-purple-400 font-medium">Senior High School</p>
                                    <p class="text-gray-400 mt-1">2021 — 2022</p>
                                    <p class="text-gray-300 mt-2">Humanities and Social Sciences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Experience Section -->
            <section id="experience" class="py-20 bg-gray-800">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-center mb-12 text-white">Work Experience</h2>
                    <div class="space-y-8">
                        <!-- Dance Instructor -->
                        <div class="bg-gray-900 rounded-xl p-6 border border-gray-700 hover:border-indigo-500 transition-colors">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-white">Freelance Dance Instructor & Choreographer</h3>
                                    <p class="text-green-400 font-medium">Street Kings | Bangued, Abra</p>
                                    <p class="text-gray-400 mt-1">2025 — Present</p>
                                    <ul class="mt-3 space-y-2 text-gray-300">
                                        <li class="flex items-start">
                                            <span class="text-green-400 mr-2">•</span>
                                            Performance & Team Leadership: Guided dancers during rehearsals and performances
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-green-400 mr-2">•</span>
                                            Choreography & Blocking: Created Hip-Hop routines and stage formations for 20+ dancers
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-green-400 mr-2">•</span>
                                            Instruction: Led workshops and rehearsals for dancers of different skill levels
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Work Immersion -->
                        <div class="bg-gray-900 rounded-xl p-6 border border-gray-700 hover:border-indigo-500 transition-colors">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-xl font-semibold text-white">Work Immersion Student</h3>
                                    <p class="text-blue-400 font-medium">Work Immersion | Bangued, Abra</p>
                                    <p class="text-gray-400 mt-1">2021 — 2022</p>
                                    <ul class="mt-3 space-y-2 text-gray-300">
                                        <li class="flex items-start">
                                            <span class="text-blue-400 mr-2">•</span>
                                            Assisted with clerical and administrative tasks
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-blue-400 mr-2">•</span>
                                            Organized and prepared documents and files
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-blue-400 mr-2">•</span>
                                            Assisted with data entry, encoding, and record keeping
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-blue-400 mr-2">•</span>
                                            Communicated with staff and clients in a professional manner
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Skills Section -->
            <section id="skills" class="py-20 bg-gray-900">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-center mb-12 text-white">Skills & Certifications</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Skills -->
                        <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
                            <h3 class="text-xl font-semibold text-white mb-6">Technical Skills</h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-gray-300">Dance Choreography</span>
                                        <span class="text-indigo-400">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-indigo-500 h-2 rounded-full" style="width: 80%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-gray-300">Photography</span>
                                        <span class="text-indigo-400">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-purple-500 h-2 rounded-full" style="width: 75%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-gray-300">Adaptability</span>
                                        <span class="text-indigo-400">75%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-green-500 h-2 rounded-full" style="width: 75%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-gray-300">Videography</span>
                                        <span class="text-indigo-400">73%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-blue-500 h-2 rounded-full" style="width: 73%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-gray-300">Teamwork and Collaboration</span>
                                        <span class="text-indigo-400">74%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-yellow-500 h-2 rounded-full" style="width: 74%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="text-gray-300">Problem-Solving</span>
                                        <span class="text-indigo-400">67%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-red-500 h-2 rounded-full" style="width: 67%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Certifications & Languages -->
                        <div class="space-y-6">
                            <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
                                <h3 class="text-xl font-semibold text-white mb-4">Certifications</h3>
                                <div class="flex items-start">
                                    <div class="flex-shrink-0 w-10 h-10 bg-yellow-600 rounded-lg flex items-center justify-center">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-white font-medium">Work Immersion Certificate</p>
                                        <p class="text-gray-400 text-sm">Data Center College of the Philippines | 2021</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
                                <h3 class="text-xl font-semibold text-white mb-4">Languages</h3>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-300">Filipino / Tagalog</span>
                                        <span class="px-3 py-1 bg-indigo-600 text-white text-sm rounded-full">Native</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-300">English</span>
                                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full">Professional</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Projects Section -->
            <section id="projects" class="py-20 bg-gray-800">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-center mb-12 text-white">Projects</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Project 1 -->
                        <div class="bg-gray-900 rounded-xl overflow-hidden border border-gray-700 hover:border-indigo-500 transition-all hover:transform hover:scale-105">
                            <div class="h-48 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-white mb-2">Portfolio Website</h3>
                                <p class="text-gray-400 mb-4">A responsive portfolio website built with Laravel and Tailwind CSS featuring dark mode support.</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-700 text-gray-300 text-sm rounded">Laravel</span>
                                    <span class="px-2 py-1 bg-gray-700 text-gray-300 text-sm rounded">Tailwind CSS</span>
                                    <span class="px-2 py-1 bg-gray-700 text-gray-300 text-sm rounded">Blade</span>
                                </div>
                                <a href="https://github.com/benabeseeajen-hue" target="_blank" class="inline-flex items-center text-indigo-400 hover:text-indigo-300">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                                    </svg>
                                    View on GitHub
                                </a>
                            </div>
                        </div>

                        <!-- Project 2 -->
                        <div class="bg-gray-900 rounded-xl overflow-hidden border border-gray-700 hover:border-indigo-500 transition-all hover:transform hover:scale-105">
                            <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center">
                                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-white mb-2">Dance Choreography Portfolio</h3>
                                <p class="text-gray-400 mb-4">Video showcase of Hip-Hop routines and stage formations created for 20+ dancers.</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-700 text-gray-300 text-sm rounded">Choreography</span>
                                    <span class="px-2 py-1 bg-gray-700 text-gray-300 text-sm rounded">Video Production</span>
                                </div>
                                <a href="https://github.com/benabeseeajen-hue" target="_blank" class="inline-flex items-center text-green-400 hover:text-green-300">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                                    </svg>
                                    View on GitHub
                                </a>
                            </div>
                        </div>

                        <!-- Project 3 -->
                        <div class="bg-gray-900 rounded-xl overflow-hidden border border-gray-700 hover:border-indigo-500 transition-all hover:transform hover:scale-105">
                            <div class="h-48 bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center">
                                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-white mb-2">Digital Design Collection</h3>
                                <p class="text-gray-400 mb-4">Eye-catching visual content including image editing and graphic design work.</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-2 py-1 bg-gray-700 text-gray-300 text-sm rounded">Photography</span>
                                    <span class="px-2 py-1 bg-gray-700 text-gray-300 text-sm rounded">Image Editing</span>
                                </div>
                                <a href="https://github.com/benabeseeajen-hue" target="_blank" class="inline-flex items-center text-orange-400 hover:text-orange-300">
                                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                                    </svg>
                                    View on GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- GitHub Links Section -->
            <section class="py-20 bg-gray-900">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl font-bold mb-8 text-white">Connect with Me</h2>
                    <p class="text-gray-400 mb-8 max-w-2xl mx-auto">Check out my GitHub profile for more projects and contributions.</p>
                    <a href="https://github.com/benabeseeajen-hue" target="_blank" class="inline-flex items-center px-8 py-4 bg-gray-800 hover:bg-gray-700 text-white font-medium rounded-lg transition-colors border border-gray-700 hover:border-indigo-500">
                        <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                        </svg>
                        github.com/benabeseeajen-hue
                    </a>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 border-t border-gray-700 py-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p class="text-gray-400">&copy; {{ date('Y') }} Eajen Rainier S. Benabese. All rights reserved.</p>
            </div>
        </footer>

        <script>
            // Mobile menu toggle
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        // Close mobile menu if open
                        if (mobileMenu) {
                            mobileMenu.classList.add('hidden');
                        }
                    }
                });
            });
        </script>
    </body>
</html>