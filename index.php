<?php

//TODO: web-storage, session su PHP o memcache o DB? pspell&gettext

define('PROTOCOL', "http" . (getenv('HTTPS') == 'on' ? "s" : ''));

define('PATH', "/schrimp");

define('PROJECT', "Das SCHRIMP");

define('HOME_COMPONENT', "homepage");

define('COMPLEXITY_INDEX', 12);

class main
{
	private $_call = null;

	static $controller = null;
	static $action = false;
	static $args = array();

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

		// creare micro-alias delle funzioni + utili (direttamente nela libreria?)

		// bisogna immaginarsi qualcosa per la risoluzione di eventuali conflitti
		foreach (glob("lib/*.php") as $filename)
		{
			require_once($filename);
		}
	}

	private function _initialize($route)
	{// verificare se troppo errordocument fa problemi SEO ecc
		$components = explode("/",
		                      $route);

		if ($components[0])
		{
			if (!file_exists(".app/" . $components[0] . ".php"))
			{
				$this->relocate_to("error/404");
			}

			self::$controller = array_shift($components);
			if (!empty($components))
			{
				self::$action = array_shift($components);
				if ($components)
				{
					self::$args = $components;
				}
			}
		}
		else
		{
			self::$controller = HOME_COMPONENT;
		}

		require_once(".app/" . self::$controller . ".php");

		$this->_call = new self::$controller(self::$action,
	                                         self::$args);

	    $this->title = $this->_call->get_title() . "\n";

	    $this->header = $this->_call->get_header() . "\n";
	    $this->nav = $this->_call->get_nav() . "\n";
	    $this->section = $this->_call->get_section() . "\n";
	    $this->article = $this->_call->get_article() . "\n";
	    $this->aside = $this->_call->get_aside() . "\n";
		$this->footer = $this->_call->get_footer() . "\n";
	}

	static function get_version()
	{
		// si potrebbe legare a questa funzione un controllo per la doc..
		// se non esiste il file docs_v#.##.nfo lo si crea e si cancella gli altri
		return number_format(date('y') - 13
		                   + (date('n') - 10) / 12
		                   + (date('j') - 3) / date('t') / 10,
		                     2);
	}

	static function is_memcached()
	{
		//TODO: verificare che effettivamente il servizio funzioni con almeno un server..
		return extension_loaded('memcache');
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

ob_start();

?><!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="user-scalable=no,width=device-width" />
		<title>
			<?php
			echo PROJECT
			   . " v" . $main->get_version()
	           . " | "
               . $main->title;
			?>
		</title>
		<?php
		html::add_favicon(".inc/img/schrimp_favicon.ico");
	    html::add_stylesheet(".inc/style.css");
		html::add_stylesheet(".app/" . main::$controller . ".css");
		html::add_js_file(".inc/js/jquery.js");
		html::add_js_file(".inc/js/jquery_ui.js");
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
		JQ = jQuery.noConflict();
		</script>
		//html::add_js_file(".inc/jquery_webcam/jquery.webcam.js");
		?>
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
</html><?php echo str_replace(array("\t", "\n", "\r", "  "), '', ob_get_clean()); ?>

<?php
$op_on = ".99";
$op_off = ".66";
$trans = "all .5s ease";
// applicare lo stesso effetto ai link? text-shadow invee di box..
// processare quel foglio con palestra e idee per lo schrimp!
?>

<style>
    .exp
    {
        box-shadow: 1px 2px 3px black;
        -webkit-box-shadow: 1px 2px 3px black;
        -moz-box-shadow: 1px 2px 3px black;
        -o-box-shadow: 1px 2px 3px black;
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
        box-shadow: 2px 4px 6px black;
        -webkit-box-shadow: 2px 4px 6px black;
        -moz-box-shadow: 2px 4px 6px black;
        -o-box-shadow: 2px 4px 6px black;
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