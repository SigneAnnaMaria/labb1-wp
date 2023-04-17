<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero">
                        <?php
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                        ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/city.jpg" />
                                <div class="text">
                                    <p><?php the_content(); ?></p>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php
get_footer();
?>