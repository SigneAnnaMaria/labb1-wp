<!-- Hämtar innehåll i header.php -->
<?php get_header() ?>

<!-- Visar sökresultatet för sök i sökfältet och loopar igenom resultaten -->
<h1><?php echo "Sökresultat för: ";
    the_search_query() ?></h1>

<?php if (have_posts()) : while (have_posts()) : the_post() ?>
        <?php get_template_part('/template-parts/content-archive') ?>

<?php endwhile;
endif; ?>

<!-- Hämtar innehåll i header.php -->
<?php get_footer() ?>