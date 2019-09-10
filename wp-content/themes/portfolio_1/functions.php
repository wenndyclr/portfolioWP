<?php
//title tag
add_theme_support('title-tag');

add_theme_support('post-thumbnails');

//menu
function menu(){
	register_nav_menu('main_menu', 'Menu principal');
}
add_action('init', 'menu');

//custom post type : portfolio_dev
add_theme_support('post-thumbnails');

function portfolio_dev() {
    $labels = array(
        'name'                  => _x( 'devPortfolios', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'devPortfolio', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'devPortfolios', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'devPortfolio', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Ajouter un devportfolio', 'textdomain' ),
        'add_new_item'          => __( 'Ajouter un devportfolio', 'textdomain' ),
        'new_item'              => __( 'Nouveau devportfolio', 'textdomain' ),
        'edit_item'             => __( 'Editer devportfolio', 'textdomain' ),
        'view_item'             => __( 'Voir devportfolio', 'textdomain' ),
        'all_items'             => __( 'Tous les devportfolios', 'textdomain' ),
        'search_items'          => __( 'Rechercher devportfolios', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent devportfolios:', 'textdomain' ),
        'not_found'             => __( 'Aucun devportfolio trouvé.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Aucun devportfolio trouvé dans la corbeille.', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'devPortfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'devPortfolio', $args ); 
}
 
add_action( 'init', 'portfolio_dev' );