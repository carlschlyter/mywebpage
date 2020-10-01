<?php get_header(); ?>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-12 main-content">
        
            <h1> <?php the_title(); ?> </h1>

            <?php get_template_part('includes/section', 'content'); ?>

        </div>        
        
    </div>

</div>

<?php get_footer(); ?>