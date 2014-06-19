<?php 

//Template Redirects
function indv_pages() {
    global $wp;
    $plugindir = dirname( __FILE__ );

   //A Simple Page
    if ($wp->query_vars["pagename"] == 'blog') {
        $templatefilename = 'home.php';
        if (file_exists(TEMPLATEPATH . '/' . $templatefilename)) {
            $return_template = TEMPLATEPATH . '/' . $templatefilename;
        } else {
            $return_template = $plugindir . '/' . $templatefilename;
        }
        do_theme_redirect($return_template);
    }
}

add_action("template_redirect", 'indv_pages');

function do_theme_redirect($url) {
    global $post, $wp_query;
    if (have_posts()) {
        include($url);
        die();
    } else {
        $wp_query->is_404 = true;
    }
}

// Create "sidebar" content areas

$home_left = array(
    'name'          => "Homepage Left Content",
    'id'            => "home-left",
    'description'   => 'Left Content Column on Homepage',
    'class'         => '',
    'before_widget' => '<div class="widget">',
    'after_widget'  => "</div></div>\n",
    'before_title'  => '<div class="widget-title">',
    'after_title'   => "</div><div class='widget-content'>\n",
);
register_sidebar( $home_left );

$home_right = array(
    'name'          => ("Homepage Right Content"),
    'id'            => "home-right",
    'description'   => 'Right Content Column on Homepage',
    'class'         => '',
    'before_widget' => '<div class="widget">',
    'after_widget'  => "</div></div>\n",
    'before_title'  => '<div class="widget-title">',
    'after_title'   => "</div><div class='widget-content'>\n",
);
register_sidebar( $home_right );

$contact_footer = array(
    'name'          => ("Footer Contact Block"),
    'id'            => "contact_footer",
    'description'   => 'Content Block in the Gray Footer',
    'class'         => '',
    'before_widget' => '<div class="contact-body">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<div class="contact-title">',
    'after_title'   => "</div>\n",
);
register_sidebar( $contact_footer );

$phone_popup = array(
    'name'          => ("Phone Number Popup"),
    'id'            => "phone_popup",
    'description'   => 'Content when a user click a phone number on a non-smartphone device',
    'class'         => '',
    'before_widget' => '<div id="desktop-tel" class="tel-popup col-xs-12 col-sm-7">',
    'after_widget'  => '<div id="tel-close-box" class="tel-close">Close</div></div>\n',
    'before_title'  => '<h2 class="tel-title">',
    'after_title'   => "</h2>\n",
);
register_sidebar( $phone_popup );

$hero_banner = array(
    'name'          => ("Hero Banner"),
    'id'            => "hero-banner",
    'description'   => 'Content for the main "hero banner" area on the homepage',
    'class'         => '',
    'before_widget' => '<div id="hero-message">',
    'after_widget'  => '</div>'
);
register_sidebar( $hero_banner );

// wp menus
add_theme_support( 'menus' );

// registering menus
register_nav_menus(
    array(
        'main-nav' => __( 'Top Navigation Links (Header)'),   // main nav in header
        'about-links' => __( 'About Us (Gray Footer)'), // about us links
        'services-links' => __( 'Our Services (Gray Footer)'), // our services links
        'connect-links' => __( 'Connect (Gray Footer)'), // connect links
        'footer-links' => __( 'Footer Links (Above Copyright)') // footer links
    )
);

?>