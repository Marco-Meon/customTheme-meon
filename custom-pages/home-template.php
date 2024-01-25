<?php /* Template Name: Home Template */ ?>

<?php get_header();?>

<?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

<?php 
  /* Image Url */
  $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
?>


<!-- ! Cover -->
<section class="cover overflow">
  <picture>
    <source media="(max-width: 500px)"
      srcset="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/1-cover/meon-web-agency-web-design-realizzazione-siti-web-varese-home-cover-450-920.webp 300w">
    <img decoding="async" alt="meon web agency web design realizzazione siti web varese home cover"
      src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/1-cover/meon-web-agency-web-design-realizzazione-siti-web-varese-home-cover-1920-1076.webp" 
      srcset="
        <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/1-cover/meon-web-agency-web-design-realizzazione-siti-web-varese-home-cover-750-920.webp 600w, 
        <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/1-cover/meon-web-agency-web-design-realizzazione-siti-web-varese-home-cover-1080-920.webp 950w, 
        <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/1-cover/meon-web-agency-web-design-realizzazione-siti-web-varese-home-cover-1366-766.webp 1250w, 
        <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/1-cover/meon-web-agency-web-design-realizzazione-siti-web-varese-home-cover-1920-1076.webp 1750w, 
        <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/1-cover/meon-web-agency-web-design-realizzazione-siti-web-varese-home-cover-2560-1435.webp 2200w">
  </picture>
  <div class="cover-content">
    <h1><?php esc_html_e('Realizzazione siti web Wordpress a Varese', 'meon');?></h1>
    <div id="scramble-text"></div>
    <h2><?php esc_html_e('Realizzazione', 'meon');?> <span class="yellow"><?php esc_html_e('Siti Web Unici', 'meon');?> </span></h2>
    <a href="https://meon.it/contatti" class="cover-cta">
      <div class="cover-cta__circle">
        <div class="cover-cta__text"><?php esc_html_e( 'Consulenza', 'meon'); ?></br> <?php esc_html_e( 'gratuita', 'meon'); ?></div>
      </div>
    </a>
  </div>
</section>


<!-- ! Section 1 -->
<section class="grid grid--center section-1" id="section-1">
  <div class="col-100 about-content">
    <div class="about-content__container text-rewrite">
      <h2>Realizzazione <span class="yellow">Siti Web</span> Unici</h2>
      <p>
        Hai presente la sensazione che provi, quando vedi passare l’auto dei <span class="yellow">tuoi sogni</span> per strada, e pensi...
        </br></br>
        <span class="yellow yellow-under">“WOW”</span>
        </br></br>
        Questa è la reazione che provano i nostri clienti, quando vedono il <span class="yellow">sito web che abbiamo realizzato</span> per loro.
      </p>
      <div class="section-1__lines">
        <div class="section-1__line-1"></div>
        <div class="section-1__line-2"></div>
      </div>
    </div>
  </div>
  <div class="section-1__cta-container">
    <a class="section-1__cta" href="https://meon.it/contatti"><?php esc_html_e('Scopri di più!', 'meon'); ?> <span class="section-1__cta-arrow"><?php esc_html_e('-->', 'meon'); ?></span></a>
  </div>
</section>


