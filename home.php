<?php get_header(); ?>

<main class="blog-page">

  <!-- HERO -->
  <section class="blog-hero">
    <div class="container">
      <h1>Our Blog</h1>
      <p>Insights, tutorials, and updates from our creative team</p>
    </div>
  </section>

  <!-- BLOG GRID -->
  <section class="blog-section">
    <div class="container">

      <div class="blog-grid">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article class="blog-card">

            <a href="<?php the_permalink(); ?>">

              <!-- IMAGE -->
              <div class="blog-image">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('large'); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" alt="">
                <?php endif; ?>
              </div>

              <!-- CONTENT -->
              <div class="blog-content">

                <div class="blog-meta">
                  <span><?php echo get_the_date(); ?></span>
                </div>

                <h2><?php the_title(); ?></h2>

                <p>
                  <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                </p>

                <div class="read-more">
                  Read More →
                </div>

              </div>

            </a>

          </article>

        <?php endwhile; endif; ?>

      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>