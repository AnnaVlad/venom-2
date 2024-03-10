<?php
/*
Template Name: о фильме
*/
?>
<?php get_header(); ?>


    <div class="content">
      <div class="col">
        <div class="about">
          <h2 class="about-film">О фильме</h2>
          <p class="about-text">В настырном журналисте по-прежнему живет симбиот. Том Харди в образе обаятельного
            суперзлодея из комиксов Marvel.</p>
          <h3 class="content-subtitle">В главных ролях</h3>
          <ul class="list column-2">
            <li class="list-item">Том Харди </li>
            <li class="list-item"> Мишель Уильямс </li>
            <li class="list-item"> Вуди Харрельсон </li>
            <li class="list-item"> Наоми Харрис </li>
            <li class="list-item"> Стивен Грэм</li>
            <li class="list-item">Рейд Скотт </li>
            <li class="list-item"> Эд Кейр </li>
            <li class="list-item"> Шон Делани </li>
            <li class="list-item"> Уилльям Барбо </li>
            <li class="list-item"> Пегги Лу</li>
          </ul>
          <div class="trailer">
            <a data-fancybox href="https://www.youtube.com/watch?v=Othd8W8o3t0" class="play">
              <img src="<?php echo get_template_directory_uri() ?>/img/play.svg" alt="piay: icon" class="play-icon">
            </a>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="poster-wrapper">
          <img src="<?php echo get_template_directory_uri() ?>/img/poster.jpg" alt="photo: poster venom 2" class="poster">
          <div class="creators">
            <h3 class="content-subtitle">Режиссёр</h3>
            <ul class="list">
              <li class="list-item">Энди Серкис</li>
            </ul>
            <h3 class="content-subtitle">Сценарий</h3>
            <ul class="list">
              <li class="list-item">Келли Марсел</li>
              <li class="list-item">Том Харди</li>
            </ul>
            <h3 class="content-subtitle">Продюссеры</h3>
            <ul class="list">
              <li class="list-item">Ави Арад</li>
              <li class="list-item">Том Харди</li>
              <li class="list-item">Келли Марсел</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
    <img src="<?php echo get_template_directory_uri() ?>/img/venom 2.png" alt="photo: venom" class="venom">

  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
  <script src="js/main.js"></script>
</body>

</html>