<?php get_header(); ?>

<main class="single-service-page" style="padding: 100px 0 60px 0; background: #fafafa;">
    <div class="container">

        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 

                $short_desc = get_field( 'short_description' );
                $price      = get_field( 'service_price' );
                $icon       = get_field( 'service_icon' );
        ?>

            <div class="service-breadcrumbs" style="margin-bottom: 25px; font-size: 0.9rem; color: #94a3b8;">
                <a href="<?php echo esc_url( home_url('/') ); ?>" style="color: #64748b; text-decoration: none;">Home</a> / 
                <a href="<?php echo esc_url( home_url('/our-services/') ); ?>" style="color: #64748b; text-decoration: none;">Services</a> / 
                <span style="color: #1e293b; font-weight: 500;"><?php echo esc_html( get_the_title() ); ?></span>
            </div>

            <article id="post-<?php the_ID(); ?>" <?php post_class('service-single-content'); ?> style="background: #ffffff; padding: 40px; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05);">
                
                <header class="service-single-header" style="border-bottom: 1px solid #f1f5f9; padding-bottom: 30px; margin-bottom: 40px; display: flex; align-items: center; gap: 25px;">
                    <?php if ( $icon ) : ?>
                        <div class="service-single-icon" style="max-width: 80px; padding: 15px; background: #eff6ff; border-radius: 12px;">
                            <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: auto; display: block;">
                        </div>
                    <?php endif; ?>

                    <div>
                        <h1 class="service-title" style="font-size: 2.5rem; color: #1e293b; margin: 0 0 8px 0; font-weight: 800; line-height: 1.2;">
                            <?php echo esc_html( get_the_title() ); ?>
                        </h1>

                        <?php if ( $price ) : ?>
                            <div class="service-price-tag" style="font-size: 1.35rem; color: #2563eb; font-weight: 700;">
                                Starting at $<?php echo esc_html( $price ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </header>

                <div class="service-grid-layout" style="display: grid; grid-template-columns: 2.5fr 1.2fr; gap: 50px;">
                    
                    <div class="service-main-description" style="color: #334155; line-height: 1.8; font-size: 1.1rem;">
                        <?php 
                        // Pulls the main detailed copy from the primary text area loop
                        the_content(); 
                        ?>
                    </div>

                    <aside class="service-sidebar">
                        <div class="sidebar-card" style="background: #f8fafc; padding: 30px; border-radius: 14px; border: 1px solid #e2e8f0; position: sticky; top: 120px;">
                            <h3 style="margin-top: 0; font-size: 1.25rem; color: #1e293b; font-weight: 700; margin-bottom: 15px;">Service Summary</h3>
                            
                            <?php if ( $short_desc ) : ?>
                                <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin-bottom: 25px;">
                                    <?php echo wp_kses_post( $short_desc ); ?>
                                </p>
                            <?php endif; ?>

                            <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-primary" style="display: block; text-align: center; background: #2563eb; color: #ffffff; padding: 14px 20px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 1rem; transition: background 0.2s;">
                                Get Started Today
                            </a>
                        </div>
                    </aside>

                </div>

            </article>

        <?php 
            endwhile; 
        endif; 
        ?>

    </div>
</main>

<?php get_footer(); ?>