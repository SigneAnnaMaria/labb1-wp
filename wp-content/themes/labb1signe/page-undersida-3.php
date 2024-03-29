<!-- Hämtar innehåll i header.php -->
<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12">
                    <!-- Hämtar titel och innehållet från sida i wp-panel -->
                    <h1><?php the_title() ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Hämtar innehåll i footer.php -->
<?php
get_footer();
?>