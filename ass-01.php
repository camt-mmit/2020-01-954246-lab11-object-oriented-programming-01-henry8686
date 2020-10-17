<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
class mul{
    private $row;
    private $num;
    function __construct($row,$num){
        $this->row=$row;
        $this->num=$num;
    }function print($n){
        for($i=1;$i<=$this->row;$i++){
            for($j=2;$j<=$n;$j++){
                printf("%5d",$j*$i);
            }echo"\n";
        } 
    }
}while(true){
    echo"Input size (0 for exit):";
    fscanf(STDIN,"%d",$num);
    $row=$_SERVER['argv'][1];
    if($num==0){
        break;
    }$n=new mul($row,$num);
    $n->print($num);
}
?>