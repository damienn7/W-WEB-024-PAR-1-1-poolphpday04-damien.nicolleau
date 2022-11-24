<?php

function print_range (int $min)
{
    $i = $min;
    do
    {
        $i++;
        print($i);
    } while ($min < 42 && $i < 42);

    do
    {
        $i++;
        print(42);
    } while ($min > 42 && $i < 1);

    $i = 0;
    do
    {   
        $i++;
        return true;
    } while ($i<1 && $min == 42);

    do
    {
        $i++;
        return false;
    } while ($i<1 && $min != 42);
}

