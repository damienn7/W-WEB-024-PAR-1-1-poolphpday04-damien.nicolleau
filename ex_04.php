<?php

function print_until (int $max)
{
    if ($max < 0)
    {
        print('Boulet !');
        return false;
    }
    else
    {
        $i = 0;
        while ($i <= $max)
        {
            print "$i\n";
            $i++;
        }
        return true;
    }
}