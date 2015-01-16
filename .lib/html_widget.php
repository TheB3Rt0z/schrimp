<?php namespace schrimp;

define('_HTML_WIDGET_ST_THRESHOLD', MAX_SCRIPT_TIME / 6 * 5);
define('_HTML_WIDGET_MU_THRESHOLD', MAX_MEMORY_USAGE / 5 * 4);

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

    private function _add_speed_analisys() // requires global start (in schrimp.js)
    {
        html::add_js_script("jQuery(document).ready(function()
                             {
                                 var time_ready = (Date.now() / 1000 - parseFloat(jQuery('#time-ready').html())).toFixed(3);
                                 jQuery('#time-ready').html(time_ready);
                             });
                             jQuery(window).load(function()
                             {
                                 var time_load = (Date.now() / 1000 - parseFloat(jQuery('#time-load').html())).toFixed(3);
                                 jQuery('#time-load').html(time_load);
                             });");

        $php_time = time() + microtime() - $_SERVER['REQUEST_TIME'];

        return html::spanner(number_format($php_time, 3) . "+"
        		           . html::spanner(time(),
        		           		           array(),
        		           		           "time-ready") . "/"
        		           . html::spanner(time(),
        		           		           array(),
        		           		           "time-load") . "sec",
                             array_merge(['button'],
                             		     ($php_time <= _HTML_WIDGET_ST_THRESHOLD
                             		     ? ['schrimp-valid']
                                         : ($php_time <= MAX_SCRIPT_TIME
                                           ? ['schrimp-warning']
                                           : ['schrimp-error']))));
    }

    private function _add_memory_analisys()
    {
        $memory_usage = number_format(memory_get_usage() / pow(1024, 2),
        		                      3); // bytes to kilobytes to megabytes

        return html::spanner(html::spanner($memory_usage . "MBs"),
        		             array_merge(['button'],
                             		     ($memory_usage <= _HTML_WIDGET_MU_THRESHOLD
                             		     ? ['schrimp-valid']
                                         : ($memory_usage <= MAX_MEMORY_USAGE
                                           ? ['schrimp-warning']
                                           : ['schrimp-error']))));
    }

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

        return html::spanner(html::hyperlink(SET_GITHUB_PATH,
                                             html::image(_SET_INCLUDES_PATH
                                                       . 'img/github_favicon_13x13.ico',
                                                         "GitHub icon "),
                                             ['button'],
                                             '_blank',
                                             "GitHub / TheB3Rt0z / schrimp")
                           . $this->_add_speed_analisys()
        		           . $this->_add_memory_analisys()
        		           . $buttons,
                             ['right']);
    }

    private function _get_form_html_validation()
    {
        $html = $this->_main->html;

        return html_form::form('debug_w3c_validation',
                               ['left'],
                               '_blank',
                               htmlspecialchars($html))
             . html::spanner(toolbox::strsize($html),
                             ['button']);
    }

    private function _get_form_javascript_validation()
    {
        return html_form::form('debug_js_validation',
                               ['left'],
                               '_blank',
                               htmlspecialchars($this->_main->loaded_scripts));
    }

    private function _get_form_stylesheets_validation()
    {
        $css = $this->_main->linked_files;

        return html_form::form('debug_css_validation',
                                ['left'],
                                '_blank',
                                htmlspecialchars($css))
             . html::spanner(toolbox::strsize($css),
                             ['button']);
    }

    private function _get_link_google_pagespeed()
    {
        return html::hyperlink($this->_psl,
                               "PSI",
                               ['button'],
                               '_blank',
                               "Google Developers PageSpeed Insights");
    }

    static function debug_javascript()
    {
        echo html::divisor('',
                           ['debug', 'fixed'],
                           'schrimp-debug');

        toolbox_js::debug();
    }

    static function debug_object($object)
    {
        ob_start();

        vd($object);

        echo html::divisor(ob_get_clean(),
                           ['debug', 'fixed'],
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
                                         ['button'])
                         . $self->_add_toolbar_buttons(),
                           ['debug', 'fixed'],
                           'schrimp-toolbar');
    }
}