<?php

/* DISABLE USER REGISTRATION */
add_filter('option_users_can_register', '__return_false');

// Redirect registration attempts
function ram_theme_block_registration_page()
{
    if (isset($_GET['action']) && $_GET['action'] === 'register') {
        wp_redirect(home_url());
        exit;
    }
}
add_action('login_init', 'ram_theme_block_registration_page');


/* REMOVE TAGS TAXONOMY */
function ram_theme_unregister_tags()
{
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'ram_theme_unregister_tags');

/* DISABLE COMMENTING */
function ram_theme_disable_comments_post_types_support()
{
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}
add_action('admin_init', 'ram_theme_disable_comments_post_types_support');

// Close comments on the front-end
function ram_theme_disable_comments_status()
{
    return false;
}
add_filter('comments_open', 'ram_theme_disable_comments_status', 20, 2);
add_filter('pings_open', 'ram_theme_disable_comments_status', 20, 2);

// Hide existing comments
function ram_theme_hide_existing_comments($comments)
{
    return [];
}
add_filter('comments_array', 'ram_theme_hide_existing_comments', 10, 2);

// Remove comment menu from admin
function ram_theme_remove_comment_admin_menu()
{
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'ram_theme_remove_comment_admin_menu');

// Remove comment links from admin bar
function ram_theme_remove_comments_admin_bar()
{
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
}
add_action('init', 'ram_theme_remove_comments_admin_bar');

/* DISABLE GUTENBERG */
add_filter('use_block_editor_for_post', '__return_false', 100);