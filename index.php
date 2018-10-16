<?php get_header(); ?>

        <div id="container-image">
          <img id="home-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLRAHe5dwwn0YL5e-ZCBd1lrPXkHMKHoThF6QQYKwJYTLkXJFd" alt="immagine home" />
          <div id="layer-home"><h2>boolean-careers</h2></div>
        </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div id="container-main">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="bgk-post">
              <img src="https://newtradeinformatica.com/wp-content/uploads/2015/02/hi-tech-background.jpg" alt="background post">
              <div class="post">
                <h2>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h2>
                <small>
                  <?php the_time('j F Y'); ?> di <?php the_author_posts_link(); ?>
                </small>
                <p><?php the_excerpt(); ?></p>
                <p>Postato in: <?php the_category(', '); ?></p>
              </div>
            </div>
          <?php endwhile; else: ?>
            <p>Nessun post disponibile!</p>
          <?php endif; ?>
        </div>
        </div>
        <div class="col-sm-4">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
