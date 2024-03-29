<!-- Hämtar innehåll i header.php -->
<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <!-- Hämtar titel och innehållet från sida i wp-panel -->
                    <h1><?php the_title() ?></h1>
                    <?php the_content();
                    ?>
                </div>

            </div>
        </div>
    </section>
</main>

<!-- Hämtar innehåll i footer.php -->
<?php
get_footer();
?>