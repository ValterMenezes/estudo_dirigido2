<?php



    print "Digite o primeiro número:\n";
    $n1 = fgets(STDIN);

    print "Digite o segundo número:\n";
    $n2 = fgets(STDIN);

    print "Digite o terceiro número:\n";
    $n3 = fgets(STDIN);

        if($n1>$n2 and $n1>$n3 ){
            print "O 1° número é maior que os outros.";       
        }
    
        if($n2>$n1 and $n2>$n3) { 
            print "O 2° número é maior que os outros.";    
    
        }
    
        if($n3>$n2 and $n3>$n1) { 
            print "O 3° número é maior que os outros.";    
        }