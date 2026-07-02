// ============================
// THEME TOGGLE LOGIC
// ============================

document.addEventListener('DOMContentLoaded', function () {

    const htmlEl = document.documentElement;
    const toggleBtn = document.getElementById('themeToggleBtn');
    const themeIcon = document.getElementById('themeIcon');

    const currentTheme = localStorage.getItem('theme') || 'dark';

    applyTheme(currentTheme);

    toggleBtn.addEventListener('click', function () {
        const isDark = htmlEl.getAttribute('data-theme') === 'dark';
        const newTheme = isDark ? 'light' : 'dark';

        applyTheme(newTheme);
        localStorage.setItem('theme', newTheme);
    });

    function applyTheme(theme) {
        if (theme === 'dark') {
            htmlEl.setAttribute('data-theme', 'dark');
            themeIcon.classList.remove('bi-moon-stars-fill');
            themeIcon.classList.add('bi-sun-fill');
        } else {
            htmlEl.removeAttribute('data-theme');
            themeIcon.classList.remove('bi-sun-fill');
            themeIcon.classList.add('bi-moon-stars-fill');
        }
    }
});

// ============================
// AUTO-CLOSE NAVBAR MOBILE SAAT KLIK ANCHOR
// ============================
document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.nav-anchor');
    const navbarCollapse = document.getElementById('navbarMain');

    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            if (navbarCollapse.classList.contains('show')) {
                const bsCollapse = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);
                bsCollapse.hide();
            }
        });
    });
});


// ============================
// UPDATE URL HASH SAAT SCROLL SECTION
// ============================

document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('section');
    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {
            if (entry.isIntersecting) {
                history.replaceState(
                    null,
                    '',
                    '#' + entry.target.id
                );
            }
        });
    }, {
        threshold: 0.5
    });

    sections.forEach(section => {
        observer.observe(section);
    });
});