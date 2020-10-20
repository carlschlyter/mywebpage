<?php
/* 
Template Name: Contact Me
*/
?>

<?php get_header(); ?>

<div class="container-fluid">

    <div class="row" id="contact-page-intro">

        <div class="col-md-12" id="contact-page-intro-container">

            <?php get_template_part('includes/section', 'contact_page_intro'); ?>

        </div>

    </div>

    <div class="row" id="contact-page-form">

        <div class="col-md-12" id="contact-page-container">

            <?php get_template_part('includes/section', 'contact'); ?>

        </div>

    </div>

</div>    

<?php get_footer(); ?>

