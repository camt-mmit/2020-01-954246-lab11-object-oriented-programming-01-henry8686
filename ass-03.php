<?php
for($h=0;;$h++){
    echo"\n      1. Multiplication Table\n      2. Electricity Bill calculation\n      3. exit\n\nInput menu number: ";
    fscanf(STDIN,"%d",$mn);
    if($mn==1){
        $m=15;
        echo"Input size: ";
        fscanf(STDIN,"%d",$n);
        for($i=0;$i<=$n-2;$i++){
            $row[$i]=$i+2;
        }for($j=1;$j<=$m;$j++){
            for($i=0;$i<=$n-2;$i++){
                printf("%5d",$row[$i]*$j);
            }echo"\n";
        }
    }elseif($mn==2){
        $f=fopen("ass-03-pricing-data.txt",'r');
        fscanf($f,"%d",$n);
        for($i=0;$i<$n;$i++){
            fscanf($f,"%d%d%d",$e[$i],$p[$i],$s[$i]);
        }fclose($f);
        echo"Input usage unit: ";
        fscanf(STDIN,"%d",$u);
        $b=0;
        for($i=0;$i<$n;$i++){
            if($u<$s[0]){
                $b=0;
            }else{
                if($u<=$e[$i]||$i==$n-1){
                    if($s[$i]==1){
                        $b+=$p[0];
                    }elseif($s[$i]==0){
                        $b+=$p[$i]*$u;
                    }break;
                }elseif($u>$e[$i]){
                    $u-=$e[$i];
                    if($s[$i]==1){
                        $b+=$p[0];
                    }elseif($s[$i]==0){
                        $b+=$p[$i]*$e[$i];
                    }
                }
            }
        }echo"Price of electricity bill = ",$b,"\n";
    }elseif($mn==3){
        exit;
    }else{
        echo"Invalid menu number ",$mn,"!!!";
    }
}
?>
