<?php

namespace src;

class Task3
{
    public function main(int $input): int
    {
        while (strlen((string)$input) !== 1) {
            $arr = str_split($input);
            $input = array_sum($arr);
        }

        return $input;
    }
}