<!-- ! Section 2 desktop -->
<section class="grid grid--full section-2">

  <div class="col-50 section-2-col1">
    <div class="section-2-big-container">
      <div class="section-2-text-container">

        <div class="section-2-rec-text"></div>

        <div class="section-2-text-1-cont section-2-text-cont">
          <div class="section-2-text-1-cont-height section-2-text-cont-height">
            <div class="section-2-text-cont-title">
              <img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web logo idee su misura"
                src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/logos/meon-web-agency-web-design-realizzazione-siti-web-varese-web-logo-idee-su-misura.svg">
              <h3 class="yellow">Idee su misura</h3>
            </div>
            <div class="section-2-text-cont-line"></div>
            <h2>Stai cercando un <span class="yellow">sito web</span> unico che si adatti alle <span class="yellow">tue esigenze?</span> Sei nel <span class="yellow">posto giusto</span></h2>
            <p>
              Promettono tutti di creare il “tuo” sito web adatto alle tue necessità, ma quando lo confronti 
              con gli altri, ti accorgi che in realtà <span class="yellow">sono tutti uguali</span>.
              </br></br>
              Secondo te perché?
              </br></br>
              Molte agenzie fanno uso di page builder (strumenti che permettono di creare siti web con dei template 
              già predefiniti), e quindi si riducono con il <span class="yellow">limitare</span> la propria creatività.
              </br></br>
              Se però invece, necessiti di qualcosa di diverso, unico e capace di attirare l’attenzione 
              del tuo pubblico ideale, Sei nel <span class="yellow">posto giusto</span>😉
            </p>
            <a class="button" href="https://meon.it/contatti"><?php esc_html_e( 'Scopri come!', 'meon'); ?></a>
          </div>
        </div>

        <div class="section-2-text-2-cont section-2-text-cont">
          <div class="section-2-text-2-cont-height section-2-text-cont-height">
            <div class="section-2-text-cont-title">
              <img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web logo unicità"
                src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/logos/meon-web-agency-web-design-realizzazione-siti-web-varese-web-logo-unicita.svg">
              <h3 class="yellow">Unicità</h3>
            </div>
            <div class="section-2-text-cont-line"></div>
            <h2>Ok, ma come farete a rendere <span class="yellow">unico il mio sito web?</span></h2>
            <p>
              Come realizzeremo il <span class="yellow">tuo sito web ideale</span>? 
              </br></br>
              Beh, prima di tutto capiremo assieme ciò di cui hai bisogno, creando il design del sito web, 
              in base alle <span class="yellow">tue preferenze e necessità</span>.
              </br></br>
              Dopodiché, daremo vita al progetto tramite il codice, aggiungendoci animazioni per renderlo più 
              dinamico e <span class="yellow">coinvolgente</span>.
              </br></br>
              Infine implementeremo il testo, unendo un contenuto che richiami l’attenzione, insieme 
              a tecniche SEO per attirare <span class="yellow">nuovi visitatori</span>.
            </p>
            <a class="button" href="https://meon.it/contatti">Creiamo qualcosa<span>-></span></a>
          </div>
        </div>

        <div class="section-2-text-3-cont section-2-text-cont">
          <div class="section-2-text-3-cont-height section-2-text-cont-height">
            <div class="section-2-text-cont-title">
              <img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web logo codice"
                src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/logos/meon-web-agency-web-design-realizzazione-siti-web-varese-web-logo-codice.svg">
              <h3 class="yellow">Codice</h3>
            </div>
            <div class="section-2-text-cont-line"></div>
            <h2>Perché date molta importanza all’uso del <span class="yellow">codice?</span></h2>
            <p>
              Noi usiamo il codice (nonostante alcune volte ci faccia venire il mal di testa), per un unico 
              e semplice motivo: <span class="yellow">creatività</span>.
              </br></br>
              L’uso di blocchi già predefiniti infatti, riduce la possibilità di <span class="yellow">personalizzare il tuo sito </span>
              web, in quanto più di tanto non possono essere modificati.
              </br></br>
              Se però vuoi invece qualcosa di diverso, unico e capace di attirare l’attenz... aspetta, forse 
              l’ho già detto prima...😑
            </p>
          </div>
        </div>

        <div class="section-2-text-4-cont section-2-text-cont">
          <div class="section-2-text-4-cont-height section-2-text-cont-height">
            <div class="section-2-text-cont-title">
              <img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web logo seo"
                src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/logos/meon-web-agency-web-design-realizzazione-siti-web-varese-web-logo-seo.svg">
              <h3 class="yellow">SEO</h3>
            </div>
            <div class="section-2-text-cont-line"></div>
            <h2>Cos’è la <span class="yellow">SEO?</span> è <span class="yellow">necessaria</span> per il mio sito web?</h2>
            <p>
              La SEO (Search Engine Optimization), è come il <span class="yellow">Google maps</span> delle automobili, 
              ma <span class="yellow">per i siti web</span>.
              </br></br>
              Se non sai dove devi andare, ti fa vedere la strada con semplicità ed efficienza.
              </br></br>
              Allo stesso modo, le persone che hanno bisogno del tuo servizio, ma ancora non ti conoscono, 
              <span class="yellow">riusciranno a trovare te e il tuo sito web</span>.
              </br></br>
              (Quindi si, direi che è abbastanza necessaria).
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <h2 class="section-2-rec__title">Crea la <span class="yellow">tua identità</span>.</br> <span class="yellow">Conquista</span> il mondo <span class="yellow">digitale</span></h2>

  <div class="col-50 section-2-col2">
    <div class="section-2-container">

      <div class="section-2-rec"></div>

      <div class="section-2-img-1-cont section-2-img-cont">
        <img class="section-2-img-1" loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web design idee su misura"
          src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/desktop/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-idee-su-misura-750-1250.webp" 
          srcset="
            <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/desktop/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-idee-su-misura-750-1250.webp 1250w, 
            <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/desktop/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-idee-su-misura-550-950.webp 1000w">
      </div>

      <div class="section-2-img-2-cont section-2-img-cont">
        <img class="section-2-img-2" loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web design unicità"
          src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/desktop/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-unicita-750-1250.webp" 
          srcset="
            <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/desktop/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-unicita-750-1250.webp 1250w, 
            <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/desktop/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-unicita-550-950.webp 1000w">
      </div>  

      <div class="section-2-img-3-cont section-2-img-cont">
        <img class="section-2-img-3" loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web design codice"
          src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/desktop/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-codice-750-1250.webp" 
          srcset="
            <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/desktop/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-codice-750-1250.webp 1250w, 
            <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/desktop/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-codice-550-950.webp 1000w">
      </div>

      <div class="section-2-img-4-cont section-2-img-cont">
        <img class="section-2-img-4" loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web design seo"
          src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/desktop/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-seo-750-1250.webp" 
          srcset="
            <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/desktop/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-seo-750-1250.webp 1250w, 
            <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/desktop/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-seo-550-950.webp 1000w">
      </div>
  
    </div>
  </div>
  
