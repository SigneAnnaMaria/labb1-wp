<!-- Hämtar innehåll i header.php -->
<?php
get_header();
?>

<!-- Kollar om det finns några inlägg, och loopar igenom dessa  -->
<?php
if (have_posts()) {

    while (have_posts()) {

        the_post();

        get_template_part('template-parts/content', 'archive');
    }
}
?>