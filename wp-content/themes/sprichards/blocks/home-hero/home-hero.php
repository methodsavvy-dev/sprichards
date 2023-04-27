<section class="home-hero-block block" style="background-image: url(<?php the_field('background_image') ?>);">

  <div class="overlay"></div>
  <video src="<?php echo get_template_directory_uri(); ?>/assets/video/front-video.mp4" autoplay muted loop playsinline></video>

  <div class="home-hero-block__content-container">
    <div class="home-hero-block__content">
      <div class="home-hero-block__click-areas">
        <a href="<?php echo get_permalink(28); ?>" data-option="1" class="click-area click-area__01"><span>Sales & Marketing Support</span></a>
        <a href="<?php echo get_permalink(26); ?>" data-option="2" class="click-area click-area__02"><span>Extensive Product Assortment</span></a>
        <a href="<?php echo get_permalink(30); ?>" data-option="3" class="click-area click-area__03"><span>Logistics Excellence</span></a>
      </div>
      <div class="home-hero-block__nav-images nav-images">
        <img class="nav-image nav-image__00 active" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-hero-default.svg" alt="Sales & Marketing Support, Extensive Product Assortment, Logistics Excellence" width="652" height="652">
        <img class="nav-image nav-image__01" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-hero-marketing.svg" alt="Sales & Marketing Support" width="652" height="652">
        <img class="nav-image nav-image__02" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-hero-product.svg" alt="Extensive Product Assortment" width="652" height="652">
        <img class="nav-image nav-image__03" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-hero-logistics.svg" alt="Logistics Excellence" width="652" height="652">
      </div>
      <div class="home-hero-block__legend">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front-hero-legend.webp" alt="More than a wholesale, the whole package." width="652" height="652">
      </div>
    </div>
  </div>
</section>