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
    <img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese home cover"
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
    <a href="/contatti" class="cover-cta">
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
    <a class="section-1__cta" href="/contatti"><?php esc_html_e('Inizia subito!', 'meon'); ?> <span class="section-1__cta-arrow"><?php esc_html_e('-->', 'meon'); ?></span></a>
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
            <a class="button" href="/contatti"><?php esc_html_e( 'Scopri come!', 'meon'); ?></a>
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
            <a class="button" href="/contatti">Creiamo qualcosa<span>-></span></a>
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

  <h2 class="section-2-rec__title">Crea la <span class="yellow">tua identità</span>.</br><span class="yellow">Conquista </span>il mondo <span class="yellow">digitale </span></h2>

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

  <h2 class="section-2-rec__title-mobile">Crea la <span class="yellow">tua identità</span>.</br><span class="yellow">Conquista </span>il mondo <span class="yellow">digitale </span></h2>  

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
        <h2>Stai cercando un sito web <span class="yellow">identico alla massa</span>? Sei nel <span class="yellow">posto sbagliato</span></h2>
        <div class="section-2__mobile-line"></div>
        <p>
          Promettono tutti siti web personalizzati e unici, ma alla fine si riducono per essere tutti 
          uguali come su una catena di montaggio, secondo te come mai?
          </br></br>
          L’obiettivo è quello di fare più siti web possibili, senza però badare alla qualità, per massimizzare i profitti....
          </br></br>
          Se però vuoi invece qualcosa di <span class="yellow">diverso, unico</span> e capace di attirare 
          l’attenzione del tuo pubblico ideale, Sei nel <span class="yellow">posto giusto</span> 😉
        </p>
        <a class="section-2__mobile-cta button" href="/contatti"><?php esc_html_e( 'CONTATTACI', 'meon'); ?></a>
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
        <h2>ok, ma in concreto, in cosa siete <span class="yellow">diversi?</span></h2>
        <div class="section-2__mobile-line"></div>
        <p>
          La nostra marcia in più? </br>
          è tutta nella nostra ideologia, noi trattiamo i siti web non come semplici fotocopie, ma come <span class="yellow">singoli </span>
          capolavori digitali volti a soddisfare le tue esigenze.
          </br></br>
          La differenza tangibile? </br>
          <span class="yellow">Usiamo il codice</span> in modo creativo creando animazioni coinvolgenti e usiamo la SEO per 
          posizionare il tuo sito in testa ai tuoi concorrenti.
          </br></br>
          L’obiettivo? </br>
          Far emergere <span class="yellow">la tua presenza online</span> in modo unico.
        </p>
        <a class="section-2__mobile-cta button" href="/contatti"><?php esc_html_e( 'CONTATTAMI', 'meon'); ?></a>
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
        <h2>Cosa vuol dire che usiamo il <span class="yellow">'codice’</span>?</h2>
        <div class="section-2__mobile-line"></div>
        <p>
          Al contrario di molte soluzioni comuni, che si basano sull’uso di page builder già predefiniti 
          (e che quindi <span class="yellow">limitano la creatività</span> del tuo sito web), noi usiamo il codice. 
          </br></br>
          Esso ci permette di uscire dalla norma, consentendoci di realizzare sul tuo sito web animazioni 
          complesse e un <span class="yellow">design assolutamente unico</span>.
        </p>
        <a class="section-2__mobile-cta button" href="/contatti"><?php esc_html_e( 'CONTATTAMI', 'meon'); ?></a>
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
        <h2>Che cos’è la <span class="yellow">SEO</span>?</h2>
        <div class="section-2__mobile-line"></div>
        <p>
          La SEO (Searching Engine Optimization) è semplicemente uno <span class="yellow">strumento indispensabile</span> 
          nel mondo digitale. 
          </br></br>
          Immagina i motori di ricerca come guide: la SEO li orienta verso il tuo sito web quando qualcuno cerca argomenti simili.
          </br></br>
          Utilizzando le giuste tecniche, siamo in grado <span class="yellow">di migliorare il posizionamento del tuo sito 
          web</span> aumentando così il numero di visitatori.
        </p>
        <a class="section-2__mobile-cta button" href="/contatti"><?php esc_html_e( 'CONTATTAMI', 'meon'); ?></a>
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
        <a href="/case-page-caffe-del-borgo">
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
        <a href="/case-page-parrucchiere-demartis">
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
<h2 class="section-4__title">I miei servizi</h2>
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
            Le landing page, sono delle pagine web spesso utilizzate nelle campagne marketing per convertire i visitatori in clienti.
            </br></br>
            Detto ciò, non credi anche tu che una pagina con uno scopo così importante, debba essere intuitiva, ottimizzata e persuasiva?
            </br></br>
            Forse te lo aspettavi dato che ne stavo parlando, ma sì, ci occupiamo anche di questo
            </br></br>
            Se hai bisogno quindi di una pagina web, in grado di attirare l’attenzione del visitatore e 
            convertirlo in un cliente, non esitare a contattarci.
          </p>
        </div>
        <div class="card-button">
          <a href="/contatti" class="button">Contattaci</a>
        </div>
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
            Per quanto un buon sito web visivamente faccia la sua parte, se nessuno lo cerca non è che serva a molto.
            </br></br>
            È qui che la SEO corre in nostro aiuto. 
            </br></br>
            Attraverso i contenuti del tuo sito web e altre tecniche avanzate, siamo in grado di portare 
            più traffico alla tua pagina web, aumentando  così il tuo posizionamento e i tuoi visitatori. 
            </br></br>
            In poche parole, saremo in grado di farti uscire tra i primi risultati, quando una persona cerca 
            determinate parole nel tuo mercato locale di riferimento
          </p>
        </div>
        <div class="card-button">
          <a href="/contatti" class="button">Più informazioni</a>
        </div>
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
            Un sito web è <span class="yellow">l'epicentro della tua presenza online.</span> 
            </br></br>
            Insieme progetteremo una <span class="yellow">piattaforma unica</span>, che offra una panoramica dettagliata dei tuoi 
            servizi, in modo chiaro e intuitivo, e che risponda ad ogni tua esigenza. 
            </br></br>
            I siti web che creiamo sono pensati per essere un <span class="yellow">punto di riferimento</span> per i tuoi visitatori, 
            presentando in modo completo te e i tuoi prodotti. 
            </br></br>
            Se desideri espandere la tua comunicazione, è inoltre possibile integrare un blog, creando una connessione più 
            profonda e interattiva con il tuo pubblico.
          </p>
        </div>
        <div class="card-button">
          <a href="/contatti" class="button">Più informazioni</a>
        </div>
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
            Immagina un mondo in cui lo shopping dei tuoi prodotti <span class="yellow">non abbia limiti</span> di orario e confini 
            geografici. Nel 2023, gli acquisti online hanno sfiorato i <span class="yellow">54,2 miliardi di euro</span>, un aumento di circa 
            il 13% rispetto all’anno precedente. 
            </br></br>
            Hai mai pensato a quanti potenziali clienti potresti raggiungere in un attimo? Immagina di poter creare 
            il <span class="yellow">tuo sito web e-commerce</span>, unico e su misura, che catturi l'attenzione di clienti ovunque. 
            </br></br>
            Noi siamo qui per <span class="yellow">trasformare questa visione in realtà</span>, offrendoti la possibilità 
            di costruire un negozio digitale che ti distingua, ti connetta con il tuo pubblico e amplifichi la tua presenza online.
          </p>
        </div>
        <div class="card-button">
          <a href="/contatti" class="button">Più informazioni</a>
        </div>
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
                <p>Appuntamento volto a capire le tue esigenze, in modo da poter capire come risolvere i tuoi problemi</p>
              </div>
            </article>

            <article class="horizontal-sample-card">
              <img loading="lazy" decoding="async" class="horizontal-img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/images/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-design-450.webp" alt="meon web agency web design realizzazione siti web varese horizontal section design">
              <img loading="lazy" decoding="async" class="horizontal-bandiera" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/flags-road/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-bandiera-2.svg" alt="meon web agency web design realizzazione siti web varese horizontal section bandiera 2">
              <div class="horizontal-text">
                <h3>Design</h3>
                <p>Uniremo un design accattivante a dei testi coinvolgenti per creare una User Experience volta ad esaltare il brand del sito web</p>
              </div>
            </article>

            <article class="horizontal-sample-card">
              <img loading="lazy" decoding="async" class="horizontal-img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/images/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-sviluppo-450.webp" alt="meon web agency web design realizzazione siti web varese horizontal section sviluppo">
              <img loading="lazy" decoding="async" class="horizontal-bandiera" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/flags-road/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-bandiera-3.svg" alt="meon web agency web design realizzazione siti web varese horizontal section bandiera 3">
              <div class="horizontal-text">
                <h3>Sviluppo</h3>
                <p>Svilupperemo il tuo sito web usando codice e SEO per migliorare il tuo posizionamento rispetto ai tuoi competitor</p>
              </div>
            </article>

            <article class="horizontal-sample-card">
              <img loading="lazy" decoding="async" class="horizontal-img" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/images/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-go-live-450.webp" alt="meon web agency web design realizzazione siti web varese horizontal section go live">
              <img loading="lazy" decoding="async" class="horizontal-bandiera" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/home-page/4-horizontal-section/flags-road/meon-web-agency-web-design-realizzazione-siti-web-varese-horizontal-section-bandiera-4.svg" alt="meon web agency web design realizzazione siti web varese horizontal section bandiera 4">
              <div class="horizontal-text">
                <h3>Go Live</h3>
                <p>Messa online. Una volta pronto pubblicheremo il tuo sito web per far spiccare il volo al tuo brand nel mondo del digitale!</p>
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

  <a href="/blog" class="button home-blog__button">Scopri di più <span>--></span></a>
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


