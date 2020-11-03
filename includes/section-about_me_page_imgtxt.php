<?php if( have_rows('content')): ?>

<?php while( have_rows('content')): the_row(); ?>

    <?php if(get_row_layout() == 'image_and_text_section'): 
        
    $imgstxts = get_sub_field('image_and_text'); 

    ?>

        <?php foreach($imgstxts as $imgtxt) : 
            
            $header = $imgtxt['header'];
            $descr = $imgtxt['description'];
            $img = $imgtxt['image'];
            $side = $imgtxt['side'];

        ?>

            <?php if($side == 'left') : ?>

                <div class="row about-me-imgtxt-box">
                    
                    <div class="col-xl-6 about-me-imgtxt-img-box">
                        <img src="<?php echo $img['sizes']['about-page-image']; ?>" alt="">
                    </div>

                    <div class="col-xl-6 about-me-imgtxt-txt-box">
                        <h2> <?php echo $header; ?> </h2>
                        <p> <?php echo $descr; ?> </p>
                    </div>

                </div>

            <?php else: ?>

                <div class="row about-me-imgtxt-box">
                
                    <div class="col-xl-6 about-me-imgtxt-txt-box">
                        <h2> <?php echo $header; ?> </h2>
                        <p> <?php echo $descr; ?> </p>
                    </div>

                    <div class="col-xl-6 about-me-imgtxt-img-box">
                        <img src="<?php echo $img['sizes']['medium_large']; ?>" alt="">
                    </div>

                </div>

            <?php endif; ?>

        <?php endforeach; ?>

    <?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>
