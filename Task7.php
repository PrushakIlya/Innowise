<?php

namespace src;

use InvalidArgumentException;

class Task7
{
    public function main(array $arr, int $position): array
    {
        $this->check($arr, $position);
        $result = [];
        foreach ($arr as $key => $item) {
            if ($key === $position) {
                unset($arr[$key]);
            }
        }
        foreach ($arr as $item) {
            array_push($result, $item);
        }

        return $result;
    }
    public function check(array $arr, int $position)
    {
        if ($position >= count($arr) || $position < 0 || empty($arr)) {
            throw new InvalidArgumentException('The position or array is not correct');
        }
    }
}
