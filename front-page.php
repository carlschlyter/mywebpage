<?php get_header(); ?>

<div class="container-fluid">

    <div class="row" id="hero-container">
            
        <?php get_template_part('includes/section', 'hero_image'); ?>

    </div>

    <div class="row" id="icon-row">

        <div class="col-md-12" id="icon-container">
            
            <?php get_template_part('includes/section', 'icon_bar'); ?>
    
        </div>

    </div>

    <div class="row" id="offers-row">

        <div class="col-md-12" id="offers-container">
    
            <?php get_template_part('includes/section', 'offers'); ?>

        </div>

    </div>

    <div class="row" id="contact-form">

        <div class="col-md-12" id="contact-container">

            <?php get_template_part('includes/section', 'contact'); ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>