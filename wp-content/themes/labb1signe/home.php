<!-- Hämtar inehåll i header.php -->
<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- Hämtar inläggets titel -->
                    <h1><?php wp_title(''); ?></h1>
                    <!-- Kollar om det finns några inlägg, och loopar igenom dessa  -->
                    <?php
                    if (have_posts()) {

                        while (have_posts()) {

                            the_post();

                            get_template_part('template-parts/content', 'archive');
                        }
                    }
                    ?>

                    <nav class="navigation pagination">
                        <!-- Lägger till pagination -->
                        <?php echo paginate_links(); ?>
                    </nav>


                </div>

                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <ul>
                            <li>
                                <form id="searchform" class="searchform">
                                    <div>
                                        <!-- Hämtar sökfält -->
                                        <?php get_search_form(); ?>
                                    </div>
                                </form>
                                <?php
                                // Skapat en widget i functions.php och hämtar dynamic sidebar som går att redigera i wp-panel
                                dynamic_sidebar('sidebar-1');
                                ?>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<!-- Hämtar innehåll i footer.php -->
<?php
get_footer();
?>