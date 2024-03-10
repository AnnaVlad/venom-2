<?php
/*
Template Name: главная
*/
?>
<?php get_header() ?>

    <main class="film">
      <span class="date">16 сентября 2021 года</span>
      <img  src="<?php echo get_template_directory_uri() ?>/img/Venom 2.svg" alt="Venom 2" class="film-name">
      
      <div class="film-description">      <?php the_content (); ?>
</div>
      <div class="button-group">
        <a data-fancybox href="https://www.youtube.com/watch?v=Othd8W8o3t0" class="button button-primary">
          <img width="15"  src="<?php echo get_template_directory_uri() ?>/img/play.svg" alt="icon: play" class="button-icon">
          <span class="button-text">смотреть трейлер</span>
        </a>
        <a href="trailer.html" class="button button-link">
          <img width="15"  src="<?php echo get_template_directory_uri() ?>/img/ticket.svg" alt="icon: ticket" class="button-icon"><span class="button-text">билеты
            на премьеру</span>
        </a>
      </div>
    </main>

  </div>
  <img  src="<?php echo get_template_directory_uri() ?>/img/venom 2.png" alt="photo: venom" class="venom">
  <?php wp_footer(); ?>

  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

  <script src="js/main.js"></script>
</body>

</html>

