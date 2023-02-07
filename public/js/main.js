/**
 * Scroll Reveal Animations
 */

const sr = ScrollReveal({
    origin: "top",
    distance: "60px",
    duration: 2500,
    delay: 400,
    reset: false,
});

/**
 * Header Reveal Animations
 */

sr.reveal(`.header-icons`);
sr.reveal(`.h-title`, { delay: 500 });
sr.reveal(`.h-subtitle`, { delay: 600 });
sr.reveal(`.btn-header`, { delay: 650 });
sr.reveal(`.header-image`, { delay: 700, origin: "bottom" });

/**
 * Sale Reveal Animations
 */
sr.reveal(`.sale-title, .sale-subtitle, .sale-reveal, .shop-banner`, {
    origin: "left",
});

/**
 * Services Reveal Animations
 */
sr.reveal(`.services-title, .services-subtitle, .service-reveal`, {
    interval: 300,
});

/**
 * Categories Reveal Animations
 */
sr.reveal(`.categories-title, .categories-subtitle, .categories-reveal`, {
    origin: "left",
});

/**
 * Categories Reveal Animations
 */

sr.reveal(`.contact-section`, { delay: 900, origin: "bottom" });
