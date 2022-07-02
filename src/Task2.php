<?php

namespace Prushak\Innowise;

use DateTime;
use InvalidArgumentException;

class Task2
{
    public function main(string $date):string
    {
        $date = explode('.', $date);
        $time = date('d.m.y');
        $time = explode('.', $time);
        $year = 2023;
        $time[1]<=$date[1] && $year = 2022;
        return date_diff(new DateTime(), new DateTime($year.'-'.$date[1].'-'.$date[0]))->days;
    }
}
