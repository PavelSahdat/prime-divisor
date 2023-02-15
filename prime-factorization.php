<?php

//  Prime Factorization....
// এবং count of the factor  অর্থাৎ 120 = 2^3 * 3^1 * 5^1 = count of the prime Divisor of 3 (ans)

fscanf(STDIN,"%d",$n);
$n2 = $n;
$ans = 0;
    for($i = 2; $i <= $n2; $i++){
     
                 if($n2 % $i == 0 ){
                        $tem++;
                     $count= 0;
                       
                    while($n2 % $i == 0){ 
                         $count++;             
                        $n2 = $n2 / $i;              
        }
        echo $i ."^".$count;
        echo "\n";
    } 
  
   
    }
    echo "Deference of prime  Factor in Total count Number of Prime Divisor ,$n  = ".$ans;

?>