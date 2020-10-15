<?php
/* 
Template Name: My Services
*/
?>

<?php get_header(); ?>

<div class="container-fluid" id="my-services-container">

    <div class="row">

        <div class="col-md-12" id="miniatures-container">

            <?php get_template_part('includes/section', 'my_services_miniatures'); ?>

        </div>        

    </div>

    <div class="row">

        <div class="col-md-12" id="my-services-intro-container">
        
            <?php get_template_part('includes/section', 'my_services_intro'); ?>

        </div>        
        
    </div>

</div>    

<?php get_footer(); ?>