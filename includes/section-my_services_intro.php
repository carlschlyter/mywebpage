<?php if( have_rows('content')): ?>

<?php while( have_rows('content')): the_row(); ?>

    <?php if(get_row_layout() == 'intro_section'): 
        
    $header = get_sub_field('header');
    $intro = get_sub_field('intro'); 
        
    ?>

        <div id="intro-box" class="row">
            
            <div class="col-md-12">

                <h1 id="h1-test"> <?php echo $header ?> </h1>
                <p> <?php echo $intro ?> </p>

            </div>   

        </div>

    <?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>