<?php get_header();?>

<main class="main">

  <div class="grid grid--center">

    <div class="col-70 article-the__post">

      <?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

      <article id="post-<?php the_ID();?>"
        <?php post_class();?>>
        <p class="article-date"><?php the_time('j F Y ');?> 
        <h1 class="article-title"><?php the_title();?></h1>
        <?php
          $thumbnail_id = get_post_thumbnail_id(get_the_ID());
          $thumbnail = wp_get_attachment_image($thumbnail_id, 'image-big', false, array('class' => 'img-res mb-2 article-thumnail', 'alt' => get_the_title(), 'loading' => 'lazy'));
          echo $thumbnail;
        ?>
        <?php
          $categories = get_the_category();
          if ($categories) {
            foreach ($categories as $category) {
              echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="categorie">' . esc_html($category->name) . '</a>';
            }
          }
        ?>
        <div class="mt-2"></div>
        <?php the_content();?>
        <div class="article-line"></div>
        <h3>Non dimenticarti di <span class="yellow">condividere il post!</span></h3>
        <div class="article-social-condivision">
          <a target="_blank" onclick="shareViaEmail()"><img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese sito web logo mail"
            src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/loghi-social/purple-logos/meon-web-agency-web-design-realizzazione-siti-web-varese-social-logo-mail-purple.svg"></a>
          <a target="_blank" onclick="shareOnTwitter()"><img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese sito web logo x"
            src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/loghi-social/purple-logos/meon-web-agency-web-design-realizzazione-siti-web-varese-social-logo-x-purple.svg"></a>
          <a target="_blank" onclick="shareOnFacebook()"><img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese sito web logo facebook"
            src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/loghi-social/purple-logos/meon-web-agency-web-design-realizzazione-siti-web-varese-social-logo-facebook-purple.svg"></a>
		  <a target="_blank" onclick="shareOnLinkedIn()"><img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese sito web logo linkedin"
            src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/loghi-social/purple-logos/meon-web-agency-web-design-realizzazione-siti-web-varese-social-logo-linkedin-purple.svg"></a>
        </div>
      </article>

      <?php endwhile; else :?>
      <p><?php esc_html_e('Scusa, nessun post corrispondente', 'meon');?></p>
      <?php endif; ?>

    </div>

    <div class="col-30 article-sidebar">
      <div class="article-sidebar__container">

        <form method="get" action="<?php echo esc_url(home_url());?>" class="form-search">
          <input autocomplete="off" type="text" placeholder="<?php esc_attr_e('Cerca un articolo', 'meon');?>"name="s">
          <input type="hidden" name="post_type" value="post">
          <button type="submit">
            <img loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-search-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search outline logo">
          </button>
        </form>

        <div class="article-last-news">
          <h3 class="article-last-news-tit">Ultime Notizie</h3>
          <?php
            $args = array('posts_per_page' => 2);
            $query = new WP_Query($args);
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
          ?>
          <article class="article-last-news__article">
            <div class="article-last-news__image">
              <?php
              $thumbnail_id = get_post_thumbnail_id(get_the_ID());
              $thumbnail = wp_get_attachment_image($thumbnail_id, 'full', false, array('loading' => 'lazy'));
              echo $thumbnail;
            	?>
			      </div>
            <div class="article-last-news__text">
              <div class="article-last-news__date"><?php the_time('j F Y');?></div>
              <h3 class="article-last-news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="article-last-news__categories">
                <?php
                  $categories = get_the_category();
                  if ($categories) {
                    foreach ($categories as $category) {
                      echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="categorie">' . esc_html($category->name) . '</a>';
                    }
                  }
                ?>
              </div>
              <div class="article-last-news__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 10);?></div>
            </div>
          </article>
          <?php
            endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </div>

        <div class="article-sidebar-contact">
          <h3>Contatti</h3>
          <div class="article-sidebar-contact__tel">
            <img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese sito web logo whatsapp"
              src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/loghi-social/blue-logos/meon-web-agency-web-design-realizzazione-siti-web-varese-social-logo-whatsapp-blue.svg">
            <a target="_blank" href="https://wa.me/393661396992">+39 366 139 6992</a>
          </div>
          <div class="article-sidebar-contact__mail">
            <img loading="lazy" decoding="async" alt="meon web agency web design realizzazione siti web varese sito web logo mail"
              src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/loghi-social/blue-logos/meon-web-agency-web-design-realizzazione-siti-web-varese-social-logo-mail-blue.svg">
            <a target="_blank" href="mailto:info@meon.it">info@meon.it</a>
          </div>
        </div>

      </div>
    </div>

  </div>

  <div class="article-footer mt-4">
    
    <h2>Articoli Correlati</h2>
    <section class="article-footer__correlate">
      <?php
        $categories = get_the_category();
        if ($categories) {
          $category_ids = array();
          foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
          }
          $args = array(
            'post__not_in' => array(get_the_ID()), 
            'posts_per_page' => 3,
            'cat' => $category_ids, 
          );
          $related_query = new WP_Query($args);
          if ($related_query->have_posts()) :
            while ($related_query->have_posts()) : $related_query->the_post();
      ?>
      <article class="article-footer__correlate-article">
        <div class="article-footer__correlate-image">
		  	<?php
		  	$thumbnail_id = get_post_thumbnail_id(get_the_ID());
			$thumbnail = wp_get_attachment_image($thumbnail_id, 'full', false, array('loading' => 'lazy'));
			echo $thumbnail;
			?>
		</div>
        <div class="article-footer__correlate-text">
          <div class="article-footer__correlate-date"><?php the_time('j F Y');?></div>
          <h3 class="article-footer__correlate-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="article-footer__correlate-categories">
            <?php
              $categories = get_the_category();
              if ($categories) {
                foreach ($categories as $category) {
                  echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="categorie">' . esc_html($category->name) . '</a>';
                }
              }
            ?>
          </div>
          <div class="article-footer__correlate-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 10);?></div>
        </div>
      </article>
      <?php
          endwhile;
          endif;
          wp_reset_postdata();
        }
      ?>
    </section>

    <div class="article-footer__line">
      <div class="article-footer__line-actual"></div>
    </div>

    <div class="article-footer__categories">
      <h3>Altre Categorie</h3>
      <a href="javascript:void(0);" class="article-footer__categories-arrow2 scroll-left"><-</a>
      <div class="article-footer__categories-container">
        <?php
          $categories = get_terms('category');
          if ($categories && !is_wp_error($categories)) {
            echo '<ul class="article-footer__categories-list">';
            foreach ($categories as $category) {
              echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
            }
            echo '</ul>';
          } else {
            echo '<p>Non ci sono categorie disponibili.</p>';
          }
        ?>
      </div>
      <a href="javascript:void(0);" class="article-footer__categories-arrow1 scroll-right">-></a>
    </div>

    <div class="article-footer__line">
      <div class="article-footer__line-actual"></div>
    </div>

    <div class="article-footer__contact">
      <h3>Aiutiamo i nostri Clienti a <span class="yellow">Sognare in grande</span> e a <span class="yellow">raggiungere Il Top</span></h3>
      <a href="https://meon.it/contatti" class="button">Contattaci</a>
    </div>

    <div class="article-footer__margin"></div>

  </div>

</main>

<?php get_footer();?>