<?php

function get_angry_bird(int $nbr) 
{   $piou="piou";
    $chaine="";
    for ($i=0;$i<$nbr;$i++)
    {
        $chaine=$chaine.$piou;
    }
    $chaine=$chaine."\n";
    echo $chaine;
}