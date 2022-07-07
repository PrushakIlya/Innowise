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
            $temp = [];
            $sum = $arr[$i] + $arr[$i + 1] + $arr[$i + 2];
            $sum === $number && array_push($temp, $arr[$i].' + '.$arr[$i + 1].' + '.$arr[$i + 2].' = '.$sum) && array_push($result, $temp);
        }

        return $result;
    }
    private function check(array $arr, int $number)
    {
        if (empty($arr) || count($arr) !== 3 || $number < 1) {
            throw new InvalidArgumentException('Incorrect');
        }
        foreach ($arr as $item) {
            if ($item < 0) {
                throw new InvalidArgumentException('Incorrect');
            }
        }
    }
}
