<?php
/* 
Template Name: About Me
*/
?>

<?php get_header(); ?>

<div class="container-fluid" id="about-me-page-container">

    <div class="row">

        <div class="col-md-12" id="about-me-page-intro-container">
        
            <?php get_template_part('includes/section', 'about_me_page_intro'); ?>

        </div>        
        
    </div>

    <div class="row">

        <div class="col-xl-12" id="about-me-page-imgtxt-container">

            <?php get_template_part('includes/section', 'about_me_page_imgtxt'); ?>

        </div>        

    </div>

</div>    

<?php get_footer(); ?>
