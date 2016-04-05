<!-- Start Footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-top-area">
                        <a class="footer-logo" href="#"> <img src="<?php echo get_theme_mod('logo-img') ?>" alt="logo"></a>
                        <div class="footer-social">
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
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p><?php _e('Designed by ','rex')?><a href="http://www.markups.io/">MarkUps.io</a></p>
    </div>
</footer>
<!-- End Footer -->

<?php wp_footer(); ?>

</body>
</html>