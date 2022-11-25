<?php

/*$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";*/

function print_double_array(array $my_array)
{
    foreach ($my_array as $v1)
    {
        echo "$v1\n";
        foreach ($v1 as $v2)
        {
            echo "$v2\n";
        }
    }
}

//print_double_array($a);