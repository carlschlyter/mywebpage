<?php if( have_rows('content')): ?>

<?php while( have_rows('content')): the_row(); ?>

    <?php if(get_row_layout() == 'offers_section'): 
        
    $offers = get_sub_field('offers'); 
         
    ?>

        <?php foreach($offers as $offer) : 
            
        $link = $offer['link'];
            
        ?>

            <div class="offers-box">

                <a href="<?php echo $link ?> ">
                            
                    <div class="image-box">
                        <img src="<?php echo $offer['image']['sizes']['offers-image']; ?>" alt="">
                    </div>

                    <h2> <?php echo $offer['title']; ?> </h2>
                    <p> <?php echo $offer['description']; ?> </p>

                </a>

            </div>

        <?php endforeach; ?>

    <?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>