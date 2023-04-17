<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                    <h1><?php the_title() ?></h1>
                    <?php
                    if (have_posts()) {

                        while (have_posts()) {

                            the_post();

                            get_template_part('template-parts/content', 'article');
                        }
                    }
                    ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                    <ul class="side-menu">
                        <?php wp_nav_menu(array(
                            'menu' => 'side-menu',
                            'theme_location' => 'side-menu'
                        ));  ?>
                    </ul>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>