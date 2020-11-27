<?php if( have_rows('content')): ?>

<?php while( have_rows('content')): the_row(); ?>

    <?php if(get_row_layout() == 'final_word_section'): 
        
    $header = get_sub_field('header');
    $text = get_sub_field('text'); 
    $link = get_sub_field('link');
        
    ?>
        <div class="row" id="finalword-text-box">
        
            <div class="col-md-12">

                <h2> <?php echo $header ?> </h2>

                <a href=" <?php echo $link; ?> ">
                    <p> <?php echo $text ?> </p>    
                </a>

            </div>

        </div>

    <?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>