</section>


<!-- ! Section 2 mobile -->
<section class="section-2__mobile grid grid--center">

  <h2 class="section-2-rec__title-mobile">Crea la <span class="yellow">tua identità</span>.</br> <span class="yellow">Conquista</span> il mondo <span class="yellow">digitale</span></h2>

  <div class="col-100 section-2__mobile-item">
    <div class="section-2__mobile-item-title">
      <img class="section-2__mobile-item-title-img" loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web design idee su misura"
        src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-idee-su-misura-1050.webp" 
        srcset="
          <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-idee-su-misura-1050.webp 800w, 
          <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-idee-su-misura-750.webp 600w,
          <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-idee-su-misura-450.webp 350w">
      <div class="section-2__mobile-item-title-container">
        <img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web logo idee su misura"
          src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/logos/meon-web-agency-web-design-realizzazione-siti-web-varese-web-logo-idee-su-misura.svg">
        <h3 class="yellow">Idee su misura</h3>
      </div>
    </div>
    <div class="section-2__mobile-item-content">
      <div class="section-2__mobile-item-content-2">
        <h2>Stai cercando un <span class="yellow">sito web </span>professionale e adatto alle <span class="yellow">tue esigenze</span>?</br>Sei nel <span class="yellow">posto giusto</span></h2>
        <div class="section-2__mobile-line"></div>
        <p>
          Dicono tutti che creeranno il <span class="yellow">“tuo”</span> sito web perfetto e <span class="yellow">professionale</span>, ma quando lo metti a confronto con gli altri, non riesci a trovare le differenze.
          </br></br>
          Secondo te come mai?
          </br></br>
          La maggioranza delle agenzie, fa uso di page builder (piattaforme che ti permettono di creare siti web, ma da modelli già predefiniti), e che quindi, <span class="yellow">limitano i potenziali del tuo sito web</span>.
          </br></br>
          Se però invece, hai bisogno di qualcosa di diverso, unico e capace di <span class="yellow">attirare l’attenzione</span>, Sei nel posto giusto 
        </p>
        <a class="section-2__mobile-cta button" href="https://meon.it/contatti"><?php esc_html_e( 'Scopri come!', 'meon'); ?></a>
      </div>
    </div>
  </div>

  <div class="col-100 section-2__mobile-item">
    <div class="section-2__mobile-item-title">
      <img class="section-2__mobile-item-title-img" loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web design unicità"
        src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-unicita-1050.webp" 
        srcset="
          <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-unicita-1050.webp 800w, 
          <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-unicita-750.webp 600w,
          <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-unicita-450.webp 350w">
      <div class="section-2__mobile-item-title-container">
        <img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web logo unicità"
          src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/logos/meon-web-agency-web-design-realizzazione-siti-web-varese-web-logo-unicita.svg">
        <h3 class="yellow">Unicità</h3>
      </div>
    </div>
    <div class="section-2__mobile-item-content">
      <div class="section-2__mobile-item-content-2">
        <h2>Va bene, ma come renderete <span class="yellow">unico il mio sito web</span>?</h2>
        <div class="section-2__mobile-line"></div>
        <p>
          Come realizzeremo un <span class="yellow">sito web unico</span>? 
          </br></br>
          Beh, innanzi tutto capiremo <span class="yellow">le tue</span> necessità per questo sito web, stando attenti a soddisfare ogni richiesta, ma senza peccare <span class="yellow">in stile</span>.
          </br></br>
          Successivamente, trasformeremo il progetto in realtà attraverso il codice, <span class="yellow">aggiungendo animazioni</span> per rendere il sito più dinamico e coinvolgente.
          </br></br>
          Infine inseriremo il contenuto, creando così un testo che non solo attiri l’attenzione, ma che sia anche ottimizzato per la SEO <span class="yellow">per attirare nuovi visitatori</span>.
        </p>
        <a class="section-2__mobile-cta button" href="https://meon.it/contatti"><?php esc_html_e( 'Creiamo qualcosa', 'meon'); ?></a>
      </div>
    </div>
  </div>

  <div class="col-100 section-2__mobile-item">
    <div class="section-2__mobile-item-title">
      <img class="section-2__mobile-item-title-img" loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web design codice"
        src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-codice-1050.webp" 
        srcset="
          <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-codice-1050.webp 800w, 
          <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-codice-750.webp 600w,
          <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-codice-450.webp 350w">
      <div class="section-2__mobile-item-title-container">
        <img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web logo codice"
          src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/logos/meon-web-agency-web-design-realizzazione-siti-web-varese-web-logo-codice.svg">
        <h3 class="yellow">Codice</h3>
      </div>
    </div>
    <div class="section-2__mobile-item-content">
      <div class="section-2__mobile-item-content-2">
        <h2>Perché usate il <span class="yellow">codice</span>?</h2>
        <div class="section-2__mobile-line"></div>
        <p>
          Noi usiamo il codice (anche se è complicato e da far venire il mal di testa), per una semplice ragione: <span class="yellow">creatività</span>.
          </br></br>
          I template già compilati infatti, riducono drasticamente le possibilità <span class="yellow">di fare qualcosa di unico</span>, in quanto li usano tutti, e non sono tanto modificabili.
          </br></br>
          Se però invece, hai bisogno di qualcosa di diverso, unico e capace di attirare l’attenz... aspetta, forse l’ho già detto da qualche parte. 😑
        </p>
      </div>
    </div>
  </div>

  <div class="col-100 section-2__mobile-item">
    <div class="section-2__mobile-item-title">
      <img class="section-2__mobile-item-title-img" loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web design seo"
        src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-seo-1050.webp" 
        srcset="
          <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-seo-1050.webp 800w, 
          <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-seo-750.webp 600w,
          <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/images/mobile/meon-web-agency-web-design-realizzazione-siti-web-varese-web-design-seo-450.webp 350w">
      <div class="section-2__mobile-item-title-container">
        <img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web logo seo"
          src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/2-sezione-2/logos/meon-web-agency-web-design-realizzazione-siti-web-varese-web-logo-seo.svg">
        <h3 class="yellow">SEO</h3>
      </div>
    </div>
    <div class="section-2__mobile-item-content">
      <div class="section-2__mobile-item-content-2">
        <h2>Cos’è la <span class="yellow">SEO</span>? è davvero <span class="yellow">fondamentale</span> per il mio sito web?</h2>
        <div class="section-2__mobile-line"></div>
        <p>
          La SEO (Search Engine Optimization), è come il <span class="yellow">Navigatore</span> per la tua auto, ma per i <span class="yellow">motori di ricerca</span>.
          </br></br>
          Quando devi andare in qualche posto nuovo, hai bisogno di qualcuno che <span class="yellow">ti mostri la strada</span>.
          </br></br>
          Nella stessa maniera, coloro che necessitano dei tuoi servizi ma sono ancora ignari della tua esistenza, saranno in grado di <span class="yellow">individuare te e il tuo sito web</span>.
          </br></br>
          (Quindi si, mi sembra fondamentale).
        </p>
      </div>
    </div>
  </div>

