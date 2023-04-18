<?php
get_header();
?>


<section>
	<div class="container">
		<div class="row">
			<div id="primary" class="col-xs-12 col-md-9">
				<h1><?php the_title($sep = ''); ?></h1>

				<?php
				if (have_posts()) {

					while (have_posts()) {

						the_post();

						get_template_part('template-parts/content', 'archive');
					}
				}
				?>

				<!-- <nav class="navigation pagination">
					<h2 class="screen-reader-text">Inläggsnavigering</h2>
					<a class="prev page-numbers" href="">Föregående</a>
					<span class="page-numbers current">1</span>
					<a class="page-numbers" href="">2</a>
					<a class="next page-numbers" href="">Nästa</a>
				</nav> -->

				<nav class="navigation pagination">
					<h2 class="screen-reader-text"><?php esc_html_e('Inläggsnavigering', 'your-theme-textdomain'); ?></h2>
					<?php
					the_posts_pagination(array(
						'prev_text' => __('Föregående', 'your-theme-textdomain'),
						'next_text' => __('Nästa', 'your-theme-textdomain'),
						'before_page_number' => '<span class="page-numbers">', // Custom HTML before page number
						'after_page_number' => '</span>', // Custom HTML after page number
						'mid_size' => 2, // Number of links to show before and after current page
						'screen_reader_text' => '', // Custom screen reader text
					));
					?>
				</nav>


			</div>
			<aside id="secondary" class="col-xs-12 col-md-3">
				<div id="sidebar">
					<ul>
						<li>
							<form id="searchform" class="searchform">
								<div>
									<label class="screen-reader-text">Sök efter:</label>
									<?php get_search_form(); ?>
								</div>
							</form>
						</li>
					</ul>

					<?php
					dynamic_sidebar('sidebar-1');
					?>

				</div>
			</aside>
		</div>
	</div>
</section>

<?php
get_footer();
?>