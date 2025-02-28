// nav menu toggle
const menuToggle = document.getElementById('menu-toggle');
const navbarMenu = document.querySelector('.navbar-menu');

    menuToggle.addEventListener('click', () => {
        navbarMenu.classList.toggle('active');
    });

// Remove any automatic redirects
// window.location.href = 'home.php';  // Remove this line

