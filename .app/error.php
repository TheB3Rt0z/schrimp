<?php //TODO: tradurre tutti i messaggi di testo e infilarli nel error.txt

class error extends controller
{
	const VISIBLE_IN_NAVIGATION = false;

	function initialize()
	{
		switch ($this->_action)
		{
			case false :
			{
				$this->_handler();
				break;
			}

			case 400 :
			{
				$this->_handler_400();
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
				$sitemap = navigator::make_sitemap();
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
				$this->relocate_to("error/404");
			}
		}

		$this->_set_aside(html::image(".inc/schrimp.png",
		                              PROJECT));
	}

	protected function _handler()
	{
		$this->_set_title("UNKNOWN ERROR: schrimp KO");
		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));
		$this->_set_section(html::title(1,
                                        "Some disturbing problem occurred here.."));
	}

	private function _handler_400()
	{
		$this->_set_title("ERROR 400: that's a bad request");
		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));
		$this->_set_section(html::title(2,
                                        "It seems, that you are a little too bad!"));
	}

	private function _handler_401()
	{
		$this->_set_title("ERROR 401: un-authorized user");
		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));
		$this->_set_section(html::title(2,
                                        "Please log you in to access this resource!"));
	}

	private function _handler_403()
	{
		$this->_set_title("ERROR 403: resource forbidden");
		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));
		$this->_set_section(html::title(2,
                                        "You're trying to access our restricted contents!"));
	}

	private function _handler_404()
	{
		$this->_set_title("ERROR 404: resource not found");
		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));
		$this->_set_section(html::title(2,
                                        "What you search doesn't seem to exist!"));
	}

	private function _handler_500()
	{
		$this->_set_title("ERROR 500: some interne error");
		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));
		$ending = !empty($this->_args) ? "here:" : "now!";
		$this->_set_section(html::title(2,
                                        "Something has not worked right " . $ending));

		if (!empty($this->_args))
		{
			$this->_set_article(html::title(3,
			                                urldecode($this->_args[0])));
		}
	}
}

?>
