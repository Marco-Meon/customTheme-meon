<?php /* Template Name: Contact Page */ ?>

<?php get_header();?>



<div class="contact-page">

  <!-- ! Form -->
  <?php include(get_template_directory() . '/custom-section/contact.php'); ?>
  
  
  <!-- ! Social -->
  <section class="contact-page__social">
    <h2>Seguici sui social</h2>
    <div class="contact-page__social-image">
      <a target="_blank" href="https://www.instagram.com/meon_web/"><img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese sito web logo instagram"
        src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/loghi-social/purple-logos/meon-web-agency-web-design-realizzazione-siti-web-varese-social-logo-instagram-purple.svg"></a>
      <a target="_blank" href="https://www.facebook.com/MeonAgency"><img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese sito web logo facebook"
        src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/loghi-social/purple-logos/meon-web-agency-web-design-realizzazione-siti-web-varese-social-logo-facebook-purple.svg"></a>
      <a target="_blank" href="#"><img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese sito web logo linkedin"
        src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/loghi-social/purple-logos/meon-web-agency-web-design-realizzazione-siti-web-varese-social-logo-linkedin-purple.svg"></a>
    </div>
  </section>


  <!-- ! Newsletter -->
  <section class="newsletter">

    <div id="mc_embed_signup">

      <div class="mc_embed-title">
        <h3>Newsletter</h3>
        <h2>Rimani sempre aggiornato</h2>
      </div>

      <form action="https://meon.us21.list-manage.com/subscribe/post?u=7d83e04df60bf2ef0cc2d3d56&amp;id=19d9a7c072&amp;f_id=009d29e7f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
        <div id="mc_embed_signup_scroll">
          <img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese sito web logo mail"
            src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/loghi-social/blue-logos/meon-web-agency-web-design-realizzazione-siti-web-varese-social-logo-mail-blue.svg">

          <div class="mc_embed-input">
            <div class="mc-field-group">
              <input autocomplete="off" type="text" placeholder="nome" name="FNAME" class="required text" id="mce-FNAME" required="" value="">
            </div>
            <div class="mc-field-group">
              <input autocomplete="off" placeholder="Latuaemail@gmail.com" type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value="">
            </div>

            <div id="mce-responses" class="clear foot">
              <div class="response" id="mce-error-response" style="display: none;"></div>
              <div class="response" id="mce-success-response" style="display: none;"></div>
            </div>

            <div aria-hidden="true" style="position: absolute; left: -5000px;">
              <input type="text" name="b_7d83e04df60bf2ef0cc2d3d56_19d9a7c072" tabindex="-1" value="">
            </div>
          </div>

          <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">--></button>
        </div>

        <label >
          <input type="checkbox" id="privacy-checkbox-news" name="privacy-checkbox" required>
          Ho preso visione dell’informativa al trattamento dei dati personali della <a target="_blank" href="https://www.iubenda.com/privacy-policy/99972493">privacy policy</a>
        </label>
        <div class="error-message" id="privacy-error">Devi accettare la privacy policy per poter procedere.</div>
      
      </form>

    </div>

  </section>

</div>

<main class="main">

  <div class="grid grid--center">
    <div class="col-100">

      <?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

        <?php the_content(); ?>

      <?php endwhile; else :?>

      <p><?php esc_html_e('Scusa, nessun post corrispondente', 'meon');?></p>

      <?php endif; ?>

    </div>
  </div>

</main>

<?php get_footer();?>