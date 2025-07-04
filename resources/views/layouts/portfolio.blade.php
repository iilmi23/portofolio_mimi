<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portofolio</title>
    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Open+Sans:wght@400;500;700&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
    @stack('head')
</head>

<body id="top">
    <header class="header" data-header>
        <div class="container">
            <a href="#">
                <h1 class="logo">My Portofolio</h1>
            </a>
            <button class="nav-toggle-btn" aria-label="Toggle Menu" data-nav-toggle-btn>
                <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
                <ion-icon name="close-outline" class="close-icon"></ion-icon>
            </button>
            <nav class="navbar container">
                <ul class="navbar-list">
                    <li><a href="#home" class="navbar-link" data-nav-link>Home</a></li>
                    <li><a href="#about" class="navbar-link" data-nav-link>About</a></li>
                    <li><a href="#portfolio" class="navbar-link" data-nav-link>Portfolio</a></li>
                    <li><a href="#skills" class="navbar-link" data-nav-link>Skills</a></li>
                    <li><a href="#contact" class="navbar-link" data-nav-link>Contact</a></li>
                    <li><a href="#blog" class="navbar-link" data-nav-link>My</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <article>
            @yield('content')
        </article>
    </main>
    <footer class="footer">
        <div class="container">
            <p class="copyright">
                &copy; 2025 <a href="#" class="copyright-link">OMI</a>. All Rights Reseverd
            </p>
            <ul class="footer-list">
                <li><a href="#" class="footer-link">Terms & Condition</a></li>
                <li><a href="#" class="footer-link">Privacy Policy</a></li>
            </ul>
        </div>
    </footer>
    <a href="#top" class="back-to-top" data-back-to-top>BACK TOP</a>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @stack('scripts')
</body>

</html>
