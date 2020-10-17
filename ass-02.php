<?php
/*ID: 602110195
Name: Zhang Hao(Henry)
Wechat: hikki*/
class bill{
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
}$f=fopen($_SERVER['argv'][1],'r');
fscanf($f,"%d",$n);
for($i=0;$i<$n;$i++){
    fscanf($f,"%d%d%d",$prices['unit'],$prices['price'],$prices['judge']);
    $pricess[]=$prices;
}fclose($f);
while(true){
    echo"Input usage unit(-1 for exit): ";
    fscanf(STDIN,"%d",$unit);
    if($unit==-1){
        break;
    }$bill=new bill($pricess,$unit);
    $bill->priceofbill($unit);
}