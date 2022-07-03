<?php

namespace Prushak\Innowise;

use DateInterval;
use DatePeriod;
use DateTime;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'):string
    {
        $count = 0;
        $result = '';
        $begin = new DateTime($year.'-'.$month);
        $end = new DateTime($lastYear.'-'.$lastMonth);

        $interval = new DateInterval('P1M');
        $daterange = new DatePeriod($begin, $interval, $end);

        foreach ($daterange as $date) {
            if ($date->format('j l') === '1 '.$day) {
                $count++;
                $result .= $date->format('d.m.y') . '<br>';
            }
        }
        $result = $count.'<br>'.$result;
        return $result;
    }
}
