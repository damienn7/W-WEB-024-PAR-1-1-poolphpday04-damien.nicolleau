<?php

function multiples(int $nb)
{   $multiples=false;
    $i=0;
    while ($multiples!=true)
    {
        $to_print=$nb*$i;
        $i++;
        $to_print=$nb*$i;
        if($to_print>0 && $to_print<200000)
        {
            print "$to_print\n";
        }
        elseif ($to_print == 0 || $to_print == 200000) {
            print "$to_print\n";
            $multiples = true;
        }
        else
        {
            $multiples = true;
        }
    }
}