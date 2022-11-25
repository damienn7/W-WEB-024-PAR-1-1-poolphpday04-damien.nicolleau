<?php

function goto_is_evil()
{
    $i=0;
    a:
    if ($i<42)
    {
        $i++;
        echo "wac\n";
        goto a;
    }
}

//goto_is_evil();