<!-- Hämtar innehåll i header.php -->
<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- Hämtar titel och innehållet från sida i wp-panel -->
                    <h1><?php the_title() ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <ul class="side-menu">
                        <li>
                            <?php dynamic_sidebar('sidebar-2');
                            ?>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </section>
</main>

<!-- Hämtar innehåll i footer.php -->
<?php
get_footer();
?>