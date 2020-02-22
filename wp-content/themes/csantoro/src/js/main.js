if($('.glide').length)
{
    new Glide('.glide', {
        peek: 10,
        focusAt: 'center'
    }).mount();
}



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
    scrollOverflow: true,
    scrollOverflowOptions: {
    },
    licenseKey: '22FEA003-05344C69-A612FC86-8A75C837',
    easing: 'easeOutCubic',
    onLeave: function(origin, destination, direction)
    {
        let index = destination.index;
        let firstPanel = $('#home-carousel__pane-1');

        (index == 0) ? firstPanel.removeClass('animateOut') : firstPanel.addClass('animateOut');

        $('a', homeCarouselNav).removeClass('active');
        $(homeCarouselNav).find('a:eq('+index+')').addClass('active');
    },
    afterLoad: function(origin, destination, direction)
    {
        let firstPanel = $('#home-carousel__pane-1');

        setTimeout(function()
        {
            firstPanel.addClass('animateIn');
        }, 1000);
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

/**
 * Work Grid
 */
new fullpage('#work-grid-fullpage', {
    autoScrolling:true,
    scrollHorizontally: false,
    licenseKey: '22FEA003-05344C69-A612FC86-8A75C837',
    easing: 'easeOutCubic',
    onLeave: function(origin, destination, direction)
    {
        let index = destination.index;

        $('div[class*="col"]', origin.item).addClass('animateOut');

        $('div[class*="col"]', destination.item).removeClass('animateOut').addClass('animateIn');
    },
    afterLoad: function(origin, destination, direction)
    {
        let firstPanel = $('#home-carousel__pane-1');
    }
});

/**
 * Work Nav
 */
// $('.work-prev, .work-next').on('click', function(e)
// {
//     e.preventDefault();
//
//     let direction = $(this).attr('data-direction');
//
//
// });