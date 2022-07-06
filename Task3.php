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
            var_dump($arr);
            $input = array_sum($arr);
        }

        return $input;
    }
    private function check(int $input)
    {
        if ($input < 0) {
            throw new InvalidArgumentException('main function only accepts positive number. Input was: '.$input);
        }
    }
}
