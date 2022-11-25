<?php

function multiples(int $nb)
{   $max=200000;
    for ($i=0;$i<=$max;$i++)
    {   
        if ($i%$nb==0)
        {
            echo "$i\n";
        }
    }
}