<!-- ! Home Page FAQ -->
<section class="accordion">

  <h2>Domande <span class="yellow">Frequenti</span></h2>

  <div class="accordion-item">
    <button aria-expanded="false">
      <span class="accordion-title">Quanto tempo servirà per sviluppare il sito web?</span>
      <img aria-hidden="true" class="accordion__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-add-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search add logo">
    </button>
    <div class="accordion-content">
      <p>
        La tempistica per lo sviluppo del sito varia in base alle esigenze specifiche del progetto, oscillando da 
        alcune settimane a pochi mesi. Come web agency, il nostro obiettivo principale è realizzare siti web di alta qualità, 
        ottimizzati per la SEO e con codice performante. Utilizziamo piattaforme affidabili come WordPress e strumenti come Yoast 
        SEO per assicurare risultati ottimali nel minor tempo possibile. Se desideri ulteriori informazioni o dettagli personalizzati, 
        non esitare a contattarci. Saremo lieti di discutere delle tue esigenze e trovare la soluzione migliore per te.
      </p>
    </div>
  </div>

  <div class="accordion-item">
    <button aria-expanded="false">
      <span class="accordion-title">Quanto verrà a costare il sito web?</span>
      <img aria-hidden="true" class="accordion__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-add-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search add logo">
    </button>
    <div class="accordion-content">
      <p>
        Realizzare un sito web coinvolge molteplici fattori, come la complessità del design, le funzionalità richieste e 
        l'ottimizzazione per i motori di ricerca, è simile all’acquisto di un auto nuova: in base alle specifiche e agli 
        optional scelti, il costo varia, e come in concessionaria, per il tuo sito web valutiamo attentamente ciò di cui hai bisogno, 
        per fornirti il miglior sito web che risponda alle tue esigenze.
        Se sei interessato contattaci per avere una consulenza gratuita.
      </p>
    </div>
  </div>

  <div class="accordion-item">
    <button aria-expanded="false">
      <span class="accordion-title">Come verrà gestita la  manutenzione del sito web?</span>
      <img aria-hidden="true" class="accordion__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-add-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search add logo">
    </button>
    <div class="accordion-content">
      <p>
        La manutenzione continua e l'ottimizzazione del tuo sito web, sono fondamentali per garantirne una alta performance nel 
        tempo. Noi offriamo soluzioni complete per la gestione, l'aggiornamento e l'ottimizzazione di siti tramite WordPress. 
        Se desideri scoprire come potremmo prenderci cura del tuo sito e mantenere alto il livello di SEO e funzionalità, non 
        esitare a contattarci.
      </p>
    </div>
  </div>

  <div class="accordion-item">
    <button aria-expanded="false">
      <span class="accordion-title">Userete dei template uguali agli altri siti web per costruire il mio?</span>
      <img aria-hidden="true" class="accordion__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-add-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search add logo">
    </button>
    <div class="accordion-content">
      <p>
        Assolutamente no, la nostra prassi è quella di evitare l’impiego di template, così da poter rendere ogni sito 
        web unico. Il nostro obiettivo è progettare e sviluppare soluzioni personalizzate, adattate alle specifiche necessità di 
        ciascun progetto, per creare un sito web originale, ideato per soddisfare pienamente le tue esigenze. 
      </p>
    </div>
  </div>

  <div class="accordion-item">
    <button aria-expanded="false">
      <span class="accordion-title">Il mio sito web sarà responsive?</span>
      <img aria-hidden="true" class="accordion__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-add-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search add logo">
    </button>
    <div class="accordion-content">
      <p>
        Assolutamente! la nostra priorità è garantire che il tuo sito web sia altamente versatile su ogni dispositivo, 
        la nostra esperienza nell'utilizzo di piattaforme come WordPress, ci consente di sviluppare siti web dinamici che 
        si adattano senza problemi a ogni schermo. 
        Per saperne di più su come assicuriamo la massima accessibilità e funzionalità del tuo sito web, siamo qui per discutere 
        delle tue esigenze specifiche e per offrirti ulteriori dettagli.
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