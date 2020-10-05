<?php if( have_rows('content') ):  ?>

<?php while( have_rows('content') ): the_row(); ?>

    <?php if(get_row_layout() == 'hero_image_section'): 
        
        $img = get_sub_field('image');
        $pic = $img['sizes']['hero-image-new'];
        $msg = get_sub_field('welcome_message');
        
    ?>

        <div id="hero-sub-container">

            <div class="col-md-6" id="welcome-message">

                <h1> <?php echo $msg; ?> </h1> 

            </div>

            <img src="<?php echo $pic ?>" class="img-fluid">  
        
        </div>

    <?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>