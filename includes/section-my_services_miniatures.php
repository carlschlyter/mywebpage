<?php if( have_rows('content')): ?>

<?php while( have_rows('content')): the_row(); ?>

    <?php if(get_row_layout() == 'service_miniature_section'): 
        
    $miniatures = get_sub_field('service_miniatures'); 
        
    ?>

        <?php foreach($miniatures as $miniature) : 
            
            $img = $miniature['service_miniature'];
            $label = $miniature['label'];
            $link = $miniature['link'];
        ?>

            <div class="miniature-box">
                
                <a href=" <?php echo $link; ?> ">
                
                    <div>
                        
                        <img src="<?php echo $img['sizes']['miniature-image']; ?>" alt="">
                        <p> <?php echo $label; ?> </p>
               
                    </div>

               </a>

            </div>

        <?php endforeach; ?>

    <?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>
