<?php namespace schrimp;

class regex
{
	static $todos = array
	(
	    'wanted methods' => "check, search, replace and evoluted string modifies",
	    'direct pattern | pattern composer' => "string or options-array, sqllike",
	    'string validation helper' => "see also PHP's validate filters in docs..",
	);

    static $tests = array();

    private $_types = array
    (
        'pcre' => "Perl-Compatible", // http://www.php.net/manual/en/book.pcre.php
        //'posix' => "POSIX Extended", deprecated, http://www.php.net/manual/en/book.regex.php
    );
}