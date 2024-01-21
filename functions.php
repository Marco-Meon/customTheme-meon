<?php
function meon_setup() {

  // Enable custom header
  add_theme_support( "custom-header" );

  // Enable title in header
  add_theme_support( "title-tag" );

  // Enable feed link
  add_theme_support( 'automatic-feed-links' );

  // Enable align wide & full
  add_theme_support( 'align-wide' );

  // Enable featured image
  add_theme_support( 'post-thumbnails' );

  // Image-size
  add_image_size('image-small', 350, 270, true);
  add_image_size('image-big', 1400, 900, true);

  // Page the_excerpt
  add_post_type_support( 'page', 'excerpt' );

  // Custom menu areas
  register_nav_menus( array(
    'header' => esc_html__( 'Header', 'meon' )
  ));

}

add_action( 'after_setup_theme', 'meon_setup' );


/*  Enqueue css
/* ------------------------------------ */
function meon_styles() {
	wp_enqueue_style( 'meon-style', get_template_directory_uri().'/style.css');
  wp_style_add_data( 'meon-style', 'defer', true );

}
add_action( 'wp_enqueue_scripts', 'meon_styles' );

require_once('custom/custom-function.php');


/*  Contact form
/* ------------------------------------ */
function send_email_contact_form_handler() {

  if (isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'send_email_contact_form_nonce')) {

    $name = sanitize_text_field($_POST['name']);
    $surname = sanitize_text_field($_POST['surname']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone-number']);
    $scelta = sanitize_text_field($_POST['scelta']);
    $scelta_scadenza = sanitize_text_field($_POST['scelta-scadenza']);
    $message = esc_textarea($_POST['message']);

    $to = get_option('admin_email');
    $subject = 'Nuovo Messaggio dal Modulo di Contatto';
    $body = "Nome: $name\nCognome: $surname\nEmail: $email\nTelefono: $phone\nServizio Richiesto: $scelta\nUrgenza: $scelta_scadenza\nMessaggio:\n$message";

    wp_mail($to, $subject, $body);

    wp_redirect(home_url('/contatti')); 
    exit;
  } else {
    wp_die('Nonce non valido');
  }
}
add_action('admin_post_nopriv_send_email_contact_form', 'send_email_contact_form_handler');
add_action('admin_post_send_email_contact_form', 'send_email_contact_form_handler');

?>