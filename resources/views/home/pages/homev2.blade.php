@extends('home.layouts.v2')

@section('content')

<!-- HERO -->
<section class="hero">
  <div class="blob blob-1"></div>
  <div class="blob blob-2"></div>
  <div class="blob blob-3"></div>

  <div class="container">
    <div class="hero-grid">

      <!-- Left -->
      <div>
        <div class="hero-badge">
          <span class="hero-badge-dot"></span>
          Available for Freelance Projects
        </div>

        <h1>
          Laravel Developer<br>
          Building <em>SaaS &</em><br>
          Business Systems
        </h1>

        <p class="hero-desc">
          I help businesses automate processes, improve productivity
          and grow through custom web applications, SaaS platforms
          and WordPress solutions.
        </p>

        <div class="hero-actions">
          <a href="#projects" class="btn-primary">
            <i class="fa-solid fa-layer-group"></i>
            View Projects
          </a>
          <a href="#contact" class="btn-ghost">
            Start A Project
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>

      <!-- Right -->
      <div class="hero-right">
        <div class="hero-glow"></div>
        <div class="hero-image-wrap">
          <img src="{{ asset('assets/images/me2.png') }}" alt="Abderrahim" class="hero-img">
        </div>

        <!-- Floating stats -->
        <div class="stat-chip chip-tl">
          <span class="num" style="color:var(--indigo)">3+</span>
          <span class="lbl">Years Experience</span>
        </div>
        <div class="stat-chip chip-tr">
          <span class="num" style="color:var(--purple)">20+</span>
          <span class="lbl">Projects Built</span>
        </div>
        <div class="stat-chip chip-br">
          <span class="num" style="color:var(--green)">3</span>
          <span class="lbl">SaaS Platforms</span>
        </div>
        <div class="stat-chip chip-bl">
          <span class="num" style="color:var(--orange)">10+</span>
          <span class="lbl">Technologies</span>
        </div>
      </div>

    </div>
  </div>

  <!-- Tech Marquee -->
  <div class="marquee-wrap" style="margin-top:72px;">
    <div class="marquee-track">
      <!-- First set -->
      <div class="marquee-item"><i class="fab fa-laravel" style="color:#F05340"></i> Laravel</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-php" style="color:#8892BF"></i> PHP</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-js" style="color:#F7DF1E"></i> JavaScript</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-wordpress" style="color:#21759B"></i> WordPress</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-docker" style="color:#2496ED"></i> Docker</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-git-alt" style="color:#F05032"></i> Git</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fa-solid fa-database" style="color:#4479A1"></i> MySQL</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-vuejs" style="color:#41B883"></i> Vue.js</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-css3-alt" style="color:#1572B6"></i> Tailwind CSS</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fa-brands fa-linux" style="color:#FCC624"></i> Linux</div>
      <div class="marquee-dot"></div>
      <!-- Duplicate set -->
      <div class="marquee-item"><i class="fab fa-laravel" style="color:#F05340"></i> Laravel</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-php" style="color:#8892BF"></i> PHP</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-js" style="color:#F7DF1E"></i> JavaScript</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-wordpress" style="color:#21759B"></i> WordPress</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-docker" style="color:#2496ED"></i> Docker</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-git-alt" style="color:#F05032"></i> Git</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fa-solid fa-database" style="color:#4479A1"></i> MySQL</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-vuejs" style="color:#41B883"></i> Vue.js</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fab fa-css3-alt" style="color:#1572B6"></i> Tailwind CSS</div>
      <div class="marquee-dot"></div>
      <div class="marquee-item"><i class="fa-brands fa-linux" style="color:#FCC624"></i> Linux</div>
      <div class="marquee-dot"></div>
    </div>
  </div>
</section>


<!-- PROJECTS -->
<section class="projects" id="projects">
  <div class="container">
    <div class="projects-header">
      <span class="section-label">Featured Projects</span>
      <h2>Real Solutions<br>For Real Businesses</h2>
    </div>
    <div class="projects-grid">

      <div class="project-card">
        <div class="project-img-wrap">
          <img src="{{ asset('assets/images/projects/agripages.png') }}" alt="Agripages">
          <div class="project-overlay">
            <div class="project-link-icon"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
          </div>
        </div>
        <div class="project-body">
          <span class="project-tag">Marketplace</span>
          <h3>Agripages</h3>
          <p>Agricultural marketplace connecting buyers and sellers across Morocco.</p>
        </div>
      </div>

      <div class="project-card">
        <div class="project-img-wrap">
          <img src="{{ asset('assets/images/projects/rdvmedical.png') }}" alt="RDV Medical">
          <div class="project-overlay">
            <div class="project-link-icon" style="background:var(--cyan)"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
          </div>
        </div>
        <div class="project-body">
          <span class="project-tag" style="background:rgba(34,211,238,.1);color:var(--cyan)">Healthcare</span>
          <h3>RDV Medical</h3>
          <p>Appointment booking platform for doctors, clinics and healthcare providers.</p>
        </div>
      </div>

      <div class="project-card">
        <div class="project-img-wrap">
          <img src="{{ asset('assets/images/projects/linkpro.png') }}" alt="LinkPro">
          <div class="project-overlay">
            <div class="project-link-icon" style="background:var(--purple)"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
          </div>
        </div>
        <div class="project-body">
          <span class="project-tag" style="background:rgba(168,85,247,.1);color:var(--purple)">SaaS</span>
          <h3>LinkPro</h3>
          <p>Link-in-bio platform allowing businesses and creators to centralize their links.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- SERVICES -->
