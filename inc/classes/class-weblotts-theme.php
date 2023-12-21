<?php
/**
 * Bootstraps the theme.
 * @package weblotts
 */

namespace WEBLOTTS\Inc;
use WEBLOTTS\Inc\Traits\Singleton;

class WEBLOTTS_THEME{
     use Singleton;

     protected function __construct(){
         // load classes
         Assets::get_instance();
         Menus::get_instance();
         $this->set_hooks();
         

     }

     protected function set_hooks(){
         /**
          * Actions
          */
        add_action( 'after_setup_theme', [$this, 'setup_theme'] );
        // add_filter('excerpt_length', [$this, 'WEBLOTTS_excerpt_length'], 999);
        // add_action( 'after_setup_theme', [$this, 'WEBLOTTS_cut_excerpt'] );
     }

    function setup_theme(){
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo', [
            'header-text'   => ['site-title', 'site-description'],
            'height'        => 100,
            'width'         => 400,
            'flex-height'   => true,
            'flex-width'    => true,
        ] );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support('automatic-feed-links');
        add_theme_support('html5', [
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style'
        ]);
        add_editor_style();
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');

        global $content_width;
        if( ! isset( $content_width)){
            $content_width = 1240;
        }
    }

}