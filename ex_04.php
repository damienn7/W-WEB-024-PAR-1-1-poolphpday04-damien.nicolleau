<?php

function print_until (int $max)
{
    if ($max < 0)
    {
        print "Boulet !\n";
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

print_until(-5);