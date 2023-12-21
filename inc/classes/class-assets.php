<?php
/**
 * Enqueue Theme Assets
 * @package weblotts
 */

 namespace WEBLOTTS\Inc;
 use WEBLOTTS\Inc\Traits\Singleton;

 class Assets{
    use Singleton;

    protected function __construct(){
    // load classes
    $this->set_hooks();
    }

    protected function set_hooks(){
    /**
     * Actions
     */
    add_action('wp_enqueue_scripts', [ $this, 'register_styles' ]);
    add_action('wp_enqueue_scripts', [ $this, 'register_scripts' ]);
    }

    public function register_styles(){
      wp_register_style('fontawesome', WEBLOTTS_DIR_URI. '/src/assets/css/fontawesome6/css/fontawesome.css', [], filemtime( WEBLOTTS_DIR_PATH .'/src/assets/css/fontawesome6/css/fontawesome.css'), 'all');
      wp_enqueue_style('fontawesome');;
      wp_register_style('brands', WEBLOTTS_DIR_URI. '/src/assets/css/fontawesome6/css/brands.css', [], filemtime( WEBLOTTS_DIR_PATH .'/src/assets/css/fontawesome6/css/brands.css'), 'all');
      wp_enqueue_style('brands');;
      wp_register_style('all', WEBLOTTS_DIR_URI. '/src/assets/css/fontawesome6/css/all.css', [], filemtime( WEBLOTTS_DIR_PATH .'/src/assets/css/fontawesome6/css/all.css'), 'all');
      wp_enqueue_style('all');;
      wp_register_style('styles', WEBLOTTS_DIR_URI. '/src/assets/css/styles.css', [], filemtime( WEBLOTTS_DIR_PATH .'/src/assets/css/styles.css'), 'all');
      wp_enqueue_style('styles');;
      wp_enqueue_style( 'style', get_stylesheet_uri() );

    }

    public function register_scripts(){
      wp_register_script('main', WEBLOTTS_DIR_URI .'/src/assets/js/main.js', [], filemtime( WEBLOTTS_DIR_PATH .'/src/assets/js/main.js'), true);
      wp_enqueue_script( 'main' );
    }
 }
