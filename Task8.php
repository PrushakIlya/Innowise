<?php

namespace src;

class Task8
{
    public function main(string $json): string
    {
        $result = '';
        preg_match_all('~"[a-zA-Z\s]+"(:\s?{)?~', $json, $mathes);

        for ($i = 0;$i < count($mathes[0]) - 1;) {
            if (str_contains($mathes[0][$i], '{')) {
                $i++;
            } else {
                $result .= trim($mathes[0][$i], '"').': '.trim($mathes[0][$i + 1], '"').'<br>';
                $i += 2;
            }
        }

        return $result;
    }
}
