<div class="footer-legal">
  <div class="footer-legal__links">
    <?php if (get_field('privacy_policy_link')): ?>
      <a href="<?php echo get_field('privacy_policy_link')['url']; ?>" target="<?php echo get_field('privacy_policy_link')['target']; ?>" class="footer-legal__link"><?php echo get_field('privacy_policy_link')['title']  ?></a>
    <? endif; ?>
    <?php if (get_field('terms_of_use_link')): ?>
      <a href="<?php echo get_field('terms_of_use_link')['url']; ?>" target="<?php echo get_field('terms_of_use_link')['target']; ?>" class="footer-legal__link"><?php echo get_field('terms_of_use_link')['title']  ?></a>
    <? endif; ?>
  </div>
  <div class="footer-legal__copyright">
    &copy; <?php echo date("Y"); ?> S.P. Richards Co. All Rights Reserved.
  </div>
</div>