<div class="footer-contact">
  <div class="contact-information">
    <h3 class="contact-information__title">
      CONTACTS
    </h3>
    <div class="contact-information__content">
      <div class="contact-information__item contact-information__phone">
        HQ <a href="tel:<?php echo get_field('phone_number') ?>"><?php echo get_field('phone_number') ?></a> | Support <a href="tel:<?php echo get_field('support_number') ?>"><?php echo get_field('support_number') ?></a>
      </div>
      <div class="contact-information__item contact-information__address">
        <?php echo get_field('address') ?>
      </div>
      <div class="contact-information__item contact-information__directions">
        <a href="<?php echo get_field('driving_directions_link')['url']; ?>" target="<?php echo get_field('driving_directions_link')['target']; ?>"><?php echo get_field('driving_directions_link')['title']; ?></a>
      </div>
    </div>
  </div>
  <div class="social-information">
    <h3 class="social-information__title">Social</h3>
    <ul class="social-information__content">
      <?php if (get_field('facebook_link')): ?>
      <li class="social-facebook">
        <a href="<?php echo get_field('facebook_link'); ?>" target="_blank" rel="noopener noreferrer">
          <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.7362 0.336548C5.61897 0.336548 0.660156 5.29537 0.660156 11.4125C0.660156 17.5297 5.61897 22.4885 11.7362 22.4885C17.8533 22.4885 22.8122 17.5297 22.8122 11.4125C22.8122 5.29537 17.8533 0.336548 11.7362 0.336548ZM14.3598 7.99052H12.6949C12.4976 7.99052 12.2784 8.25012 12.2784 8.59509V9.7973H14.3609L14.046 11.5118H12.2784V16.6586H10.3136V11.5118H8.53104V9.7973H10.3136V8.78892C10.3136 7.34212 11.3173 6.16645 12.6949 6.16645H14.3598V7.99052V7.99052Z" fill="#E6E7E8" />
          </svg>
        </a>
      </li>
      <?php endif; ?>

      <?php if (get_field('twitter_link')): ?>
      <li class="social-twitter">
        <a href="<?php echo get_field('twitter_link'); ?>" target="_blank" rel="noopener noreferrer">
          <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.4627 0.336548C5.34554 0.336548 0.386719 5.29537 0.386719 11.4125C0.386719 17.5297 5.34554 22.4885 11.4627 22.4885C17.5799 22.4885 22.5387 17.5297 22.5387 11.4125C22.5387 5.29537 17.5799 0.336548 11.4627 0.336548ZM15.9681 9.40964C15.9727 9.50424 15.9739 9.59885 15.9739 9.69115C15.9739 12.5755 13.7806 15.8995 9.76786 15.8995C8.58214 15.9015 7.42109 15.5609 6.42429 14.9188C6.59389 14.9396 6.76811 14.9476 6.94463 14.9476C7.96686 14.9476 8.90716 14.6004 9.65364 14.0143C9.19873 14.0053 8.75795 13.8547 8.39272 13.5833C8.02749 13.312 7.75601 12.9335 7.61612 12.5005C7.94281 12.5627 8.27935 12.5496 8.60026 12.4625C8.10652 12.3626 7.66249 12.0951 7.34349 11.7052C7.02449 11.3153 6.85015 10.8272 6.85003 10.3234V10.2969C7.14423 10.4596 7.48113 10.5588 7.83879 10.5703C7.3759 10.2622 7.04822 9.78884 6.92276 9.24711C6.7973 8.70538 6.88354 8.13619 7.16385 7.65594C7.71183 8.32973 8.3952 8.88093 9.16972 9.27385C9.94424 9.66678 10.7926 9.89267 11.66 9.9369C11.5497 9.46883 11.5972 8.97745 11.795 8.53914C11.9928 8.10083 12.3299 7.74015 12.7538 7.51318C13.1778 7.2862 13.6648 7.20566 14.1393 7.28405C14.6137 7.36245 15.049 7.5954 15.3774 7.94668C15.8656 7.85009 16.3338 7.671 16.7619 7.41711C16.5992 7.92261 16.2585 8.35185 15.8031 8.62509C16.2356 8.573 16.6579 8.45673 17.0561 8.28012C16.7636 8.71842 16.3952 9.10094 15.9681 9.40964V9.40964Z" fill="#E6E7E8" />
          </svg>
        </a>
      </li>
      <?php endif; ?>

      <?php if (get_field('linkedin_link')): ?>
      <li class="social-linkedin">
        <a href="<?php echo get_field('linkedin_link'); ?>" target="_blank" rel="noopener noreferrer">
          <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.1854 0.336548C5.06819 0.336548 0.109375 5.29537 0.109375 11.4125C0.109375 17.5297 5.06819 22.4885 11.1854 22.4885C17.3026 22.4885 22.2614 17.5297 22.2614 11.4125C22.2614 5.29537 17.3026 0.336548 11.1854 0.336548ZM8.47406 16.0033H6.23117V8.78546H8.47406V16.0033ZM7.33877 7.89938C6.63037 7.89938 6.17233 7.3975 6.17233 6.77678C6.17233 6.14337 6.64421 5.65649 7.36762 5.65649C8.09102 5.65649 8.53406 6.14337 8.5479 6.77678C8.5479 7.3975 8.09102 7.89938 7.33877 7.89938ZM16.6657 16.0033H14.4228V12.0033C14.4228 11.0722 14.0974 10.4399 13.2864 10.4399C12.6668 10.4399 12.2987 10.868 12.1361 11.2799C12.0761 11.4264 12.0611 11.6341 12.0611 11.8406V16.0022H9.81703V11.0872C9.81703 10.1861 9.78818 9.43271 9.75819 8.7843H11.7069L11.8096 9.78691H11.8545C12.1499 9.31618 12.8733 8.62163 14.0836 8.62163C15.5592 8.62163 16.6657 9.61039 16.6657 11.7356V16.0033V16.0033Z" fill="#E6E7E8" />
          </svg>
        </a>
      </li>
      <?php endif; ?>

      <?php if (get_field('youtube_link')): ?>
      <li class="social-youtube">
        <a href="<?php echo get_field('youtube_link'); ?>" target="blank" rel="noopener noreferrer">
          <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.7614 11.2199L11.1701 10.0107C10.9439 9.90575 10.7582 10.0234 10.7582 10.2738V12.5513C10.7582 12.8017 10.9439 12.9193 11.1701 12.8144L13.7602 11.6052C13.9875 11.4991 13.9875 11.326 13.7614 11.2199ZM11.9119 0.336548C5.79476 0.336548 0.835938 5.29537 0.835938 11.4125C0.835938 17.5297 5.79476 22.4885 11.9119 22.4885C18.0291 22.4885 22.9879 17.5297 22.9879 11.4125C22.9879 5.29537 18.0291 0.336548 11.9119 0.336548ZM11.9119 15.9122C6.24241 15.9122 6.14319 15.4011 6.14319 11.4125C6.14319 7.42403 6.24241 6.91292 11.9119 6.91292C17.5815 6.91292 17.6807 7.42403 17.6807 11.4125C17.6807 15.4011 17.5815 15.9122 11.9119 15.9122Z" fill="#E6E7E8" />
          </svg>
        </a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</div>