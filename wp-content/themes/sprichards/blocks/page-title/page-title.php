<?php
  $background = get_field('background_image');

  if (empty($background)) {
    $page_id = get_queried_object_id();
  
    $bg_array = array(
      '20' => get_template_directory_uri() . '/assets/images/bg-about-history.webp', 
      '22' => get_template_directory_uri() . '/assets/images/bg-about-values.webp', 
      '24' => get_template_directory_uri() . '/assets/images/bg-about-leadership.webp', 
      '26' => get_template_directory_uri() . '/assets/images/bg-products-services.webp', 
      '28' => get_template_directory_uri() . '/assets/images/bg-marketing.webp', 
      '30' => get_template_directory_uri() . '/assets/images/bg-locations.webp', 
      '34' => get_template_directory_uri() . '/assets/images/bg-customers.webp', 
      '32' => get_template_directory_uri() . '/assets/images/bg-suppliers.webp', 
      '709' => get_template_directory_uri() . '/assets/images/bg-careers.webp', 
      '38' => get_template_directory_uri() . '/assets/images/bg-contact.webp', 
    );

    $background = isset($bg_array[$page_id]) ? $bg_array[$page_id] : '';

    if ( empty($background) ) {
      $background = get_template_directory_uri() . '/assets/images/bg-blog.webp';
    }
  }
?>

<?php if (!is_home() && !is_front_page()) : ?>
  <header class="block page-title-block <?php echo isset($block['className']) ? $block['className'] : ''; ?>" style="background-image: url(<?php echo $background; ?>);">
    <div class="container">
      <?php if (get_field('page_title')) : ?>
        <h1 class="page-title-block__content">
          <?php echo get_field('page_title'); ?>
        </h1>
      <?php endif; ?>
    </div>
  </header>
<?php endif; ?>