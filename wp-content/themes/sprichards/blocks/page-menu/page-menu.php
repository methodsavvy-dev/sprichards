<?php
$the_page = sanitize_post($GLOBALS['wp_the_query']->get_queried_object());
$slug = $the_page->post_name;
?>

<section class="page-menu-block block <?php echo $block['className'] ?>">
  <div class="container">
    <?php if (have_rows('menus')) : ?>
      <nav class="page-menu-block__nav">
        <ul class="page-menu-block__nav-list">
          <?php while (have_rows('menus')) : the_row(); ?>
            <li class="page-menu-block__nav-item">
              <?php
              $id = url_to_postid(get_sub_field('menu_link')['url']);
              ?>
              <a class="section-title with-red-line <?php if (is_page($id)) echo 'active'; ?>" href="<?php echo get_sub_field('menu_link')['url']; ?>">
                <?php the_sub_field('menu_label'); ?>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      </nav>
    <?php endif; ?>
  </div>
</section>