<?php
  /**

   * If you are installing Timber as a Composer dependency in your theme, you'll need this block
   * to load your dependencies and initialize Timber. If you are using Timber via the WordPress.org
   * plug-in, you can safely delete this block.
   */
  $composer_autoload = __DIR__ . '/vendor/autoload.php';
  if ( file_exists($composer_autoload) ) {
    require_once( $composer_autoload );
    $timber = new Timber\Timber();
  }

  /**
   * This ensures that Timber is loaded and available as a PHP class.
   * If not, it gives an error message to help direct developers on where to activate
   */
  if ( ! class_exists( 'Timber' ) ) {

    add_action( 'admin_notices', function() {
      echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
    });

    add_filter('template_include', function( $template ) {
      return get_stylesheet_directory() . '/static/no-timber.html';
    });
    return;
  }

  /**
   * Sets the directories (inside your theme) to find .twig files
   */
  Timber::$dirname = array( 'templates', 'views' );

  /**
   * By default, Timber does NOT autoescape values. Want to enable Twig's autoescape?
   * No prob! Just set this value to true
   */
  Timber::$autoescape = false;


  /**
   * We're going to configure our theme inside of a subclass of Timber\Site
   * You can move this to its own file and include here via php's include("MySite.php")
   */
  class StarterSite extends Timber\Site {
    /** Add timber support. */
    public function __construct() {
      add_action( 'after_setup_theme', array( $this, 'theme_supports' ) );
      add_filter( 'timber/context', array( $this, 'add_to_context' ) );
      add_filter( 'timber/twig', array( $this, 'add_to_twig' ) );
      add_action( 'init', array( $this, 'register_post_types' ) );
      add_action( 'init', array( $this, 'register_taxonomies' ) );
      parent::__construct();
    }
    /** This is where you can register custom post types. */
    public function register_post_types() {

    }
    /** This is where you can register custom taxonomies. */
    public function register_taxonomies() {

    }

    /** This is where you add some context
     *
     * @param string $context context['this'] Being the Twig's {{ this }}.
     */
    public function add_to_context( $context ) {
      $context['foo'] = 'bar';
      $context['stuff'] = 'I am a value set in your functions.php file';
      $context['notes'] = 'These values are available everytime you call Timber::context();';
      $context['menu'] = new Timber\Menu();
      $context['site'] = $this;
      return $context;
    }

    public function theme_supports() {
      // Add default posts and comments RSS feed links to head.
      add_theme_support( 'automatic-feed-links' );

      /*
       * Let WordPress manage the document title.
       * By adding theme support, we declare that this theme does not use a
       * hard-coded <title> tag in the document head, and expect WordPress to
       * provide it for us.
       */
      add_theme_support( 'title-tag' );

      /*
       * Enable support for Post Thumbnails on posts and pages.
       *
       * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
       */
      add_theme_support( 'post-thumbnails' );

      /*
       * Switch default core markup for search form, comment form, and comments
       * to output valid HTML5.
       */
      add_theme_support(
        'html5', array(
          'comment-form',
          'comment-list',
          'gallery',
          'caption',
        )
      );

      /*
       * Enable support for Post Formats.
       *
       * See: https://codex.wordpress.org/Post_Formats
       */
      add_theme_support(
        'post-formats', array(
          'aside',
          'image',
          'video',
          'quote',
          'link',
          'gallery',
          'audio',
        )
      );

      add_theme_support( 'menus' );
    }

    /** This Would return 'foo bar!'.
     *
     * @param string $text being 'foo', then returned 'foo bar!'.
     */
    public function myfoo( $text ) {
      $text .= ' bar!';
      return $text;
    }

    /** This is where you can add your own functions to twig.
     *
     * @param string $twig get extension.
     */
    public function add_to_twig( $twig ) {
      $twig->addExtension( new Twig_Extension_StringLoader() );
      $twig->addFilter( new Twig_SimpleFilter( 'myfoo', array( $this, 'myfoo' ) ) );
      return $twig;
    }

  }

  new StarterSite();


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

//  function remove_menu_items() {
//    global $menu;
//    $restricted = [
//      __('Dashboard'),
//      __('Posts'),
//      __('Comments')
//    ];
//    end ($menu);
//    while (prev($menu)){
//      $value = explode(' ',$menu[key($menu)][0]);
//      if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
//        unset($menu[key($menu)]);}
//    }
////  }
//  add_action('admin_menu', 'remove_menu_items');
  function remove_menus(){

    remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page( 'edit.php' );                   //Posts
//    remove_menu_page( 'upload.php' );                 //Media
//    remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'themes.php' );                 //Appearance
//    remove_menu_page( 'plugins.php' );                //Plugins
//    remove_menu_page( 'users.php' );                  //Users
//    remove_menu_page( 'tools.php' );                  //Tools
//    remove_menu_page( 'options-general.php' );        //Settings

  }
  add_action( 'admin_menu', 'remove_menus' );
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
      'taxonomies' => array(' '),
      'menu_position' => 2,
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
      'supports' => array( 'title','editor','excerpt','author', 'thumbnail'),
      'taxonomies' => array('category'),
      'menu_position' => 3,
      'menu_icon' => 'dashicons-code-standards',
    );
    register_post_type( 'actus', $args );


    // CPT Places
    $labels = array(
      'name' => 'Places',
      'all_items' => 'Tous les lieux',  // affiché dans le sous menu
      'singular_name' => 'Lieu',
      'add_new_item' => 'Nouveau',
      'edit_item' => 'Modifier le lieu',
      'menu_name' => 'Lieux'
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'author'),
      'taxonomies' => array('category'),
      'menu_position' => 5,
      'menu_icon' => 'dashicons-admin-site-alt',
    );
    register_post_type( 'places', $args );

    // CPT References
    $labels = array(
      'name' => 'References',
      'all_items' => 'Tous les références',  // affiché dans le sous menu
      'singular_name' => 'Reference',
      'add_new_item' => 'Nouveau',
      'edit_item' => 'Modifier la référence',
      'menu_name' => 'Reference'
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'author'),
      'taxonomies' => array('category'),
      'menu_position' => 5,
      'menu_icon' => 'dashicons-admin-site-alt',
    );
    register_post_type( 'references', $args );
    // CPT Membres
    $labels = array(
      'name' => 'Membres',
      'all_items' => 'Tous les membres',  // affiché dans le sous menu
      'singular_name' => 'Membre',
      'add_new_item' => 'Nouveau',
      'edit_item' => 'Modifier le membre',
      'menu_name' => 'Membres'
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array('title','thumbnail','editor'),
      'taxonomies' => array('category'),
      'menu_position' => 6,
      'menu_icon' => 'dashicons-admin-users',
    );
    register_post_type( 'membres', $args );


  }
  add_action( 'init', 'fabulle_register_post_types'); // Le hook init lance la fonction
  function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;
    return array(
      'index.php', // this represents the dashboard link
      'edit.php?post_type=spectacles', // this is a custom post type menu
      'edit.php?post_type=dates',
      'edit.php?post_type=membres',
      'edit.php?post_type=references',
      'edit.php?post_type=actus',
      'edit.php?post_type=page', // this is the default page menu
      'edit.php?post_type=places',
      'edit.php', // this is the default POST admin menu

    );
  }
  add_filter('custom_menu_order', 'custom_menu_order');
  add_filter('menu_order', 'custom_menu_order');

