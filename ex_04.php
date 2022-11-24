<?php

function print_until (int $max)
{
    if ($max < 0)
    {
        return false;
    }
    else
    {
        $i = 0;
        while ($i < $max)
        {
            $i++;
        }
        return true;
    }
}