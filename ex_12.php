<?php

function is_similar($a, $b)
{
    switch($a):
        case $a == $b && gettype($a) == gettype($b):
            print "Salme type and value.\n";
            break;
        case $a == $b:
            print "Same value\n";
            break;
        case gettype($a) == gettype($b):
            print "Same type\n";
            break; 
    endswitch;
}