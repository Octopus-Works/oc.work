
      wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    })
    wow.init();

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 100;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);



var navsearch = $('#nav-search').outerHeight();



function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.


    var s = $("nav");


    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('nav').addClass('animated fadeOutUp   ').addClass('pswp--animate_opacity');
      //  $('#banner').removeClass('pswp--animate_opacity').removeClass('animated fadeOutUp  ').addClass('animated fadeInDown  ');
        //$(".filter_inner_div").css("top", s.height());

    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
        //    $('#banner').removeClass('pswp--animate_opacity').removeClass('animated fadeInDown  ').addClass('animated fadeOutUp  ').addClass('pswp--animate_opacity');
          //  $(".filter_inner_div").css("top", s.height());
            $('nav').removeClass('pswp--animate_opacity').removeClass('animated fadeOutUp  ').addClass('animated fadeInDown  ');
        }
    }
    
    lastScrollTop = st;
}