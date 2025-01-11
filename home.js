$(document).ready(function() {
    // Function to handle hover dropdown for desktop
    function handleDesktopHover() {
        if (window.innerWidth > 768) { // Assuming 768px as the mobile breakpoint
            $('.nav-item.dropdown').hover(
                function() {
                    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
                },
                function() {
                    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(150);
                }
            );
        }
    }

    // Initial call
    handleDesktopHover();

    // Handle resize event to ensure dropdown works correctly on window resize
    $(window).resize(function() {
        handleDesktopHover();
    });

    // Handle the navbar collapse when clicking outside the navbar
    $(document).click(function(event) {
        var clickover = $(event.target);
        var $navbar = $(".navbar-collapse");
        var _opened = $navbar.hasClass("show");

        if (_opened && !clickover.hasClass("navbar-toggler") && !clickover.closest('.navbar').length) {
            $navbar.collapse('hide'); // Close the navbar if clicked outside
        }
    });

    // Handle click for dropdown in mobile view (and prevent the whole navbar from collapsing)
    $('.nav-item.dropdown > a').on('click', function(event) {
        if (window.innerWidth <= 768) { // Mobile view
            event.preventDefault(); // Prevent default behavior of anchor tag
            var $dropdown = $(this).next('.dropdown-menu');
            $dropdown.stop(true, true).slideToggle(150); // Show/Hide the dropdown menu

            // Stop propagation to avoid collapsing the navbar
            event.stopPropagation();
        }
    });

    // Handle click for submenu in mobile view (and prevent the whole navbar from collapsing)
    $('.dropdown-submenu > a').on('click', function(event) {
        if (window.innerWidth <= 768) { // Mobile view
            event.preventDefault(); // Prevent default behavior of anchor tag
            var $submenu = $(this).next('.dropdown-menu');
            $submenu.stop(true, true).slideToggle(150); // Show/Hide the submenu

            // Stop propagation to avoid collapsing the navbar
            event.stopPropagation();
        }
    });

    // Automatically collapse navbar after clicking a link in mobile view
    $('.navbar-nav a').on('click', function() {
        if (window.innerWidth <= 768 && $(this).next('.dropdown-menu').length === 0) { // Mobile view
            // Collapse the navbar if it's not a dropdown link
            $('.navbar-collapse').collapse('hide');
        }
    });
});
