<?php
function filter_woocommerce_get_price_html( $price ) {

$price = $price . ' st.';
return $price;
};
 
add_filter( 'woocommerce_get_price_html', 'filter_woocommerce_get_price_html', 10, 2 );


function custom_text() {
    echo 'BIG AUTUMN SALE, up to 40% off';
}

add_action('woocommerce_single_product_summary', 'custom_text');

function team_post_type() {
   
    // Labels
     $labels = array(
         'name' => _x("Team", "post type general name"),
         'singular_name' => _x("Team", "post type singular name"),
         'menu_name' => 'Team Profiles',
         'add_new' => _x("Add New", "team item"),
         'add_new_item' => __("Add New Profile"),
         'edit_item' => __("Edit Profile"),
         'new_item' => __("New Profile"),
         'view_item' => __("View Profile"),
         'search_items' => __("Search Profiles"),
         'not_found' =>  __("No Profiles Found"),
         'not_found_in_trash' => __("No Profiles Found in Trash"),
         'parent_item_colon' => ''
     );
     
     // Register post type
     register_post_type('team' , array(
         'labels' => $labels,
         'public' => true,
         'has_archive' => false,
         'menu_icon' => get_stylesheet_directory_uri() . '/lib/TeamProfiles/team-icon.png',
         'rewrite' => false,
         'supports' => array('title', 'editor', 'thumbnail')
     ) );
 }
 add_action( 'init', 'team_post_type', 0 );