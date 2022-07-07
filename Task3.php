<?php

namespace src;

use InvalidArgumentException;

class Task3
{
    public function main(int $input): int
    {
        $this->check($input);
        while (strlen((string)$input) !== 1) {
            $arr = str_split($input);
            $input = array_sum($arr);
        }

        return $input;
    }
    private function check(int $input)
    {
        if ($input < 10) {
            throw new InvalidArgumentException('main function only accepts positive number and > 9. Input was: '.$input);
        }
    }
}
