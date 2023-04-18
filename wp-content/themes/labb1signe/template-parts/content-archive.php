<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <article>
                        <!-- Hämtar bild från wp-panel via funktion add theme support  -->
                        <?php the_post_thumbnail('medium_large'); ?>
                        <h2 class="title">
                            <!-- Hämtar permalänk och titel för nuvarande post -->
                            <a href="<?php get_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <ul class="meta">
                            <li>
                                <!-- Hämtar datum -->
                                <i class="fa fa-calendar"></i> <?php the_time('j F, Y'); ?>
                            </li>
                            <li>
                                <!-- Hämtar författare -->
                                <i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                            </li>
                            <li>
                                <!-- Hämtar kategori -->
                                <i class="fa fa-tag"></i> <?php the_category(', '); ?>
                            </li>
                        </ul>
                        <!-- Hämtar innehåll från inläggen i wp-panel -->
                        <?php the_content(); ?>
                    </article>

                </div>
    </section>
</main>