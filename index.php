<?php namespace schrimp;

/* The S.C.H.R.I.M.P. Project - Main-application launcher
 *
 * Syntax conventions (for developers only):
 *
 * - indents always by 4 spaces, interval-lines have height 1
 * - always vertical aligned curly brackets (if not empty)
 * - string, paths & html attributes: "", identifiers & empty-string: '',
 * - inline comments with prefix " // " & only on not-empty lines
 * - private or protected methods/variables/constants with prefix "_"
 * - methods usage-compliant prefixes:
 * - - add: usually add some elements to some internal structure..
 * - - get: traditional getter for private/protected properties and more
 * - - initialize: prepare objects (or singletones) after/during creation
 * - - is: boolean check of various conditions
 * - - list: outputs usually datasets, f.e. in array form
 * - - print: outputs directly something (through echo or print family)
 * - - render: like print, but for complete entities (f.e. html widgets)
 * - - set: traditional setter for private/protected properties
 * - - _handler: application controller, protected or private if not simple
 *
 * Make it work, make it ordently, make it performant, make it beautiful
 */

require_once ".main.php"; // loading main application

$main = new main($_SERVER['REQUEST_URI']);

ob_start();

?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]> <html class="ie7"> <![endif]-->
<!--[if IE 8 ]> <html class="ie8"> <![endif]-->
<!--[if gt IE 8]> <html class="ie"> <![endif]-->
    <head>
        <?php
        echo html_doc::get_head_metatags()
           . html_doc::get_head_favicon();
        $main->linked_files = html_doc::get_head_links($main->get_fullpath());
        $main->loaded_scripts = html_doc::get_head_scripts() ?>

        <title><?php echo (_SET_DEVELOPMENT_MODE
                          ? _STR_PROJECT_NAME . " " . $main->get_version() . " | "
                          : '') . $main->title ?></title>
    </head>

    <body>
        <header>
            <?php echo html::divisor($main->header,
                                     null,
                                     'header') . "\n" ?>
        </header>

        <nav>
            <?php echo html::divisor($main->nav,
                                     null,
                                     'nav') . "\n" ?>
        </nav>

        <section>
            <?php echo html::divisor($main->section,
                                     null,
                                     'section') . "\n" ?>

            <article>
                <?php echo html::divisor($main->article,
                                         null,
                                         'article') . "\n" ?>
            </article>

            <aside>
                <?php echo html::divisor($main->aside,
                                         null,
                                         'aside') . "\n" ?>
            </aside>
        </section>

        <footer>
            <?php echo html::divisor($main->footer,
                                     null,
                                     'footer') . "\n" ?>
        </footer>

        <?php echo html::clearfix() . "\n" ?>

        <?php
        if (_SET_ADVANCED_INTERFACE)
            echo html::divisor('',
                               null,
                               'loading') . "\n"
        ?>
    </body>
</html><?php $main->render($result = ob_get_clean());

if (_SET_DEBUG_MODE) // client-side additional html/js code
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
                                                     htmlspecialchars($result))
                                   . html::hyperlink('http://developers.google.com/speed/pagespeed/insights/?url=' . urlencode($main->resolve_uri($_SERVER['QUERY_STRING'], true)),
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

    echo html::divisor('',
                       array
                       (
                           'debug',
                           'fixed',
                       ),
                       'schrimp-debug');

    ob_start();
    vd($main->clean_object());
    echo html::divisor(ob_get_clean(),
                       array
                       (
                           'debug',
                           'fixed',
                       ),
                       'schrimp-object');

    toolbox_js::debug();
}