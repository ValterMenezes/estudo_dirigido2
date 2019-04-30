<?php


    print "Escreva uma letra: \n ";

    $a = (string) fgetc (STDIN);

    if(is_numeric($a) ){
        print "Caractere invalido\n";
        exit;
    }
    if ($a == 'A' or $a == 'E' or $a == 'I' or $a == 'O' or $a == 'U' or $a == 'a' or $a == 'e' or $a == 'i' or $a == 'o' or $a == 'u') {

        print "\n é uma vogal \n";

    }

    else {

        print "\n é uma consoante \n";

    }