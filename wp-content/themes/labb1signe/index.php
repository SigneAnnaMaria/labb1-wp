<?php
get_header();
?>

<?php
if (have_posts()) {

	while (have_posts()) {

		the_post();

		get_template_part('template-parts/content', 'archive');
	}
}
?>

<nav class="navigation pagination">
	<h2 class="screen-reader-text">Inläggsnavigering</h2>
	<?php
	the_posts_pagination();
	?>
</nav>


<?php
get_footer();
?>