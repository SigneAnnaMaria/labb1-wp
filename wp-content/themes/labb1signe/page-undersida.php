<?php
get_header();
?>

<?php
if (have_posts()) {

    while (have_posts()) {

        the_post();

        // get_template_part('template-parts/content', 'article');
    }
}
?>

<?php wp_nav_menu(array(
    'menu' => 'side-menu',
    'theme_location' => 'side-menu'
));  ?>

<?php
get_footer();
?>