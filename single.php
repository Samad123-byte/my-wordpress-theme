<?php get_header(); ?>

<main class="single-post">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article>

      <h1><?php the_title(); ?></h1>

      <div class="meta">
        <span>Posted on <?php echo get_the_date(); ?></span>
      </div>

      <?php if (has_post_thumbnail()) : ?>
        <div class="featured-img">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>

      <div class="content">
        <?php the_content(); ?>
      </div>

    </article>

  <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>