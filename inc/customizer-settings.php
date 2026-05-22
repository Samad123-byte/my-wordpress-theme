<?php

// ===============================
// THEME CUSTOMIZER SETTINGS
// ===============================

function khan_theme_customize_register($wp_customize) {

    // =====================================================
    // HEADER SETTINGS
    // =====================================================

    $wp_customize->add_section('header_settings', array(
        'title'    => __('Header Settings', 'khan-theme'),
        'priority' => 30,
    ));

    // LOGO UPLOAD
    $wp_customize->add_setting('site_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_logo',
            array(
                'label'    => __('Upload Logo', 'khan-theme'),
                'section'  => 'header_settings',
                'settings' => 'site_logo',
            )
        )
    );

    // HEADER BACKGROUND COLOR
    $wp_customize->add_setting('header_bg_color', array(
        'default'           => '#111827',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_bg_color',
            array(
                'label'   => __('Header Background Color', 'khan-theme'),
                'section' => 'header_settings',
            )
        )
    );

    // HEADER TEXT / LINK COLOR
    $wp_customize->add_setting('header_text_color', array(
        'default'           => '#18181b',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_text_color',
            array(
                'label'   => __('Header Text / Link Color', 'khan-theme'),
                'section' => 'header_settings',
            )
        )
    );

    // =====================================================
    // FOOTER SETTINGS
    // =====================================================

    $wp_customize->add_section('footer_settings', array(
        'title'    => __('Footer Settings', 'khan-theme'),
        'priority' => 40,
    ));

    // FOOTER TEXT
    $wp_customize->add_setting('footer_text', array(
        'default'           => '© 2026 MyBrand. All rights reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_text', array(
        'label'   => __('Footer Text', 'khan-theme'),
        'section' => 'footer_settings',
        'type'    => 'textarea',
    ));

    // FOOTER BACKGROUND COLOR
    $wp_customize->add_setting('footer_bg_color', array(
        'default'           => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_bg_color',
            array(
                'label'   => __('Footer Background Color', 'khan-theme'),
                'section' => 'footer_settings',
            )
        )
    );

    // FOOTER TEXT COLOR
    $wp_customize->add_setting('footer_text_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_text_color',
            array(
                'label'   => __('Footer Text Color', 'khan-theme'),
                'section' => 'footer_settings',
            )
        )
    );

    // =====================================================
    // FRONT PAGE / BODY SETTINGS
    // =====================================================

    $wp_customize->add_section('frontpage_settings', array(
        'title'    => __('Front Page Colors', 'khan-theme'),
        'priority' => 35,
    ));

    // BODY / PAGE BACKGROUND COLOR
    $wp_customize->add_setting('body_bg_color', array(
        'default'           => '#f9f8f5',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'body_bg_color',
            array(
                'label'   => __('Page Background Color', 'khan-theme'),
                'section' => 'frontpage_settings',
            )
        )
    );

    // ACCENT / BUTTON COLOR
    $wp_customize->add_setting('accent_color', array(
        'default'           => '#2563eb',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'accent_color',
            array(
                'label'   => __('Accent / Button Color', 'khan-theme'),
                'section' => 'frontpage_settings',
            )
        )
    );

    // BODY TEXT COLOR
    $wp_customize->add_setting('body_text_color', array(
        'default'           => '#18181b',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'body_text_color',
            array(
                'label'   => __('Body Text Color', 'khan-theme'),
                'section' => 'frontpage_settings',
            )
        )
    );

}

add_action('customize_register', 'khan_theme_customize_register');


// =====================================================
// OUTPUT ALL CUSTOMIZER COLORS AS CSS VARIABLES
// This is the KEY function that actually applies colors
// =====================================================

function khan_customizer_css() {
    $header_bg      = get_theme_mod('header_bg_color',   '#111827');
    $header_text    = get_theme_mod('header_text_color', '#18181b');
    $footer_bg      = get_theme_mod('footer_bg_color',   '#000000');
    $footer_text_c  = get_theme_mod('footer_text_color', '#ffffff');
    $body_bg        = get_theme_mod('body_bg_color',     '#f9f8f5');
    $accent         = get_theme_mod('accent_color',      '#2563eb');
    $body_text      = get_theme_mod('body_text_color',   '#18181b');
    ?>
    <style id="khan-customizer-css">
        :root {
            --bg:        <?php echo sanitize_hex_color($body_bg); ?>;
            --text:      <?php echo sanitize_hex_color($body_text); ?>;
            --accent:    <?php echo sanitize_hex_color($accent); ?>;
        }
        /* Header */
        #navbar {
            background: <?php echo sanitize_hex_color($header_bg); ?> !important;
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
        }
        #navbar .nav-logo,
        #navbar .nav-links a {
            color: <?php echo sanitize_hex_color($header_text); ?> !important;
        }
        /* Footer */
        footer {
            background-color: <?php echo sanitize_hex_color($footer_bg); ?> !important;
            color: <?php echo sanitize_hex_color($footer_text_c); ?> !important;
        }
        footer p, footer a, footer h5, footer span, footer li {
            color: <?php echo sanitize_hex_color($footer_text_c); ?> !important;
        }
        /* Body */
        body {
            background: <?php echo sanitize_hex_color($body_bg); ?> !important;
            color: <?php echo sanitize_hex_color($body_text); ?> !important;
        }
    </style>
    <?php
}
add_action('wp_head', 'khan_customizer_css');