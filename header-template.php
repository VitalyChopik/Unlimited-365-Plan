<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <style>.loaded { opacity: 1 }</style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head();?>
</head>


<body>
  <div class="wrapper">
    <header class="header">
  <div class="header__container">
    <a href="#" class="header__logo logo">
      <?php 
      $image = get_field('logo', 'option');
      echo wp_get_attachment_image( $image, 'full');
      ?>
    </a>
    <a href="#sign-up" class="main__btn header__btn">Get early access</a>
  </div>
</header>

    <main class="page">
      <div data-observ></div>