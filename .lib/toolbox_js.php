<?php namespace schrimp;

class toolbox_js extends toolbox
{
    static $todos = array();

    static $tests = array();

    private function _print_php_test()
    {
        if (version_compare(PHP_VERSION, '5.4.0') >= 0)
        {
            ?>
            db.innerHTML += 'Running on PHP v<?php echo phpversion() ?>' + eol;
            <?php
        }
        else
        {
            $error = "Server's PHP version is too old (" . phpversion()  . "), "
                   . "version 5.4.0 is at least required!";
            ?>
            db.innerHTML += '<?php echo html::spanner(addslashes($error),
                                                      ['schrimp-error']) ?>' + eol;
            <?php
        }
    }

    private function _print_angularjs_test()
    {
        ?>
        if (typeof angular != 'undefined')
            db.innerHTML += "AngularJS v" + angular.version.full + " loaded";
        else
            db.innerHTML += '<?php echo html::spanner("AngularJS not loaded",
                                                      ['schrimp-warning']) ?>';
        db.innerHTML += eol;
        <?php
    }

    private function _print_jquery_tests()
    {
        ?>
        if (typeof jQuery != 'undefined')
        {
            var sd = jQuery('#schrimp-debug');

            sd.append("jQuery v" + jQuery.fn.jquery
                    + " loaded" + eol);

            if (typeof jQuery.ui != 'undefined')
                sd.append("- jQuery UI v" + jQuery.ui.version
                        + " loaded" + eol);
            else
                sd.append('<?php echo html::spanner("- jQuery.ui not loaded",
                                                    ['schrimp-warning']) ?>' + eol);

            if (typeof jQuery.jcarousel != 'undefined')
                sd.append("- jCarousel v"
                        + jQuery.jcarousel.fn.jcarousel
                        + " loaded" + eol);
            else
                sd.append('<?php echo html::spanner("- jCarousel not loaded",
                                                    ['schrimp-warning']) ?>' + eol);

            if (typeof($.fn.modal) != 'undefined')
                sd.append("- Bootstrap is loaded" + eol);
            else
                sd.append('<?php echo html::spanner("- Bootstrap not loaded",
                                                    ['schrimp-warning']) ?>' + eol);
        }
        else
            db.innerHTML += '<?php echo html::spanner("jQuery not loaded",
                                                      ['schrimp-error']) ?>' + eol;
        <?php
    }

    private function _print_prototype_test()
    {
        ?>
        if (typeof Prototype != 'undefined')
            db.innerHTML += "Prototype v" + Prototype.Version + " loaded";
        else
            db.innerHTML += '<?php echo html::spanner("Prototype not loaded",
                                                      ['schrimp-warning']) ?>';
        db.innerHTML += eol;
        <?php
    }

    private function _print_jwplayer_test()
    {
        ?>
        if (typeof jwplayer != 'undefined')
            db.innerHTML += "JW player v" + jwplayer.version + " loaded";
        else
            db.innerHTML += '<?php echo html::spanner("JW player not loaded",
                                                      ['schrimp-warning']) ?>';
        db.innerHTML += eol;
        <?php
    }

    private function _print_modernizr_test()
    {
        ?>
        if (typeof Modernizr != 'undefined')
            db.innerHTML += "Modernizr v" + Modernizr._version + " loaded";
        else
            db.innerHTML += '<?php echo html::spanner("Modernizr not loaded",
                                                      ['schrimp-warning']) ?>';
        db.innerHTML += eol;
        <?php
    }

    static function comprime($code)
    {
        require_once('.jshrink_minifier.php');

        return preg_replace('/[\x00-\x1F\x80-\xFF]/',
                            '',
                            \JShrink\Minifier::minify($code));
    }

    static function debug()
    {
        $self = new self;

        ob_start();

        ?>
        var db = document.getElementById('schrimp-debug');
        var eol = "<?php echo html::newline() ?>";
        <?php

        $self->_print_php_test();

        $self->_print_angularjs_test();
        $self->_print_jquery_tests();
        $self->_print_prototype_test();
        $self->_print_jwplayer_test();
        $self->_print_modernizr_test();

        html::add_js_script(ob_get_clean());
    }
}