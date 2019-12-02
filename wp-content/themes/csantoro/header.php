<!DOCTYPE html>
<head>
    <title>Santoro Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet" />

    <?php wp_head(); ?>
</head>
<body>

<?php include('includes/master-svg.svg'); ?>

<nav id="primary-nav">
    <a href="<?php bloginfo('url'); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/images/S-Icon.svg" class="s-icon" />
    </a>

    <img src="<?php bloginfo('template_directory'); ?>/images/Santoro.svg" class="santoro" />

    <a href=#" id="primary-hamburger">
        <img src="<?php bloginfo('template_directory'); ?>/images/Hamburger.svg" class="hamburger" />
    </a>
</nav>

<div id="mobile-header">
    <a href="<?php bloginfo('url'); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/images/S-Icon.svg" class="s-icon" />
    </a>

    <a href="#" id="mobile-hamburger">
        <svg id="mobile-close" width="40" height="40" viewBox="0 0 71.87 71.87">
            <use xlink:href="#close-icon"></use>
        </svg>
    </a>
</div>

<div id="primary-nav-drawer">
    <nav id="primary-nav-drawer-nav">
        <a href="#">The Work</a>
        <a href="#">About Santoro</a>
        <a href="#">The Process Book</a>
    </nav>

    <div>
        <p>
            &copy; Copyright 2019, Santoro Design, LLC.<br />
            All Rights Reserved<br />
            cmsantoro@santorodesign.net
        </p>
    </div>

    <div id="primary-nav-drawer-sm">
        <a href="#" target="_blank">
            <svg width="40" height="40" viewBox="0 0 71.87 71.87">
                <use xlink:href="#twitter-icon"></use>
            </svg>
        </a>
        <a href="#" target="_blank">
            <svg width="40" height="40" viewBox="0 0 71.87 71.87">
                <use xlink:href="#facebook-icon"></use>
            </svg>
        </a>
        <a href="#" target="_blank">
            <svg width="40" height="40" viewBox="0 0 71.87 71.87">
                <use xlink:href="#instagram-icon"></use>
            </svg>
        </a>
        <a href="#" target="_blank">
            <svg width="40" height="40" viewBox="0 0 71.87 71.87">
                <use xlink:href="#dribble-icon"></use>
            </svg>
        </a>
        <a href="#" target="_blank">
            <svg width="40" height="40" viewBox="0 0 71.87 71.87">
                <use xlink:href="#behance-icon"></use>
            </svg>
        </a>
    </div>
</div>