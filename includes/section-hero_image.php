<?php if( have_rows('content') ):  ?>

<?php while( have_rows('content') ): the_row(); ?>

    <?php if(get_row_layout() == 'hero_image_section'): 
        
        $img = get_sub_field('image');
        $pic = $img['sizes']['hero-image-shallow'];
        $msg = get_sub_field('welcome_message');
        $txt = get_sub_field('welcome_text');
        $txt2 = get_sub_field('welcome_text_2');
        
    ?>

        <div id="hero-sub-container">

            <div class="col-md-12" id="welcome-message">
                <div>
                    <h1> <?php echo $msg; ?> </h1> 
                </div>

                <div id="welcome-text-message">
                    <div class="col-md-3 text-box">
                        <p> <?php echo $txt; ?> </p>    
                    </div>

                    <div class="col-md-3 text-box">
                        <p> <?php echo $txt2; ?> </p>    
                    </div>
                </div>

            </div>
            
            <div class="col-md-12" id="hero-sub-container-img">
                <img src="<?php echo $pic ?>" class="img-fluid">
            </div>
                      
        </div>

    <?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>