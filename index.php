<?php get_header();?>

<main class="grid grid--center">

  <div class="col-100">

    <?php if ( is_category() || is_tag() || is_tax() || is_home() ) {?>

      <h1 class="blog-page__main-title">Scopri le <span class="yellow">ultime notizie</span></h1>

      <form method="get" action="<?php echo esc_url(home_url());?>" class="form-search blog-page__form-mobile">
        <input autocomplete="off" type="text" placeholder="<?php esc_attr_e('Cerca un articolo', 'meon');?>"name="s">
        <input type="hidden" name="post_type" value="post">
        <button type="submit">
          <img loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/meon-image/logo/meon-web-agency-web-design-realizzazione-siti-web-varese-search-outline-logo.svg" alt="meon web agency web design realizzazione siti web varese search outline logo">
        </button>
      </form>

      <ul class="category-list">
        <?php
          $all_class = (is_home() || is_search()) ? 'categorie active-cat' : 'categorie';
          echo '<li><a href="' . esc_url(home_url('/blog')) . '" class="' . $all_class . '">All</a></li>';
          $categories = get_categories();
          foreach ($categories as $category) {
            $category_link = get_category_link($category->term_id);
            $class = is_category($category->term_id) ? 'categorie active-cat' : 'categorie';
            echo '<li><a href="' . $category_link . '" class="' . $class . '">' . $category->name . '</a></li>';
          }
        ?>
      </ul>

    <?php } else if ( is_search() ) {?>

      <h1 class="blog-page__searched-title"><?php esc_html_e( 'Risultati per: ', 'meon');?><span class="yellow"><?php echo $s;?></span></h1>

    <?php } ?>

  </div>


  <?php if (have_posts()) :?>
  
    <div class="blog-page__container-article col-70">

      <?php while(have_posts()) : the_post();?>

        <article class="blog-page__article">
          <a class="blog-page__article-image" href="<?php the_permalink(); ?>">
          <div>
            <?php
            $thumbnail_id = get_post_thumbnail_id(get_the_ID());
            $thumbnail = wp_get_attachment_image($thumbnail_id, 'full', false, array('loading' => 'lazy'));
            echo $thumbnail;
            ?>
          </div>
          </a>
          <div class="blog-page__article-text">
            <a class="" href="<?php the_permalink(); ?>">
              <div class="blog-page__article-date"><?php the_time('j F Y');?></div>
              <h3 class="blog-page__article-title"><?php the_title(); ?></h3>
            </a>
            <div class="blog-page__article-categories">
              <?php
                $categories = get_the_category();
                if ($categories) {
                  foreach ($categories as $category) {
                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="categorie">' . esc_html($category->name) . '</a>';
                  }
                }
              ?>
            </div>
            <div class="blog-page__article-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 10);?></div>
          </div>
        </article>

        <div class="blog-page__article-line"></div>

      <?php endwhile;?>

    </div>

    <div class="blog-page__change-page--mobile mb-3">
      <div class="col-100 blog-page__num-page">
        <?php
          global $wp_query;
          $total_pages = $wp_query->max_num_pages;
          $current_page = max(1, get_query_var('paged'));
          previous_posts_link('Prev');
          echo '<span class="page-numbers">' . $current_page . '/' . $total_pages . '</span>';
          next_posts_link('Next', $total_pages);
        ?>
      </div>
    </div>

    <div class="col-30 article-sidebar">
      <div class="article-sidebar__container">

        <form method="get" action="<?php echo esc_url(home_url());?>" class="form-search blog-page__form-desktop">
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

    <div class="blog-page__change-page--desktop">
      <div class="col-100 blog-page__num-page">
        <?php
          global $wp_query;
          $total_pages = $wp_query->max_num_pages;
          $current_page = max(1, get_query_var('paged'));
          previous_posts_link('Prev');
          echo '<span class="page-numbers">' . $current_page . '/' . $total_pages . '</span>';
          next_posts_link('Next', $total_pages);
        ?>
      </div>
    </div>


    <?php else :?>
      <div class="col-70 blog-page__no-match-found">
        <?php esc_html_e('Non è stato trovato nessun articolo corrisondente alla tua ricerca, prova a cercare altro', 'meon');?>
      </div>

      <div class="col-30 article-sidebar">
        <div class="article-sidebar__container">

          <form method="get" action="<?php echo esc_url(home_url());?>" class="form-search blog-page__form-desktop">
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

  <?php endif;?>


  <!-- ! Form -->
  <div class="mt-3">
    <?php include(get_template_directory() . '/custom-section/contact.php'); ?>
  </div>
  

</main>


<?php get_footer();?>