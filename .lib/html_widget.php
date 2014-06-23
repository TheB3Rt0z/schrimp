<?php namespace schrimp;

class html_widget extends html
{
    static $todos = array();

    static $tests = array();

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
        echo html::divisor(html::spanner(_STR_PROJECT_NAME . " " . $main->get_version(),
                                 array
                                 (
                                     'button',
                                 ))
                         . html::spanner(html_form::form('debug_w3c_validation',
                                                         array
                                                         (
                                                             'left',
                                                         ),
                                                         '_blank',
                                                         htmlspecialchars($main->html))
                                       . html::hyperlink('http://developers.google.com/speed/pagespeed/insights/?url=' . urlencode($main->resolve_uri($_SERVER['QUERY_STRING'],
                                                                                                                                                      true)),
                                                         "PSI",
                                                         array
                                                         (
                                                             'button',
                                                         ),
                                                         '_blank',
                                                         "Google Developers PageSpeed Insights"),
                                         array
                                         (
                                             'right',
                                         )),
                           array
                           (
                               'debug',
                               'fixed',
                           ),
                           'schrimp-toolbar');
    }
}