</section>



<!-- ! Case study -->
<section class="grid grid--center section-3">
  <div class="col-90">

    <div class="case-study-title-container">
      <h2 class="case-study-title">Ultimi Siti Web<span class="yellow"> Creati</span></h2>
    </div>

    <div class="case-study-item grid" >
      <div class="col-100">
        <a href="https://meon.it/case-page-caffe-del-borgo">
          <picture>
            <source media="(max-width: 500px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/mobile-images/caffe-del-borgo/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-caffe-del-borgo-mobile-550.webp 450w,
              <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/mobile-images/caffe-del-borgo/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-caffe-del-borgo-mobile-330.webp 270w">
            <img class="case-study-img" loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web case studies caffe del borgo"
              src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/desktop-images/caffe-del-borgo/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-caffe-del-borgo-desktop-1920.webp" 
              srcset="
                <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/desktop-images/caffe-del-borgo/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-caffe-del-borgo-desktop-1920.webp 1700w, 
                <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/desktop-images/caffe-del-borgo/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-caffe-del-borgo-desktop-1300.webp 1050w, 
                <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/desktop-images/caffe-del-borgo/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-caffe-del-borgo-desktop-950.webp 800w, 
                <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/desktop-images/caffe-del-borgo/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-caffe-del-borgo-desktop-550.webp 500w,">
          </picture>
        </a>
      </div>
    </div>

    <div class="case-study-item grid" >
      <div class="col-100">
        <a href="https://meon.it/case-page-parrucchiere-demartis">
          <picture>
            <source media="(max-width: 500px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/mobile-images/demartis/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-demartis-mobile-550.webp 450w,
              <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/mobile-images/demartis/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-demartis-mobile-330.webp 270w">
            <img class="case-study-img" loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese web case studies caffe del borgo"
              src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/desktop-images/demartis/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-demartis-desktop-1920.webp" 
              srcset="
                <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/desktop-images/demartis/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-demartis-desktop-1920.webp 1700w, 
                <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/desktop-images/demartis/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-demartis-desktop-1300.webp 1050w, 
                <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/desktop-images/demartis/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-demartis-desktop-950.webp 800w, 
                <?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/3-case-studies/desktop-images/demartis/meon-web-agency-web-design-realizzazione-siti-web-varese-web-case-studies-demartis-desktop-550.webp 500w,">
          </picture>
        </a>
      </div>
    </div>

  </div>
