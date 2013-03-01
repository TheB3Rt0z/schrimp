<?php

require_once ".main.php"; // loading main application

$main = new main($_SERVER['REQUEST_URI']);

ob_start();

?><!DOCTYPE html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="user-scalable=no,width=device-width" />
		<title>
			<?php
			echo _STR_PROJECT_NAME . " "
			   . $main->get_version()
			   . " | "
               . $main->title;
			?>
		</title>
		<?php // SVG inline editing (php driven) if css + js != enough
		html::add_favicon(_SET_INCLUDES_PATH . "img/schrimp_favicon.ico");
		//html::add_stylesheet("http://fonts.googleapis.com/css?family=Amaranth:700");
	    html::add_stylesheet(_SET_INCLUDES_PATH . "style.css");
		html::add_stylesheet($main->get_fullpath() . ".css");
		html::add_js_file(_SET_INCLUDES_PATH . "js/jquery.js"); //html::add_js_file("//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js");
		html::add_js_file(_SET_INCLUDES_PATH . "js/jquery_ui.js"); //html::add_js_file("//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js");
		html::add_js_file(_SET_INCLUDES_PATH . "js/jquery_gestures.js");
		html::add_js_file(_SET_INCLUDES_PATH . "js/jquery_jcarousel.js");
		?>
	</head>
	<body>
		<header>
			<?php echo html::divisor($main->header, null, 'header'); ?>
			<?php
			if (_SET_ADVANCED_INTERFACE)
				navigator::render_active_breadcrumb();
			else
				navigator::render_breadcrumb(); // nothing shown on home page
			?>
		</header>
		<nav>
			<?php echo html::divisor($main->nav, null, 'nav'); ?>
		</nav>
		<section>
			<?php echo html::divisor($main->section, null, 'section'); ?>
			<article>
				<?php echo html::divisor($main->article, null, 'article'); ?>
			</article>
			<aside>
				<?php echo html::divisor($main->aside, null, 'aside'); ?>
            </aside>
		</section>
		<footer>
			<?php echo html::divisor($main->footer, null, 'footer'); ?>
		</footer>
	</body>
</html><?php

if (!_SET_DEVELOPMENT_MODE)
	echo str_replace(array("\t", "\n", "\r", "  "), '', ob_get_clean());
else
	echo ob_get_clean();

?>