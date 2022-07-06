<?php

namespace Prushak\Innowise;

use DateTime;
use InvalidArgumentException;

class Task2
{
    private string $date;

    public function __construct(string $date)
    {
        $this->date = $date;
    }
    public function main(): string
    {
        $this->check();
        $date = explode('.', $this->date);
        $time = date('d.m.y');
        $time = explode('.', $time);
        $year = 2023;
        $time[1] <= $date[1] && $year = 2022;

        return date_diff(new DateTime(), new DateTime($year.'-'.$date[1].'-'.$date[0]))->days;
    }
    private function check()
    {
        $match = preg_match('~^(((0|1|2)?[0-9]{1})|(30|31)|([1-9]{1})).((10|11|12)|(0?[1-9]{1})).((1900|19[0-9]{2})|(200[0-9]{1}|201[0-9]{1}|202[0-3]{1}))$~', $this->date);
        if ($match === 0) {
            throw new InvalidArgumentException('main function only accepts correct format. Input was: '.$this->date);
        }
    }
}
