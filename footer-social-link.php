<?php
  /*
  Plugin Name: Post Footer Social Link
  Plugin URI: http://github.com/jahid284
  Description: Plugin for displaying social links on post
  Author: Jahid Hasan
  Version: 1.0
  Author URI: http://github.com/jahid284
  */

  if (!defined('ABSPATH')) {
    exit;
  }

  //Loading scripts
  require_once( plugin_dir_path(__FILE__) . '/inc/footer-social-link-script.php' );


  if(is_admin()){
    require_once( plugin_dir_path(__FILE__) . '/inc/footer-social-admin.php' );
  }
