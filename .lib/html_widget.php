<?php namespace schrimp;

class html_widget extends html
{
    static $todos = array();

    static $tests = array();

    private static function _add_toolbar_buttons($html,
                                                 $css,
                                                 $psl)
    {
        $buttons = html_form::form('debug_w3c_validation',
                                   array
                                   (
                                       'left',
                                   ),
                                   '_blank',
                                   htmlspecialchars($html))
                 . (_SET_CSS_COMPRESSION
                   ? html_form::form('debug_css_validation',
                                     array
                                     (
                                         'left',
                                     ),
                                     '_blank',
                                     htmlspecialchars($css))
                   : '')
                 . html::hyperlink($psl,
                                   "PSI",
                                   array
                                   (
                                       'button',
                                   ),
                                   '_blank',
                                   "Google Developers PageSpeed Insights");

        return html::spanner($buttons,
                             array
                             (
                                 'right',
                             ));
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
        $psl = 'http://developers.google.com/speed/pagespeed/insights/?url='
             . urlencode($main->resolve_uri($_SERVER['QUERY_STRING'],
                                            true));

        echo html::divisor(html::spanner(STR_PROJECT_FULL,
                                         array
                                         (
                                             'button',
                                         ))
                         . self::_add_toolbar_buttons($main->html,
                                                      $main->linked_files,
                                                      $psl),
                           array
                           (
                               'debug',
                               'fixed',
                           ),
                           'schrimp-toolbar');
    }
}