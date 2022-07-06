<?php

namespace src;

use DateTime;
use InvalidArgumentException;

class Task2
{
    public function main(string $date): string
    {
        $this->check($date);
        $date = explode('-', $date);
        $time = date('d-m-y');
        $time = explode('-', $time);
        $year = 2022;
        $date[0] < $time[0] && $date[1] === $time[1] && $year = 2023;

        return date_diff(new DateTime(), new DateTime($year.'-'.$date[1].'-'.$date[0] + 1))->days;
    }
    private function check(string $date)
    {
        $match = preg_match('~^(((0|1|2)?[0-9]{1})|(30|31)|([1-9]{1})).((10|11|12)|(0?[1-9]{1})).((1900|19[0-9]{2})|(200[0-9]{1}|201[0-9]{1}|202[0-3]{1}))$~', $date);
        if ($match === 0) {
            throw new InvalidArgumentException('main function only accepts correct format. Input was: '.$date);
        }
    }
}
