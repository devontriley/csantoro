<?php
/* Template Name: Home */
get_header(); ?>

<nav id="home-carousel-nav">
    <a href="#" class="active">INTRO</a>
    <a href="#" class="">1</a>
    <a href="#" class="">2</a>
    <a href="#" class="">3</a>
    <a href="#" class="">4</a>
    <a href="#" class="">Sub</a>
    <a href="#" class="">Call</a>
</nav>

<section id="home-carousel">
    <div class="home-carousel-inner" id="fullpage">

        <section id="home-carousel__pane-1" class="home-carousel__pane section active" data-anchor="pane-1">
            <div class="inner">
                <div class="copy">
                    <p class="eyebrow">WE BELIEVE IN</p>
                    <h1><span class="yellow">Authenticity</span> Made Visual</h1>
                    <p>A Boston-bred design studio specializing in<br />brand strategy & identity design for the bold and daring.</p>
                    <a href="" class="btn btn-outline-secondary">View Work</a>
                </div>
            </div>

            <img src="<?php bloginfo('template_directory'); ?>/images/SAN.svg" class="san" />
            <img src="<?php bloginfo('template_directory'); ?>/images/TORO.svg" class="toro" />
        </section>

        <section id="home-carousel__pane-2" class="home-carousel__pane section" data-anchor="pane-2">
            <div class="inner">
                <div class="row">
                    <div class="col col-md-6 image">
                        <img src="<?php bloginfo('template_directory')?>/images/BeantownBootcamp-2@2x.jpg" />
                    </div>
                    <div class="col col-md-6 copy">
                        <h2>BOSTON'S TOUGHEST BOOTCAMP</h2>
                        <p>BEANTOWN BOOTCAMP</p>
                        <p>Brand Strategy Design // Graphic Design // Website Design // Art Direction</p>
                        <a href="#" class="btn btn-outline-secondary">View Case Study</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-carousel__pane-3" class="home-carousel__pane section" data-anchor="pane-3">
            <div class="inner">
                <div class="row">
                    <div class="col col-md-6 image flip">
                        <img src="<?php bloginfo('template_directory')?>/images/Rifrullo-Mockup7@2x" />
                    </div>
                    <div class="col col-md-6 copy">
                        <h2>CULINARY EXCELLENCE TO THE COMMUNITY</h2>
                        <p>RIFRULLO</p>
                        <p>Brand Strategy Design // Graphic Design</p>
                        <a href="#" class="btn btn-outline-secondary">View Case Study</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-carousel__pane-4" class="home-carousel__pane section" data-anchor="pane-4">
            <div class="inner">
                <div class="row">
                    <div class="col col-md-6 image">
                        <img src="<?php bloginfo('template_directory')?>/images/Ompractice.jpg" />
                    </div>
                    <div class="col col-md-6 copy">
                        <h2>YOGA INSTRUCTION IN THE COMFORT OF YOUR HOME</h2>
                        <p>OMPRACTICE</p>
                        <p>Brand Strategy & Design</p>
                        <a href="#" class="btn btn-outline-secondary">View Case Study</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-carousel__pane-5" class="home-carousel__pane section" data-anchor="pane-5">
            <div class="inner">
                <div class="row">
                    <div class="col col-md-6 image flip">
                        <img src="<?php bloginfo('template_directory')?>/images/Rifrullo-Mockup7@2x" />
                    </div>
                    <div class="col col-md-6 copy">
                        <h2>CULINARY EXCELLENCE TO THE COMMUNITY</h2>
                        <p>RIFRULLO</p>
                        <p>Brand Strategy Design // Graphic Design</p>
                        <a href="#" class="btn btn-outline-secondary">View Case Study</a>
                    </div>
                </div>
            </div>
        </section>

        <?php include('includes/contact-form.php'); ?>

        <?php include('includes/schedule-call.php'); ?>
    </div>
</section>

<?php get_footer(); ?>