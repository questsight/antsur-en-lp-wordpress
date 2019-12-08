<?php get_header();?>

        <section class="main" id="main">
          <div class="main__two">
            <hi class="main__title">‘<?php bloginfo('name'); ?>’<br><?php bloginfo('description'); ?></hi>
            <h2 class="main__date"><?php echo get_field('date'); ?></h2>
          </div>
          <div class="main__one">
            <div class="animation-box">
              <div class="animation-right">
                <picture>
                  <source srcset="<?php echo get_field('image-01_webp'); ?>" type="image/webp">
                  <img class="main__img" src="<?php echo get_field('image-01'); ?>" loading="lazy" alt="<?php echo get_bloginfo('description'); ?> <?php echo get_bloginfo('name'); ?>">
                </picture>
                <picture>
                  <source srcset="<?php echo get_field('image-02_webp'); ?>" type="image/webp">
                  <img class="main__img" src="<?php echo get_field('image-02'); ?>" loading="lazy" alt="<?php echo get_bloginfo('description'); ?> <?php echo get_bloginfo('name'); ?>">
                </picture>
                <picture>
                  <source srcset="<?php echo get_field('image-03_webp'); ?>" type="image/webp">
                  <img class="main__img" src="<?php echo get_field('image-03'); ?>" loading="lazy" alt="<?php echo get_bloginfo('description'); ?> <?php echo get_bloginfo('name'); ?>">
                </picture>
                <picture>
                  <source srcset="<?php echo get_field('image-04_webp'); ?>" type="image/webp">
                  <img class="main__img" src="<?php echo get_field('image-04'); ?>" loading="lazy" alt="<?php echo get_bloginfo('description'); ?> <?php echo get_bloginfo('name'); ?>">
                </picture>
                <picture>
                  <source srcset="<?php echo get_field('image-05_webp'); ?>" type="image/webp">
                  <img class="main__img" src="<?php echo get_field('image-05'); ?>" loading="lazy" alt="<?php echo get_bloginfo('description'); ?> <?php echo get_bloginfo('name'); ?>">
                </picture>
                <picture>
                  <source srcset="<?php echo get_field('image-06_webp'); ?>" type="image/webp">
                  <img class="main__img" src="<?php echo get_field('image-06'); ?>" loading="lazy" alt="<?php echo get_bloginfo('description'); ?> <?php echo get_bloginfo('name'); ?>">
                </picture>
                <picture>
                  <source srcset="<?php echo get_field('image-07_webp'); ?>" type="image/webp">
                  <img class="main__img" src="<?php echo get_field('image-07'); ?>" loading="lazy" alt="<?php echo get_bloginfo('description'); ?> <?php echo get_bloginfo('name'); ?>">
                </picture>
                <picture>
                  <source srcset="<?php echo get_field('image-08_webp'); ?>" type="image/webp">
                  <img class="main__img" src="<?php echo get_field('image-08'); ?>" loading="lazy" alt="<?php echo get_bloginfo('description'); ?> <?php echo get_bloginfo('name'); ?>">
                </picture>
                <picture>
                  <source srcset="<?php echo get_field('image-09_webp'); ?>" type="image/webp">
                  <img class="main__img" src="<?php echo get_field('image-09'); ?>" loading="lazy" alt="<?php echo get_bloginfo('description'); ?> <?php echo get_bloginfo('name'); ?>">
                </picture>
                <picture>
                  <source srcset="<?php echo get_field('image-10_webp'); ?>" type="image/webp">
                  <img class="main__img" src="<?php echo get_field('image-10'); ?>" loading="lazy" alt="<?php echo get_bloginfo('description'); ?> <?php echo get_bloginfo('name'); ?>">
                </picture>
              </div>
            </div>
          </div>
        </section>
        <section class="section">
          <div class="container">
            <h2 class="section__title"></h2>
            <div class="section__content" id="about">
              <?php while (have_posts()) : the_post();
                the_content();
              endwhile; ?>
              <div class="section__box">
                <picture>
                  <source srcset="<?php echo get_field('image-quotation_webp'); ?>" type="image/webp">
                  <img class="section__img-float hidden-xs" src="<?php echo get_field('image-quotation'); ?>" loading="lazy" alt="<?php echo get_bloginfo('description'); ?> <?php echo get_bloginfo('name'); ?>">
                </picture><?php echo get_field('quotation'); ?>
              </div>
              <?php echo get_field('about-information'); ?><a class="section__link" href="#registration" rel="m_PageScroll2id"><?php echo get_field('about-link'); ?></a>
            </div>
          </div>
        </section>
        <section class="section_background_pink"><br><br>
          <div class="container">
            <div class="section__flex-box">
              <div class="col-sm-8 section__box">
                <h2 class="section__title" id="program">Provisional Timetable</h2><br>
                <div class="section__content_margin_big">
                  <?php echo get_field('programme'); ?>
                </div>
              </div>
              <div class="col-sm-4 section__box">
                <h2 class="section__title" id="speakers">Speakers</h2><br>
                <div class="section__content_margin_big">
                    <?php echo get_field('speakers'); ?>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section">
          <div class="container">
            <h2 class="section__title" id="registration">Registration</h2><br>
            <div class="row">
              <div class="col-sm-6">
                <div class="section__content_margin_big center-block">
                  <div class="text-justify">
                    <?php echo get_field('registration'); ?>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="section__content_margin_big center-block">
                  <div class="form">
                    <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form"]' ); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section_background_pink">
          <div class="container">
            <h2 class="section__title" id="venue">Venue</h2><br>
            <div class="row">
              <div class="col-sm-6">
                <?php echo get_field('map'); ?>
              </div>
              <div class="col-sm-6">
                <div class="section__content_margin_big center-block">
                  <div class="text-justify">
                    <?php echo get_field('venue'); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
<?php get_footer(); ?>