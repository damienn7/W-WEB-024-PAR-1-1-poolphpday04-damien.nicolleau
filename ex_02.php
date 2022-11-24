<?php

function print_status($age)
{
    if ($age <= 18)
    {
        print('Vous pouvez entrer !');
    }
    else
    {
        print('Site interdit aux mineurs.');
    }
}