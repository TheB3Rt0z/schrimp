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

        return html::spanner(number_format(time() + microtime() - $_SERVER['REQUEST_TIME'], 3) . '+<span id="time-ready">' . time() . '</span>/<span id="time-load">' . time() . '</span>s', ['button']);
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
                                             array
                                             (
                                                 'button',
                                             ),
                                             '_blank',
                                             "GitHub / TheB3Rt0z / schrimp")
        		           . $this->_add_speed_analisys() . $buttons,
                             array
                             (
                                 'right',
                             ));
    }

    private function _get_form_html_validation()
    {
        $html = $this->_main->html;

        return html_form::form('debug_w3c_validation',
                               array
                               (
                                   'left',
                               ),
                               '_blank',
                               htmlspecialchars($html))
             . html::spanner(toolbox::strsize($html),
                             array
                             (
                                 'button',
                             ));
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
        $css = $this->_main->linked_files;

        return html_form::form('debug_css_validation',
                                array
                                (
                                    'left',
                                ),
                                '_blank',
                                htmlspecialchars($css))
             . html::spanner(toolbox::strsize($css),
                             array
                             (
                                 'button',
                             ));
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