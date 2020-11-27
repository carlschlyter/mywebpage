<?php
/* 
Template Name: The Making
*/
?>

<?php get_header(); ?>

<div class="container-fluid" id="themaking-container">

    <div class="row">

        <div class="col-md-12" id="themaking-intro-container">
        
            <?php get_template_part('includes/section', 'themaking_intro'); ?>

        </div>        
        
    </div>

    <div class="row">

        <div class="col-md-12" id="themaking-imgtxt-container">

            <?php get_template_part('includes/section', 'themaking_imgtxt'); ?>

        </div>        

    </div>

    <div class="row">

        <div class="col-md-12" id="themaking-finalword-container">

            <?php get_template_part('includes/section', 'themaking_finalword'); ?>

        </div>        

    </div>

</div>    

<?php get_footer(); ?>