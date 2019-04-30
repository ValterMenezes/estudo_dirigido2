<?php

print "Sequência de Fibonacci (0 a +500)\n\n";

$t1 = 0;
$t2 = 1;
$t3 = 1;

print "$t1, $t2, ";

while ($t3 <= 500){
$t3 = $t1 + $t2;  
$t1 = $t2;
$t2 = $t3;
  
print "$t3, ";
}