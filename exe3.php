<?php


        print "Digite F ou M para informar seu sexo:\n";
    
        $sex = fgetc(STDIN);
    
        if($sex=="M" or $sex=="m"){
    
            print "O seu sexo é Masculino.\n";       
    
    }
    
    else
    
        if($sex== "F" or $sex== "f"){ 
    
            print "O seu sexo é Feminino.\n";    
    
    }

    else
    
    if($sex!= "F" or "M"){
    
        print "Inválido.\n";
    }
