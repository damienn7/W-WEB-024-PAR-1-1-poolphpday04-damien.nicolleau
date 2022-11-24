<?php

function print_age($age)
{
    if ($age <= 0)
    {
        print("Enfantillage...\n");
    }
    elseif ($age == 42)
    {
        print("the answer.\n");
    }
    else
    {
        print("je peux aller en boite\n");
    }
}