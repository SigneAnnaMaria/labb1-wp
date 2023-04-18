<!-- Hämtar innehåll i header.php -->
<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <!-- Hämtar titel och innehållet från sida i wp-panel -->
                    <h1><?php the_title() ?></h1>
                    <p><?php the_content(); ?></p>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-6">
                    <!-- Lägger till en bild med specifika mått angivet -->
                    <?php the_post_thumbnail(array(500, 500)); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Hämtar innehåll i footer.php -->
<?php
get_footer();
?>