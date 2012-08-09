<?php

class error extends controller
{
	function initialize()
	{
		switch ($this->_action)
		{
			case false :
			{
				$this->_handler();
				break;
			}

			case 401 :
			{
				$this->_handler_401();
				break;
			}

			case 403 :
			{
				$this->_handler_403();
				break;
			}

			case 404 :
			{
				$this->_handler_404();
				$sitemap = main::make_sitemap();
				$this->_set_article($sitemap);
				break;
			}

			case 500 :
			{
				$this->_handler_500();
				break;
			}

			default :
			{
				$this->relocate_to($url = "error/404");
			}
		}

		$this->_set_aside(html::img(".inc/schrimp.png",
		                            PROJECT));
	}

	private function _handler()
	{
		$this->_set_title("UNKNOWN ERROR: schrimp KO");
		$this->_set_header(html::h1("Ooops!!! " . $this->get_title() . "!"));
		$this->_set_section(html::h2("Some disturbing problem occurred here.."));
	}

	private function _handler_401()
	{
		$this->_set_title("ERROR 401: un-authorized user");
		$this->_set_header(html::h1("Ooops!!! " . $this->get_title() . "!"));
		$this->_set_section(html::h2("Please log you in to access this resource!"));
	}

	private function _handler_403()
	{
		$this->_set_title("ERROR 403: resource forbidden");
		$this->_set_header(html::h1("Ooops!!! " . $this->get_title() . "!"));
		$this->_set_section(html::h2("You're trying to access our restricted contents!"));
	}

	private function _handler_404()
	{
		$this->_set_title("ERROR 404: resource not found");
		$this->_set_header(html::h1("Ooops!!! " . $this->get_title() . "!"));
		$this->_set_section(html::h2("What you search doesn't seem to exist!"));
	}

	private function _handler_500()
	{
		$this->_set_title("ERROR 500: some interne error");
		$this->_set_header(html::h1("Ooops!!! " . $this->get_title() . "!"));
		$this->_set_section(html::h2("Something has not worked right here!"));
	}
}

?>
