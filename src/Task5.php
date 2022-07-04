<?php

namespace Prushak\Innowise;

class Task5
{
    public function main(int $num):float
    {
        $s = sqrt(5);
        $p = ($s + 1) / 2;
        return (pow($p, $num) / $s + 0.5);
    }
    // public function main(int $n):int
    // {
    //     $num_1 = 0;
    //     $num_2 = 1;
    //     while (strlen((string)$num_2)<$n) {
    //         $temp = $num_2;
    //         $num_2 = $num_1 + $num_2;
    //         $num_1 = $temp;
    //     };
    //     return $num_2;
    // }

    // public function main(int $n):float
    // {
    //     $a = 1;
    //     $ta = 0;
    //     $b = 1;
    //     $tb=0;
    //     $c = 1;
    //     $rc=0;
    //     $tc=0;
    //     $d = 0;
    //     $rd = 1;
 
    //     while ($n) {
    //         if ($n & 1) {
    //             $tc = $rc;
    //             $rc = $rc*$a + $rd*$c;
    //             $rd = $tc*$b + $rd*$d;
    //         }
    //         $ta = $a;
    //         $tb = $b;
    //         $tc = $c;
    //         $a = $a*$a  + $b*$c;
    //         $b = $ta*$b + $b*$d;
    //         $c = $c*$ta + $d*$c;
    //         $d = $tc*$tb+ $d*$d;
     
    //         $n >>= 1;
    //     }
    //     return $rc;
    // }
}
