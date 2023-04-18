<!-- Hämtar innehåll i header.php -->
<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero">

                        <!-- Hämtar bild och innehållet från sida i wp-panel -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/city.jpg" />
                        <div class="text">
                            <p><?php the_content(); ?></p>
                        </div>
                        <?php


                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Hämtar innehåll i footer.php -->
<?php
get_footer();
?>