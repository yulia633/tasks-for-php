<?php

namespace App;

class CheckBrackets
{
    public function check(string $str): bool
    {
        $count = strlen($str);

        do {
            $str = str_replace([' ', '()', '[]', '{}', '<>'], '', $str, $count);
        } while ($count);

        return $str === "";
    }
}
