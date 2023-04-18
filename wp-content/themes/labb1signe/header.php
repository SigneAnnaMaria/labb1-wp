<!DOCTYPE html>
<html>

<?php
wp_head();
?>

<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<!-- Lägger till hem url länk på titel Labb1 -->
						<a class="logo" href="<?php echo home_url(); ?>">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<!-- Lägger till sökfunktion -->
						<?php get_search_form(); ?>

					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">

			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>


		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							<!-- Lägger till meny som är skapat i wp-panel -->
							<?php wp_nav_menu(array(
								'menu' => 'primary',
								'theme_location' => 'primary'
							));  ?>
						</ul>
					</div>
				</div>
			</div>
		</nav>