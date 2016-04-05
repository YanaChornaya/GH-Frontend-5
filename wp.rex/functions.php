<?php

function enqueue_styles() {
    wp_enqueue_style( 'rex_style', get_template_directory_uri());
    wp_enqueue_style( 'rex-style1', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style( 'rex-style2', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style( 'rex-style3', get_template_directory_uri() . '/assets/css/font-awesome.css');
    wp_enqueue_style( 'rex-style4', get_template_directory_uri() . '/assets/css/jquery.fancybox.css');
    wp_enqueue_style( 'rex-style5', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style( 'rex_style6', get_template_directory_uri() . '/assets/css/theme-color/default.css');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function scripts(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js');
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js');
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.js');
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.pack.js');
    wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.js');
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js');
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.js');
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js');
    wp_enqueue_script('contact', get_template_directory_uri() . '/assets/js/contact.js');
    wp_localize_script('contact', 'ajax_object',
        array('ajax_url' => admin_url( 'admin-ajax.php' ), 'nonce' => wp_create_nonce( 'contact-form-send' ))
    );
}
add_action('wp_enqueue_scripts', 'scripts');


function google_font_styles() {
    wp_register_style('opensans', 'https://fonts.googleapis.com/css?family=Open+Sans');
    wp_enqueue_style('font', get_stylesheet_uri(), array('opensans') );

    wp_register_style('releway', 'https://fonts.googleapis.com/css?family=Raleway');
    wp_enqueue_style('font', get_stylesheet_uri(), array('releway') );

    wp_register_style('pacifico', 'https://fonts.googleapis.com/css?family=Pacifico');
    wp_enqueue_style('font', get_stylesheet_uri(), array('pacifico') );
}
add_action('wp_enqueue_scripts', 'google_font_styles');

/*-------------Post-type-header-slider---------------------*/

function header_slider() {
    register_post_type('header_slider', array(
            'labels' => array(
                'name' => __('Header Slider', 'rex'),
                'add_new' => __('Add new slide', 'rex'),
                'all_items' => __('All slides', 'rex'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}

add_action( 'init', 'header_slider' );

/*-------------Post-type-about---------------------*/

function about() {
    register_post_type('about', array(
            'labels' => array(
                'name' => __('About', 'rex'),
                'add_new' => __('Add new', 'rex'),
                'all_items' => __('All', 'rex'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon' => '',
        )
    );
}

add_action( 'init', 'about' );

/*-------------Post-type-Team---------------------*/

function team() {
    register_post_type('team', array(
            'labels' => array(
                'name' => __('Team', 'rex'),
                'add_new' => __('Add new team member', 'rex'),
                'all_items' => __('All team', 'rex'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        )
    );
}

add_action( 'init', 'team' );


/*-------------Post-type-services---------------------*/

function services() {
    register_post_type('services', array(
            'labels' => array(
                'name' => __('Services', 'rex'),
                'add_new' => __('Add new service', 'rex'),
                'all_items' => __('All services', 'rex'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        )
    );
}

add_action( 'init', 'services' );


/*-------------Post-type-portfolio---------------------*/

function portfolio() {
    register_post_type('portfolio', array(
            'labels' => array(
                'name' => __('Portfolio', 'rex'),
                'add_new' => __('Add new item', 'rex'),
                'all_items' => __('All items', 'rex'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        )
    );
}

add_action( 'init', 'portfolio' );

/*-------------Post-type-counter---------------------*/

function counter() {
    register_post_type('counter', array(
            'labels' => array(
                'name' => __('Counter', 'rex'),
                'add_new' => __('Add new item', 'rex'),
                'all_items' => __('All items', 'rex'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        )
    );
}

add_action( 'init', 'counter' );
/*-------------Post-type-price---------------------*/

function price() {
    register_post_type('price', array(
            'labels' => array(
                'name' => __('Price', 'rex'),
                'add_new' => __('Add new price', 'rex'),
                'all_items' => __('All prices', 'rex'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        )
    );
}

add_action( 'init', 'price' );

/*-------------Post-type-testimonials---------------------*/

function testimonials() {
    register_post_type('testimonials', array(
            'labels' => array(
                'name' => __('Testimonials slider', 'rex'),
                'add_new' => __('Add new slide', 'rex'),
                'all_items' => __('All slider', 'rex'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        )
    );
}

add_action( 'init', 'testimonials' );

/*-------------Post-type-clients---------------------*/

function clients() {
    register_post_type('clients', array(
            'labels' => array(
                'name' => __('Clients', 'rex'),
                'add_new' => __('Add new client', 'rex'),
                'all_items' => __('All clients', 'rex'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        )
    );
}

add_action( 'init', 'clients' );

/*-------------Post-type-contact---------------------*/

function contact() {
    register_post_type('contact', array(
            'labels' => array(
                'name' => __('Contact', 'rex'),
                'add_new' => __('Add new', 'rex'),
                'all_items' => __('All', 'rex'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        )
    );
}

add_action( 'init', 'contact' );

/*------------------General------------*/
function rex_setup() {
    register_nav_menus(
        array(
            'nav-menu' => __( 'Navigation Menu', 'rex' ),
            'single-menu' => __( 'Single Menu', 'rex' ),
            'error-menu' => __( 'Error Menu', 'rex' ),
        ));

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'rex_setup');

/*-----------Customizer-----------*/
function rex_customize_register( $wp_customize )
{

    /*----------------header-bg-------------------*/

    $wp_customize->add_section('header-bg', array(
        'title' => __('Header background', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('header-img', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'header-img', array(
            'label' => __('Header background', 'rex'),
            'section' => 'header-bg',
            'settings' => 'header-img',
            'priority' => 1
        )
    ));

    /*----------------logo-------------------*/

    $wp_customize->add_section('logo', array(
        'title' => __('Logo', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('logo-img', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'logo-img', array(
            'label' => __('Logo', 'rex'),
            'section' => 'logo',
            'settings' => 'logo-img',
            'priority' => 1
        )
    ));

    /*----------------About-------------------*/

    $wp_customize->add_section('welcome-about', array(
        'title' => __('About', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('welcome-description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'welcome-description', array(
            'label' => __('Welcome description', 'rex'),
            'section' => 'welcome-about',
            'settings' => 'welcome-description',
            'priority' => 1
        )
    ));

    $wp_customize->add_setting('about-design-description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'about-design-description', array(
            'label' => __('About design description', 'rex'),
            'section' => 'welcome-about',
            'settings' => 'about-design-description',
            'priority' => 1
        )
    ));

    $wp_customize->add_setting('img-intro', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'img-intro', array(
            'label' => __('Intro image', 'rex'),
            'section' => 'welcome-about',
            'settings' => 'img-intro',
            'priority' => 1
        )
    ));

    /*----------------Call to action-------------------*/

    $wp_customize->add_section('call-to-action', array(
        'title' => __('Call to action', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('call-to-action-bg', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'call-to-action-bg', array(
            'label' => __('Call to action background', 'rex'),
            'section' => 'call-to-action',
            'settings' => 'call-to-action-bg',
            'priority' => 1
        )
    ));

    $wp_customize->add_setting('call-to-action-description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'call-to-action-description', array(
            'label' => __('Call to action description', 'rex'),
            'section' => 'call-to-action',
            'settings' => 'call-to-action-description',
            'priority' => 1
        )
    ));

    /*----------------Team-------------------*/

    $wp_customize->add_section('team', array(
        'title' => __('Team', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('team-description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'team-description', array(
            'label' => __('Team description', 'rex'),
            'section' => 'team',
            'settings' => 'team-description',
            'priority' => 1
        )
    ));

    /*----------------Services-------------------*/

    $wp_customize->add_section('services', array(
        'title' => __('Services', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('services-description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'services-description', array(
            'label' => __('Services', 'rex'),
            'section' => 'services',
            'settings' => 'services-description',
            'priority' => 1
        )
    ));

    /*----------------Portfolio-------------------*/

    $wp_customize->add_section('portfolio', array(
        'title' => __('Portfolio', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('portfolio-description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'portfolio-description', array(
            'label' => __('Portfolio', 'rex'),
            'section' => 'portfolio',
            'settings' => 'portfolio-description',
            'priority' => 1
        )
    ));


    /*----------------Counter-------------------*/

    $wp_customize->add_section('counter', array(
        'title' => __('Counter', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('counter-bg', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'counter-bg', array(
            'label' => __('Counter background', 'rex'),
            'section' => 'counter',
            'settings' => 'counter-bg',
            'priority' => 1
        )
    ));

    /*----------------Pricing-------------------*/

    $wp_customize->add_section('pricing', array(
        'title' => __('Pricing', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('pricing-description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'pricing-description', array(
            'label' => __('Pricing description', 'rex'),
            'section' => 'pricing',
            'settings' => 'pricing-description',
            'priority' => 1
        )
    ));

    /*----------------Testimonial-------------------*/

    $wp_customize->add_section('testimonial', array(
        'title' => __('Testimonial', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('testimonial-bg', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'testimonial-bg', array(
            'label' => __('Testimonial background', 'rex'),
            'section' => 'testimonial',
            'settings' => 'testimonial-bg',
            'priority' => 1
        )
    ));

    /*----------------Blog-------------------*/

    $wp_customize->add_section('blog', array(
        'title' => __('Blog', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('blog-description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'blog-description', array(
            'label' => __('Blog description', 'rex'),
            'section' => 'blog',
            'settings' => 'blog-description',
            'priority' => 1
        )
    ));

    /*----------------Contact-------------------*/
    $wp_customize->add_section('contact', array(
        'title' => __('Contact', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('contact-bg', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'contact-bg', array(
            'label' => __('Contact background', 'rex'),
            'section' => 'contact',
            'settings' => 'contact-bg',
            'priority' => 1
        )
    ));
    /*----------------------Social---------------------*/
    $wp_customize->add_section( 'social' , array(
        'title'      => __( 'Social links', 'rex' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'social-facebook' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social-facebook', array(
        'label'        => __( 'Facebook', 'rex' ),
        'section'    => 'social',
        'settings'   => 'social-facebook',
    ) ) );

    $wp_customize->add_setting( 'social-twitter' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social-twitter', array(
        'label'        => __( 'Twitter', 'rex' ),
        'section'    => 'social',
        'settings'   => 'social-twitter',
    ) ) );


    $wp_customize->add_setting( 'social-google' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social-google', array(
        'label'        => __( 'Google', 'rex' ),
        'section'    => 'social',
        'settings'   => 'social-google',
    ) ) );

    $wp_customize->add_setting( 'social-youtube' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social-youtube', array(
        'label'        => __( 'Youtube', 'rex' ),
        'section'    => 'social',
        'settings'   => 'social-youtube',
    ) ) );


    $wp_customize->add_setting( 'social-linkedin' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social-linkedin', array(
        'label'        => __( 'Linkedin', 'rex' ),
        'section'    => 'social',
        'settings'   => 'social-linkedin',
    ) ) );

    $wp_customize->add_setting( 'social-dribbble' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social-dribbble', array(
        'label'        => __( 'Dribbble', 'rex' ),
        'section'    => 'social',
        'settings'   => 'social-dribbble',
    ) ) );

    /*----------------Single-banner-------------------*/
    $wp_customize->add_section('single', array(
        'title' => __('Single', 'rex'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('single-banner', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'single-banner', array(
            'label' => __('Single banner', 'rex'),
            'section' => 'single',
            'settings' => 'single-banner',
            'priority' => 1
        )
    ));

}

add_action( 'customize_register', 'rex_customize_register' );

function sk_add_category_taxonomy_to_events() {
    register_taxonomy_for_object_type( 'category', 'portfolio' );
}

add_action( 'init', 'sk_add_category_taxonomy_to_events' );


/*--------------Breadcrum----------------*/
function the_breadcrumb() {
    echo '<ol class="breadcrumb">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo "</a></li>";
        if (is_category()) {
            echo '<li class="active">';
            the_category(' </li><li> ');
        }
        elseif (is_single()) {
            echo "</li><li class='active'>Blog single</li>";
        }
        elseif (is_page()) {
            echo '<li>';
            echo the_title();
            echo '</li>';
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ol>';
}

/*-----------------Pagination-------------------*/
function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {
        echo "<ul class=\"pagination blog-pagination\">";
        if($paged > 1) echo "<li>" . "<a href='".get_pagenum_link($paged - 1)."'>&laquo;</a>" . "</li>";

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)?  "<li class='current'>"."<a href='".get_pagenum_link($i)."'>$i</a>"."</li>":"<li>"."<a href='".get_pagenum_link($i)."'>".$i."</a>"."</li>";
            }
        }

        if ($paged < $pages) echo "<li>" . "<a href=\"".get_pagenum_link($paged + 1)."\"> &raquo;</a>" . "</li>";
        echo "</ul>\n";
    }
}


/*-------------------Contact-----------------------*/
function contactFormSend(){
    $nonce = wp_verify_nonce( $_POST['nonce'], 'contact-form-send' );
    if ($nonce) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if( wp_mail($email, $name, $message) ) {
            echo _e('The message have been sent successfully. Thank you.','rex');
        } else {
            echo _e('You made a mistake, please check you contact form.','rex');
        }
        wp_die();
    } else {
        die( 'Security check' );
    }
}

add_action('wp_ajax_contactFormSend', 'contactFormSend');
add_action('wp_ajax_nopriv_contactFormSend', 'contactFormSend');







