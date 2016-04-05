<?php get_header(); ?>

  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <a class="navbar-brand logo" href="<?php echo home_url(); ?>"> <img src="<?php echo get_theme_mod('logo-img') ?>" alt="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php wp_nav_menu(array(
                  'container' => false,
                  'menu_id' => 'top-menu',
                  'menu_class' => 'nav navbar-nav mainn-nav menu-scroll',
                  'before' => '',
                  'after' => '',
                  "theme_location" => "error-menu",
              )
          );
          ?>
        </div>

       <div class="search-area">
         <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
           <input id="search" name="search" type="text" value="<?php echo get_search_query(); ?>" placeholder="<?php _e('What\'re you looking for ?','rex')?>">
           <input id="search_submit" value="Rechercher" type="submit">
         </form>
        </div>         
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start error page -->
  <section id="error-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="error-page-area">
            <div class="error-no-area">
              <div class="error-no">
                <h2>404 Error</h2>
                <p>Sorry</p>
              </div>
            </div>
          </div>
          <div class="error-message">
            <h4><?php _e('Woops! Something gone wrong','rex')?></h4>
            <p><?php _e('Sorry, the page you have requested has either been moved,or does not exist, Return to our','rex')?> <a href="<?php echo home_url(); ?>"><?php _e('homepage','rex')?></a>.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End error page -->

<?php get_footer(); ?>