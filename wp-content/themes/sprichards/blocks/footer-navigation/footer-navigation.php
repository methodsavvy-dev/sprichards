<?php
$logo = get_field('footer_logo') ?: get_template_directory_uri();

if (is_array($logo)) {
  $logoUrl = $logo['url'];
  $logoAlt = $logo['alt'];
} else {
  $logoUrl = get_template_directory_uri() . '/assets/images/spr-logo-red-tagline.svg';
  $logoAlt = 'S.P. Richards Co.';
}

$menus = get_field('footer_menus');
?>

<div class="footer-navigation">
  <div class="footer-navigation--logo">
    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
      <img src="<?php echo esc_html($logoUrl) ?>" alt="<?php echo esc_html($logoAlt) ?>" width="90" height="57" />
    </a>
  </div>

  <?php if ($menus) : ?>
    <div class="footer-navigation--menus">
      <?php foreach ($menus as $menu) : ?>
        <nav class="footer-nav">
          <h3><?php echo esc_html($menu['menu_title']) ?></h3>
          <?php
          wp_nav_menu(
            array(
              'menu' => $menu['menu_id'],	
              'menu_class' => 'footer-nav--menu',
              'container' => false,
              'depth' => 1,
            )
          );
          ?>
        </nav>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</div>