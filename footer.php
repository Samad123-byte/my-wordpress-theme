  <footer>
    <div class="footer-grid">
      <div class="footer-brand">

            <a class="nav-logo" href="<?php echo esc_url(home_url('/')); ?>">

                <div class="logo-dot"></div>

                <?php bloginfo('name'); ?>

      </a>
        <p>A creative studio building beautiful digital experiences for brands that want to stand out.</p>
      </div>
      <div class="footer-col">
        <h5>Pages</h5>
      <?php
wp_nav_menu(array(
    'theme_location' => 'footer_menu',
    'container' => false,
    'menu_class' => 'footer-links'
));
?>
      </div>
      <div class="footer-col">
        <h5>Services</h5>
      <ul>
  <li><a href="<?php echo home_url('/our-services/'); ?>">Web Design</a></li>
  <li><a href="<?php echo home_url('/our-services/'); ?>">Development</a></li>
  <li><a href="<?php echo home_url('/our-services/'); ?>">Mobile Apps</a></li>
  <li><a href="<?php echo home_url('/our-services/'); ?>">SEO & Growth</a></li>
</ul>
      </div>
      <div class="footer-col">
        <h5>Company</h5>
       <ul>
  <li><a href="<?php echo home_url('/blog/'); ?>">Blog</a></li>
  <li><a href="<?php echo home_url('/careers/'); ?>">Careers</a></li>
  <li><a href="<?php echo home_url('/privacy-policy/'); ?>">Privacy Policy</a></li>
  <li><a href="<?php echo home_url('/terms-of-service/'); ?>">Terms of Service</a></li>
</ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2026 MyBrand. All rights reserved.</p>
      <div class="social-row">
        <a title="Twitter">𝕏</a>
        <a title="Instagram">◎</a>
        <a title="LinkedIn">in</a>
      </div>
    </div>
  </footer>



<?php wp_footer() ?>

</body>
</html>
