<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carl Schlyter Webbutveckling</title>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&&family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GL4PPBB2XV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GL4PPBB2XV');
</script>

<?php wp_head(); ?>

</head>

<body>

<header>

    <div class="container-fluid">

        <div class="menu-wrap">

            <input type="checkbox" class="toggler">

                <div class="hamburger"><div></div></div>

                    <div class="menu-cont">

                        <div>
        
                            <?php 
                                wp_nav_menu(

                                    array(
                                        'theme_location' => 'top-menu',
                                        'menu-class' => 'top-bar'               
                                    )

                                );
                            ?>

                        </div>

                    </div>

        </div>

    </div>

</header>






 
    
