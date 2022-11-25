<?php
function print_range ($min)
{
    $condition1=$min == 42 ? true : false;
            do
            {
                print "$min\n";
                $min++;
            }while ($min<=42);
    print ($min>42) ? "42" : "";
    //var_dump($condition1);
    return $condition1;
}

//print_range(42);