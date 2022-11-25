<?php

function print_film_from_nbr(int $nbr)
{   
    switch($nbr):
        case 3:
            print "Les trois freres\n";
            break;
        case 6:
            print "Sixième sens\n";
            break;
        case 23:
            print "Le nombre 23\n";
            break;
        case 28:
            print "28 ans plus tard\n";
            break;
        case 0:
            print "l'homme invisible\n";
            break;
        default:
            print "Je ne connais pas.\n";
            break;
        endswitch;
}