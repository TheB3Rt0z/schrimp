<?php

define('PROTOCOL', "http");
define('PATH', "/schrimp");
define('PROJECT', "SCHRIMP Productivity Suite");

class main
{
	private $_controller = null;
	private $_action = false;
	private $_args = array();

	var $controller = false;

	var $title = '';

	var $header = '';
	var $nav = '';
	var $section = '';
	var $article = '';
	var $aside = '';
	var $footer = '';

	function __construct($uri)
	{
		$this->_load_libraries();
		$this->_initialize(str_replace(PATH . "/",
                                       '',
                                       $uri));
	}

	private function _load_libraries()
	{
		foreach (glob(".lib/*.php") as $filename)
		{
    		require_once($filename);
		}
	}

	private function _initialize($route)
	{
		$components = explode("/",
		                      $route);

		if ($components[0])
		{
			if (!file_exists(".app/" . $components[0] . ".php"))
			{
				$this->relocate_to("error/404");
			}

			$this->controller = array_shift($components);

			if (isset($components[0]))
			{
				$this->_action = array_shift($components);

				if ($components)
				{
					$this->_args = $components;
				}
			}
		}
		else
		{
			$this->controller = 'homepage';
		}

		require_once(".app/" . $this->controller . ".php");

		$this->_controller = new $this->controller($this->_action,
	                                               $this->_args);

	    $this->title = $this->_controller->get_title() . "\n";

	    $this->header = $this->_controller->get_header() . "\n";
	    $this->nav = $this->_controller->get_nav() . "\n";
	    $this->section = $this->_controller->get_section() . "\n";
	    $this->article = $this->_controller->get_article() . "\n";
	    $this->aside = $this->_controller->get_aside() . "\n";
		$this->footer = $this->_controller->get_footer() . "\n";
	}

	static function resolve_uri($uri)
	{
		return PROTOCOL . "://" . $_SERVER['HTTP_HOST'] . PATH . "/" . $uri;
	}

	static function relocate_to($url = '')
	{
		header("Location: " . main::resolve_uri($url));
	}

	static function launch_error($msg)
	{
		$msg = str_replace("/",
				           "\\",
						   $msg);

		$msg = urlencode($msg);

		main::relocate_to("error/500/" . $msg);
	}
}

$main = new main($_SERVER['REQUEST_URI']);
//TODO: errori nei link e script fissi qui sotto risultano in redirect-loop infiniti!
?><!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="user-scalable=no,width=device-width" />
		<title>
			<?php echo PROJECT . " | " . $main->title; ?>
		</title>
		<?php echo html::link(".inc/schrimp_favicon.ico",
						      "icon",
						      "image/x-icon"); ?>
	    <?php echo html::link(".inc/style.css",
						      "stylesheet",
						      "text/css"); ?>
		<?php echo html::link(".app/" . $main->controller . ".css",
						      "stylesheet",
						      "text/css"); ?>
		<?php echo html::script("text/javascript",
		                        ".inc/jquery.js"); ?>
		<?php echo html::script("text/javascript",
		                        ".inc/jquery_ui.js"); ?>
	</head>
	<body>
		<header>
			<?php echo $main->header; ?>
		</header>
		<nav>
			<?php echo $main->nav; ?>
		</nav>
		<section>
			<?php echo $main->section; ?>
			<?php echo html::br(); ?>
			<article>
				<?php echo $main->article; ?>

				<div class="notes">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris convallis pretium turpis, eget varius ipsum sodales quis. Nunc a dictum libero. Nulla quis mattis nulla. Pellentesque placerat, lorem et tristique rhoncus, neque nibh vulputate ipsum, nec dignissim nisi nisi nec orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce urna elit, faucibus non dapibus sed, pretium a ipsum. Etiam ac erat nec tellus vulputate congue a at mauris. Cras sem enim, feugiat at egestas et, viverra eu leo. Phasellus nec felis purus, vel ullamcorper augue. Sed nec urna magna, eu fermentum dui. Sed velit eros, lacinia venenatis consequat eget, dapibus sit amet eros. Aenean nibh velit, viverra vel fermentum at, aliquet sed massa. Sed eget mauris felis. Proin vestibulum aliquam ullamcorper.
				</div>

			</article>
			<aside>
				<?php echo $main->aside; ?>
			</aside>
		</section>
		<footer>
			<?php echo $main->footer; ?>
		</footer>
	</body>
</html>