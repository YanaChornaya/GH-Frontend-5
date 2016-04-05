<aside class="blog-right">
    <!-- Start Sidebar Single widget -->
    <div class="single-widget">
        <h2><?php _e('Search','rex')?></h2>
        <form role="search" method="get" class="blog-search"
              action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div>
                <input name="search" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                <input type="submit" class="button button-default ownstyle" value="<?php echo esc_attr_x( 'Search', 'rex' ); ?>" />
            </div>
        </form>
    </div>
    <!-- End Sidebar Single widget -->
    <!-- Start Sidebar Single widget -->
    <div class="single-widget">
        <h2><?php _e('Follow us on','rex')?></h2>
        <div class="follow-us">
            <?php if (get_theme_mod('social-facebook')) {?>
                <a class="facebook" href="<?php echo get_theme_mod('social-facebook')?>"><span class="fa fa-facebook"></span></a>
            <?php } ?>
            <?php if (get_theme_mod('social-twitter')) {?>
                <a class="twitter" href="<?php echo get_theme_mod('social-twitter')?>"><span class="fa fa-twitter"></span></a>
            <?php } ?>
            <?php if (get_theme_mod('social-google')) {?>
                <a class="google-plus" href="<?php echo get_theme_mod('social-google')?>"><span class="fa fa-google-plus"></span></a>
            <?php } ?>
            <?php if (get_theme_mod('social-youtube')) {?>
                <a class="youtube" href="<?php echo get_theme_mod('social-youtube')?>"><span class="fa fa-youtube"></span></a>
            <?php } ?>
            <?php if (get_theme_mod('social-linkedin')) {?>
                <a class="linkedin" href="<?php echo get_theme_mod('social-linkedin')?>"><span class="fa fa-linkedin"></span></a>
            <?php } ?>
            <?php if (get_theme_mod('social-dribbble')) {?>
                <a class="dribbble" href="<?php echo get_theme_mod('social-dribbble')?>"><span class="fa fa-dribbble"></span></a>
            <?php } ?>
        </div>
    </div>
    <!-- End Sidebar Single widget -->
    <!-- Start Sidebar Single widget -->
    <div class="single-widget">
        <h2><?php _e('Popular post','rex')?></h2>
        <div class="popular-post-widget">
            <div class="media">
                <div class="media-left">
                    <a href="<?php the_permalink(); ?>">
                        <img class="media-object" src="<?php echo get_template_directory_uri();?>/assets/images/popular-post-img.jpg" alt="img">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="<?php the_permalink(); ?>">A lonely flower</a></h4>
                    <p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="<?php the_permalink(); ?>">
                        <img class="media-object" src="<?php echo get_template_directory_uri();?>/assets/images/popular-post-img.jpg" alt="img">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="<?php the_permalink(); ?>">A lonely flower</a></h4>
                    <p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="<?php the_permalink(); ?>">
                        <img class="media-object" src="<?php echo get_template_directory_uri();?>/assets/images/popular-post-img.jpg" alt="img">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="<?php the_permalink(); ?>">A lonely flower</a></h4>
                    <p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium done.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Single widget -->
    <!-- Start Sidebar Single widget -->
    <div class="single-widget">
        <h2><?php _e('Instagram feed','rex')?></h2>
        <div class="instagram-feed">
            <div class="single-instagram-feed">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/instagram-feed-img.jpg" alt="img">
            </div>
            <div class="single-instagram-feed">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/instagram-feed-img.jpg" alt="img">
            </div>
            <div class="single-instagram-feed">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/instagram-feed-img.jpg" alt="img">
            </div>
        </div>
    </div>
    <!-- End Sidebar Single widget -->
    <!-- Start Sidebar Single widget -->
    <div class="single-widget">
        <h2><?php _e('Subscribe to newslater','rex')?></h2>
        <form class="blog-search">
            <input type="text">
            <button class="button button-default" data-text="Subscribe" type="submit"><span>Subscribe</span></button>
        </form>
    </div>
    <!-- End Sidebar Single widget -->
</aside>