</section>


<!-- ! Service section -->
<h2 class="section-4__title">I nostri servizi</h2>
<section class="section-4">

  <div class='wrapper'>
    
    <div class='card'>
      <div class="card-content">
        <div class="card-content__visible">
          <h3>Landing Page</h3>
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="#FFD600" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 112v288M400 256H112"/>
          </svg>    
        </div>
        <div class="card-content__hidden">
          <h2>SITI WEB LANDING PAGE</h2>
          <p>
            Le landing page, sono delle pagine web spesso utilizzate nelle campagne marketing per convertire
            <span class="yellow"> i visitatori in clienti</span>.
            </br></br>
            Il loro compito è di fornire un'esperienza utente ottimale, combinando un design intuitivo e contenuti persuasivi per <span class="yellow">massimizzare le</span> possibilità di successo nelle <span class="yellow">conversioni</span>.
            </br></br>
            Detto ciò, non credi anche tu che una pagina con uno scopo così importante, debba essere <span class="yellow">intuitiva, ottimizzata e persuasiva</span>?
            </br></br>
            Se hai bisogno quindi di un sito web, in grado di <span class="yellow">attirare l’attenzione</span> del visitatore e 
            convertirlo in un cliente, non esitare a contattarci.
          </p>
        </div>
      </div>
      <div class="card-button">
        <a href="https://meon.it/contatti" class="button">Più informazioni</a>
      </div>
    </div>

    <div class='card'>
      <div class="card-content">
        <div class="card-content__visible">
          <h3>SEO</h3>
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="#FFD600" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 112v288M400 256H112"/>
          </svg>    
        </div>
        <div class="card-content__hidden">
          <h2>Il potere della SEO</h2>
          <p>
            Per quanto un buon sito web visivamente faccia la sua parte, <span class="yellow">se nessuno lo cerca</span> non è che serva a molto.
            </br></br>
            È qui che la <span class="yellow">SEO</span> corre in nostro aiuto. 
            </br></br>
            Attraverso <span class="yellow">i contenuti del tuo sito web</span> e altre tecniche avanzate, siamo in grado di portare più traffico alla tua pagina web, migliorando così il <span class="yellow">tuo posizionamento</span> e aumentando i tuoi visitatori. 
            </br></br>
            In poche parole, sarà nostra premura farti uscire <span class="yellow">tra i primi risultati</span>, quando una persona cerca determinate parole nel tuo mercato locale di riferimento.
          </p>
        </div>
      </div>
      <div class="card-button">
        <a href="https://meon.it/contatti" class="button">Più informazioni</a>
      </div>
    </div>

    <div class='card'>
      <div class="card-content">
        <div class="card-content__visible">
          <h3>Siti web </h3>
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="#FFD600" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 112v288M400 256H112"/>
          </svg>    
        </div>
        <div class="card-content__hidden">
          <h2>Siti web personalizzati</h2>
          <p>
            Il sito web, è una <span class="yellow">rappresentazione digitale del tuo brand</span>, accessibile sempre e a tutti.
            </br></br>
            Quello che faremo assieme (tranquillo, noi faremo la parte lunga e noiosa), sarà <span class="yellow">progettare una pagina web</span>, che risponda alle tue necessità e preferenze in campo di design.
            </br></br>
            Dopodiché svilupperemo il sito web e inseriremo i contenuti opportuni e <span class="yellow">ottimizzati per la SEO</span> al suo interno.
            </br></br>
            Infine lo metteremo online, assicurandoci che sia perfetto su ogni dispositivo, così da renderlo l’epicentro della tua <span class="yellow">presenza digitale</span>.
          </p>
        </div>
      </div>
      <div class="card-button">
        <a href="https://meon.it/contatti" class="button">Più informazioni</a>
      </div>
    </div>

    <div class='card'>
      <div class="card-content">
        <div class="card-content__visible">
          <h3>E-Commerce</h3>
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="#FFD600" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 112v288M400 256H112"/>
          </svg>    
        </div>
        <div class="card-content__hidden">
          <h2>Siti web e-commerce</h2>
          <p>
            Nell’ultimo anno in Italia, gli acquisti online tramite e-commerce, hanno sfiorato i <span class="yellow">54,2 miliardi di euro</span>, un aumento di circa il 13% rispetto all’anno precedente. 
            </br></br>
            Sarebbe bello <span class="yellow">farne parte</span> vero?
            </br></br>
            Beh, noi ci occupiamo anche della realizzazione di questi siti web, <span class="yellow">gli e-commerce</span>: realizzeremo per te una pagina web, che non sia soltanto una comune piattaforma di acquisti, ma uniremo <span class="yellow">l’essenza del tuo brand</span>, ad un’interfaccia per l’utente semplice ma concisa, per trasformare i visitatori, in <span class="yellow">clienti fedeli</span> del tuo marchio.
          </p>
        </div>
      </div>
      <div class="card-button">
        <a href="https://meon.it/contatti" class="button">Più informazioni</a>
      </div>
    </div>
    
  </div>

