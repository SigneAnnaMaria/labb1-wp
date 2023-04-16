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
						<a class="logo" href="index.html">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<label class="screen-reader-text">Sök efter:</label>
								<input type="text" />
								<input type="submit" value="Sök" />
							</div>
						</form>
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

		<?php
		wp_nav_menu(
			array(
				'menu' => 'primary',
				'container' => '',
				'theme_location' => 'primary',
				'items_wrap' => '<ul id="" class"menu">%3$s</ul>'
			)
		);
		?>


		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							<li class="current-menu-item">
								<a href="front-page.php">Hem</a>
							</li>
							<li>
								<a href="blogg.php">Blogg</a>
							</li>
							<li>
								<a href="page-undersida.php">Undersida</a>
							</li>
							<li>
								<a href="page-undersida-2.php">Undersida 2</a>
							</li>
							<li>
								<a href="page-undersida-3.php">Undersida 3</a>
							</li>
							<li>
								<a href="page-undersida-4.php">Undersida 4</a>
							</li>
							<li>
								<a href="kontakt.php">Kontakt</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>