<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   <title>Премьера фильма Venom 2</title>
  <?php wp_head(); ?>
</head>
<body class="blood">
  <div class="container">
    <header class="header">
      <a href="index.html" class="logo">
        <?php the_custom_logo(); ?>
        <!-- <img width="46" height="71"  src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="logo" class="film-logo"> -->
      </a>
      <nav class="nav">
        <div class="menu-burger">
          <span class="menu-burger__text">меню</span>
          <div class="menu-burger__wrap">
            <div class="menu-burger__icon"></div>
          </div>
        </div>
        <button class="menu-close">
          <span class="menu-close__text">закрыть</span>

          <img  src="<?php echo get_template_directory_uri() ?>/img/arrow.svg" alt="icon: arrow right"        class="menu-close__arrow">

        </button>

        <?php wp_nav_menu( array(
            'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
                                
            'container'       => 'ul',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
            'container_class' => 'nav-menu',      // (string) class контейнера (div тега)
            'menu_class'      => 'nav-menu',      // (string) class самого меню (ul тега)
            'menu_id'         => '',              // (string) id самого меню (ul тега)
            'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
            'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
            'before'          => '',              // (string) Текст перед <a> каждой ссылки
            'after'           => '',              // (string) Текст после </a> каждой ссылки
            'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
            'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
            'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
            'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
            'exclude'         => '33'
          ) );  ?>

    
      </nav>
    </header>
