<div class="join-us-block block <?php echo isset($block['className']) ? $block['className'] : ''; ?>">
  <div class="container">
    <div class="join-us-block__item join-us-block__content">
      <h3><?php the_field('title'); ?></h3>
      <p><?php the_field('content'); ?></p>
    </div>
    <div class="join-us-block__item join-us-block__button">
      <a target="_blank" href="<?php the_field('link_url'); ?>"><?php the_field('link_label'); ?></a>
    </div>
  </div>
</div>