</section>


<!-- ! Horizontal seection -->
<div class="horizontal-bg">
  <div class="overflow">
    <h2 class="horizontal-title">Come <span class="yellow">Procederemo</span></br><span class="horizontal-scorri">(scorri a destra)</span></h2>
  </div>

  <section class="horizontal-container">
    <div class="horizontal-space-holder">
      <div class="horizontal-sticky">
        <div class="horizontal">
          <section role="feed" class="horizontal-cards">

            <article class="horizontal-sample-card">
              <img loading="lazy" decoding="async" class="horizontal-img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/images/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-meeting-450.webp" alt="meon web agency web design realizzazione siti web varese horizontal section meeting">
              <img loading="lazy" decoding="async" class="horizontal-bandiera" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/flags-road/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-bandiera-1.svg" alt="meon web agency web design realizzazione siti web varese horizontal section bandiera 1">
              <div class="horizontal-text">
                <h3>Meeting</h3>
                <p>Appuntamento volto a capire le <span class="yellow">tue esigenze</span>, in modo da poter comprendere come risolvere i <span class="yellow">tuoi problemi</span>.</p>
              </div>
            </article>

            <article class="horizontal-sample-card">
              <img loading="lazy" decoding="async" class="horizontal-img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/images/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-design-450.webp" alt="meon web agency web design realizzazione siti web varese horizontal section design">
              <img loading="lazy" decoding="async" class="horizontal-bandiera" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/flags-road/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-bandiera-2.svg" alt="meon web agency web design realizzazione siti web varese horizontal section bandiera 2">
              <div class="horizontal-text">
                <h3>Design</h3>
                <p>Uniremo un <span class="yellow">design</span> accattivante a dei <span class="yellow">testi</span> coinvolgenti per creare una <span class="yellow">User Experience</span> volta ad esaltare il tuo brand</p>
              </div>
            </article>

            <article class="horizontal-sample-card">
              <img loading="lazy" decoding="async" class="horizontal-img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/images/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-sviluppo-450.webp" alt="meon web agency web design realizzazione siti web varese horizontal section sviluppo">
              <img loading="lazy" decoding="async" class="horizontal-bandiera" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/flags-road/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-bandiera-3.svg" alt="meon web agency web design realizzazione siti web varese horizontal section bandiera 3">
              <div class="horizontal-text">
                <h3>Sviluppo</h3>
                <p>Svilupperemo il tuo sito web usando <span class="yellow">codice</span> e <span class="yellow">SEO</span> per migliorare il tuo <span class="yellow">posizionamento</span> rispetto ai tuoi competitor</p>
              </div>
            </article>

            <article class="horizontal-sample-card">
              <img loading="lazy" decoding="async" class="horizontal-img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/images/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-go-live-450.webp" alt="meon web agency web design realizzazione siti web varese horizontal section go live">
              <img loading="lazy" decoding="async" class="horizontal-bandiera" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/flags-road/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-bandiera-4.svg" alt="meon web agency web design realizzazione siti web varese horizontal section bandiera 4">
              <div class="horizontal-text">
                <h3>Go Live</h3>
                <p>Messa <span class="yellow">online</span>. Una volta pronto pubblicheremo il tuo sito per far spiccare il <span class="yellow">volo</span> al tuo <span class="yellow">brand</span> nel mondo del digitale!</p>
              </div>
            </article>

          </section>
        </div>
        <img loading="lazy" decoding="async" class="horizontal-road" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/flags-road/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-strada.svg" alt="meon web agency web design realizzazione siti web varese horizontal section road">
      </div>
    </div>
	<img loading="lazy" decoding="async" class="horizontal-road-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/flags-road/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-strada.svg" alt="meon web agency web design realizzazione siti web varese horizontal section road">
  </section>
</div>


