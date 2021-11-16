<?php 

function add_login_logout_register_menu( $items, $args ) {
 if ( $args->theme_location != 'navbar' ) {
 return $items;
 }
 
 if ( is_user_logged_in() ) {
 $items .= '<li class="menu-item"><a class="nav-link" href="' . wp_logout_url() . '">' . __( '<i class="fas fa-users"></i> Log Out' ) . '</a></li>';
 $items .= '<li class="menu-item"><a class="nav-link btn btn-info" href="http://bhi-foundation.local/contact-us/">' . __( 'Book Us' ) . '</a></li>';
 } else {
 $items .= '<li class="menu-item"><a class="nav-link" href="' . wp_login_url() . '">' . __( '<i class="fas fa-users"></i> Log In' ) . '</a></li>';
 $items .= '<li class="menu-item"><a class="nav-link btn btn-info" href="' . wp_login_url() . '">' . __( 'Book Us' ) . '</a></li>';
 }
 
 return $items;
}
 
add_filter( 'wp_nav_menu_items', 'add_login_logout_register_menu', 199, 2 );





/**
 * Redirect after Login
 */
function admin_default_page() {
     return 'https://realityrealtors.com/book-us/';
   }
 
   add_filter('login_redirect', 'admin_default_page');

/* Disable URL guessing - https://www.bloggersignal.com/stop-wordpress-from-guessing-urls */
add_filter('redirect_canonical', 'pz_no_redirect_404');

function pz_no_redirect_404($redirect_url)
{
    if (is_404()) {
        return false;
    }
    return $redirect_url;
}
