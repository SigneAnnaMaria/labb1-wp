<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <article>
                        <?php the_post_thumbnail('medium_large'); ?>
                        <h2 class="title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <ul class="meta">
                            <li>
                                <i class="fa fa-calendar"></i> <?php the_time('j F, Y'); ?>
                            </li>
                            <li>
                                <i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                            </li>
                            <li>
                                <i class="fa fa-tag"></i> <?php the_category(', '); ?>
                            </li>
                        </ul>
                        <?php the_content(); ?>
                    </article>

                </div>
    </section>
</main>