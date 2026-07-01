<nav class="navbar navbar-expand-lg navbar-custom sticky-top py-3">
    <div class="container">

        <a class="navbar-brand fw-bold fs-4" href="#home">
            cayadarma's portfolio
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">

            {{-- Menu Navigasi --}}
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'fw-semibold' : '' }}" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'fw-semibold' : '' }}" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('skills') ? 'fw-semibold' : '' }}" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('projects') ? 'fw-semibold' : '' }}" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'fw-semibold' : '' }}" href="#contact">Contact</a>
                </li>

                {{-- Tombol Toggle Dark/Light Mode --}}
                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <button id="themeToggleBtn" class="theme-toggle-btn" title="Ganti tema">
                        <i class="bi bi-moon-stars-fill" id="themeIcon"></i>
                    </button>
                </li>
            </ul>

        </div>
    </div>
</nav>