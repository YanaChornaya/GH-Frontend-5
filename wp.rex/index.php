<?php get_header(); ?>

  <!-- Start header section -->  
  <header id="header">
    <div class="header-inner">
      <!-- Header image -->
      <?php if (get_theme_mod('header-img')): ?>
        <img src="<?php echo get_theme_mod('header-img') ?>" alt="img">
      <?php endif; ?>
      <div class="header-overlay">
        <div class="header-content">
        <!-- Start header content slider -->
          <?php
          $args = array('post_type' => 'header_slider', 'posts_per_page' => 10);
          $the_query = new WP_Query($args);

          if ($the_query->have_posts()) :?>
          <h2 class="header-slide">WE GENERATE
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <span><?php the_title(); ?></span>
            <?php endwhile;?>
          IDEA</h2>
          <?php endif; ?>
          <?php wp_reset_query(); ?>

        <!-- End header content slider -->  
        <!-- Header btn area -->
        <div class="header-btn-area">
          <a class="knowmore-btn" href="#"><?php echo __('KNOW MORE', 'rex')?></a>
          <a class="download-btn" href="#"><?php echo __('DOWNLOAD Theme', 'rex')?></a>
        </div>
      </div>
      </div>      
    </div>
  </header>
  <!-- End header section -->

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
                  "theme_location" => "nav-menu",
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

  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle"><?php _e('Welcome to ', 'rex'); ?><span><?php _e('Nex', 'rex'); ?></span></h2>
              <span class="tittle-line"></span>
              <?php if (get_theme_mod('welcome-description')): ?>
                <p><?php echo get_theme_mod('welcome-description') ?></p>
              <?php endif; ?>
            </div>
            <div class="welcome-content">
              <ul class="wc-table">
                  <?php
                  $args = array('post_type' => 'about', 'posts_per_page' => 10);
                  $the_query = new WP_Query($args);
                  if ($the_query->have_posts()) :?>
                      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
                          <div class="single-wc-content wow fadeInUp">
                            <?php $about_meta = get_post_meta(get_the_ID(), 'About-icon', true);
                             if($about_meta) { ?>
                               <span class="wc-icon <?php echo $about_meta?>" ></span >
                              <?php } ?>
                            <h4 class="wc-tittle"><?php the_title(); ?></h4>
                            <p><?php the_content(); ?></p>
                          </div>
                        </li>
                      <?php endwhile;?>
                  <?php endif; ?>
                  <?php wp_reset_query(); ?>
              </ul>
            </div>
          </div>
          <!-- End welcome area -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="about-area">
            <div class="row">
              <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="about-left wow fadeInLeft">
                  <?php if (get_theme_mod('img-intro')): ?>
                    <img src="<?php echo get_theme_mod('img-intro') ?>" alt="img">
                  <?php endif; ?>
                  <a class="introduction-btn" href="#"><?php echo _e('Introduction','rex')?></a>
                </div>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="about-right wow fadeInRight">
                  <div class="title-area">
                    <h2 class="tittle"><?php _e('About ', 'rex'); ?> <span><?php _e('Nex ', 'rex')?></span><?php _e('design','rex')?></h2>
                    <span class="tittle-line"></span>
                    <?php if (get_theme_mod('about-design-description')): ?>
                      <p><?php echo get_theme_mod('about-design-description') ?></p>
                    <?php endif; ?>
                    <div class="about-btn-area">
                      <a href="#" class="button button-default" data-text="KNOW MORE"><span><?php _e('KNOW MORE','rex')?></span></a>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End about section -->

  <!-- Start call to action -->
  <section id="call-to-action">
    <?php if (get_theme_mod('call-to-action-bg')): ?>
       <img src="<?php echo get_theme_mod('call-to-action-bg') ?>" alt="img">
    <?php endif; ?>
    <div class="call-to-overlay">
      <div class="container">
        <div class="call-to-content wow fadeInUp">
          <?php if (get_theme_mod('call-to-action-description')): ?>
            <h2><?php echo get_theme_mod('call-to-action-description') ?></h2>
          <?php endif; ?>
          <a href="#" class="button button-default" data-text="GET IT NOW"><span>GET IT NOW</span></a>
        </div>
      </div>
    </div> 
  </section>
  <!-- End call to action -->

  <!-- Start Team action -->
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="team-area">

            <div class="title-area">
              <h2 class="tittle"><?php _e('Meet our team', 'rex')?></h2>
              <span class="tittle-line"></span>
              <?php if (get_theme_mod('team-description')): ?>
                <p><?php echo get_theme_mod('team-description') ?></p>
              <?php endif; ?>
            </div>
            <!-- Start team content -->
                <?php
                $args = array('post_type' => 'team', 'posts_per_page' => 10);
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :?>

                <div class="team-content">
                  <ul class="team-grid">
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li>

                      <div class="team-item wow fadeInUp">
                        <?php if ( has_post_thumbnail() ) {
                          the_post_thumbnail();
                        } ?>
                        <div class="team-info">
                          <p><?php the_content(); ?></p>
                          <a href="#"><span class="fa fa-facebook"></span></a>
                          <a href="#"><span class="fa fa-twitter"></span></a>
                          <a href="#"><span class="fa fa-pinterest"></span></a>
                          <a href="#"><span class="fa fa-rss"></span></a>
                        </div>
                      </div>

                      <div class="team-address">
                        <p><?php the_title(); ?></p>
                        <?php $work_meta = get_post_meta(get_the_ID(), 'Work', true);
                        if($work_meta) { ?>
                          <span><?php echo $work_meta?></span>
                        <?php } ?>
                      </div>

                    </li>
                  <?php endwhile;?>
                <?php wp_reset_query(); ?>
              </ul>
            </div>
            <?php endif; ?>
            <!-- End team content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Team action -->

  <!-- Start service section -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle"><?php _e('Service we offer','rex')?></h2>
              <span class="tittle-line"></span>
              <?php if (get_theme_mod('services-description')): ?>
                <p><?php echo get_theme_mod('services-description') ?></p>
              <?php endif; ?>
            </div>
            <!-- service content -->
            <div class="service-content">
              <ul class="service-table">
                <?php
                $args = array('post_type' => 'services', 'posts_per_page' => 10);
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :?>
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="col-md-3 col-sm-6">
                      <div class="single-service wow slideInUp">
                        <?php $services_meta = get_post_meta(get_the_ID(), 'Services-icon', true);
                        if($services_meta) { ?>
                          <span class="service-icon <?php echo $services_meta?>" ></span>
                        <?php } ?>
                        <h4 class="service-title"><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
                      </div>
                    </li>
                  <?php endwhile;?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service section -->

  <!-- Start Portfolio section -->
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="portfolio-area">
            <div class="title-area">
              <h2 class="tittle"><?php _e('Recent portfolio','rex')?></h2>
              <span class="tittle-line"></span>
              <?php if (get_theme_mod('portfolio-description')): ?>
                <p><?php echo get_theme_mod('portfolio-description') ?></p>
              <?php endif; ?>
            </div>
            <!-- Portfolio content -->
            <div class="portfolio-content">
                <!-- portfolio menu -->
               <div class="portfolio-menu">
                 <ul>
                   <?php $categories = get_categories('child_of=10');?>
                   <?php foreach ($categories as $cat) { ?>
                     <li class="filter" data-filter=".<?php echo $cat->slug?>"><?php echo $cat->name ?></li>
                   <?php }?>
                 </ul>
               </div>
               <!-- Portfolio container -->
               <div id="mixit-container" class="portfolio-container">

                 <?php
                 $args = array('post_type' => 'portfolio', 'posts_per_page' => 10);
                 $the_query = new WP_Query($args);
                 if ($the_query->have_posts()) :?>
                   <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                     <?php $category = get_the_category();?>
                     <div class="single-portfolio mix <?php foreach ($category as $cat) {echo $cat->slug . ' ';}?>">
                       <div class="single-item">
                         <?php if ( has_post_thumbnail() ) {
                           the_post_thumbnail();
                         } ?>
                         <div class="single-item-content">
                           <div class="portfolio-social-icon">
                             <a class="fancybox" data-fancybox-group="gallery" href="<?php bloginfo('template_directory'); ?>/assets/images/portfolio-img-big1.jpg"><i class="fa fa-eye"></i></a>
                             <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                           </div>
                           <div class="portfolio-title">
                             <h4><?php the_title()?></h4>
                            <span><?php the_content(); ?></span>
                           </div>
                         </div>
                       </div>
                     </div>
                   <?php endwhile;?>
                 <?php endif; ?>
                 <?php wp_reset_query(); ?>

               </div>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Portfolio section -->

  <!-- Start counter section -->
  <section id="counter">
    <?php if (get_theme_mod('counter-bg')): ?>
      <img src="<?php echo get_theme_mod('counter-bg') ?>" alt="img">
    <?php endif; ?>
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start counter area -->
            <div class="counter-area">
              <?php
              $args = array('post_type' => 'counter', 'posts_per_page' => 10);
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                 <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="single-counter">
                      <?php $counter_meta = get_post_meta(get_the_ID(), 'Counter-icon', true);
                      if($counter_meta) { ?>
                        <span class="<?php echo $counter_meta?>" ></span>
                      <?php } ?>
                      <div class="counter-count">
                        <span class="counter"><?php the_title(); ?></span>
                        <p><?php the_content(); ?></p>
                      </div>
                    </div>
                  </div>
                <?php endwhile;?>
              <?php endif; ?>
              <?php wp_reset_query(); ?>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End counter section -->

  <!-- Start Pricing Table section -->
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pricing-table-area">
            <div class="title-area">
              <h2 class="tittle"><?php _e('Pricing table','rex')?></h2>
              <span class="tittle-line"></span>
              <?php if (get_theme_mod('pricing-description')): ?>
                <p><?php echo get_theme_mod('pricing-description') ?></p>
              <?php endif; ?>
            </div>
            <!-- service content -->
            <li class="pricing-table-content">
                <ul class="price-table">
                  <?php
                  $args = array('post_type' => 'price', 'posts_per_page' => 10);
                  $the_query = new WP_Query($args);
                  if ($the_query->have_posts()) :?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                     <li class="wow slideInUp">
                         <div class="
                             <?php $post_title = get_the_title();
                             if ($post_title == 'Standart') {
                               echo "single-price standard-price";
                             }
                              else {
                                echo "single-price";
                              }?> ">
                           <h4 class="price-header"><?php the_title();?></h4>
                          <?php $price_meta = get_post_meta(get_the_ID(), 'Price', true);
                          if($price_meta) { ?>
                            <span class="price-amount"><?php echo $price_meta?></span>
                          <?php } ?>
                          <?php the_content(); ?>
                          <a data-text="SIGN UP" class="button button-default" href="#"><span><?php _e('SIGN UP','rex')?></span></a>
                        </div>
                      </li>
                    <?php endwhile;?>
                  <?php endif; ?>
                  <?php wp_reset_query(); ?>
               </ul>     
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Pricing Table section -->

  <!-- Start Testimonial section -->
  <section id="testimonial">
    <?php if (get_theme_mod('testimonial-bg')): ?>
      <img src="<?php echo get_theme_mod('testimonial-bg') ?>" alt="img">
    <?php endif; ?>
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Testimonial area -->
            <div class="testimonial-area">
              <div class="title-area">
                <h2 class="tittle"><?php _e('What people say about us','rex')?></h2>
                <span class="tittle-line"></span>              
              </div>
              <div class="testimonial-conten">
                <!-- Start testimonial slider -->
                <div class="testimonial-slider">
                  <!-- single slide -->
                  <?php
                  $args = array('post_type' => 'testimonials', 'posts_per_page' => 10);
                  $the_query = new WP_Query($args);
                  if ($the_query->have_posts()) :?>
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="single-slide">
                      <?php the_content(); ?>
                      <div class="single-testimonial">
                        <?php if ( has_post_thumbnail() ) {
                          the_post_thumbnail('post-thumbnail', array( 'class' => "testimonial-thumb"));
                        } ?>

                        <?php $testimonial_name = get_post_meta(get_the_ID(), 'Testimonial-name', true);

                        if($testimonial_name) { ?>
                          <p><?php echo $testimonial_name?></p>
                        <?php } ?>

                        <?php $testimonial_work = get_post_meta(get_the_ID(), 'Testimonial-work', true);

                        if($testimonial_work) { ?>
                          <span><?php echo $testimonial_work?></span>
                        <?php } ?>

                      </div>
                    </div>
                      <?php endwhile;?>
                      <?php endif; ?>
                      <?php wp_reset_query(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
  </section>
  <!-- End Testimonial section -->

  <!-- Start from blog section -->
  <section id="from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="from-blog-area">
            <div class="title-area">
              <h2 class="tittle"><?php _e('Our blog','rex')?></h2>
              <span class="tittle-line"></span>
              <?php if (get_theme_mod('blog-description')): ?>
                <p><?php echo get_theme_mod('blog-description') ?></p>
              <?php endif; ?>
            </div>
            <!-- From Blog content -->

            <div class="from-blog-content">
              <div class="row">
                <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <?php if ( has_post_thumbnail() ) {?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                     <? } ?>
                    </figure>
                    <div class="blog-title">
                      <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <p>
                        <?php _e( 'Posted by ', 'rex' );?>
                        <a href="#" class="blog-admin"><?php echo get_the_author();?></a>
                        <?php _e( ' on ', 'rex' );?>
                        <span class="blog-date"><?php echo the_date('jS F Y');?></span>
                      </p>
                     </div>
                    <?php the_excerpt(); ?>
                    <div class="blog-footer">
                      <a href="<?php the_permalink(); ?>">
                        <span class="fa fa-thumbs-o-up"></span>
                        <?php echo comments_number( 'no comments', '1 comments', '% comments' ); ?>
                      </a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                     </div>
                  </article>
                </div>
                <?php  endwhile; ?>
                <?php endif; ?>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog section -->

  <section id="client">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="client-area">
            <ul class="client-table">
              <?php
              $args = array('post_type' => 'clients', 'posts_per_page' => 10);
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <?php if ( has_post_thumbnail() ) {?>
                    <li><?php the_post_thumbnail();?></li>
                  <?php } ?>
                <?php endwhile;?>
              <?php endif; ?>
              <?php wp_reset_query(); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2><?php _e('Contact with us','rex')?></h2>
            <?php
            $args = array('post_type' => 'contact', 'posts_per_page' => 10);
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <address class="single-address">
                  <h4><?php the_title();?></h4>
                  <?php the_content();?>
                </address>
              <?php endwhile;?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="contact-right wow fadeInRight">
            <h2><?php _e('Send a message','rex')?></h2>
            <form action="" class="contact-form" onsubmit="return false">
              <div class="form-group">
                <input id="name" type="text" name="name" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input id="email" type="email" name="email" class="form-control" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <textarea id="message" name="message" class="form-control"></textarea>
              </div>
              <button id="contact-send" type="submit" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
  <!-- Start Google Map -->
  <section id="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d6303.67022361714!2d144.955652!3d-37.817331!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-37.8173306!2d144.9556518!5e0!3m2!1sen!2sbd!4v1442411159706" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>  
  </section>
  <!-- End Google Map -->

<?php get_footer(); ?>


