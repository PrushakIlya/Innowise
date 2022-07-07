<?php

namespace src;

use InvalidArgumentException;

class Task8
{
    public function main(string $json): string
    {
        $result = '';
        $matche = preg_match_all('~"[a-zA-Z\s]+"(:\s?{)?~', $json, $matches);
        $matche === 0 && throw new InvalidArgumentException('input is not correct');
        for ($i = 0;$i < count($matches[0]) - 1;) {
            if (str_contains($matches[0][$i], '{')) {
                $i++;
            } else {
                $result .= trim($matches[0][$i], '"').': '.trim($matches[0][$i + 1], '"')."\n";
                $i += 2;
            }
        }

        return $result;
    }
}
