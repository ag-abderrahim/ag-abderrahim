<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Abderrahim AG | Laravel Developer & SaaS Builder</title>
<meta name="description"
    content="Laravel Developer specialized in SaaS products, business systems and custom web applications.">
<meta property="og:title" content="Abderrahim AG Portfolio">
<meta property="og:image" content="/assets/images/preview.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}">

@yield('links')
</head>
<body>

    <!-- NAV -->
    <nav>
    <div class="container nav-inner">
        <a href="#" class="nav-logo">
        <div class="nav-logo-mark">AG</div>
        <div class="nav-logo-text">
            <h3>Abderrahim</h3>
            <p>Laravel Developer</p>
        </div>
        </a>
        <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#technologies">Technologies</a></li>
        <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="#contact" class="nav-cta">
        <i class="fa-solid fa-arrow-right-long"></i>
        Let's Talk
        </a>
    </div>
    </nav>

    @yield('content')

<footer>
  <div class="container">
    <p>© 2025 Abderrahim — Built with Laravel.</p>
  </div>
</footer>


@yield('scripts')

</body>
</html>
