<?php

require_once ".main.php";

$main = new main($_SERVER['REQUEST_URI']);

ob_start();

?><!DOCTYPE html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="user-scalable=no,width=device-width" />
		<title>
			<?php
			echo PROJECT . " "
			   . $main->get_version()
			   . " | "
               . $main->title;
			?>
		</title>
		<?php // SVG inline editing (php driven) if css + js != enough
		html::add_favicon(".inc/img/schrimp_favicon.ico");
	    html::add_stylesheet(".inc/style.css");
		html::add_stylesheet(".app/" . main::$controller . ".css");
		html::add_js_file(".inc/js/jquery.js");
		html::add_js_file(".inc/js/jquery_ui.js");
		//html::add_js_file("//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js");
		//html::add_js_file("//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js");
		//html::add_js_file(".inc/jquery_webcam/jquery.webcam.js");
		?>
<!--<link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>-->
	</head>
	<body>
		<header>
			<?php echo $main->header; ?>
			<?php navigator::render_breadcrumb(); ?>
		</header>
		<nav>
			<?php echo $main->nav; ?>
		</nav>
		<section>
			<?php echo $main->section; ?>
			<article>
				<?php echo $main->article; ?>
			</article>
			<aside>
				<?php echo $main->aside; ?>
            </aside>
		</section>
		<footer>
			<?php echo $main->footer; ?>
		</footer>
	</body>
</html><?php

if (OUTPUT_COMPRESSION)
	echo str_replace(array("\t", "\n", "\r", "  "), '', ob_get_clean());
else
	echo ob_get_clean();

?><?php
$op_on = ".999";
$op_off = ".666";
$trans = "all .25s ease";
// applicare lo stesso effetto ai link? text-shadow invee di box..
// processare quel foglio con palestra e idee per lo schrimp!
?>

<style>
    .exp
    {
        box-shadow: 0 1px 1px black;
        -webkit-box-shadow: 0 1px 1px black;
        -moz-box-shadow: 0 1px 1px black;
        -o-box-shadow: 0 1px 1px black;
        float: left;
        margin: 10px;
        background-color: white;
        opacity: <?php echo $op_off; ?>;
        -webkit-opacity: <?php echo $op_off; ?>;
        -moz--opacity: <?php echo $op_off; ?>;
        -o-opacity: <?php echo $op_off; ?>;
        padding: 5px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -o-border-radius: 5px;
        transition: <?php echo $trans; ?>;
        -webkit-transition: <?php echo $trans; ?>;
        -moz-transition: <?php echo $trans; ?>;
        -o-transition: <?php echo $trans; ?>;
        border: solid 1px;
        border-top-color: #ccc;
        border-left-color: #999;
        border-right-color: #666;
        border-bottom-color: #333;
    }
    .exp:hover
    {
        opacity: <?php echo $op_on; ?>;
        -webkit-opacity: <?php echo $op_on; ?>;
        -moz--opacity: <?php echo $op_on; ?>;
        -o-opacity: <?php echo $op_on; ?>;
        box-shadow: 0 2px 2px black;
        -webkit-box-shadow: 0 2px 2px black;
        -moz-box-shadow: 0 2px 2px black;
        -o-box-shadow: 0 2px 2px black;
    }
</style>

<div style="background-color: dimgrey; padding: 50px; height: 200px;">

<div class="exp">
    NUMERO 1
</div>

<div class="exp">
    NUMERO 2
</div>

</div>