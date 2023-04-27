<div class="pre-footer pre-footer__subscribe">
  <div class="container">
    <div class="subscribe__item subscribe__content">
      <h3>Subscribe to our blog</h3>
      <?php if ( get_field('content') ) : ?>
        <p><?php echo get_field('content'); ?></p>
      <?php endif; ?>      
    </div>
    <div class="subscribe__item subscribe__form">
      <?php echo do_shortcode('[contact-form-7 id="1390"]') ?>
    </div>
  </div>
</div>