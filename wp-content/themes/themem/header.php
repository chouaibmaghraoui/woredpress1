<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive FOOD Website Design Tutorial</title>

    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">

    <?php wp_head(); ?>


</head>
<body>
    
<!-- header section starts  -->

<header>
    
    <a href="#" class="logo"><img src="img/logo.jpeg" alt=""></a>

    <div id="menu-bar" class="fas fa-hamburger"></div>

    <nav class="navbar">
   
    <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#menu">menu</a></li>
            <li><a href="#popular">popular</a></li>
            <li><a href="#gallery">gallery</a></li>
            <li><a href="#order">order</a></li>
        </ul>
        <?php wp_nav_menu(); ?> 
   
    </nav>
    <a href="<?php echo get_home_url(); ?>"></a>

    
        
    
    <img src="<?php echo get_bloginfo('template_directory')?>/img/logo.jpeg" width="100px">

</header>