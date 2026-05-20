<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>MyBrand</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,800;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>

<?php wp_head() ?>
</head>
<body>

<!-- ═══════════ NAVBAR ═══════════ -->
<nav id="navbar">
  <a class="nav-logo" href="<?php echo home_url('/'); ?>">
    <div class="logo-dot"></div>MyBrand
  </a>
  
 <?php
wp_nav_menu(array(
    'theme_location' => 'primary_menu',
    'container' => false,
    'menu_class' => 'nav-links'
));
?>
  <div class="hamburger" id="hamburger" onclick="toggleMenu()">
    <span></span><span></span><span></span>
  </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
  <a href="<?php echo home_url(); ?>">Home</a>
<a href="<?php echo home_url('/about-us/'); ?>">About</a>
<a href="<?php echo home_url('/our-services/'); ?>">Our Service</a>
<a href="<?php echo home_url('/contact-us/'); ?>">Contact</a>
</div>
