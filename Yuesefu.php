<?php
function ZhizhenYue($n,$m){
    $a=array();
    for($i=1;$i<=$n;$i++){
        $a[$i]=$i;
    }
    reset($a);
    while(count($a)>1)
    {
        for($counter=1;$counter<=$m;$counter++){
            if(next($a)){
                if($counter==$m){
                    unset($a[array_search(prev($a),$a)]);
            }
        }
        else{
            reset($a);
            if($counter==$m)
            {
                unset($a[array_search(end($a),$a)]);
                reset($a);
            }
        }
        }
    }
    return current($a);
}
function ArrayYue($monkeys,$m,$current=0){
    $number=count($monkeys);
    $num=1;
    if(count($monkeys)==1){
        echo $monkeys[0];
        return;
}else{

while($num++<$m){
    $current++;
   // $current=$current%$number;
}
$current=$current%$number;
//$current=$current%$number;
echo $monkeys[$current]."踢掉\n";
array_splice($monkeys,$current,1);
ArrayYue($monkeys,$m,$current);
}
}
$monkeys=array(1,2,3,4,5,6,7,8,9);
$m=5;
ArrayYue($monkeys,$m);
echo "最后留下来的是:".ZhizhenYue(9,5);
