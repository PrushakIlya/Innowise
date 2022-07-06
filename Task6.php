<?php

namespace src;

use DateInterval;
use DatePeriod;
use DateTime;
use InvalidArgumentException;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): string
    {
        $this->check($year, $lastYear, $month, $lastMonth);
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

        return $count;
    }
    private function check(int $year, int $lastYear, int $month, int $lastMonth)
    {
        if ($year < 0 || $lastYear < 0 || $month < 0 || $lastMonth < 0) {
            throw new InvalidArgumentException('main function only accepts positive numbers');
        }
    }
}
