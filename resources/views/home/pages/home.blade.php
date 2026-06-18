@extends('home.layouts.layout')

@section('content')

<nav class="fixed top-0 w-full z-50 backdrop-blur-xl bg-black/30 border-b border-white/5">

    <div class="container mx-auto px-6">

        <div class="h-20 flex justify-between items-center">

            <a href="#" class="flex items-center gap-3">

                <span class="text-4xl font-black text-blue-500">
                    AG
                </span>

                <div>
                    <h3 class="font-semibold">
                        Abderrahim
                    </h3>

                    <p class="text-xs text-slate-400">
                        Laravel Developer
                    </p>
                </div>

            </a>

            <ul class="hidden lg:flex gap-10">

                <li><a href="#">Home</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>

            </ul>

            <a href="#contact"
               class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-700">
                Let's Talk
            </a>

        </div>

    </div>

</nav>

<section class="relative pt-32 pb-20 overflow-hidden">

    <div class="container mx-auto px-6">

        <div class="grid lg:grid-cols-[1fr_0.9fr] gap-8 items-center">

            <!-- Left -->

            <div>

                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-blue-500/20 bg-blue-500/10 text-sm font-medium mb-8">

                    <span class="w-2 h-2 bg-green-500 rounded-full"></span>

                    Available For Freelance Projects

                </div>

                <h1 class="text-6xl lg:text-7xl font-black leading-none">

                    Laravel Developer

                    <br>

                    Building SaaS &

                    <br>

                    Business Systems

                </h1>

                <p class="mt-8 text-xl text-slate-400 leading-relaxed max-w-xl">

                    I help businesses automate processes, improve productivity
                    and grow through custom web applications, SaaS platforms
                    and WordPress solutions.

                </p>

                <div class="mt-10 flex flex-wrap gap-4">

                    <a href="#projects" class="hero-btn">
                        View Projects
                    </a>

                    <a href="#contact" class="hero-btn-outline">
                        Start A Project
                    </a>

                </div>

            </div>

            <!-- Right -->

            <div class="relative h-[720px] flex items-end justify-center">

                <div class="hero-glow"></div>

                <img
                    src="{{ asset('assets/images/me_png.png') }}"
                    alt="Abderrahim"
                    class="absolute bottom-0 h-[720px] w-auto z-10">

                <!-- Experience -->

                <div
                    class="absolute left-0 top-28 z-20 glass-card">

                    <h3 class="text-4xl font-bold text-blue-400">
                        3+
                    </h3>

                    <p class="text-slate-300">
                        Years Experience
                    </p>

                </div>

                <!-- Projects -->

                <div
                    class="absolute right-0 top-16 z-20 glass-card">

                    <h3 class="text-4xl font-bold text-purple-400">
                        20+
                    </h3>

                    <p class="text-slate-300">
                        Projects Built
                    </p>

                </div>

                <!-- SaaS -->

                <div
                    class="absolute right-6 bottom-40 z-20 glass-card">

                    <h3 class="text-4xl font-bold text-green-400">
                        3
                    </h3>

                    <p class="text-slate-300">
                        SaaS Platforms
                    </p>

                </div>

                <!-- Technologies -->

                <div
                    class="absolute left-4 bottom-24 z-20 glass-card">

                    <h3 class="text-4xl font-bold text-orange-400">
                        10+
                    </h3>

                    <p class="text-slate-300">
                        Technologies
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<section id="projects" class="py-28">

    <div class="container mx-auto px-6">

        <div class="mb-12">

            <span class="text-blue-500 uppercase text-sm">
                Featured Projects
            </span>

            <h2 class="text-5xl font-bold mt-3">
                Real Solutions
                <br>
                For Real Businesses
            </h2>

        </div>

        <div class="grid lg:grid-cols-3 gap-8">

            <!-- Agripages -->

            <div class="project-card">

                <img
                    src="{{ asset('assets/images/projects/agripages.png') }}"
                    class="rounded-xl mb-5">

                <h3 class="text-2xl font-bold">
                    Agripages
                </h3>

                <p class="text-slate-400 mt-3">
                    Agricultural marketplace connecting
                    buyers and sellers across Morocco.
                </p>

            </div>

            <!-- RDV Medical -->

            <div class="project-card">

                <img
                    src="{{ asset('assets/images/projects/rdvmedical.png') }}"
                    class="rounded-xl mb-5">

                <h3 class="text-2xl font-bold">
                    RDV Medical
                </h3>

                <p class="text-slate-400 mt-3">
                    Appointment booking platform for
                    doctors, clinics and healthcare providers.
                </p>

            </div>

            <!-- LinkPro -->

            <div class="project-card">

                <img
                    src="{{ asset('assets/images/projects/linkpro.png') }}"
                    class="rounded-xl mb-5">

                <h3 class="text-2xl font-bold">
                    LinkPro
                </h3>

                <p class="text-slate-400 mt-3">
                    Link-in-bio platform allowing businesses
                    and creators to centralize their links.
                </p>

            </div>

        </div>

    </div>

