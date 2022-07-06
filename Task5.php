<?php

namespace Prushak\Innowise;

class Task5
{
    // public function main(int $num): float
    // {
    //     $s = sqrt(5);
    //     $p = ($s + 1) / 2;

    //     return (pow($p, $num) / $s + 0.5);
    // }
    public function main(int $n): int
    {
        $num_1 = 0;
        $left = 0;
        $str = '';
        $num_2 = 1;
        while (strlen((string)$num_2) < $n) {
            $a = 0;
            $result = [];
            $two = $num_2;
            $str_2 = str_split($num_2);
            $str_1 = str_split($num_1);
            $temp = str_split($num_2);
            for ($i = 0;$i < count($temp);$i++) {
                $temp_2 = array_pop($str_2);
                if ($left === 1) {
                    (int)$temp_2 += $left;
                    $left = 0;
                }
                if (empty($str_1)) {
                    $temp_1 = 0;
                } else {
                    (int)$temp_1 = array_pop($str_1);
                }
                $a = (int)$temp_1 + (int)$temp_2;

                if ($a > 9) {
                    $left = 1;
                    $a = str_split($a);
                    $a = array_pop($a);
                };
                $str .= $a;
            }
            $num_2 = (int)strrev($str);
            $num_1 = $two;
        };

        return $num_2;
    }
    // public function main(int $n): int
    // {
    //     $num_1 = 0;
    //     $num_2 = 1;
    //     $result = 0;
    //     while (strlen((string)$num_2) < $n) {
    //         $temp = $num_2;
    //         for ($i = 0;$i < strlen((string)$num_2);$i++) {
    //         }
    //         $num_2 = $num_1 + $num_2;
    //         $num_1 = $temp;
    //     };

    //     return $num_2;
    // }

    // public function main(int $n): float
    // {
    //     $a = 1;
    //     $ta = 0;
    //     $b = 1;
    //     $tb = 0;
    //     $c = 1;
    //     $rc = 0;
    //     $tc = 0;
    //     $d = 0;
    //     $rd = 1;

    //     while ($n) {
    //         if ($n & 1) {
    //             $tc = $rc;
    //             $rc = $rc * $a + $rd * $c;
    //             $rd = $tc * $b + $rd * $d;
    //         }
    //         $ta = $a;
    //         $tb = $b;
    //         $tc = $c;
    //         $a = $a * $a + $b * $c;
    //         $b = $ta * $b + $b * $d;
    //         $c = $c * $ta + $d * $c;
    //         $d = $tc * $tb + $d * $d;

    //         $n >>= 1;
    //     }

    //     return $rc;
    // }
}
