<?php
/* Template Name: Home */
get_header(); ?>

<section id="home-carousel">

    <section id="home-carousel__pane-1" class="home-carousel__pane">
        <div class="inner">
            <div class="copy">
                <p class="eyebrow">WE BELIEVE IN</p>
                <h1><span class="yellow">Authenticity</span> Made Visual</h1>
                <p>A Boston-bred design studio specializing in brand strategy & identity design for the bold and daring.</p>
                <a href="" class="btn btn-outline-secondary">View Work</a>
            </div>
        </div>
    </section>

    <section id="home-carousel__pane-2" class="home-carousel__pane">
        <div class="inner">
            <div class="row">
                <div class="col col-md-6 image">
                    <img src="<?php bloginfo('template_directory')?>/images/BeantownBootcamp-2@2x.png" />
                </div>
                <div class="col col-md-6 copy">
                    <h2>BOSTON'S TOUGHEST BOOTCAMP</h2>
                    <p>BEANTOWN BOOTCAMP</p>
                    <p>Brand Strategy Design // Graphic Design // Website Design // Art Direction</p>
                </div>
            </div>
        </div>
    </section>

    <section id="home-carousel__pane-3" class="home-carousel__pane">
        <div class="inner">
            <div class="row">
                <div class="col col-md-6 image flip">
                    <img src="<?php bloginfo('template_directory')?>/images/Rifrullo-Mockup7@2x" />
                </div>
                <div class="col col-md-6 copy">
                    <h2>CULINARY EXCELLENCE TO THE COMMUNITY</h2>
                    <p>RIFRULLO</p>
                    <p>Brand Strategy Design // Graphic Design</p>
                </div>
            </div>
        </div>
    </section>

</section>

<?php get_footer(); ?>