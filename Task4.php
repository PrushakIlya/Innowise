<?php

namespace Prushak\Innowise;

class Task4
{
    private string $input;

    public function __construct(string $input)
    {
        $this->input = $input;
    }
    public function main(): string
    {
        $symbols = [' ', '_', '-'];
        $flag = 0;
        $new_arr = [];
        while ($flag < 3) {
            $new_arr = explode($symbols[$flag], $this->input);
            $this->input = '';
            foreach ($new_arr as $item) {
                $this->input .= ucfirst($item);
            }
            $flag++;
        }

        return $this->input;
    }
}
