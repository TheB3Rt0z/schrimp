<?php namespace schrimp;

class toolbox_js extends toolbox
{
    static $todos = array();

    static $tests = array();

    private function _print_angularjs_test()
    {
        ?>
        if (typeof angular != 'undefined')
            db.innerHTML += "AngularJS v" + angular.version.full + " loaded" + eol;
        else
            db.innerHTML += '<?php echo html::spanner("AngularJS not loaded",
                                                       array
                                                       (
                                                           'schrimp-warning',
                                                       )) ?>' + eol;
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
            db.innerHTML += '<?php echo html::spanner("jQuery not loaded",
                                                       array
                                                       (
                                                           'schrimp-error',
                                                       )) ?>' + eol;
        <?php
    }

    private function _print_prototype_test()
    {
        ?>
        if (typeof Prototype != 'undefined')
            db.innerHTML += "Prototype v" + Prototype.Version + " loaded" + eol;
        else
            db.innerHTML += '<?php echo html::spanner("Prototype not loaded",
                                                       array
                                                       (
                                                           'schrimp-warning',
                                                       )) ?>' + eol;
        <?php
    }

    private function _print_jwplayer_test()
    {
        ?>
        if (typeof jwplayer != 'undefined')
            db.innerHTML += "JW player v" + jwplayer.version + " loaded" + eol;
        else
            db.innerHTML += '<?php echo html::spanner("JW player not loaded",
                                                       array
                                                       (
                                                           'schrimp-warning',
                                                       )) ?>' + eol;
        <?php
    }

    private function _print_modernizr_test()
    {
        ?>
        if (typeof Modernizr != 'undefined')
            db.innerHTML += "Modernizr v" + Modernizr._version + " loaded" + eol;
        else
            db.innerHTML += '<?php echo html::spanner("Modernizr not loaded",
                                                       array
                                                       (
                                                           'schrimp-warning',
                                                       )) ?>' + eol;
        <?php
    }

    static function debug()
    {
        $self = new self;

        ob_start();

        ?>
        var db = document.getElementById('schrimp-debug');
        var eol = "<?php echo html::newline() ?>";
        <?php

        $self->_print_angularjs_test();
        $self->_print_jquery_tests();
        $self->_print_prototype_test();
        $self->_print_jwplayer_test();
        $self->_print_modernizr_test();

        html::add_js_script(ob_get_clean());
    }
}