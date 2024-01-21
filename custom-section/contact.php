
<section class="contact-page__form-section">

  <h2>Sentiamoci qualche volta...</h2>

  <form class="contact-page__form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" enctype="multipart/form-data" onsubmit="return validateContactForm()">

    <div class="contact-page__form-nome">
      <label for="name">
        <input autocomplete="off" placeholder="Nome*..." type="text" name="name" id="name" required>
      </label>
      <label for="surname">
        <input autocomplete="off" placeholder="Cognome*..." type="text" name="surname" id="surname" required>
      </label>
    </div>

    <div class="contact-page__form-info">
      <label for="email">
        <input autocomplete="off" placeholder="Email*..." type="email" name="email" id="email" required>
      </label>
      <label for="phone-number">
        <input autocomplete="off" placeholder="Telefono*..." type="tel" name="phone-number" id="phone-number" required>
        <span id="phone-error" style="color: red;"></span>
      </label>
    </div>

    <div class="contact-page__form-options">
      <label for="scelta">
        A quale servizio sei interessato?*
        <select id="scelta" name="scelta" required>
          <option value="" disabled selected>Seleziona un servizio</option>
          <option>Sito web</option>
          <option>Sito web e-commerce</option>
          <option>Ottimizzazione SEO</option>
          <option>Restyling sito web esistente</option>
        </select>
      </label>
    </div>

    <div class="contact-page__form-scadenza">
      <label for="scelta-scadenza">
        Quanto è urgente?*
        <select id="scelta-scadenza" name="scelta-scadenza" required>
          <option value="" disabled selected>Seleziona un'opzione</option>
          <option>Molto urgente</option>
          <option>Abbastanza urgente</option>
          <option>Per niente urgente</option>
          <option>Non lo so ancora</option>
        </select>
      </label>
    </div>

    <div class="contact-page__form-textarea">
      <label for="message">
        <textarea placeholder="Descrivi brevemente il progetto a cui sei interessato..." name="message" id="message" cols="30" rows="10" required></textarea>
      </label>
    </div>

    <div class="contact-page__form-privacy">
      <label for="privacy-checkbox">
        <input type="checkbox" id="privacy-checkbox" name="privacy-checkbox" required>
        Ho preso visione dell’informativa al trattamento dei dati personali della <a target="_blank" href="https://www.iubenda.com/privacy-policy/99972493">privacy policy</a>
      </label>
    </div>

    <div class="contact-page__form-submit">
      <input type="hidden" name="action" value="send_email_contact_form">
      <?php wp_nonce_field('send_email_contact_form_nonce', '_wpnonce'); ?>
      <input type="submit" value="INVIA">
    </div>

  </form>

</section>