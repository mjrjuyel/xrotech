
// Active menu In The menu bar
$(document).ready(function() {
    $(window).scroll(function() {
        // Get the current scroll position
        var scrollPos = $(document).scrollTop();

        // Check each section's position relative to the scroll position
        $('section').each(function() {
            var sectionTop = $(this).offset().top;
            var sectionId = $(this).attr('id');

            // Adjust the "active" class based on scroll position
            if (scrollPos >= sectionTop - 50) {
                $('nav a').removeClass('active');
                $('nav a[href="#' + sectionId + '"]').addClass('active');
            }
        });
    });
});

