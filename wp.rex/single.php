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
                    "theme_location" => "single-menu",
                )
            );
            ?>
        </div><!--/.nav-collapse -->
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
  <!-- Start blog banner section -->
  <section id="blog-banner">
    <?php if (get_theme_mod('single-banner')): ?>
      <img src="<?php echo get_theme_mod('single-banner') ?>" alt="img">
    <?php endif; ?>
    <div class="blog-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-banner-area">
              <h2><?php _e('Blog Single','rex')?></h2>
               <?php the_breadcrumb(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End blog banner section -->

  <!-- Start blog section -->
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-area">
            <div class="row">
              <div class="col-lg-8 col-md-7 col-sm-12">
                <div class="blog-left blog-details">
                  <!-- Start single blog post -->
                  <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                      <article class="single-from-blog">
                        <div class="blog-title">
                        <h2><?php the_title(); ?></h2>
                         <p>
                            <?php _e( 'Posted by ', 'rex' );?>
                            <a href="#" class="blog-admin"><?php echo get_the_author();?></a>
                            <?php _e( ' on ', 'rex' );?>
                            <span class="blog-date"><?php echo the_date('jS F Y');?></span>
                         </p>
                        <figure>
                          <?php if ( has_post_thumbnail() ) {?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                          <? } ?>
                        </figure>
                        <div class="blog-details-content">
                          <?php the_content();?>
                          <?php
                          $post_tags = get_the_tags();
                          if ($post_tags) {
                            echo '<span>Tag : </span>';
                            foreach($post_tags as $tag) {
                                $tag_link = get_tag_link($tag->term_id);
                                echo "<a href='{$tag_link}'>{$tag->name}</a>";
                            }}?>
                        </div>
                      </article>
                    <?php  endwhile; ?>
                  <?php endif; ?>

                  <div class="blog-comment">
                    <h2><?php _e('Post a comment','rex')?></h2>
                    <?php comments_template(); ?>
                  </div>
                  <!-- End single blog post -->                  
                </div>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-12">

                  <?php get_sidebar(); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End blog section -->

<?php get_footer(); ?>