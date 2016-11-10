<!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/6955255fc8.js"></script>
    
    <title>
        AIJ Sistem
    </title>
	<?php
     $home = get_template_directory_uri();
     ?>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?= $home ?>/assets/dist/compress-sass/main.css">
	<script src="<?= $home ?>/assets/js/menu-button.js"></script>


	<?php
    	wp_head();
     ?>
</head>
<body>
  <nav class="navbar">
      <li class="logo">
        <img src="<?= $home ?>/assets/dist/images/logo-aijsistem-pequeno.jpg" alt="">
      </li>
   <?php 
    $args = array(
        'theme_location' => 'header-menu'
    );
    wp_nav_menu(args);
   ?>

   <div class="handle">
        Menu
   </div>
</nav>