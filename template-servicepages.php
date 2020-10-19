<?php
/* 
Template Name: Service Pages
*/
?>

<?php get_header(); ?>

<div class="container-fluid" id="service-pages-container">

    <div class="row">

        <div class="col-md-12" id="service-pages-intro-container">
        
            <?php get_template_part('includes/section', 'service_pages_intro'); ?>

        </div>        
        
    </div>

    <div class="row">

        <div class="col-md-12" id="service-pages-imgtxt-container">

            <?php get_template_part('includes/section', 'service_pages_imgtxt'); ?>

        </div>        

    </div>

</div>    

<?php get_footer(); ?>