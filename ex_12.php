<?php

function is_similar($a, $b)
{
    switch($a):
        case $a == $b:
            print "Same value\n";
        case gettype($a) == gettype($b):
            print "Same type\n";
    endswitch;
}