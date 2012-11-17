<?php

class error extends controller
{
	const VISIBLE_IN_NAVIGATION = false;

	const RENDER_BREADCRUMB = false;

	function initialize()
	{
		if (!$this->_action)
			$this->_handler();
		elseif (is_numeric($this->_action)
			&& method_exists(__CLASS__, '_handler_' . $this->_action))
		{
			call_user_func(array(__CLASS__, '_handler_' . $this->_action));
		}
		else
			main::relocate_to("error/404");

		$this->_set_aside(html::image(".inc/img/schrimp.png",
		                              STR_PROJECT_NAME));
	}

	protected function _handler()
	{
		$this->_set_title(ucfirst($this->_translate('unknown error'))
		                . ": " . STR_PROJECT_NAME . " KO");

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(1,
                                        $this->_translate('a ugly problem')));
	}

	private function _handler_400()
	{
		$this->_set_title(ucfirst($this->_translate('COMPONENT VISIBLE NAME'))
                        . " 400: " . $this->_translate('a bad request'));

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(2,
                                        $this->_translate('little bad') . "!"));
	}

	private function _handler_401()
	{
		$this->_set_title(ucfirst($this->_translate('COMPONENT VISIBLE NAME'))
                        . " 401: " . $this->_translate('unauthorized'));

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(2,
                                        $this->_translate('please log') . "!"));
	}

	private function _handler_403()
	{
		$this->_set_title(ucfirst($this->_translate('COMPONENT VISIBLE NAME'))
                        . " 403: " . $this->_translate('resource forbidden'));

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(2,
                                        $this->_translate('no entry') . "!"));
	}

	private function _handler_404()
	{
		$this->_set_title(ucfirst($this->_translate('COMPONENT VISIBLE NAME'))
                        . " 404: " . $this->_translate('resource not found'));

		$this->_set_header(html::title(1,
                                       "Ooops!!! " . $this->get_title() . "!"));

		$this->_set_section(html::title(2,
                                        $this->_translate('no content') . "!"));

        $this->_set_article(navigator::render_sitemap());
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
                                        $this->_translate('something not works')
				                      . " " . $ending));
// qui si potrebbe usare il SOAP per passare header e contenuto (messaggio)
		if (!empty($this->_args))
			$this->_set_article(html::title(3,
			                                urldecode($this->_args[0])));
	}
}

?>
