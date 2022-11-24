<?php

function print_until(int $max)
{
    if ($max < 0)
    {
        print "Boulet !\n";
        $bool=false;
    }
    else
    {
        $i = 0;
        while ($i <= $max)
        {
            print "$i\n";
            $i++;
        }
        $bool=true;
    }

    return $bool;
}
