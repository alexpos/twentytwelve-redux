<?php
/*
Twentytwelve Redux options Demo
*/

define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );
define( 'CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'CHILD_THEME_URI', get_stylesheet_directory_uri() );

define('Redux_OPTIONS_URL', trailingslashit( CHILD_THEME_URI ) . 'admin/options/' );
require_once( trailingslashit( CHILD_THEME_DIR ) . 'admin/options.php');
