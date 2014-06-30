<?php namespace schrimp;

class html_widget extends html
{
    static $todos = array();

    static $tests = array();

    private $_main = null;

    protected $_html = '';
    protected $_css = '';
    protected $_js = '';
    protected $_psl = '';

    function __construct() {}

    private function _add_toolbar_buttons()
    {
        $buttons = $this->_get_form_html_validation()
                 . (_SET_CSS_COMPRESSION
                   ? $this->_get_form_stylesheets_validation()
                   : '')
                 . (_SET_JS_COMPRESSION
                   ? $this->_get_form_javascript_validation()
                   : '')
                 . (!toolbox::localhosted()
                   ? $this->_get_link_google_pagespeed()
                   : '' );

        return html::spanner($buttons,
                             array
                             (
                                 'right',
                             ));
    }

    private function _get_form_html_validation()
    {
        return html_form::form('debug_w3c_validation',
                               array
                               (
                                   'left',
                               ),
                               '_blank',
                               htmlspecialchars($this->_main->html));
    }

    private function _get_form_javascript_validation()
    {
        return html_form::form('debug_js_validation',
                               array
                               (
                                   'left',
                               ),
                               '_blank',
                               htmlspecialchars($this->_main->loaded_scripts));
    }

    private function _get_form_stylesheets_validation()
    {
        return html_form::form('debug_css_validation',
                                array
                                (
                                    'left',
                                ),
                                '_blank',
                                htmlspecialchars($this->_main->linked_files));
    }

    private function _get_link_google_pagespeed()
    {
        return html::hyperlink($this->_psl,
                               "PSI",
                               array
                               (
                                   'button',
                               ),
                               '_blank',
                               "Google Developers PageSpeed Insights");
    }

    static function debug_javascript()
    {
        echo html::divisor('',
                           array
                           (
                               'debug',
                               'fixed',
                           ),
                           'schrimp-debug');

        toolbox_js::debug();
    }

    static function debug_object($object)
    {
        ob_start();

        vd($object);

        echo html::divisor(ob_get_clean(),
                           array
                           (
                               'debug',
                               'fixed',
                           ),
                           'schrimp-object');
    }

    static function debug_toolbar(main $main)
    {
        $self = new self();

        $self->_main = $main;

        $self->_psl = 'http://developers.google.com/speed/pagespeed/insights/?url='
                    . urlencode($self->_main->resolve_uri($_SERVER['QUERY_STRING'],
                                                          true));

        echo html::divisor(html::spanner(STR_PROJECT_FULL,
                                         array
                                         (
                                             'button',
                                         ))
                         . $self->_add_toolbar_buttons(),
                           array
                           (
                               'debug',
                               'fixed',
                           ),
                           'schrimp-toolbar');
    }
}