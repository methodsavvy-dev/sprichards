<section class="home-experience-block block">
  <div class="container">
    <div class="home-experience-block__content">
      <h2 class="section-title with-red-line-mobile-only"><?php the_field('block_title'); ?></h2>

      <div class="home-experience-block__mobile">
        <?php if (have_rows('experience_list')) : ?>
          <ul>
            <?php while (have_rows('experience_list')) : the_row(); ?>
              <li>
                <?php $icon = get_sub_field('item_icon'); ?>
                <img width="36" height="36" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                <span><?php the_sub_field('item_title'); ?></span>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="home-experience-block__desktop desktop">
    <div class="home-experience-block__desktop-container desktop__container">
      <div class="desktop__mouse-areas">
        <div data-option="1" class="mouse-area mouse-area__01">
          <div class="mouse-area__heading">
            <div class="mouse-area__image image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefits-icon-01.svg" alt="">
            </div>
            <h4 class="mouse-area__title">EXTENSIVE PRODUCT ASSORTMENT</h4>
          </div>
          <div class="mouse-area__content content">
            With over 75,000+ SKUs and 400+ supplier partnerships, our customers become the “one-stop-shop”
          </div>
        </div>
        <div data-option="2" class="mouse-area mouse-area__02">
          <div class="mouse-area__heading">
            <div class="mouse-area__image image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefits-icon-02.svg" alt="">
            </div>
            <h4 class="mouse-area__title">SUPPORTIVE SALES STRATEGY</h4>
          </div>
          <div class="mouse-area__content content">
            Digital tools, automated web content and a dedicated sales and support staff takes your merchandising strategy to the next level
          </div>
        </div>
        <div data-option="3" class="mouse-area mouse-area__03">
          <div class="mouse-area__heading">
            <div class="mouse-area__image image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefits-icon-03.svg" alt="">
            </div>
            <h4 class="mouse-area__title">FULL SERVICE</h4>
          </div>
          <div class="mouse-area__content content">
            Our expanded national reach allows us to offer customizable order sizes, convenient delivery options, and uniform product offerings across all distribution centers.
          </div>
        </div>
        <div data-option="4" class="mouse-area mouse-area__04">
          <div class="mouse-area__heading">
            <div class="mouse-area__image image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefits-icon-04.svg" alt="">
            </div>
            <h4 class="mouse-area__title">SAME DAY OR NEXT DAY FULFILLMENT</h4>
          </div>
          <div class="mouse-area__content content">
            We distribute more than 50,000 in stock items to more than 9,000 resellers and distributors throughout the nation.
          </div>
        </div>
        <div data-option="5" class="mouse-area mouse-area__05">
          <div class="mouse-area__heading">
            <div class="mouse-area__image image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefits-icon-05.svg" alt="">
            </div>
            <h4 class="mouse-area__title">COMPETITIVE PRICING</h4>
          </div>
          <div class="mouse-area__content content">
            SPR enables resellers to grow their sales and profit with minimal capital investment by providing a broad product offering of both branded and private label products
          </div>
        </div>
        <div data-option="6" class="mouse-area mouse-area__06">
          <div class="mouse-area__heading">
            <div class="mouse-area__image image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefits-icon-06.svg" alt="">
            </div>
            <h4 class="mouse-area__title">MARKET DRIVEN</h4>
          </div>
          <div class="mouse-area__content content">
            We glean insights from our wide customer base and provide our supplier partners with best practices and actionable feedback
          </div>
        </div>
      </div>
      <div class="desktop__mask">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/benefits-mask.webp' ?>" alt="">
      </div>
      <div class="desktop__backgrounds backgrounds">
        <img width="115" height="115" data-option="0" class="background background-00 active" src="<?php echo get_template_directory_uri() . '/assets/images/benefits-image-07.webp' ?>" alt="Benefits">
        <img width="115" height="115" data-option="1" class="background background-01" src="<?php echo get_template_directory_uri() . '/assets/images/benefits-image-06.webp' ?>" alt="EXTENSIVE PRODUCT ASSORTMENT">
        <img width="115" height="115" data-option="2" class="background background-02" src="<?php echo get_template_directory_uri() . '/assets/images/benefits-image-05.webp' ?>" alt="SUPPORTIVE SALES STRATEGY">
        <img width="115" height="115" data-option="3" class="background background-03" src="<?php echo get_template_directory_uri() . '/assets/images/benefits-image-04.webp' ?>" alt="FULL SERVICE">
        <img width="115" height="115" data-option="4" class="background background-04" src="<?php echo get_template_directory_uri() . '/assets/images/benefits-image-03.webp' ?>" alt="SAME DAY OR NEXT DAY FULFILLMENT">
        <img width="115" height="115" data-option="5" class="background background-05" src="<?php echo get_template_directory_uri() . '/assets/images/benefits-image-02.webp' ?>" alt="COMPETITIVE PRICING">
        <img width="115" height="115" data-option="6" class="background background-06" src="<?php echo get_template_directory_uri() . '/assets/images/benefits-image-01.webp' ?>" alt="MARKET DRIVEN">
      </div>
    </div>
  </div>


</section>