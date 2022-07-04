<?php

namespace Prushak\Innowise;

class Task10
{
    public function main(int $input): array
    {
        $result = [$input];
        while ($input !== 1) {
            if ($input % 2) {
                $input = 3 * $input + 1;
            } else {
                $input = $input / 2;
            }
            array_push($result, $input);
        }

        return $result;
    }
}
