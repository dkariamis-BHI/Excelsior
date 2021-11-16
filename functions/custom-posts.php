<?php 

//--------------- Create Custom Post Type ---------------//     
 
 function create_post_type() {

   register_post_type( 'custom',
     array(
       'labels' => array(
         'name' => __( 'Dans Custom Post Type' ),
         'singular_name' => __( 'custom' )
       ),
       'public' => true,
       'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt', 'author', 'custom-fields', 'revisions', 'post-formats' ),
     'has_archive'   => true,
     )
   );

 }

 add_action( 'init', 'create_post_type' );