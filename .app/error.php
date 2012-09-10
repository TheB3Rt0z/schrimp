<?php

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
				$this->_set_article(navigator::render_sitemap());
				break;
			}

			case 500 :
			{
				$this->_handler_500();
				break;
			}

			default :
			{
				main::relocate_to("error/404");
			}
		}

		$this->_set_aside(html::image(".inc/img/schrimp.png",
		                              PROJECT));
	}

	protected function _handler()
	{
		$this->_set_title(ucfirst($this->_translate('unknown error'))
		                . ": " . PROJECT . " KO");

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(1,
                                        $this->_translate('a disturbing problem')));
	}

	private function _handler_400()
	{
		$this->_set_title(ucfirst($this->_translate('COMPONENT VISIBLE NAME'))
                        . " 400: " . $this->_translate('a bad request'));

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(2,
                                        $this->_translate('little too bad') . "!"));
	}

	private function _handler_401()
	{
		$this->_set_title(ucfirst($this->_translate('COMPONENT VISIBLE NAME'))
                        . " 401: " . $this->_translate('unauthorized'));

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(2,
                                        $this->_translate('please log in') . "!"));
	}

	private function _handler_403()
	{
		$this->_set_title(ucfirst($this->_translate('COMPONENT VISIBLE NAME'))
                        . " 403: " . $this->_translate('resource forbidden'));

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(2,
                                        $this->_translate('restricted contents') . "!"));
	}

	private function _handler_404()
	{
		$this->_set_title(ucfirst($this->_translate('COMPONENT VISIBLE NAME'))
                        . " 404: " . $this->_translate('resource not found'));

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(2,
                                        $this->_translate('content not found') . "!"));
	}

	private function _handler_500()
	{
		$this->_set_title(ucfirst($this->_translate('COMPONENT VISIBLE NAME'))
                        . " 500: " . $this->_translate('some internal error'));

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$ending = !empty($this->_args[0])
		          ? $this->_translate('here') . ":"
		          : $this->_translate('now') . "!";

		$this->_set_section(html::title(2,
                                        $this->_translate('something not worked') . " " . $ending));

		if (!empty($this->_args))
		{
			$this->_set_article(html::title(3,
			                                urldecode($this->_args[0])));
		}
	}
}

?>
