<?php

namespace App;

class ReverseString
{
    public function reverseStrRec(string $str)
    {
        $len = strlen($str);
        if ($len > 0) {
            return $this->reverseStrRec(substr($str, 1, $len)) . substr($str, 0, 1);
        }
    }

    public function reverseStrRecIter(string $str): string
    {
        $iter = function ($str) use (&$iter) {
            $len = strlen($str);
            if ($len === 0) {
                return $str;
            }
            return $iter(substr($str, 1, $len)) . substr($str, 0, 1);
        };
        return $iter($str);
    }
}
