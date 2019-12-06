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
 * Home Carousel Scroll
 */
new fullpage('#fullpage', {
    //options here
    autoScrolling:true,
    scrollHorizontally: true,
    licenseKey: '22FEA003-05344C69-A612FC86-8A75C837',
    easing: 'easeOutCubic',
    onLeave: function(origin, destination, direction)
    {
        let index = destination.index;

        $('a', homeCarouselNav).removeClass('active');
        $(homeCarouselNav).find('a:eq('+index+')').addClass('active');
    }
});

/**
 * Home Carousel Navigation
 */
$('a', homeCarouselNav).on('click', function(e)
{
    e.preventDefault();

    let index = $(this).index();

    $('.active', homeCarouselNav).removeClass('active');

    $(this).addClass('active');

    fullpage_api.moveTo(index + 1);
});