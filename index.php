<?php

define('PATH', "/schrimp");
define('PROJECT', "Das SCHRIMP!");

class main
{
	private $_controller = null;
	private $_action = false;
	private $_args = array();

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
				$this->relocate_to($url = "error/404");
			}

			$controller = array_shift($components);

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
			$controller = 'homepage';
		}

		require_once(".app/" . $controller . ".php");

		$this->_controller = new $controller($this->_action,
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
		return "http://" . $_SERVER['HTTP_HOST'] . PATH . "/" . $uri;
	}

	static function relocate_to($url = '')
	{
		header("Location: " . main::resolve_uri($url));
	}

	static function make_sitemap()
	{
		return array();
	}
}

$main = new main($_SERVER['REQUEST_URI']);

?><!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="user-scalable=no,width=device-width" />
		<title>
			<?php echo PROJECT . " | " . $main->title; ?>
		</title>
		<?php echo html::link(".inc/das_schrimp.ico",
						      "icon",
						      "image/x-icon"); ?>
	    <?php echo html::link(".inc/default_style.css",
						      "stylesheet",
						      "text/css"); ?>
		<?php echo html::script("text/javascript",
		                        ".inc/jquery_min.js"); ?>
		<?php echo html::script("text/javascript",
		                        ".inc/jquery_ui_min.js"); ?>
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
</html>