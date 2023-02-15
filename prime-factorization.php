<?php

//  Prime Factorization....

fscanf(STDIN,"%d",$n);
$n2 = $n;
$ans = 0;
    for($i = 2; $i <= $n2; $i++){
    
                 if($n2 % $i == 0 ){
                        $ans++;
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

