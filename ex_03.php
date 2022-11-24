<?php

function print_age($age)
{
    if ($age <= 0)
    {
        print('Enfantillage...');
    }
    elseif ($age == 42)
    {
        print("the answer.");
    }
    else
    {
        print("je peux aller en boite");
    }
}