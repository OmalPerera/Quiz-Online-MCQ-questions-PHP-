<?php
	
	
    $questionNumbers=array();
    
    srand(microtime()*100000);
    $random_Number = rand(1,11);
    
    for($i=0; $i<5; $i++){
        $questionNumbers[$i] = $random_Number;
    }
    
?>