<!-- ! Review -->
<section class="splide" aria-labelledby="carousel-heading">
  <h2 id="carousel-heading">Lo dicono Loro</h2>

  <div class="splide__arrows">
		<button class="splide__arrow splide__arrow--prev">
      <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" >
        <path fill="none" stroke="#49157F" stroke-linecap="round" stroke-linejoin="round" stroke-width="10" d="M112 184l144 144 144-144"/>
      </svg>
		</button>
		<button class="splide__arrow splide__arrow--next">
      <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" >
        <path fill="none" stroke="#49157F" stroke-linecap="round" stroke-linejoin="round" stroke-width="10" d="M112 184l144 144 144-144"/>
      </svg>
		</button>
  </div>

  <div class="splide__track">
    <ul class="splide__list">

      <li class="splide__slide">
        <div class="spline__slide-container">
          <div class="col-20">
            <div class="splide__slide-img">
              <img loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/5-review-section/meon-web-agency-web-design-realizzazione-siti-web-varese-logo-review-caffe-del-borgo.webp" alt="meon web agency web design realizzazione siti web varese logo review caffe del borgo">
            </div>
          </div>
          <div class="col-80 splide__slide-quote">
            <svg viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.44219 21.3C1.90885 19.9 0.142188 17.4333 0.142188 13.9C0.142188 9.9 2.54219 5.53333 7.34219 0.799997L10.2422 2.8V3.4C7.44219 6.46667 6.04219 9.26667 6.04219 11.8C6.04219 14.4 7.34219 16.2 9.94219 17.2V18C9.00885 18.8667 7.50885 19.9667 5.44219 21.3ZM18.3422 21.3C14.8089 19.9 13.0422 17.4333 13.0422 13.9C13.0422 9.9 15.4422 5.53333 20.2422 0.799997L23.1422 2.8V3.4C20.3422 6.46667 18.9422 9.26667 18.9422 11.8C18.9422 14.4 20.2422 16.2 22.8422 17.2V18C21.9089 18.8667 20.4089 19.9667 18.3422 21.3Z" fill="white"/>
            </svg>
            <p><i>
              Molto professionali e meticolosi, servizio tutt'ora preciso e impeccabile. L'assistenza anche dopo il 
              lavoro finito precisa. Grazie🙏
              </br>
              - Manolo, Caffè del Borgo
            </i></p>
          </div>
        </div>
      </li>

      <li class="splide__slide">
        <div class="spline__slide-container">
          <div class="col-20">
            <div class="splide__slide-img">
              <img loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/5-review-section/meon-web-agency-web-design-realizzazione-siti-web-varese-logo-review-demartis.webp" alt="meon web agency web design realizzazione siti web varese logo review demartis">
            </div>
          </div>
          <div class="col-80 splide__slide-quote">
            <svg viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.44219 21.3C1.90885 19.9 0.142188 17.4333 0.142188 13.9C0.142188 9.9 2.54219 5.53333 7.34219 0.799997L10.2422 2.8V3.4C7.44219 6.46667 6.04219 9.26667 6.04219 11.8C6.04219 14.4 7.34219 16.2 9.94219 17.2V18C9.00885 18.8667 7.50885 19.9667 5.44219 21.3ZM18.3422 21.3C14.8089 19.9 13.0422 17.4333 13.0422 13.9C13.0422 9.9 15.4422 5.53333 20.2422 0.799997L23.1422 2.8V3.4C20.3422 6.46667 18.9422 9.26667 18.9422 11.8C18.9422 14.4 20.2422 16.2 22.8422 17.2V18C21.9089 18.8667 20.4089 19.9667 18.3422 21.3Z" fill="white"/>
            </svg>
            <p><i>
              Soddisfatto del lavoro svolto. Stile, porfessioanlità e soprattutto cura nei dettagli. Grazie per l'ottimo lavoro svolto.
              </br>
              - Roberto Demartis, Demartis Hairstylist.
            </i></p>
          </div>
        </div>
      </li>

    </ul>
  </div>
</section>


<!-- ! Blog section -->
<section class="home-blog__section">
  <h2>Ultimi Articoli</h2>
  <?php
    $args = array('posts_per_page' => 2);
    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
  ?>

  <!-- HTML per mostrare gli articoli -->
  <article class="home-blog__article">

        <div class="home-blog__image">
		  <?php
		  $thumbnail_id = get_post_thumbnail_id(get_the_ID());
		  $thumbnail = wp_get_attachment_image($thumbnail_id, 'full', false, array('loading' => 'lazy'));
		  echo $thumbnail;
		  ?>
		</div>

    <div class="home-blog__text">
      <div class="home-blog__date"><?php the_time('j F Y');?></div>
      <h3 class="home-blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <div class="home-blog__categories">
        <?php $categories = get_the_category();
        foreach ($categories as $category) {
          echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a> ';
        }?>
      </div>
      <div class="home-blog__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 10);?></div>
    </div>
    
  </article>

  <?php
    endwhile;
    endif;
    wp_reset_postdata();
  ?>

  <a href="https://meon.it/blog" class="button home-blog__button">Scopri di più <span>--></span></a>
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
						<input autocomplete="off" placeholder="email@dominio.com" type="email" name="EMAIL" class="required email" id="mce-EMAIL" required="" value="">
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
				Ho preso visione dell’informativa al trattamento dei dati personali della <a target="_blank" href="https://meon.it/privacy-policy">privacy policy</a>
			</label>
			<div class="error-message" id="privacy-error">Devi accettare la privacy policy per poter procedere.</div>

		</form>

	</div>

</section>