</section>


<section class="py-24">

    <div class="container mx-auto px-6">

        <div class="grid md:grid-cols-3 lg:grid-cols-6 gap-6">

            <div class="service-card">

                <i class="fa-solid fa-code text-4xl text-blue-500 mb-5"></i>

                <h3 class="font-bold text-xl mb-3">
                    Custom Web Applications
                </h3>

                <p class="text-slate-400 text-sm">
                    Tailored Laravel applications for businesses.
                </p>

            </div>

            <div class="service-card">
                <i class="fa-solid fa-rocket text-4xl text-purple-500 mb-5"></i>

                <h3 class="font-bold text-xl mb-3">
                     SaaS Development
                </h3>
                <p class="text-slate-400 text-sm">
                    Build, launch and scale SaaS products with modern architecture.
                </p>
            </div>

            <div class="service-card">
                <i class="fa-solid fa-building text-4xl text-green-500 mb-5"></i>

                <h3 class="font-bold text-xl mb-3">
                    Business Systems
                </h3>
                <p class="text-slate-400 text-sm">
                    Custom business solutions to streamline operations and boost productivity.
                </p>
            </div>

            <div class="service-card">
                <i class="fa-solid fa-wordpress text-4xl text-blue-500 mb-5"></i>

                <h3 class="font-bold text-xl mb-3">
                    WordPress Development
                </h3>
                <p class="text-slate-400 text-sm">
                    Custom WordPress themes and plugins for unique website experiences.
                </p>
            </div>

            <div class="service-card">
                <i class="fa-solid fa-plug text-4xl text-yellow-500 mb-5"></i>

                <h3 class="font-bold text-xl mb-3">
                    API Integrations
                </h3>
                <p class="text-slate-400 text-sm">
                    Seamless integration of third-party APIs to enhance functionality.
                </p>
            </div>

            <div class="service-card">
                <i class="fa-solid fa-tools text-4xl text-red-500 mb-5"></i>

                <h3 class="font-bold text-xl mb-3">
                    Maintenance
                </h3>
                <p class="text-slate-400 text-sm">
                    Ongoing support and maintenance for your web applications.
                </p>
            </div>

        </div>

    </div>

</section>


<section id="technologies" class="py-24">

    <div class="container mx-auto px-6">

        <div class="text-center mb-16">

            <span class="text-blue-500 uppercase">
                Technologies
            </span>

            <h2 class="text-5xl font-bold mt-4">
                Tools I Work With
            </h2>

        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">

           <div class="tech-card">
            <i class="fab fa-laravel text-5xl text-red-500"></i>
            <span>Laravel</span>
        </div>

        <div class="tech-card">
            <i class="fab fa-php text-5xl text-indigo-400"></i>
            <span>PHP</span>
        </div>

        <div class="tech-card">
            <i class="fab fa-js text-5xl text-yellow-400"></i>
            <span>JavaScript</span>
        </div>

        <div class="tech-card">
            <i class="fab fa-wordpress text-5xl text-blue-400"></i>
            <span>WordPress</span>
        </div>

        <div class="tech-card">
            <i class="fab fa-docker text-5xl text-blue-500"></i>
            <span>Docker</span>
        </div>

        <div class="tech-card">
            <i class="fab fa-git-alt text-5xl text-orange-500"></i>
            <span>Git</span>
        </div>

        </div>

    </div>

</section>

<section id="contact" class="py-28">

    <div class="container mx-auto px-6">

        <div
            class="rounded-[40px]
            border border-white/10
            bg-gradient-to-r
            from-[#0d1224]
            to-[#111827]
            p-12">

            <div class="grid lg:grid-cols-2 gap-10 items-center">

                <div>

                    <span class="text-blue-500 uppercase">
                        Let's Work Together
                    </span>

                    <h2 class="text-5xl font-bold mt-4">

                        Have a project in mind?

                        <span class="gradient-text">
                            Let's build it together.
                        </span>

                    </h2>

                    <p class="mt-6 text-slate-400">

                        I'm available for freelance projects,
                        SaaS development and custom web applications.

                    </p>

                </div>

                <div class="space-y-4">

                    <a href="#"
                    class="contact-btn-primary">

                        <i class="fa-brands fa-whatsapp"></i>

                        Chat On WhatsApp

                    </a>

                    <a href="#"
                    class="contact-btn">

                        <i class="fa-regular fa-envelope"></i>

                        Send Email

                    </a>

                    <a href="#"
                    class="contact-btn">

                        <i class="fa-solid fa-download"></i>

                        Download CV

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


@endsection
