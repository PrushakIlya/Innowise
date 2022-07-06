<?php

namespace src;

class Task4
{
    public function main(string $input): string
    {
        $symbols = [' ', '_', '-'];
        $flag = 0;
        $new_arr = [];
        while ($flag < 3) {
            $new_arr = explode($symbols[$flag], $input);
            $input = '';
            foreach ($new_arr as $item) {
                $input .= ucfirst($item);
            }
            $flag++;
        }

        return $input;
    }
}