<!-- ! Home Page FAQ -->
<section class="accordion">

  <h2>Domande <span class="yellow">Frequenti</span></h2>

  <div class="accordion-item">
    <button aria-expanded="false">
      <h3 class="accordion-title">Quanto tempo servirà per sviluppare il sito web?</h3>
      <img aria-hidden="true" class="accordion__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-add-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search add logo">
    </button>
    <div class="accordion-content">
      <p>
        Le tempistiche per la realizzazione di un sito web, variano da progetto a progetto in base alle esigenze e alle specifiche richieste.
        </br></br>
        Tuttavia, si possono fornire delle stime approssimative che variano come detto in precedenza, da circa qualche settimana, fino ad arrivare ai progetti per siti web più complessi e complicati che possono arrivare anche a pochi mesi. 
        Se hai bisogno di più informazioni riguardo alle possibili tempistiche del tuo sito web non esitare a contattarci.
      </p>
    </div>
  </div>

  <div class="accordion-item">
    <button aria-expanded="false">
      <h3 class="accordion-title">Quanto verrà a costare il sito web?</h3>
      <img aria-hidden="true" class="accordion__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-add-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search add logo">
    </button>
    <div class="accordion-content">
      <p>
        Il costo per la realizzazione per un sito web, varia esattamente come le sue tempistiche, quindi alla domanda <a href="https://meon.it/article/quanto-costa-un-sito-web/">“quanto costa un sito web”</a> la risposta è: dipende.
        </br></br>
        Ci sono molti fattori che possono far oscillare il prezzo, da qualche centinaio di euro, fino a svariate migliaia per i siti web aziendali, tutto dipende dalle specifiche e dalle tue esigenze.
        Se però hai bisogno di una stima precisa, o semplicemente qualche consiglio, per capire quale possa essere la soluzione migliore per te, non esitare a contattarci.
      </p>
    </div>
  </div>

  <div class="accordion-item">
    <button aria-expanded="false">
      <h3 class="accordion-title">Come verrà gestita la  manutenzione del sito web?</h3>
      <img aria-hidden="true" class="accordion__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-add-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search add logo">
    </button>
    <div class="accordion-content">
      <p>
        La manutenzione del tuo sito web è fondamentale, per fargli mantenere quelle prestazioni per la quale lavoriamo tanto, sia a livello di SEO, sia a livello di prestazioni generali del sito internet.
        Ci occuperemo noi di ogni cosa dal momento in cui il tuo sito web sarà online.
      </p>
    </div>
  </div>

  <div class="accordion-item">
    <button aria-expanded="false">
      <h3 class="accordion-title">Userete dei template uguali agli altri siti web per costruire il mio?</h3>
      <img aria-hidden="true" class="accordion__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-add-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search add logo">
    </button>
    <div class="accordion-content">
      <p>
        Tranquillo, noi non usiamo alcun template per realizzare i design dei vari progetti del tuo sito web, ma usiamo invece editor come ad esempio Figma, per realizzare il look che crediamo rispecchi al meglio te e il tuo brand, dopodiché discuteremo assieme per assecondare al meglio i tuoi desideri, e solo quando riusciremo a stupirti, cominceremo e creare tramite codice il tuo sito web su misura.
        </br></br>
        Se quindi desideri avere una identità digitale unica, e completamente personalizzata a tua scelta, non esitare a contattarci
      </p>
    </div>
  </div>

  <div class="accordion-item">
    <button aria-expanded="false">
      <h3 class="accordion-title">Il mio sito web sarà responsive?</h3>
      <img aria-hidden="true" class="accordion__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-add-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search add logo">
    </button>
    <div class="accordion-content">
      <p>
        Assolutamente! Saper realizzare un buon sito web che si veda bene su dekstop, ma non sui telefoni, e come lasciare un lavoro a metà. Realizzeremo per te un sito web su misura, e che si adatti su ogni dispositivo, per poter rendere la permanenza di ogni visitatore o cliente, piacevole e duratura.
      </p>
    </div>
  </div>

  <div class="accordion-item">
    <button aria-expanded="false">
      <h3 class="accordion-title">Ma realizzate siti web solo a Varese?</h3>
      <img aria-hidden="true" class="accordion__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-add-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search add logo">
    </button>
    <div class="accordion-content">
      <p>
        No, non <a href="https://meon.it/realizzazione-siti-web-a-varese/">realizziamo siti web solamente a Varese</a>, ma estendiamo il nostro lavoro in tutta Italia. Indipendentemente dalla tua posizione, siamo pronti ad offrirti le nostre competenze per creare una presenza online unica, che rispecchi la tua attività e soddisfi le tue esigenze specifiche.
        </br></br>
        Siamo qui per soddisfare ogni tua richiesta, creando assieme una presenza online di successo.
      </p>
    </div>
  </div>

</section>


<main class="grid grid--center">

  <div class="col-100">

    <?php the_content(); ?>

  </div>

</main>


<?php endwhile; else :?>

<p><?php esc_html_e('Scusa, nessun post corrispondente', 'meon');?></p>

<?php endif; ?>


<?php get_footer();?>