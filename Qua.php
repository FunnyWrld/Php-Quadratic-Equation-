<?php
function roots($a, $b, $c){
    $D = $b*$b - 4*$a*$c;
    if ($D >= 0){
        $x1 = (-$b + sqrt($D))/(2*$a);
        $x2 = (-$b - sqrt($D))/(2*$a);
        echo "Roots are: $x1, $x2 \n"; 
    }
    else {
        $x1 = -$b/(2*$a);
        $x2 = sqrt(-$D)/(2*$a);
        echo "Root are: $x1 +or- $x2 i \n";
    }
}
echo "Equation is 4x^2+3x+2=0\n";
roots(4,3,2)
//echo "\n Equation is x^2+4x+5=0\n";
//roots(1,4,5)
?>