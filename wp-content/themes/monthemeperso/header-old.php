<!doctype html>
<html lang="fr">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">

    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

   <div class="container-fluid"> <!-- debut header -->
     
     <div class="row justify-content-center">
       <div class="col-md-6 titreheader">
           <h1><?php bloginfo('name'); ?></h1>     
       </div>    
     </div>

     <div class="row">
          <div class="col-md-12 menuheader"> <?php wp_nav_menu( array('container_class' => 'menu-header','theme_location' => 'primary')); ?> </div> <!-- MENU NAV -->
     </div>

     <div class="row">
        <div class="col-md-6 haut-gauche"> <?php dynamic_sidebar('haut-gauche'); ?> </div>
        <!--grace au dynamic_sidebar ma zone accepte les widgets-->
        <div class="col-md-6 haut-droite"> <?php dynamic_sidebar('haut-droite'); ?>  </div>
     </div>

     <div class="row">
         <div class="col-md-12 entete"> <?php dynamic_sidebar('entete'); ?> </div>
     </div>




   </div><!-- fin header -->

   <div class="container milieu"> <!-- debut the_content -->

      
   

    
   
    
 
    