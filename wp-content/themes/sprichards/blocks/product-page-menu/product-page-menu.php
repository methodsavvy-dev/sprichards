<section class="product-page-menu-block block <?php echo isset($block['className']) ? $block['className'] : ''; ?>">
  <div class="container">
    <nav class="product-page-menu-block__nav">
      <ul class="product-page-menu-block__nav-list">
        <li class="product-page-menu-block__nav-item with-red-line <?php if (is_page( 26 )) echo 'active'; ?>">
          <a class="section-title <?php if (is_page( 26 )) echo 'active'; ?>" href="<?php echo get_page_link(26) ?>">
            <div class="menu-desktop-only">
              <span>Extensive</span><br /> Product <span>assortment</span>
            </div>
            <div class="menu-mobile-only">
              Products
            </div>
          </a>
        </li>
        <li class="product-page-menu-block__nav-item with-red-line <?php if (is_page( 28 )) echo 'active'; ?>">
          <a class="section-title <?php if (is_page( 28 )) echo 'active'; ?>" href="<?php echo get_page_link(28) ?>">
            <div class="menu-desktop-only">
              <span>Sales &</span><br /> Marketing <span>Support</span>
            </div>
            <div class="menu-mobile-only">
              Marketing
            </div>
          </a>
        </li>
        <li class="product-page-menu-block__nav-item with-red-line <?php if (is_page( 30 )) echo 'active'; ?>">
          <a class="section-title <?php if (is_page( 30 )) echo 'active'; ?>" href="<?php echo get_page_link(30) ?>">
            <div class="menu-desktop-only">
              <span>Locations &</span><br /> Logistics <span>Excellence</span>
            </div>
            <div class="menu-mobile-only">
              Logistics
            </div>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</section>