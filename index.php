<?php

/* Das S.C.H.R.I.M.P. Project - Main-application launcher
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
 */

require_once ".main.php"; // loading main application

$main = new main($_SERVER['REQUEST_URI']);

ob_start();

?><!DOCTYPE html>
    <head>
        <?php echo html_doc::get_head_metatags() ?>
        <title>
            <?php
            echo _STR_PROJECT_NAME . " "
               . $main->get_version()
               . " | "
               . $main->title
            ?>
        </title>
        <?php echo html_doc::get_head_favicon($main->controller) ?>
        <?php echo html_doc::get_head_links($main->get_path(),
                                            $main->get_fullpath()) ?>
    </head>
    <body>
        <header>
            <?php echo html::divisor($main->header,
                                     null,
                                     'header') ?>
        </header>
        <nav>
            <?php echo html::divisor($main->nav,
                                     null,
                                     'nav') ?>
        </nav>
        <section>
            <?php echo html::divisor($main->section,
                                     null,
                                     'section') ?>
            <article>
                <?php echo html::divisor($main->article,
                                         null,
                                         'article') ?>
            </article>
            <aside>
                <?php echo html::divisor($main->aside,
                                         null,
                                         'aside') ?>
            </aside>
        </section>
        <footer>
            <?php echo html::divisor($main->footer,
                                     null,
                                     'footer') ?>
        </footer>
        <?php echo html::clearfix() ?>
    </body>
    <?php
    if (_SET_ADVANCED_INTERFACE)
        echo html::divisor('',
                           null,
                           'loading');
    ?>
</html><?php

if (!_SET_DEVELOPMENT_MODE)
    echo str_replace(array("\t", "\n", "\r", "  "), '', ob_get_clean());
else
    echo ob_get_clean();

?>