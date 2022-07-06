<?php

namespace src;

use InvalidArgumentException;

class Task10
{
    public function main(int $input): string
    {
        $this->check($input);
        $result = [$input];
        $str = '';
        while ($input !== 1) {
            if ($input % 2) {
                $input = 3 * $input + 1;
            } else {
                $input = $input / 2;
            }
            array_push($result, $input);
        }
        $str = 'Array<br>(<br>';
        foreach ($result as $key => $item) {
            $str .= '['.$key.'] => '.$item.'<br>';
        }
        $str .= ')';

        return $str;
    }
    private function check(int $input)
    {
        if ($input <= 0) {
            throw new InvalidArgumentException('main function only accepts correct data. Input was: '.$input);
        }
    }
}
