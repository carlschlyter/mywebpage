<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&&family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

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






 
    
