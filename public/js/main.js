/**
 * Scroll Reveal Animations
 */

const sr = ScrollReveal({
    origin: "top",
    distance: "60px",
    duration: 2500,
    delay: 400,
    // reset : true
});

sr.reveal(`.header-icons`);
sr.reveal(`.h-title`, { delay: 500 });
sr.reveal(`.h-subtitle`, { delay: 600 });
sr.reveal(`.header-image`, { delay: 700, origin: "bottom" });

sr.reveal(`.summer-sale-title, .summer-sale-subtitle, .summer-reveal`, {
    origin: "left",
});

sr.reveal(`.services-title, .service-reveal`, { interval: 300 });
