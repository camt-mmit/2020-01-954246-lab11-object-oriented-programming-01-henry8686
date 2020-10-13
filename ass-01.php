<?php
$m=$_SERVER['argv'][1];
for($k=0;;$k++){
    echo"Input size (0 for exit): ";
    fscanf(STDIN,"%d",$n);
    if($n==0){
        exit;
    }for($i=0;$i<=$n-2;$i++){
        $row[$i]=$i+2;
    }for($j=1;$j<=$m;$j++){
        for($i=0;$i<=$n-2;$i++){
            printf("%5d",$row[$i]*$j);
        }echo"\n";
    }
}
?>