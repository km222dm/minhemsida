<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <link rel= "stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link href='//fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        <title><?php echo bloginfo('name'); ?></title>
    </head>    

    <body>
        
        <div id="topbar"> <!-- Här börjar topbar-containern -->

              <a href="http://localhost:8888/"><p div id="loggo">Kristina Malmqvist</p></a>
<!--              <ul class="ul-style">-->
<!--                    <li><a class="categories1" href="/category/bildinlagg">Bildinlägg</a></li>-->
<!--                    <li><a class="categories1" href="/category/mitt-arbete">Mitt arbete</a></li>-->
<!--                    <li><a class="categories1" href="/category/om-mig">Om mig</a></li>-->
<!--                </ul>-->
            <?php wp_nav_menu(array(
                            'container_class' => 'ul-style',
                            'theme_location' => 'my_menu',
                        )); ?>


        </div> <!-- Här slutar topbar-containern -->
           
        <img id="headerbild" src="/wp-content/themes/My-own-theme/images/pouty.jpg" />

        <div id="searchform"><?php get_search_form(); ?></div>

