<?php

namespace Prushak\Innowise;

class Task8
{
    public function main(string $json)
    {
        $result ='';
        preg_match_all('~"[a-zA-Z\s]+"(:\s?{)?~', $json, $mathes);

        for ($i=0;$i<count($mathes[0])-1;) {
            if (str_contains($mathes[0][$i], '{')) {
                $i++;
            } else {
                $result.= $mathes[0][$i].':'.$mathes[0][$i+1].'<br>';
                $i+=2;
            }
        }
        return $result;
    }
}
