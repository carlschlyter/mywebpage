<?php
/* 
Template Name: About Me
*/
?>

<?php get_header(); ?>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-12">

            <h1> <?php the_title(); ?> </h1>    
        
        </div>

        <div class="col-md-6">
        
            <?php get_template_part('includes/section', 'content'); ?>

        </div>        

        <div class="col-md-6">
        
            <p>Det här är den andra sidan</p>            

        </div>        
        
    </div>

</div>    

<?php get_footer(); ?>

