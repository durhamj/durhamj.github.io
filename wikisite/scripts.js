// scripts.js

document.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector('nav');
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelectorAll('nav a');

    // Toggle the navigation menu on mobile
    menuToggle.addEventListener('click', () => {
        nav.classList.toggle('active');
    });

    // Highlight the current section in the navigation
    function handleNavHighlight() {
        const scrollPosition = window.scrollY + window.innerHeight / 2; // Adjust for better visibility

        navLinks.forEach(link => {
            const section = document.querySelector(link.getAttribute('href'));
            if (section.offsetTop <= scrollPosition && section.offsetTop + section.offsetHeight > scrollPosition) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    window.addEventListener('scroll', handleNavHighlight);

    // Smooth scrolling is handled by CSS scroll-behavior: smooth;
});
