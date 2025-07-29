<?php

/* turn on featured imagery */
add_theme_support('post-thumbnails');

add_theme_support('title-tag');

/* ADD MENUS */
function ram_theme_register_menus() {
register_nav_menus([
'header_menu' => __('Header Menu', 'ram-theme'),
'footer_menu' => __('Footer Menu', 'ram-theme'),
]);
}
add_action('after_setup_theme', 'ram_theme_register_menus');

/* MAKE MENUS NOT HIDDEN */
function ram_move_menus_to_top_level() {
// Add a new top-level "Menus" page
add_menu_page(
__('Menus', 'ram-theme'), // Page title
__('Menus', 'ram-theme'), // Menu title
'edit_theme_options', // Capability required
'nav-menus.php', // Slug (uses built-in Menus screen)
'', // Callback (leave empty to use default)
'dashicons-list-view', // Icon
5 // Position (optional — near top)
);
}

add_action('admin_menu', 'ram_move_menus_to_top_level', 999);