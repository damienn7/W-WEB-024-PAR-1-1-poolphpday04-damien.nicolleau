<?php
function print_range (int $min)
{
    switch ($min):
        case $min === 42:
            $bool=TRUE;
            break;
        case $min > 42:
            print "$min\n";
            break;
        case $min != 42:
            $bool=FALSE;
            break;
        case $min < 42:
            do
            {
                print "$min\n";
                $min++;
            }while ($min<42);
            break;
    endswitch;
    return $bool;
}