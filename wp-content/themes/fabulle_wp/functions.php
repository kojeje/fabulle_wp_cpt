<?php

function dr_adding_styles() {
    wp_enqueue_style('style', get_template_directory_uri(). '/style.css');
}

add_action( 'wp_enqueue_scripts', 'js_adding_styles' );

add_theme_support( 'post-thumbnails' );

  register_nav_menus( array(
    'header-menu' => 'Header-menu',
    'footer-menu'=> 'Footer-menu'

  ) );

// fonction pour créer des variables globales, accessibles dans tous les fichiers twig
  function add_to_context($data){

    // on appelle une instance de TimberMenu avec en parametre le menu qu'on veut récupérer
    //$data['menu'] = new TimberMenu('header-menu');
    $data['menu'] = new \Timber\Menu( 'header-menu' );

    return $data;


  }

// On ajoute le résultat de notre fonction au context de twig (contexte globale)
  add_filter( 'timber/context', 'add_to_context' );

  add_filter('acf/settings/remove_wp_meta_box', '__return_false');

  function remove_menu_items() {
    global $menu;
    $restricted = array(__('Comments'));
    end ($menu);
    while (prev($menu)){
      $value = explode(' ',$menu[key($menu)][0]);
      if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
        unset($menu[key($menu)]);}
    }
  }

  add_action('admin_menu', 'remove_menu_items');
  // déclaration des custom post types

  function fabulle_register_post_types() {
    // CPT Spectacles
    $labels = array(
      'name' => 'Spectacles',
      'all_items' => 'Tous les spectacles',  // affiché dans le sous menu
      'singular_name' => 'Spectacles',
      'add_new_item' => 'Nouveau',
      'edit_item' => 'Modifier le projet',
      'menu_name' => 'Spectacles'
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'rewrite'	 => array( 'slug' => 'spectacles'),
      'supports' => array( 'title', 'editor','excerpt','author', 'thumbnail'),
      'taxonomies' => array('category'),
      'menu_position' => 2,
      'menu_icon' => 'dashicons-edit',
    );
    register_post_type( 'spectacles', $args );

    // CPT dates
    $labels = array(
      'name' => 'Dates',
      'all_items' => 'Toutes les dates',  // affiché dans le sous menu
      'singular_name' => 'Dates',
      'add_new_item' => 'Nouvelle date',
      'edit_item' => 'Modifier la date',
      'menu_name' => 'Dates'
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'rewrite'	 => array( 'slug' => 'dates'),
      'supports' => array( 'title','author'),
      'taxonomies' => array('category'),
      'menu_position' => 3,
      'menu-icon' => 'dashicons-admin-post'
    );
    register_post_type( 'dates', $args );
// CPT actu
    $labels = array(
      'name' => 'Actus',
      'all_items' => 'Toutes les actus',  // affiché dans le sous menu
      'singular_name' => 'Actus',
      'add_new_item' => 'Nouveau',
      'edit_item' => 'Modifier l\'actu',
      'menu_name' => 'Actus'
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'rewrite'	 => array( 'slug' => 'actus'),
      'supports' => array( 'title', 'editor','excerpt','author', 'thumbnail'),
      'taxonomies' => array('category'),
      'menu_position' => 4,
      'menu_icon' => 'dashicons-code-standards',
    );
    register_post_type( 'actus', $args );
    // CPT Projets
    $labels = array(
      'name' => 'Projet',
      'all_items' => 'Tous les projets',  // affiché dans le sous menu
      'singular_name' => 'Projet',
      'add_new_item' => 'Nouveau',
      'edit_item' => 'Modifier le projet',
      'menu_name' => 'Projets'
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor','excerpt','author', 'thumbnail'),
      'taxonomies' => array('category'),
      'menu_position' => 4,
      'menu_icon' => 'dashicons-hammer',
    );
    register_post_type( 'projets', $args );

  }
  add_action( 'init', 'fabulle_register_post_types'); // Le hook init lance la fonction

