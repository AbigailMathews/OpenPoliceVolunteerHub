<?php
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');
function child_theme_enqueue_styles() {
  $parent_style = 'twentytwenty';
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'twentytwenty-child',
      get_stylesheet_directory_uri() . '/style.css',
      array( $parent_style ),
      wp_get_theme()->get('Version')
  );
}

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
  if (!current_user_can('administrator') && !is_admin() || !current_user_can('editor') || !current_user_can('author')) {
    show_admin_bar(false);
  }
}

function custom_login_redirect( $redirect_to, $request, $user ) {
  if ( isset( $user->roles ) && is_array( $user->roles ) ) {
    if ( in_array( 'administrator', $user->roles ) || in_array( 'editor', $user->roles ) || in_array( 'author', $user->roles ) ) {
      $redirect_to = admin_url();
    } else {
      $redirect_to = home_url();
    }
  }
  return $redirect_to;
}
add_filter( 'login_redirect', 'custom_login_redirect', 10, 3 );

?>
