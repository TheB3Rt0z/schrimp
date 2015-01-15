<?php namespace schrimp;

class code_autodoc extends code
{
    static $todos = array();

    static $tests = array();

    private static $_replacements = array // uses markdown bold, order important!
    (
        ",\n" => ", ",
        ";\n" => "\n",
        " = " => " **contains** ",
        " += " => " **sums** ",
        "if (" => "**if** (",
        "elseif (" => "**otherwise if** (",
        "else" => "**otherwise** ",
        " > " => " **is greater than** ",
        " >= " => " **is greater or equal than** ",
        " < " => " **is lower than** ",
        " <= " => " **is lower or equal than** ",
        "!empty" => "**meaningful** ",
        "empty" => "**meaningless** ",
        "->" => " **method** ",
        "::$" => " **variable** $",
        "::" => " **static** ", // no difference beetween methods and constants..
        "foreach" => "**cycles**",
        " as " => " **as** ",
        "return" => "**it returns**",
    );

    static function get_autodoc($code = array())
    {
        $autodoc = '';
        $counter = 1;
        $indentation = 1;
        $single = false;
        $array = 0;
        foreach (array_filter($code,
                              function($value)
                              {
                              	  $value = trim($value);
                                  return !empty($value);
                              }) as $key => $line)
        {
            $line = explode(" // ", $line)[0]; // nice syntax, uh?

            if (trim($line) == "(")
            {
                $array++;
                $autodoc .= "(";
            }
            if (trim($line) == "),"
                || trim($line) == ");")
            {
                $line = trim($line, " ");
                $array = 0;
                $indentation--;
                $autodoc = substr($autodoc, 0, -1);
            }

            if (trim($line) == "{")
            {
                if (empty($single))
                    $indentation++;
                else
                    $single = false;
                continue;
            }
            elseif (trim($line) == "}")
            {
                $indentation--;
                continue;
            }

            $constants_array = self::get_constants_list(true);
            $line = str_replace(array_keys(self::$_replacements),
                                array_values(self::$_replacements),
                                str_replace(array_keys($constants_array),
                                            array_values($constants_array),
                                            $line));
            $autodoc .= (empty($array)
                        ? ($single === false
                          ? MD_NEWLINE_SEQUENCE . sprintf('%02s',
                                                          $counter++)
                          . str_repeat("&nbsp;",
                                       ($indentation > 0
                                       ? $indentation
                                       : 1) * 4)
                          : '')
                        . addcslashes(rtrim($line),
                                    '_')
                        : ".");

            if (substr($line, -2) == ", "
                || (!empty($code[$key + 1])
                    && substr(ltrim($code[$key + 1]), 0, 2) == ". "))
            {
                $single = true;
                if (empty($array))
                    $indentation++;
                continue;
            }

            if (substr(ltrim($line), 0, 6) == "**if**"
                || substr(ltrim($line), 0, 16) == "**otherwise if**"
                || substr(ltrim($line), 0, 13) == "**otherwise**")
            {
                $indentation++;
                $single = true;
            }
            elseif (substr(ltrim($line), 0, 10) == "**cycles**")
                $single = true;
            elseif (!empty($single))
            {
                $indentation--;
                $single = false;
            }
        }

        return $autodoc;
    }
}