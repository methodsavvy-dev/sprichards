<?php
  $background = get_field('background');

  if (empty($background)) {
    $background = get_template_directory_uri() . '/assets/images/bg-counter.webp';
  }
?>

<section class="block home-counter" style="background-image: url(<?php echo $background; ?>);">
  <div class="home-counter__content container">
    <?php if (have_rows('counter_items')) : ?>
      <ul>
        <?php while (have_rows('counter_items')) : the_row(); ?>
          <li class="home-counter__item">
            <div class="home-counter__data">
              <span class="home-counter__number" data-number="<?php the_sub_field('counter_item_number'); ?>">0</span>
              <?php if (get_sub_field('counter_item_suffix')) : ?>
                <span class="home-counter__suffix"><?php the_sub_field('counter_item_suffix'); ?></span>
              <?php endif; ?>
            </div>
            <span class="home-counter__title"><?php the_sub_field('counter_item_title'); ?></span>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>

  </div>
</section>