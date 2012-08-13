<?php //TODO: web-storage, session su PHP o memcache o DB? pspell&gettext

define('PROTOCOL', "http");
define('PATH', "/schrimp");
define('PROJECT', "SCHRIMP Productivity Suite");

define('HOME_COMPONENT', "homepage");

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
			$this->controller = HOME_COMPONENT;
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

		$url = "error/500/" . urlencode($msg);

		if ($_SERVER['REQUEST_URI'] != PATH . "/" . $url)
		{
			main::relocate_to($url);
		}
	}
}

$main = new main($_SERVER['REQUEST_URI']);
$navigator = new navigator;
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