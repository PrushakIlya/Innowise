<?php

namespace Prushak\Innowise;

use InvalidArgumentException;

class Task7
{
    public function main(array $arr, int $position)
    {
        $this->check($arr, $position);
        foreach ($arr as $key => $item) {
            if ($key === $position) {
                unset($arr[$key]);
            }
        }

        return $arr;
    }
    public function check(array $arr, int $position)
    {
        if ($position >= count($arr)) {
            throw new InvalidArgumentException('That position is not correct');
        }
    }
}
