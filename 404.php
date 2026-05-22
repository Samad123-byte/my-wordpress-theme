<?php get_header(); ?>

<div class="container" style="padding:150px 0; text-align:center;">

    <h1 style="font-size:8rem; font-weight:800; color:#2563eb; margin:0;">404</h1>
    
    <h2 style="font-size:2rem; margin:20px 0 10px;">Page Not Found</h2>
    
    <p style="color:#71717a; margin-bottom:40px;">
        The page you're looking for doesn't exist or has been moved.
    </p>
    
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">
        ← Go Back Home
    </a>

</div>

<?php get_footer(); ?>