<section class="services" id="services">
  <div class="container">
    <span class="section-label">What I Do</span>
    <h2 style="font-size:clamp(32px,3.5vw,48px);font-weight:800;letter-spacing:-1px;margin-bottom:0">Services I Offer</h2>
    <div class="services-grid">

      <div class="service-card">
        <div class="service-icon" style="background:rgba(79,110,247,.1)">
          <i class="fa-solid fa-code" style="color:var(--indigo)"></i>
        </div>
        <h3>Custom Web Applications</h3>
        <p>Tailored Laravel applications built for your exact business needs — fast, scalable, and maintainable.</p>
      </div>

      <div class="service-card">
        <div class="service-icon" style="background:rgba(168,85,247,.1)">
          <i class="fa-solid fa-rocket" style="color:var(--purple)"></i>
        </div>
        <h3>SaaS Development</h3>
        <p>Build, launch and scale SaaS products with modern architecture, multi-tenancy, and billing integration.</p>
      </div>

      <div class="service-card">
        <div class="service-icon" style="background:rgba(34,211,238,.1)">
          <i class="fa-solid fa-building" style="color:var(--cyan)"></i>
        </div>
        <h3>Business Systems</h3>
        <p>Custom internal tools to streamline operations, automate workflows and boost productivity.</p>
      </div>

      <div class="service-card">
        <div class="service-icon" style="background:rgba(79,110,247,.1)">
          <i class="fa-brands fa-wordpress" style="color:var(--indigo-l)"></i>
        </div>
        <h3>WordPress Development</h3>
        <p>Custom themes and plugins that go beyond templates — unique website experiences, fast and flexible.</p>
      </div>

      <div class="service-card">
        <div class="service-icon" style="background:rgba(249,115,22,.1)">
          <i class="fa-solid fa-plug" style="color:var(--orange)"></i>
        </div>
        <h3>API Integrations</h3>
        <p>Seamless connection of third-party services — payments, maps, CRMs and more — into your app.</p>
      </div>

      <div class="service-card">
        <div class="service-icon" style="background:rgba(239,68,68,.1)">
          <i class="fa-solid fa-screwdriver-wrench" style="color:#EF4444"></i>
        </div>
        <h3>Maintenance & Support</h3>
        <p>Ongoing care, bug fixes, upgrades and performance optimization — so you can focus on your business.</p>
      </div>

    </div>
  </div>
</section>


<!-- TECHNOLOGIES -->
<section class="tech" id="technologies">
  <div class="container">
    <div class="tech-header">
      <span class="section-label" style="justify-content:center">Technologies</span>
      <h2>Tools I Work With</h2>
    </div>
    <div class="tech-grid">
      <div class="tech-card"><i class="fab fa-laravel" style="color:#F05340"></i>Laravel</div>
      <div class="tech-card"><i class="fab fa-php" style="color:#8892BF"></i>PHP</div>
      <div class="tech-card"><i class="fab fa-js" style="color:#F7DF1E"></i>JavaScript</div>
      <div class="tech-card"><i class="fab fa-wordpress" style="color:#21759B"></i>WordPress</div>
      <div class="tech-card"><i class="fab fa-docker" style="color:#2496ED"></i>Docker</div>
      <div class="tech-card"><i class="fab fa-git-alt" style="color:#F05032"></i>Git</div>
    </div>
  </div>
</section>


<!-- CONTACT -->
<section class="contact" id="contact">
  <div class="container">
    <div class="contact-inner">
      <div class="contact-grid">
        <div class="contact-left">
          <span class="section-label">Let's Work Together</span>
          <h2>Have a project in mind?<br><span>Let's build it together.</span></h2>
          <p>I'm available for freelance projects, SaaS development and custom web applications. Let's turn your idea into a real product.</p>
        </div>
        <div class="contact-btns">
          <a href="#" class="cbtn cbtn-wa">
            <i class="fa-brands fa-whatsapp"></i>
            Chat On WhatsApp
          </a>
          <a href="#" class="cbtn cbtn-secondary">
            <i class="fa-regular fa-envelope"></i>
            Send Email
          </a>
          <a href="#" class="cbtn cbtn-secondary">
            <i class="fa-solid fa-download"></i>
            Download CV
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
