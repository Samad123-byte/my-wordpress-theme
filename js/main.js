// ✅ Wait for DOM to be ready
document.addEventListener('DOMContentLoaded', function () {

    // ── Navbar scroll shadow ──
    var navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', function () {
            navbar.classList.toggle('scrolled', window.scrollY > 20);
        });
    }

    // ── Scroll fade-in on cards ──
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) {
                e.target.style.opacity = '1';
                e.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.srv-card, .feat-row, .team-card, .val-card, .ci-row').forEach(function (el) {
        el.style.opacity = '0';
        el.style.transform = 'translateY(18px)';
        el.style.transition = 'opacity .5s ease, transform .5s ease';
        observer.observe(el);
    });

});

// ✅ IMPORTANT: These functions MUST be on window{}
// because your HTML uses onclick="toggleMenu()" attributes.
// When WordPress loads JS deferred, onclick="" needs window-level functions.

window.toggleMenu = function () {
    var hamburger  = document.getElementById('hamburger');
    var mobileMenu = document.getElementById('mobileMenu');
    if (hamburger)  hamburger.classList.toggle('open');
    if (mobileMenu) mobileMenu.classList.toggle('open');
};

window.closeMenu = function () {
    var hamburger  = document.getElementById('hamburger');
    var mobileMenu = document.getElementById('mobileMenu');
    if (hamburger)  hamburger.classList.remove('open');
    if (mobileMenu) mobileMenu.classList.remove('open');
};

window.toggleFaq = function (el) {
    var item = el.parentElement;
    if (item) item.classList.toggle('open');
};

window.handleSubmit = function () {
    var btn = document.getElementById('submitBtn');
    if (!btn) return;
    btn.textContent = '✅ Message Sent!';
    btn.classList.add('success');
    setTimeout(function () {
        btn.textContent = 'Send Message ✈️';
        btn.classList.remove('success');
    }, 3000);
};

window.showPage = function(page) {
    window.location.href = '/' + page;
};