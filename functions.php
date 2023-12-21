<?php
/**
 * Theme Functions
 * 
 * @package weblotts
 */
  if ( ! defined( 'WEBLOTTS_DIR_PATH' ) ) {
    define( 'WEBLOTTS_DIR_PATH', untrailingslashit( get_template_directory() ) );
  }

  if(!defined('WEBLOTTS_DIR_URI')){
    define( 'WEBLOTTS_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
  }

  require_once WEBLOTTS_DIR_PATH . '/inc/helpers/autoloader.php';


  function weblotts_get_theme_instance(){
    \WEBLOTTS\Inc\WEBLOTTS_THEME::get_instance();
  }
  weblotts_get_theme_instance();
