<?php get_header(); ?>

<section class="services-page">
    <div class="container">

        <?php the_content(); ?>

        <div class="services-grid">
            <?php
            $services = new WP_Query( array(
                'post_type'      => 'service',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ) );

            if ( $services->have_posts() ) :
                while ( $services->have_posts() ) :
                    $services->the_post();

                    $short_desc = get_field( 'short_description' );
                    $price      = get_field( 'service_price' );
                    $icon       = get_field( 'service_icon' );
                    // Note: We don't even need the manual 'button_link' ACF field anymore!
            ?>

                <div class="service-card">

                    <?php if ( $icon ) : ?>
                        <a href="<?php the_permalink(); ?>" class="service-card-link">
                            <div class="card-icon">
                                <img src="<?php echo esc_url( $icon['url'] ); ?>"
                                     alt="<?php the_title_attribute(); ?>">
                            </div>
                        </a>
                    <?php endif; ?>

                    <h2>
                        <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: inherit;">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <?php if ( $short_desc ) : ?>
                        <p><?php echo wp_kses_post( $short_desc ); ?></p>
                    <?php endif; ?>

                    <?php if ( $price ) : ?>
                        <div class="price"><?php echo esc_html( $price ); ?></div>
                    <?php endif; ?>

                    <a href="<?php the_permalink(); ?>" class="btn-service">
                        Learn More →
                    </a>

                </div>

            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>