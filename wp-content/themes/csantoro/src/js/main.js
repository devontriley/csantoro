let body = $('body'),
    primaryHamburger = $('#primary-hamburger'),
    mobileHamburger = $('#mobile-hamburger'),
    primaryNavDrawer = $('#primary-nav-drawer'),
    homeCarouselNav = $('#home-carousel-nav'),
    homeCarouselPanes = $('.home-carousel__pane');

function togglePrimaryNavDrawer()
{
    body.toggleClass('primary-nav-active');
    primaryNavDrawer.toggleClass('active');
}

/**
 * Desktop Navigation
 */
primaryHamburger.on('click', function(e)
{
    e.preventDefault();

    togglePrimaryNavDrawer();
});

/**
 * Mobile Navigation
 */
mobileHamburger.on('click', function(e)
{
    e.preventDefault();

    togglePrimaryNavDrawer();
});

/**
 * Home Carousel Navigation
 */
$('a', homeCarouselNav).on('click', function(e)
{
    e.preventDefault();

    let index = $(this).index(),
        nextPane = $('#home-carousel__pane-'+(index+1)),
        nextPaneTop = nextPane.offset().top;

    $('.active', homeCarouselNav).removeClass('active');

    $(this).addClass('active');

    $('html, body').animate({
        scrollTop: nextPaneTop
    }, 1000);
});