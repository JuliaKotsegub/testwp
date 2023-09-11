<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quality cleaning</title>

  <?php  wp_head();?>

 
</head>

<body>

  <header class="header">
    <div class="container">
      <div class="header__inner">
        <?php the_custom_logo(); ?>
        <nav class="menu">
          <ul class="menu__list">
            <li class="menu__list-item">
              <a class="menu__list-link" href="index.html">Головна</a>
            </li>
            <li class="menu__list-item">
              <a class="menu__list-link" href="services.html">Послуги</a>
            </li>
            <li class="menu__list-item">
              <a class="menu__list-link" href="about.html">Про нас</a>
            </li>
            <li class="menu__list-item">
              <a class="menu__list-link" href="blog.html">Блог</a>
            </li>
            <li class="menu__list-item">
              <a class="menu__list-link" href="#!">Клінерам</a>
            </li>
          </ul>
        </nav>
        <nav class="menu">
          <ul class="menu__list">
            <li class="menu__list-item">
              <a class="menu__list-exit" href="#!">Увійти</a>
            </li>
            <a class="menu__btn" href="#">
              <div class="menu__btn-text">Замовити</div>
            </a>
          </ul>
        </nav>
      </div>
    </div>
  </header>