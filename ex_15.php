<?php
$arr=[12,true,"toto"];

function make_it_rain(&$my_array)
{
    foreach ($my_array as &$value)
    {
        $value = "rain";
    }
    //var_dump($my_array);
}

//make_it_rain($arr);