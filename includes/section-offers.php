<?php if( have_rows('content')): ?>

<?php while( have_rows('content')): the_row(); ?>

    <?php if(get_row_layout() == 'offers_section'): 
        
    $offers = get_sub_field('offers'); 
         
    ?>

        <?php foreach($offers as $offer) : ?>

            <div class="offers-box">
                
                <h1> <?php echo $offer['title']; ?> </h1>
                <p> <?php echo $offer['description']; ?> </p>

            </div>

        <?php endforeach; ?>

    <?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>