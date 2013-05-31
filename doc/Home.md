```php
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
 */

require_once ".main.php"; // loading main application

$main = new main($_SERVER['REQUEST_URI']);

ob_start();

?><!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="user-scalable=no,width=device-width" />
        <title>
            <?php
            echo _STR_PROJECT_NAME . " "
               . $main->get_version()
               . " | "
               . $main->title;
            ?>
        </title>
        <?php echo $main->get_head_links(); ?>
    </head>
    <body>
        <header>
            <?php echo html::divisor($main->header, null, 'header'); ?>
        </header>
        <nav>
            <?php echo html::divisor($main->nav, null, 'nav'); ?>
        </nav>
        <section>
            <?php echo html::divisor($main->section, null, 'section'); ?>
            <article>
                <?php echo html::divisor($main->article, null, 'article'); ?>
            </article>
            <aside>
                <?php echo html::divisor($main->aside, null, 'aside'); ?>
            </aside>
        </section>
        <footer>
            <?php echo html::divisor($main->footer, null, 'footer'); ?>
        </footer>
        <?php echo html::clearfix(); ?>
    </body>
</html><?php

if (!_SET_DEVELOPMENT_MODE)
    echo str_replace(array("\t", "\n", "\r", "  "), '', ob_get_clean());
else
    echo ob_get_clean();

?>
```  
