<?php

function aff_array($arr)
{
    $count = 0;
    foreach ($arr as $key => $value)
    {
        echo "{$value}\n";
        $count++;
    }

    return $count;
}