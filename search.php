<?php get_header(); ?>

<main class="search-page">

    <!-- HERO -->
    <section class="blog-hero">
        <div class="container">
            <h1>Search Results</h1>
            <?php if (get_search_query()) : ?>
                <p>Showing results for: <strong>"<?php echo esc_html(get_search_query()); ?>"</strong></p>
            <?php endif; ?>
        </div>
    </section>

    <!-- SEARCH BAR -->
    <section class="search-bar-section">
        <div class="container">
            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="search-input-wrap">
                    <input
                        type="search"
                        class="search-input"
                        placeholder="Search again..."
                        value="<?php echo esc_attr(get_search_query()); ?>"
                        name="s"
                    >
                    <button type="submit" class="search-btn">Search →</button>
                </div>
            </form>
        </div>
    </section>

    <!-- RESULTS -->
    <section class="blog-section">
        <div class="container">

            <?php if (have_posts()) : ?>

                <p class="search-count">
                    <?php
                    global $wp_query;
                    echo $wp_query->found_posts . ' result(s) found';
                    ?>
                </p>

                <div class="blog-grid">

                    <?php while (have_posts()) : the_post(); ?>

                        <article class="blog-card">
                            <a href="<?php the_permalink(); ?>">

                                <!-- IMAGE -->
                                <div class="blog-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php else : ?>
                                        <div class="blog-image-placeholder">
                                            <span>📄</span>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- CONTENT -->
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span><?php echo get_the_date(); ?></span>
                                        <span class="post-type-badge">
                                            <?php echo esc_html(get_post_type()); ?>
                                        </span>
                                    </div>
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
                                    <div class="read-more">Read More →</div>
                                </div>

                            </a>
                        </article>

                    <?php endwhile; ?>

                </div>

                <!-- PAGINATION -->
                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                        'prev_text' => '← Previous',
                        'next_text' => 'Next →',
                    ));
                    ?>
                </div>

            <?php else : ?>

                <!-- NO RESULTS -->
                <div class="no-results">
                    <div class="no-results-icon">🔍</div>
                    <h2>No results found</h2>
                    <p>Sorry, nothing matched your search. Try different keywords.</p>
                    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="search-input-wrap">
                            <input
                                type="search"
                                class="search-input"
                                placeholder="Try again..."
                                name="s"
                            >
                            <button type="submit" class="search-btn">Search →</button>
                        </div>
                    </form>
                </div>

            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>