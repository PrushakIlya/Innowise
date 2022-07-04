<?php

namespace Prushak\Innowise;

use InvalidArgumentException;

class Task9
{
    public function main(array $arr, int $number): array
    {
        $result = [];
        for ($i = 0;$i < count($arr) - 2;$i++) {
            $sum = $arr[$i] + $arr[$i + 1] + $arr[$i + 2];
            $sum === $number && array_push($result, $arr[$i].'+'.$arr[$i + 1].'+'.$arr[$i + 2].'='.$sum);
        }
        $this->check($result);

        return $result;
    }
    private function check(array $result)
    {
        if (empty($result)) {
            throw new InvalidArgumentException('The sum of three consecutive numbers do NOT equal to a given number. Array is empty');
        }
    }
}
