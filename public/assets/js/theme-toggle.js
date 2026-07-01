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