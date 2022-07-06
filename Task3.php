<?php

namespace Prushak\Innowise;

class Task3
{
    private int $input;

    public function __construct($input)
    {
        $this->input = $input;
    }
    public function main(): int
    {
        while (strlen((string)$this->input) !== 1) {
            $arr = str_split($this->input);
            $this->input = array_sum($arr);
        }

        return $this->input;
    }
}
