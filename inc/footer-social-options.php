<?php
  function fsl_custom_register(){
    register_setting('fsl-setting-group', 'facebook_handler' );
    //add_settings_section( $id, $title, $callback, $page );
     add_settings_section( 'footer-options', 'Footer social options', 'footer_options_callback', 'footer_social_options' );
    //add_settings_field( $id, $title, $callback, $page, $section, $args );
    add_settings_field( 'fsl-facebook-handler', 'Enter Facebook link', 'fsl_facebook_handler', 'footer_social_options', 'footer-options' );
  }
  add_action('admin_init', 'fsl_custom_register');
  function footer_options_callback(){
  echo 'Customizing Header';
  }
  function fsl_facebook_handler(){
    echo '<input type="text" placeholder="Facebook id"';
  }
?>


<?php settings_errors(); ?>
<form action="" method="post">
  <?php settings_fields( 'fsl-setting-group' ); ?>
  <?php do_settings_sections( 'footer_social_options' ); ?>
  <?php submit_button(); ?>
</form>
