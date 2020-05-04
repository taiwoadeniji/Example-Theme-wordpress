<?php
/**
 * PHP fuctions / logic we can run before our template outpot.
 * 
 */

 add_action('wp_enqueue_scripts', function(){
     // Themes script.
wp_enqueue_scripts(
    // Name of script.
    'example-theme-scripts',
    //Public path to script.
get_theme_file_uri(
    '/assets/js/scripts.js'
),
    // Dependency scripts (ny name, in array.)
array(),
    // Should a version number be appended?
strftime(get_theme_file_uri(
    '/assets/css/main.css'
)),
    //Output in head.
    TRUE
);
    // Theme styles.
wp_enqueue_style(
    'example-theme-styles',
    // Public path to script.
get_theme_file_uri(
      '/assets/css/main.css'
    )
  );
 });

  // Add navigation menus to WordPress.
register_nav_menus(
    array(
        'main_menu' => 'Main Menu'
        )
      );
      