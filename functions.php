<?php
function themeSupport()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_theme_setup', 'themeSupport');

function custom_tailwind_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('main_style', get_template_directory_uri() . "/src/css/style.css", array('google_font', 'google_font_preconnect_crossorigin'), $version, 'all');
    wp_enqueue_style('google_font', "https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&family=Tinos:wght@400;700&display=swap", '1.0', 'all');
    wp_enqueue_style('google_font_preconnect', "https://fonts.googleapis.com", '1.0', 'all');
    wp_enqueue_style('google_font_preconnect_crossorigin', "https://fonts.gstatic.com", '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'custom_tailwind_register_styles');

function custom_tailwind_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('main_script', get_template_directory_uri(), "/src/css/script.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'custom_tailwind_register_scripts');

function front_page_post($atts)
{
    extract(
        shortcode_atts(
            array(
                'cat' => ''
            ),
            $atts
        )
    );

    $latest_args = array('posts_per_page' => 2, 'category_name' => $cat);
    $latest_post = new WP_Query($latest_args);
    $content = '';
    while ($latest_post->have_posts()):
        $latest_post->the_post();
        $link = get_permalink();
        $title = get_the_title();
        $date = get_the_date();

        $content .= '<div><h1><a href="' . $link . '">' . $title . '</a></h1>';
        $content .= '<p>' . $date . '</p>';
        $content .= '</div>';
    endwhile;
    return $content;
}

add_shortcode('front_page_post', 'front_page_post');


function custom_nav_menus()
{
    $locations = array(
        'primary' => "Primary Menus",
        'secondary' => "Secondary Menus",
        'footer' => "Footer Menus"
    );

    register_nav_menus($locations);
}

add_action('init', 'custom_nav_menus');

// Filter & Function to rename the WordPress logout URL
add_filter('logout_url', 'my_logout_page', 10, 2);
function my_logout_page($logout_url)
{
    return home_url('/auth.php'); // The name of your new login file
}
// Filter & Function to rename Lost Password URL
add_filter('lostpassword_url', 'my_lost_password_page', 10, 2);
function my_lost_password_page($lostpassword_url)
{
    return home_url('/auth.php?action=lostpassword'); // The name of your new login file
}

function reading_time($content)
{
    $word_count = str_word_count(strip_tags($content));
    $readingtime = ceil($word_count / 200);

    if ($readingtime == 1) {
        $timer = " minute";
    } else {
        $timer = " minutes";
    }
    $totalreadingtime = $readingtime . $timer;

    return $totalreadingtime;
}

if (!function_exists('register_navwalker')):
    function register_navwalker()
    {
        require('inc/gdna_wp_nav_menu_walker.php');
    }
endif;

add_action('after_setup_theme', 'register_navwalker');
?>