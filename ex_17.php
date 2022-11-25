<?php

//$arr=["banane", "pomme", "tomate"];

function get_array_key(array $arr, $val)
{
    foreach ($arr as $key => $value)
    {
        if ($value == $val)
        {
            echo "$key\n";
        }
    }
}

//get_array_key($arr,"banane");