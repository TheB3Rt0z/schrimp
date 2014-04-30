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
</html><?php

$main->result = ob_get_clean();

if (!_SET_DEVELOPMENT_MODE)
    echo str_replace(array
                     (
                         "\t",
                         "\n",
                         "\r",
                         "  ",
                     ),
                     '',
                     $main->result);
else
    echo $main->result;

if (_SET_DEBUG_MODE)
{
    ob_start();
    ?>
    <span style="float: right">
        <form style="float: left;"
              action="http://validator.w3.org/check" enctype="multipart/form-data" method="post" target="_blank">
            <input type="hidden" name="fragment" value="<?php echo htmlspecialchars($main->result) ?>" />
            <input type="hidden" value="0" name="prefill" />
            <input type="hidden" value="Inline" name="doctype" />
                <!--<input type="radio" checked="checked" value="0" id="directgroup_no" name="group">
                <input type="radio" value="1" id="directgroup_yes" name="group">
                <input type="checkbox" value="1" name="ss" id="direct-ss">
                <input type="checkbox" value="1" name="st" id="direct-st">
                <input type="checkbox" value="1" name="outline" id="direct-outline">
                <input type="checkbox" value="1" name="No200" id="direct-No200">
                <input type="checkbox" value="1" name="verbose" id="direct-verbose">-->
            <input type="submit" value="W3C" title="WWW Consortium Markup Validation Service" class="button" />
        </form>
        <a href="http://developers.google.com/speed/pagespeed/insights/?url=<?php echo urlencode($main->resolve_uri($_SERVER['QUERY_STRING'], true)) ?>" target="_blank" title="Google Developers PageSpeed Insights" class="button">PSI</a>
    </span>
    <?php
    echo html::divisor(html::spanner(_STR_PROJECT_NAME . " " . $main->get_version(),
                                     array
                                     (
                                         'button',
                                     )) . ob_get_clean(),
                       array('debug',
                             'fixed'),
                       'schrimp-toolbar');
    echo html::divisor('',
                       array('debug',
                             'fixed'),
                       'schrimp-debug');

    ob_start();
    vd($main->clean_object());
    echo html::divisor(ob_get_clean(),
                       array('debug',
                             'fixed'),
                       'schrimp-object');
    ob_start();
    ?>
    var s_d = document.getElementById('schrimp-debug');
    var eol = "<?php echo html::newline() ?>";

    if (typeof angular != 'undefined')
        s_d.innerHTML += "AngularJS v" + angular.version.full + " loaded" + eol;
    else
        s_d.innerHTML += '<?php echo html::spanner("AngularJS not loaded",
                                                   array
                                                   (
                                                       'schrimp-warning',
                                                   )) ?>' + eol;

    if (typeof jQuery != 'undefined')
    {
        var sd = jQuery('#schrimp-debug');

        sd.append("jQuery v" + jQuery.fn.jquery
                + " loaded" + eol);

        if (typeof jQuery.ui != 'undefined')
            sd.append("- jQuery UI v" + jQuery.ui.version
                    + " loaded" + eol);
        else
            sd.append('<?php echo html::spanner("jQuery.ui not loaded",
                                                        array
                                                        (
                                                            'schrimp-warning',
                                                        )) ?>' + eol);

        if (typeof jQuery.jcarousel != 'undefined')
            sd.append("- jCarousel v"
                    + jQuery.jcarousel.fn.jcarousel
                    + " loaded" + eol);
        else
            sd.append('<?php echo html::spanner("jCarousel not loaded",
                                        array
                                        (
                                            'schrimp-warning',
                                        )) ?>' + eol);
    }
    else
        s_d.innerHTML += '<?php echo html::spanner("jQuery not loaded",
                                                   array
                                                   (
                                                       'schrimp-error',
                                                   )) ?>' + eol;

    if (typeof Prototype != 'undefined')
        s_d.innerHTML += "Prototype v" + Prototype.Version + " loaded" + eol;
    else
        s_d.innerHTML += '<?php echo html::spanner("Prototype not loaded",
                                                   array
                                                   (
                                                       'schrimp-warning',
                                                   )) ?>' + eol;

    if (typeof jwplayer != 'undefined')
        s_d.innerHTML += "JW player v" + jwplayer.version + " loaded" + eol;
    else
        s_d.innerHTML += '<?php echo html::spanner("JW player not loaded",
                                                   array
                                                   (
                                                       'schrimp-warning',
                                                   )) ?>' + eol;

    if (typeof Modernizr != 'undefined')
        s_d.innerHTML += "Modernizr v" + Modernizr._version + " loaded" + eol;
    else
        s_d.innerHTML += '<?php echo html::spanner("Modernizr not loaded",
                                                   array
                                                   (
                                                       'schrimp-warning',
                                                   )) ?>' + eol;
    <?php echo toolbox::jsdebug(); // upper js code here please, the next raus!
    echo html::add_js_script(ob_get_clean());
}