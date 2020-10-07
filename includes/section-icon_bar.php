<?php if( have_rows('content')): ?>

<?php while( have_rows('content')): the_row(); ?>

    <?php if(get_row_layout() == 'icon_bar_section'): 
        
    $icons = get_sub_field('icons'); 
        
    ?>

        <?php foreach($icons as $icon) : ?>

            <div class="icon-box">

                <img src="<?php echo $icon['icon']['sizes']['icon-image']; ?>" alt="">

            </div>

        <?php endforeach; ?>

    <?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>