<?php

namespace src;

use InvalidArgumentException;

class Task9
{
    public function main(array $arr, int $number): array
    {
        $this->check($arr);
        $result = [];
        for ($i = 0;$i < count($arr) - 2;$i++) {
            $temp = [];
            $sum = $arr[$i] + $arr[$i + 1] + $arr[$i + 2];
            $sum === $number && array_push($temp, $arr[$i].' + '.$arr[$i + 1].' + '.$arr[$i + 2].' = '.$sum) && array_push($result, $temp);
        }

        return $result;
    }
    private function check(array $arr)
    {
        if (empty($arr)) {
            throw new InvalidArgumentException('The sum of three consecutive numbers do NOT equal to a given number. Array is empty');
        }
    }
}
