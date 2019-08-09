var isTouch = window.DocumentTouch && document instanceof DocumentTouch;

function scrollHeader() {
    // Has scrolled class on header
    var zvalue = $(document).scrollTop();
    if ( zvalue > 65 )
        $("#header").addClass("scrolled");
    else
        $("#header").removeClass("scrolled");
}

jQuery(document).ready(function($){
    scrollHeader();

    // Scroll Events
    if (!isTouch) {
        $(document).scroll(function() {
            scrollHeader();
        });
    };

    // Touch scroll
    $(document).on({
        'touchmove': function(e) {
            scrollHeader(); // Replace this with your code.
        }
    });

    //Smooth scroll to top
    $('.back-to-top-wrapper').click(function(){
        window.scroll({ top: 0, left: 0, behavior: 'smooth' });
        return false;
    });

    // Responsive Menu
    $('.toogle-mobile-menu').click(function () {
        $('.sidebar').toggleClass('sidebar--active');
    });
});
