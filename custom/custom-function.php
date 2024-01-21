<?php
  /*  Enqueue javascript
  /* ------------------------------------ */
  function meon_scripts() {
  
    wp_enqueue_script( 'meon-bundle', get_template_directory_uri() . '/custom/bundle.min.js','','', true );
    wp_script_add_data( 'meon-bundle', 'async', true );

    wp_enqueue_script( 'meon-scripts', get_template_directory_uri() . '/custom/custom-script.js','','', true );
    wp_script_add_data( 'meon-scripts', 'async', true );

    wp_localize_script('meon-scripts', 'wp_data', array(
      'post_slug' => get_post_field('post_name', get_post()),
    ));
  
  }
  add_action( 'wp_enqueue_scripts', 'meon_scripts' );

  /*  Enqueue css
  /* ------------------------------------ */

  function meon_custom_styles() {

    wp_enqueue_style('combined-fonts', get_template_directory_uri().'/custom/combined-fonts.min.css', array(), false, 'all');
    wp_style_add_data('combined-fonts', 'defer', true);

    wp_enqueue_style('meon-custom-style', get_template_directory_uri().'/custom/custom-style.css');
    wp_style_add_data('meon-custom-style', 'defer', true);
  }

  add_action( 'wp_enqueue_scripts', 'meon_custom_styles' );
?>