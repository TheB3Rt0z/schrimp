<?php namespace schrimp;

class documentation extends controller
{
    static $todos = array();

    static $tests = array();

    function initialize()
    {
        $this->_set_nav(html::box(navigator::get_list()));

        $fallback_method = '_handler' . (!empty($this->_action)
                                        ? '_' . $this->_action
                                        : '');

        $method = $fallback_method . (!empty($this->_args)
                                     ? '_' . $this->_args[0]
                                     : '');

        if (method_exists(__CLASS__, $method = $method)
            || method_exists(__CLASS__, $method = $fallback_method))
        {
            call_user_func_array(array($this, $method),
                                 array_slice($this->_args, 1));
        }
        else
            rt("error/404");
    }

    protected function _handler()
    {
        $this->_set_title($this->_translate('COMPONENT VISIBLE NAME'));
    }

    private function _handler_list()
    {
        $this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
                        . HTML_BREADCRUMB_SEPARATOR
                        . $this->_translate(__FUNCTION__));
    }

    private function _handler_list_files()
    {
        $this->_set_title($this->_translate('COMPONENT VISIBLE NAME')
                        . HTML_BREADCRUMB_SEPARATOR
                        . $this->_translate(__FUNCTION__));
    }
}