<?php

namespace App;

class Box
{
    public function box(array $box): string
    {
        foreach ($box as $item) {
            if ($item !== 'key') {
                if (is_array($item)) {
                    return $this->box($item);
                }
            } else {
                return array_shift($box);
            }
        }
    }

    public function boxIter(array $box): string
    {
        $iter = array_reduce($box, function ($acc, $item) {
            if ($item === 'key' && !is_array($item)) {
                $acc .= $item;
            } elseif (is_array($item)) {
                $acc .= $this->boxIter($item);
            }
            return $acc;
        }, '');
        return $iter;
    }
}
