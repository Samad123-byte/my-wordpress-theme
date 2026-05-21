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
                    $button     = get_field( 'button_link' );
                    $icon       = get_field( 'service_icon' );
            ?>

                <div class="service-card">

                    <?php if ( $icon ) : ?>
                        <div class="card-icon">
                            <img src="<?php echo esc_url( $icon['url'] ); ?>"
                                 alt="<?php the_title_attribute(); ?>">
                        </div>
                    <?php endif; ?>

                    <h2><?php the_title(); ?></h2>

                    <?php if ( $short_desc ) : ?>
                        <p><?php echo wp_kses_post( $short_desc ); ?></p>
                    <?php endif; ?>

                    <?php if ( $price ) : ?>
                        <div class="price"><?php echo esc_html( $price ); ?></div>
                    <?php endif; ?>

                    <?php if ( $button ) : ?>
                        <a href="<?php echo esc_url( $button ); ?>" class="btn-service">
                            Learn More
                        </a>
                    <?php endif; ?>

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