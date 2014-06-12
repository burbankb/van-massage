<?php 

/*
function indv_pages() {
    global $wp;
    $plugindir = dirname( __FILE__ );

   //A Simple Page
    if ($wp->query_vars["pagename"] == 'calendar') {
        $templatefilename = 'event_calendar.php';
        if (file_exists(TEMPLATEPATH . '/' . $templatefilename)) {
            $return_template = TEMPLATEPATH . '/' . $templatefilename;
        } else {
            $return_template = $plugindir . '/' . $templatefilename;
        }
        do_theme_redirect($return_template);
    }
}

add_action("template_redirect", 'indv_pages');
*/

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

?>