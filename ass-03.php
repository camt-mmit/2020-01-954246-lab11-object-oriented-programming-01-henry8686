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
}class bill{
    private $prices;
    private $unit;
    function __construct($pricess,$unit){
        $this->pricess=$pricess;
        $pricess=[];
        $this->unit=$unit;
    }function priceofbill($unit){
        $price=0;
	    for($i=0;$unit>0;$i++){
		    $units=($unit>$this->pricess[$i]['unit']&&$this->pricess[$i]['unit']!=0)?$this->pricess[$i]['unit']:$unit;
	    	$price+=($this->pricess[$i]['judge']==1)?$this->pricess[$i]['price']:$units*$this->pricess[$i]['price'];
	    	$unit-=$units;
	    }echo"price of electricity bill = ",$price,"\n";
    }
}class App{
    private $mn;
    function __construct($mn){
        $this->mn=$mn;
    }function run($mn){
        if($this->mn==1){
            echo"Input size :";
            fscanf(STDIN,"%d",$num);
            $row=15;
            $n=new mul($row,$num);
            $n->print($num);
        }elseif($this->mn==2){
            $f=fopen("ass-03-pricing-data.txt",'r');
            fscanf($f,"%d",$n);
            for($i=0;$i<$n;$i++){
                fscanf($f,"%d%d%d",$prices['unit'],$prices['price'],$prices['judge']);
                $pricess[]=$prices;
            }fclose($f);
            echo"Input usage unit: ";
            fscanf(STDIN,"%d",$unit);
            $bill=new bill($pricess,$unit);
            $bill->priceofbill($unit);
        }else{
            echo"Invalid menu number ",$mn,"!!!";
        }
    }
}while(true){
    echo"\n      1. Multiplication Table\n      2. Electricity Bill calculation\n      3. exit\n\nInput menu number: ";
    fscanf(STDIN,"%d",$mn);
    if($mn==3){
        break;
    }$app=new App($mn);
    $app->run($mn);
}
?>
