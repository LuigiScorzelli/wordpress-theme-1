
    <footer>
      <div id="container-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <?php wp_nav_menu(array(
                'theme_location' => 'footer',
                'depth' => 0,
                'container' => false,
                'menu_class' => 'footer_item'
                )); ?>
              </div>
            </div>
          </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
