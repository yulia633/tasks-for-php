<?php

namespace App;

class CheckBrackets
{
    public function check(string $str): bool
    {
        $stack = [];
        $start = ["(", "[", "{", "<"];
        $pairs = ["()", "[]", "{}", "<>"];

        for ($i = 0; $i < strlen($str); $i += 1) {
            $current = $str[$i];
            if (in_array($current, $start)) {
                array_push($stack, $current);
            } else {
                $prev = array_pop($stack);
                $pair = "{$prev}{$current}";
                if (!in_array($pair, $pairs)) {
                    return false;
                }
            }
        }

        return count($stack) === 0;
    }
}
