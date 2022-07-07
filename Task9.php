<?php

namespace src;

use InvalidArgumentException;

class Task9
{
    public function main(array $arr, int $number): array
    {
        $this->check($arr, $number);
        $result = [];
        for ($i = 0;$i < count($arr) - 2;$i++) {
            $sum = $arr[$i] + $arr[$i + 1] + $arr[$i + 2];
            $sum === $number && array_push($result, $arr[$i].' + '.$arr[$i + 1].' + '.$arr[$i + 2].' = '.$sum);
        }

        return $result;
    }
    private function check(array $arr, int $number)
    {
        if (empty($arr) || count($arr) < 3 || $number < 1) {
            throw new InvalidArgumentException('Incorrect');
        }
        foreach ($arr as $item) {
            $item < 0 && throw new InvalidArgumentException('Incorrect');
        }
    }
}
