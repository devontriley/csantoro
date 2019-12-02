<?php
/* Template Name: Home */
get_header(); ?>

<nav id="home-carousel-nav">
    <a href="#" class="active">INTRO</a>
    <a href="#" class="">1</a>
    <a href="#" class="">2</a>
    <a href="#" class="">3</a>
    <a href="#" class="">4</a>
</nav>

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

<section id="newsletter-signup">
    <div class="inner">
        <h2>Sign up for our newsletter</h2>

        <form>
            <div class="fields">
                <div class="field">
                    <input type="text" value="" placeholder="First Name" />
                </div>

                <div class="field">
                    <input type="text" value="" placeholder="Last Name" />
                </div>

                <div class="field">
                    <input type="email" value="" placeholder="Email Address" />
                </div>
            </div>

            <input type="submit" value="Sign Me Up" class="btn btn-outline-secondary" />
        </form>
    </div>
</section>

<section id="schedule-call">
    <div class="inner">
        <h2>It all starts with a conversation...</h2>
        <p>Full rebrand? New marketing materials? Want to spice up this year’s tradeshow booth design? Let us know how Santoro Design can help you.</p>
        <a href="#" class="btn btn-outline-secondary">Schedule a Call</a>
    </div>

    <svg class="small-s" viewBox="0 0 62.487 75.86">
        <use xlink:href="#s-icon"></use>
    </svg>

    <svg class="large-s" viewBox="0 0 62.487 75.86">
        <use xlink:href="#s-icon"></use>
    </svg>
</section>

<?php get_footer(); ?>