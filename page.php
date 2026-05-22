<?php get_header(); ?>

<main class="page-wrapper">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="page-hero">
       
    </section>

    <section class="page-content">
        <?php the_content(); ?>
    </section>

<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>