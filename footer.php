<?php

$footer_bg = get_theme_mod('footer_bg_color', '#000000');

$footer_text = get_theme_mod(
    'footer_text',
    '© 2026 MyBrand. All rights reserved.'
);

?>

<footer style="background-color: <?php echo esc_attr($footer_bg); ?>;">

    <div class="footer-grid">

        <!-- BRAND -->

        <div class="footer-brand">

            <a class="nav-logo" href="<?php echo esc_url(home_url('/')); ?>">

                <div class="logo-dot"></div>

                <?php bloginfo('name'); ?>

            </a>

            <p>
                A creative studio building beautiful digital experiences 
                for brands that want to stand out.
            </p>

        </div>


        <!-- FOOTER MENU -->

        <div class="footer-col">

            <h5>Pages</h5>

            <?php

            wp_nav_menu(array(

                'theme_location' => 'footer_menu',

                'container'      => false,

                'menu_class'     => 'footer-links'

            ));

            ?>

        </div>


        <!-- SERVICES -->

        <div class="footer-col">

            <h5>Services</h5>

            <ul>

            <?php

            $footer_services = new WP_Query(array(

                'post_type'      => 'service',

                'posts_per_page' => 4,

                'orderby'        => 'menu_order',

                'order'          => 'ASC'

            ));

            if ($footer_services->have_posts()) :

                while ($footer_services->have_posts()) :

                    $footer_services->the_post();

            ?>

                <li>

                    <a href="<?php the_permalink(); ?>">

                        <?php the_title(); ?>

                    </a>

                </li>

            <?php

                endwhile;

                wp_reset_postdata();

            else :

            ?>

                <li>

                    <a href="<?php echo esc_url(home_url('/our-services/')); ?>">

                        Our Services

                    </a>

                </li>

            <?php endif; ?>

            </ul>

        </div>


        <!-- COMPANY -->

        <div class="footer-col">

            <h5>Company</h5>

            <ul>

                <li>
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>">
                        Blog
                    </a>
                </li>

                <li>
                    <a href="<?php echo esc_url(home_url('/careers/')); ?>">
                        Careers
                    </a>
                </li>

                <li>
                    <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">
                        Privacy Policy
                    </a>
                </li>

                <li>
                    <a href="<?php echo esc_url(home_url('/terms-of-service/')); ?>">
                        Terms of Service
                    </a>
                </li>

            </ul>

        </div>

    </div>


    <!-- FOOTER BOTTOM -->

    <div class="footer-bottom">

        <p>

            <?php echo esc_html($footer_text); ?>

        </p>

        <div class="social-row">

            <a href="#" title="Twitter">𝕏</a>

            <a href="#" title="Instagram">◎</a>

            <a href="#" title="LinkedIn">in</a>

        </div>

    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>